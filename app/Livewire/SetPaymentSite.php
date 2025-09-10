<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\SitePayment;
use Illuminate\Validation\Rule;
class SetPaymentSite extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $payment_id;
    public $site;
    public $setModal;
    #[On('set-payment-site')] 
    public function setPaymentSite($paymentId)
    {
        $this->payment_id = $paymentId;
        $this->setModal = true;
    }
    public function saveCustomSite()
    {
        $validated = $this->validate([
            'site' => ['required',Rule::unique('sites', 'site')->ignore(auth()->id(), 'user_id')]
        ]);
        $site = auth()->user()->sites()->firstOrCreate([
            'site' => $this->site,
        ]);
        $lastPayment = $site->site_payments()->latest()->first();
        if ($lastPayment && is_null($lastPayment->end_date)) {
            $this->addError('site', __('This site has an ongoing payment.'));
            return;
        }
        SitePayment::updateOrCreate(
            ['payment_id' => $this->payment_id],
            ['site_id' => $site->id]
        );
        $this->reset(['payment_id', 'site', 'setModal']);
        $this->dispatch('changed');
    }
    public function render()
    {
        $sites = auth()->user()->sites()->whereHas('site_payments', function ($query) {
            $query->whereNotNull('end_date');
        })
        ->orWhereDoesntHave('site_payments') // site_payments가 없어도 포함
        ->with(['site_payments' => function ($query) {
            $query->latest();
        }])->paginate(10);
        return view('livewire.set-payment-site', ['sites' => $sites]);
    }
}
