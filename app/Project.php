<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
		protected $gaurded = [];
		
    public function tasks() {
    	return $this->hasMany('App\Task');
    }
}
