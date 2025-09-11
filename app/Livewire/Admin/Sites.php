<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Site;
class Sites extends Component
{
    use WithPagination;
    public function render()
    {
        $sites = Site::with('last_site_payment')->whereHas('site_payments', function ($query) {
            $query->whereNull('end_date');
        })->paginate(10);
        return view('livewire.admin.sites', ['sites' => $sites]);
    }
}
