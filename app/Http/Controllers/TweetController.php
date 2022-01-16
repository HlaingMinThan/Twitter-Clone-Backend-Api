<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        return Tweet::with('user:id,name,username,avatar,created_at')->latest()->paginate(10);
    }
    public function show(Tweet $tweet)
    {
        return $tweet->load('user:id,name,username,avatar,created_at');
    }
}
