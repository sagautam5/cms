<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name','code'];

    public function subjects()
    {
    	return $this->hasMany('App\Model\Subject');
    }
}
