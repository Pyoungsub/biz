<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $fillable = ['inquiry_type_id', 'user_id', 'message'];
}
