<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteDnsSetting extends Model
{
    //
    protected $guarded = [];
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
