<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Server;
use App\Models\Site;
class Sites extends Component
{
    use WithPagination;
    public $servers = [];
    public function mount()
    {
        $this->servers = Server::get();
    }
    public function render()
    {
        $sites = Site::with(['user', 'last_site_payment', 'dns_record.server'])->whereHas('site_payments', function ($query) {
            $query->whereNull('end_date');
        })->paginate(10);
        return view('livewire.admin.sites', ['sites' => $sites]);
    }
}
