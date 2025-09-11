<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Inquiry;
class Inquiries extends Component
{
    public function render()
    {
        $inquiries = Inquiry::latest()->paginate(10);
        return view('livewire.admin.inquiries', ['inquiries' => $inquiries]);
    }
}
