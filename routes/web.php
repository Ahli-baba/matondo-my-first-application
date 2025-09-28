<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Resourceful route for jobs (auto-registers all 7 CRUD routes)
Route::resource('jobs', JobController::class);
