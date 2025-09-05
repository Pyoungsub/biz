<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $fillable = ['inquiry_type_id', 'user_id', 'message'];
    public function inquiry_type()
    {
        return $this->belongsTo(InquiryType::class);
    }
}
