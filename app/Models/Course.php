<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $fillable = [
        'CourseID',
        'Course_Name',
        'Location',
        'Instructor',
    ];


}
