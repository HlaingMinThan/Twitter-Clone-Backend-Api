<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        return Tweet::with('user:id,name,username,avatar,created_at')->latest()->get();
    }
}
