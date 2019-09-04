<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venlocation extends Model
{
    protected $guarded = [];

    public function Vendor()
    {
    	return $this->belongsTo(Vendor::class);
    }
}
