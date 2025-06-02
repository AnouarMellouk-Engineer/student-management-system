@extends('base')

@section('title','new student')


@section('content')
<div class="max-w-xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Add Student Info</h1>

    <form action="{{route('students.update',['id'=>$student->id])}}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        @method('PUT')

        <!-- first Name -->
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">first Name</label>
            <input type="text" name="first_name" id="first_name" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$student->first_name}}">
        </div>

          <!-- last Name -->
        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">last Name</label>
            <input type="text" name="last_name" id="last_name" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$student->last_name}}">
        </div>

        <!-- Course -->
        <div>
            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
            <input type="text" name="course" id="course" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$student->course}}">
        </div>

        <!-- Date -->
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2" value="{{$student->started_at}}">
        </div>

        <!-- Finished -->
        <div>
            <label for="finished" class="block text-sm font-medium text-gray-700">Finished</label>
            <select name="finished" id="finished" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-1.5 px-2">
                <option value="" disabled @if($student['finished']== '') selected @endif>Choose...</option>
                <option value="true" @if($student->finished) selected @endif>Yes</option>
                <option value="false" @if(!$student->finished) selected @endif>No</option>
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
