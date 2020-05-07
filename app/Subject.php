<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // public function classes()
    // {
    //     return $this->belongsTo('App\Classes');
    // }

    public function grades()
    {
        return $this->belongsTo('App\Grades');
    }
}
