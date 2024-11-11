<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id)
    {
    $user = User::with('profile')->findOrFail($id); 
    return view('users.profile', compact('user'));
    }

    public function showCourses($id)
    {
    $user = User::with('courses')->findOrFail($id);
    return view('users.courses', compact('user'));
    }
}
