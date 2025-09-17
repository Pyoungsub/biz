<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Server;
use App\Models\Site;
use Carbon\Carbon;

class ExpiredSites extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $servers = [];
    public $site_id;
    public $server_id = '';
    public $start_date = '';
    public $end_date = '';
    public $periodModal;
    public $duration_months;
    public function openPeriodModal($id)
    {
        $site = Site::find($id);
        $this->reset(['server_id', 'start_date', 'end_date']);
        $this->duration_months = $site->last_site_payment->payment->plan->duration_months;
        $this->site_id = $id;
        $this->periodModal = true;
    }
    public function setPeriod()
    {
        $validated = $this->validate([ 
            'start_date' => 'required|date'
        ]);
        $this->end_date = \Carbon\Carbon::parse($this->start_date)->addMonths($this->duration_months)->toDateString();
        $site = Site::find($this->site_id);
        $last_site_payment = $site->last_site_payment;
        if ($last_site_payment && $last_site_payment->start_date === null) {
            $last_site_payment->update([
                'start_date' => $this->start_date,
                'end_date' => $this->end_date
            ]);
        }
        $this->reset(['site_id', 'server_id', 'periodModal']);
    }
    public function mount()
    {
        $this->servers = Server::get();
    }
    public function render()
    {
        $sites = Site::with(['user', 'last_site_payment', 'dns_record.server'])
        ->whereHas('site_dns_setting', function ($query) {
            $query->where('status', 'confirmed');
        })
        ->whereHas('site_payments', function ($query) {
            $query->whereDate('end_date', '<', Carbon::today());
        })
        ->latest()
        ->paginate(20);
        return view('livewire.admin.expired-sites', ['sites' => $sites]);
    }
}
