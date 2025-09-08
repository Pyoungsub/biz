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
}
