<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $fillable = ['inquiry_type_id', 'user_id', 'case_manager_id', 'message', 'status'];
    public function inquiry_type()
    {
        return $this->belongsTo(InquiryType::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
