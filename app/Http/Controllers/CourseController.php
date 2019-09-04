<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showCourse($slug){
        $course = Course::where('slug',$slug)->firstOrFail();

        return view('pages.courses.single-course',compact('course'));
    }

    public function allCourses(){
        $courses = Course::all();

        return view('pages.courses.all-courses',compact('courses'));
    }


}
