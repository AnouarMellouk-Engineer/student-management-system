<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('students.index');

Route::get('/create', [HomeController::class, 'create'])
    ->name('students.create');

Route::post('/', [HomeController::class, 'store'])
    ->name('studens.store');

Route::get('/{id}', [HomeController::class, 'show'])
    ->name('students.show');

Route::get('/{id}/edit', [HomeController::class, 'edit'])
    ->name('students.edit');

Route::put('/{id}', [HomeController::class, 'update'])
    ->name('students.update');
