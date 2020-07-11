<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['profile.edit', 'auth'])->except('show');
    }

    public function show(Profile $profile){
        $profile = User::findOrFail($profile->id);
        $follows = $profile->follows;

        return view('profile.home', compact('follows', 'profile'));
    }

    public function update(UpdateProfileRequest $request, Profile $profile){
        $profile->name = $request->name;
        $profile->email = $request->email;

        if (Hash::check($request->password, Auth::user()->password)){
            if ($profile->save()){
                return redirect()->route('profile.home', $profile)->with('msg', 'Your Profile updated successfully!');
            }
        }else{
            return redirect()->route('profile.home', $profile)->with('msg', 'Something went wrong. Please recheck your password!');
        }
    }


}
