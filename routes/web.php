<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');




    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    #next line  #next line #next line #next line #next line #next line #next line
    Route::get('student', [App\Http\Controllers\StudentController::class, 'index']);
    Route::post('student', [App\Http\Controllers\StudentController::class, 'index']);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    Route::get('student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');

    Route::post('student', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store'); #here

    Route::get('student/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
    Route::put('student/{id}/edit', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::get('student/{id}/delete', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete');



});
