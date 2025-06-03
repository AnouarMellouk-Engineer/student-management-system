<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $allCourses = Course::all();
        // dd($allCourses);
        return view('courses.index', ['courses' => $allCourses]);
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', ['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->save();
        return to_route('courses.index');
    }

    public function create()
    {
        return view('courses.create');
    }
}
