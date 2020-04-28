<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function school()
    {
        return $this->hasMany('App\MySchool');
    }
}
