<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function registers(){
        return $this->hasMany('App\CourseRegister');
    }
}
