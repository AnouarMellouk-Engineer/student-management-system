<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class HomeController extends Controller
{

    public function index()
    {
        return view('Home', ['students' => Student::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $newStudent = new Student;
        $newStudent->first_name = $request->first_name;
        $newStudent->last_name = $request->last_name;
        $newStudent->course = $request->course;
        $newStudent->started_at = $request->date;
        if ($request->finished == 'true') {
            $newStudent->finished = true;
        } else {
            $newStudent->finished = false;
        }
        $newStudent->save();
        return to_route('students.index');
    }

    public function show($id)
    {
        return view('student', ['student' => Student::find($id)]);
    }

    public function edit($id)
    {
        return view('editForm', ['student' => Student::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $newStudent = Student::find($id);
        $newStudent->first_name = $request->first_name;
        $newStudent->last_name = $request->last_name;
        $newStudent->course = $request->course;
        $newStudent->started_at = $request->date;
        if ($request->finished == 'true') {
            $newStudent->finished = true;
        } else {
            $newStudent->finished = false;
        }
        $newStudent->save();
        return to_route('students.index');
    }
}
