<?php

namespace App\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Server;

class Servers extends Component
{
    use WithPagination;
    public $name;
    public $ip_address;
    public $ip_address_valid = true;
    public $capacity = 10;
    public $addServerModel;
    public function addServer()
    {
        $this->reset(['name', 'ip_address', 'ip_address_valid', 'capacity']);
        $this->addServerModel = true;
    }
    public function saveServer()
    {
        $validated = $this->validate([ 
            'name' => 'required',
            'ip_address' => 'required|ipv4|unique:servers,ip_address',
            'capacity' => 'required'
        ]);
        Server::create($validated);
        $this->reset(['name', 'ip_address', 'ip_address_valid', 'capacity', 'addServerModel']);
    }
    public function render()
    {
        $servers = Server::withCount('dns_records')->latest()->paginate(10);
        return view('livewire.admin.servers', ['servers' => $servers]);
    }
}
