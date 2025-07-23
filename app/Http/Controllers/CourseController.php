<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use App\Providers;


class CourseController extends Controller
{

     //retrieve the data 
        public function index(){
            $courses = Course::all();
            return view('courses', ['courses' => $courses]);
        }

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

        //return redirect()->route('courses');
        return redirect()->route('courses')->with('success', 'You’ve successfully submitted a course!');
    }

        /*public function destroy($id){
            $course = Course::findOrFail($id);
            $course->delete();
            return redirect()->route('courses')->with('success', 'Course deleted successfully!');
        }
        */
}
