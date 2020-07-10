<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Profile $profile){
        $profile = User::findOrFail($profile->id);
        $follows = $profile->follows;

        return view('profile.home', compact('follows', 'profile'));
    }
}
