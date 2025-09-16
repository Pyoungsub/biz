<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Server;
use App\Models\Site;
use App\Models\DnsRecord;

class SitePayments extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $servers = [];
    public $site_id;
    public $server_id = '';
    public $periodModal;
    public function openPeriodModal($id)
    {
        $this->reset(['server_id']);
        $this->site_id = $id;
        $this->periodModal = true;
    }
    public function connectServer()
    {
        $validated = $this->validate([ 
            'site_id' => 'required|exists:sites,id',
            'server_id' => 'required|exists:servers,id'
        ]);
        DnsRecord::create($validated);
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
            $query->whereNull('end_date');
        })->latest()->paginate(5);
        return view('livewire.admin.site-payments', ['sites' => $sites]);
    }
}
