<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
    	'user_id', 'gender', 'marital_status', 'nationality'
    ];


    public function User()
    {
    	return $this->belongsTo(User::class);
    }
}
