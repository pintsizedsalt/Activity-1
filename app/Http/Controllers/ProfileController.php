<?php

namespace App\Http\Controllers;
use App\Models\Profile;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfiles() {

    $profiles = Profile::with('user')->get(); 
    return view('profiles', compact('profiles'));
    }

}
