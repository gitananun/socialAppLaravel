<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTweetRequest;
use App\Profile;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tweets = [];
        $follows = [];

        if (count(Auth::user()->follows) > 0) {
            $follows = Auth::user()->follows;
        }
            foreach (Auth::user()->follows as $follow) {
                if (count($follow->tweets()) > 0) {
                    $tweets[] = $follow->tweets()->latest()->first();
                }
            }

        return view('home', compact('tweets', 'follows'));
    }

    public function store(PostTweetRequest $request){
        $tweet = new Tweet();
        $tweet->body = $request->body;
        $tweet->user_id = Auth::id();

        if ($tweet->save()){
            return redirect()->route('home')->with('msg', 'You just tweeted successfully!');
        }else{
            return redirect()->route('tweet.publish')->with('error', 'Something went wrong :(');
        }
    }


}
