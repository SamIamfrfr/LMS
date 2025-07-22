<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use App\Providers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;


class CourseController extends Controller
{
    protected $firebase;

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
        
    public function __construct(FirebaseService $firebase)
    {
        $this->firebase = $firebase;
    }

    public function syncCourses()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            $this->firebase->storeCourse($course->CourseID, [
                'Course_Name' => $course->Course_Name,
                'Location' => $course->Location,
                'Instructor' => $course->Instructor
            ]);
        }

        return response()->json(['message' => 'Courses synced to Firebase']);
    }



}
