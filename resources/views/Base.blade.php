<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <nav class="flex items-center py-6 px-3 gap-10 bg-gray-100">
            <h1 class=" font-medium text-2xl  cursor-pointer"><a href="{{route('students.index')}}">Management</a></h1>
            <div >
                <a href="{{route('students.create')}}" class="  block px-2 py-1.5 rounded-md bg-black text-white font-medium">Add New Student</a>
            </div>
        </nav>
        @yield('content')
    </body>

</html>
