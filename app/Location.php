<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
    	'user_id', 'city', 'district', 'ward',
    ]; 


    public function User()
    {
    	return $this->belongsTo(User::class);
    }
}
