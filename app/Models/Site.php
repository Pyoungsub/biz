<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function site_payments()
    {
        return $this->hasMany(SitePayment::class);
    }
    public function last_site_payment()
    {
        return $this->hasOne(SitePayment::class)->latest();
    }
    public function dns_record()
    {
        return $this->hasOne(DnsRecord::class);
    }
}
