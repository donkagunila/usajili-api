<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    protected $guarded = [];

    public function Vendor()
    {
    	return $this->belongsTo(Vendor::class);
    }

    public function Category()
    {
    	return $this->belongsTo(Category::class);
    }
}
