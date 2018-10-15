<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
     public function user(){
    	return $this->belongTo('App\user');
    }
    public function chat(){
    	return $this->belongTo('App\like');
    }
}
