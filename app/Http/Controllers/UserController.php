<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    public function showProfile($id)
    {
    $user = User::with('profile')->findOrFail($id); 
    return view('users_profile', compact('user'));
    }

    public function showCourses($id)
    {
    $user = User::with('courses')->findOrFail($id);
    return view('users_courses', compact('user'));
    }
}
