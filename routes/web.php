<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    // Static Pages
    Route::view('/about', 'about')->name('about');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');



    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/students/{id}/update', [StudentController::class, 'update'])->name('student.update');
    Route::get('/students/{id}/delete', [StudentController::class, 'delete'])->name('student.delete');
    Route::delete('/students/{id}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');



    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

});
