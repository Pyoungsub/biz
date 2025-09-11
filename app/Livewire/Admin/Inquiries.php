<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Inquiry;
class Inquiries extends Component
{
    public $inquiry_type_id;
    public $status;
    public function setInquiryType($inquiry_type_id)
    {
        $this->inquiry_type_id = $inquiry_type_id;
    }
    public function getStatus($status)
    {
        $this->status = $status;
    }
    public function setStatus($status, $id)
    {
        $inquiry = Inquiry::find($id);
        if ($inquiry) {
            $inquiry->update(['status' => $status]);
        }
    }
    public function render()
    {
        $query = Inquiry::query();
        if ($this->inquiry_type_id) {
            $query->where('inquiry_type_id', $this->inquiry_type_id);
        }
        if ($this->status) {
            $query->where('status', $this->status);
        }
        $inquiries = $query->latest()->paginate(10);
        return view('livewire.admin.inquiries', ['inquiries' => $inquiries]);
    }
}
