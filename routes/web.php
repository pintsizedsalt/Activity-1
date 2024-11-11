<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');
Route::get('/profile/{id}', [ProfileController::class, 'showProfiles'])->name('showProfiles');
Route::get('/users/{id}/profile', [UserController::class, 'showProfile'])->name('showProfile');
Route::get('/users/{id}/courses', [UserController::class, 'showCourses'])->name('showCourses');
Route::get('/courses/{id}/users', [CourseController::class, 'showUsers'])->name('showUsers');
