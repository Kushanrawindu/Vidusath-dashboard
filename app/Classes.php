<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function grade()
    {
        return $this->belongsTo('App\Grades');
    }
}
