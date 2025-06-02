@extends('base')

@section('title','student')

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
