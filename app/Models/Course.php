<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Course extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'CourseID',
        'Course_Name',
        'Location',
        'Instructor',
    ];


}
