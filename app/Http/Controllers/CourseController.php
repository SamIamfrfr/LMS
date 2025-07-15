<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request){
        $request-> validate([
            'Course_Name'=> 'required',
            'CourseID' => 'required',
            'Location' => 'required',
            'Instructor' => 'required',
        ]);

        Course::create($request->only([
            'CourseID',
            'Course_Name',
            'Location',
            'Instructor'
        ]));
        

    return redirect()->route('dashboard');
    }
}
