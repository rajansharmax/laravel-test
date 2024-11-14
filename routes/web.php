<?php

use App\Http\Controllers\LeaderBoard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/leaderboard', [LeaderBoard::class, 'index']);

