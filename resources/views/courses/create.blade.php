@extends('Base')

@section('title','Courses Page')

@section('url')
            <div >
                <a href="{{route('courses.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">add new course</a>
            </div>
             <div >
                <a href="{{route('students.index')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">students</a>
            </div>
@endsection

@section('content')

<h1>add new course</h1>
@endsection
