<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('students.index');

Route::get('/create', [HomeController::class, 'create'])
    ->name('students.create');

Route::post('/', [HomeController::class, 'store'])
    ->name('studens.store');

Route::get('/{id}', [HomeController::class, 'show'])
    ->name('students.show')->whereNumber('id');;

Route::get('/{id}/edit', [HomeController::class, 'edit'])
    ->name('students.edit')->whereNumber('id');;

Route::put('/{id}', [HomeController::class, 'update'])
    ->name('students.update')->whereNumber('id');

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])
    ->name('courses.edit');

Route::put('/courses/{id}', [CourseController::class, 'update'])
    ->name('courses.update');

Route::get('/courses/create', [CourseController::class, 'create'])
    ->name('courses.create');
