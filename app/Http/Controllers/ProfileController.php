<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteAccountRequest;
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
        $this->middleware(['profile.edit'])->except('show');
        $this->middleware(['auth']);
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
            return redirect()->route('profile.home', $profile)->with('error', 'Something went wrong. Please recheck your password!');
        }
    }
    public function destroy(DeleteAccountRequest $request, Profile $profile){
        $code_format = strtolower('do_it_' . explode(' ', Auth::user()->name, 2)[0]);
        if ($request->code == $code_format){
            Auth::user()->delete();
            return redirect('home');
        }
        else{
            return redirect()->back()->with('error', 'Please enter a valid code!');
        }
    }


}
