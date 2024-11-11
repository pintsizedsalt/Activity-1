<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/users/{id}/profile', [UserController::class, 'showProfile'])->name('users.profile');
Route::get('/users/{id}/courses', [UserController::class, 'showCourses'])->name('users.courses');
Route::get('/courses/{id}/users', [CourseController::class, 'showUsers'])->name('courses.users');
