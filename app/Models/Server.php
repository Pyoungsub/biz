<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $guarded = [];
    public function dns_records()
    {
        return $this->hasMany(DnsRecord::class);
    }
}
