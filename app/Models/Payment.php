<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $guarded = [];
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payment_history()
    {
        return $this->hasOne(PaymentHistory::class);
    }
    public function site_payment()
    {
        return $this->hasOne(SitePayment::class);
    }
}
