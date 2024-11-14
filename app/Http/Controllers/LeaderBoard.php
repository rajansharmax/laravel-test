<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderBoard extends Controller
{
    //

    public function index()
    {

        dd(User::all());

        $top20UserWithHighestPost = User::withCount('posts')->orderByDesc('posts_count')->take(20)->get();
        dd($top20UserWithHighestPost);
        return view('leaderboard', ['users' => $top20UserWithHighestPost]);
    }
}
