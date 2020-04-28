<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MySchool extends Model
{
    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function grades()
    {
        return $this->hasMany('App\Grade');
    }
}
