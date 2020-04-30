<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolGradeClass extends Model
{
    public function school()
    {
        return $this->belongsTo('App\MySchool');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grades');
    }

    public function class()
    {
        return $this->belongsTo('App\Classes');
    }
}
