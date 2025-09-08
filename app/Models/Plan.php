<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $guarded = [];
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
    public function latestPrice()
    {
        return $this->hasOne(Price::class)->latestOfMany();
    }
}
