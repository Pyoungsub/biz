<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\SiteDnsSetting;
class Plans extends Component
{
    use WithPagination;
    public function confirmed($id)
    {
        SiteDnsSetting::updateOrCreate(
            ['site_id' => $id],
            ['status' => 'pending', 'dns_check_attempts' => 0]
        );
    }
    public function render()
    {
        $payments = auth()->user()->payments()->with([
            'plan:id,name,duration_months',
            'site_payment:id,site_id,payment_id',
            'site_payment.site:id,site',
            'site_payment.site.dns_record:id,site_id,server_id',
            'site_payment.site.dns_record.server:id,ip_address',
            'site_payment.site.site_dns_setting:id,site_id,status'
        ])->whereHas('payment_history')->paginate(10);
        return view('livewire.plans', ['payments' => $payments]);
    }
}
