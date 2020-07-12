<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTweetRequest;
use App\Http\Requests\SearchRequest;
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
            if (count($follow->tweets) > 0) {
                $tweets[] = $follow->tweets()->latest()->first();
            }
        }
        return view('home', compact('tweets', 'follows'));
    }

    public function search(SearchRequest $request){
            $follows = [];
            if (count(Auth::user()->follows) > 0) {
                $follows = Auth::user()->follows;
            }
            foreach (Auth::user()->follows as $follow) {
                if (count($follow->tweets) > 0) {
                    $tweets[] = $follow->tweets()->latest()->first();
                }
            }
            $result = User::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('email', 'LIKE', '%' . $request->search . '%')->paginate(3);
            if (count($result) > 0) {
                return view('search', compact('follows', 'result'));
            } else {
                return redirect()->back()->with('msg', 'No search result for ' . $request->search);
            }
    }



}
