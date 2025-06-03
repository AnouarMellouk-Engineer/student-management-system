

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

 <div class=" px-40 py-7">
           <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700 uppercase">
                            @foreach(['name','level','domain','duration','instructor',''] as $title)
                            <th class="py-3 px-4 border-b">{{$title}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                        @foreach($courses as $course)

                            <tr class="hover:bg-gray-50">

                                   <td class="py-3 px-4">{{$course->name}}</td>
                                     <td class="py-3 px-4">{{$course->level}}</td>
                                      <td class="py-3 px-4">{{$course->domain}}</td>
                                      <td class="py-3 px-4">{{$course->duration}} day (s)</td>
                                     {{-- {{ dd($course->instructs) }} --}}
                                        <td class="py-3 px-4">@foreach($course->instructs as $instruct) <p>{{$instruct->first_name .' '. $instruct->last_name}}</p>@endforeach</td>
                                <td class="py-3 px-4 space-x-2 flex items-center gap-2">
                                    <a href="{{route('courses.edit',['id'=>$course->id])}}" class="block bg-yellow-600 py-2 px-3 text-white rounded-md">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>


@endsection

