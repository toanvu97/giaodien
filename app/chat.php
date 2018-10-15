<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
     public function user(){
    	return $this->belongTo('App\user');
    }
    public function likes(){
    	return $this->hasMany('App\like');
    }
}
