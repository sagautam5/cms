<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['department_id','name','full_mark','pass_mark'];

    public function department()
    {
    	return $this->belongsTo('App\Model\Department');
    }
}
