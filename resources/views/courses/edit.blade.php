
@extends('base')

@section('title','edit course')


@section('url')
            <div >
                <a href="{{route('courses.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">add new course</a>
            </div>
              <div >
                <a href="{{route('students.index')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">students</a>
            </div>
@endsection


@section('content')
<div class="max-w-xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Add Student Info</h1>

    <form action="{{route('courses.update',['id'=>$course->id])}}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        @method('PUT')

        <!--  Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$course->name}}">
        </div>


        <!-- duration -->
        <div>
            <label for="duration" class="block text-sm font-medium text-gray-700">duration</label>
            <input type="text" name="duration" id="duration" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$course->duration}}">
        </div>

        <!-- instructors -->
        {{-- <div>
            <label  class="block text-sm font-medium text-gray-700">instructors</label>

            @foreach($course->instructs as $instruct)
            <div>
                <label for="{{$instruct->name}}">{{$instruct->name}}</label>
                <input type="checkbox" name="instructors" id="{{$instruct->name}}" value="{{$instruct->name}}">
            </div>
            @endforeach
        </div> --}}


        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700">
                Save
            </button>
        </div>
    </form>
</div>
@endsection
