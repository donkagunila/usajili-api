<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $guarded = [];

    public function Opening()
    {
    	return $this->hasMany(Opening::class);
    }
}
