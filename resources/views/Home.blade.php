


@extends('Base')

@section('title','Home Page')



@section('url')
            <div >
                <a href="{{route('students.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">add new student</a>
            </div>
             <div >
                <a href="{{route('courses.index')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">courses</a>
            </div>
@endsection


@section('content')
 <div class=" px-40 py-7">
           <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700 uppercase">
                            @foreach(['full name','date','finiched',''] as $title)
                            <th class="py-3 px-4 border-b">{{$title}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                        @foreach($students as $student)

                            <tr class="hover:bg-gray-50">

                                   <td class="py-3 px-4">{{$student->first_name .' '.$student->last_name}}</td>
                                    {{-- <td class="py-3 px-4">{{$student->course}}</td> --}}
                                     <td class="py-3 px-4">{{$student->started_at}}</td>
                                      <td class="py-3 px-4">@if($student->finished)YES @else NO @endif</td>

                                <td class="py-3 px-4 space-x-2 flex items-center gap-2">
                                    <a href="{{route('students.show',['id'=>$student->id])}}" class="block bg-blue-600 py-2 px-3 text-white rounded-md">View</a>
                                    <a href="{{route('students.edit',['id'=>$student->id])}}" class="block bg-yellow-600 py-2 px-3 text-white rounded-md">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>


@endsection
