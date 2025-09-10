<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SitePayment extends Model
{
    //
    protected $guarded = [];
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
