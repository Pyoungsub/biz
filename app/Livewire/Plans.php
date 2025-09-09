<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

class Plans extends Component
{
    use WithPagination;
    public function render()
    {
        $plans = auth()->user()->payments()->paginate(10);
        return view('livewire.plans', ['plans' => $plans]);
    }
}
