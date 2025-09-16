<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Server;
use App\Models\Site;
use App\Models\DnsRecord;
class Sites extends Component
{
    use WithPagination;
    public $servers = [];
    public $site_id;
    public $server_id = '';
    public $connectServerModal;
    public function openConnectServerModal($id)
    {
        $this->reset(['server_id']);
        $this->site_id = $id;
        $this->connectServerModal = true;
    }
    public function connectServer()
    {
        $validated = $this->validate([ 
            'site_id' => 'required|exists:sites,id',
            'server_id' => 'required|exists:servers,id'
        ]);
        DnsRecord::create($validated);
        $this->reset(['site_id', 'server_id', 'connectServerModal']);
    }
    public function mount()
    {
        $this->servers = Server::get();
    }
    public function render()
    {
        $sites = Site::with(['user', 'last_site_payment', 'dns_record.server'])
        ->whereHas('site_dns_setting', function ($query) {
            $query->where('status', 'confirmed'); // fixed
        })
        ->whereHas('site_payments', function ($query) {
            $query->whereNull('end_date');
        })->latest()->paginate(10);
        return view('livewire.admin.sites', ['sites' => $sites]);
    }
}
