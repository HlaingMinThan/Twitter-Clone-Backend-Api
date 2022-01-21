<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return $user;
    }

    public function getTweets(User $user)
    {
        return $user->tweets()->latest()->paginate(10);
    }
}
