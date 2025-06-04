@extends('base')

@section('title','new student')


@section('url')
            <div >
                <a href="{{route('students.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">add new student</a>
            </div>
            <div >
                <a href="{{route('courses.index')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">courses</a>
            </div>
@endsection


@section('content')
<div class="max-w-xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Add Student Info</h1>

    <form action="{{route('studens.store')}}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf

        <!-- First Name -->
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" name="first_name" id="first_name" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
        </div>

        <!-- last name -->
          <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">last Name</label>
            <input type="text" name="last_name" id="last_name" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
        </div>

        <!-- Course -->
        <div>
            <label for="course" class="block text-md mb-2 font-medium text-gray-700">Courses</label>
            <select name="courseId" id="course" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
                    <option value="" selected>Choose...</option>
                    @foreach ($courses as $course)
                            <option value="{{$course->id}}" >{{$course->name}}</option>
                    @endforeach
            </select>
        </div>


        <!-- Date -->
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
        </div>

        <!-- Finished -->
        <div>
            <label for="finished" class="block text-sm font-medium text-gray-700">Finished</label>
            <select name="finished" id="finished" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
                <option value="" disabled selected>Choose...</option>
                <option value="true">Yes</option>
                <option value="false" selected>No</option>
            </select>
        </div>

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
