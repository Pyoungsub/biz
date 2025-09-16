<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

class Plans extends Component
{
    use WithPagination;
    public function render()
    {
        $payments = auth()->user()->payments()->with('site_payment.site.dns_record.server')->whereHas('payment_history')->paginate(10);
        return view('livewire.plans', ['payments' => $payments]);
    }
}
