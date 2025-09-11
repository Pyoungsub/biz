<?php

namespace App\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Plan;

class Plans extends Component
{
    use WithPagination;
    public function render()
    {
        $plans = Plan::paginate(10);
        return view('livewire.admin.plans', ['plans' => $plans]);
    }
}
