@extends('base')

@section('title','student')

@section('url')
            <div >
                <a href="{{route('students.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">add new student</a>
            </div>
             <div >
                <a href="{{route('courses.index')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">courses</a>
            </div>
@endsection

@section('content')
<h1>this is the student number {{$student->id}}</h1>
<ul>
        <li><h2>{{$student->first_name}}</h2></li>
        <li><h2>{{$student->last_name}}</h2></li>
        <li><h2>{{$student->finished}}</h2></li>
        <li><h2>{{$student->started_at}}</h2></li>
        <li><h2>{{$student->course}}</h2></li>
</ul>
@endsection
