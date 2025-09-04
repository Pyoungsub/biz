<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class InquiryType extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['inquiry_type', 'slug'];
}
