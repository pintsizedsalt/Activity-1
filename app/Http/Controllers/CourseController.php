<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showUsers($id) {

    $course = Course::with('users')->findOrFail($id); // Fetch course with users
    return view('courses.users', compact('course'));
    }

}
