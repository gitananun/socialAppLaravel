<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Profile $profile){

        $follows = User::findOrFail($profile->id)->follows;;
//        $tweets = [];
//        foreach (Auth::user()->follows as $follow){
//            $tweets[] = $follow->tweets()->latest()->first();
//        }
        return view('profile.home', compact('follows'));
    }
}
