<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Inquiry;
class Inquiries extends Component
{
    public $inquiry_type_id;
    public $status = 'new';
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
            $inquiry->update([
                'status' => $status,
                'case_manager_id' => $status === 'new' ? null : auth()->id(),
            ]);
        }
    }
    public function render()
    {
        $inquiries = Inquiry::with(['user', 'inquiry_type'])
        ->when($this->inquiry_type_id, function ($query) {
            $query->where('inquiry_type_id', $this->inquiry_type_id);
        })
        ->when($this->status, function ($query) {
            $query->where('status', $this->status)
                  ->when($this->status === 'new', function ($q) {
                      $q->whereNull('case_manager_id');
                  }, function ($q) {
                      $q->where('case_manager_id', auth()->id());
                  });
        })
        ->latest()
        ->paginate(10);
        return view('livewire.admin.inquiries', ['inquiries' => $inquiries]);
    }
}
