<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inquiry;
class Inquiries extends Component
{
    use WithPagination;
    public $perPage = 10;
    public function render()
    {
        $inquiries = auth()->user()->inquiries()
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);
        return view('livewire.inquiries', [
            'inquiries' => $inquiries
        ]);
    }
}
