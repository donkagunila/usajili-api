<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{

	protected $guarded = [];


    public function User()
    {
    	return $this->belongsTo(User::class);
    }


    public function Venlocation()
    {
    	return $this->hasOne(Venlocation::class);
    }

    public function Vencontacts()
    {
    	return $this->hasOne(Vencontacts::class);
    }

     public function Opening()
    {
    	return $this->hasMany(Opening::class);
    }
}
