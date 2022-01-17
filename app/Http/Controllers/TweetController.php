<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        return Tweet::with('user:id,name,username,avatar,created_at')->latest()->paginate(10);
    }

    public function store()
    {
        request()->validate([
            'body'=>'required'
        ]);
        
        return Tweet::create(['body'=>request('body'), 'user_id'=>1 ]);
    }

    public function show(Tweet $tweet)
    {
        return $tweet->load('user:id,name,username,avatar,created_at');
    }
}
