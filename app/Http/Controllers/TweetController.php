<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTweetRequest;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
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
    public function destroy(Tweet $tweet){
        if ($tweet->delete()){
            return redirect()->back()->with('msg', 'Post deleted successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
