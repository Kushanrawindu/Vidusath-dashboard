<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    public function school()
    {
        return $this->belongsTo('App\MySchool');
    }

    public function classes()
    {
        return $this->hasMany('App\Classes');
    }
}
