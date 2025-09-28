<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Jobs Index Route
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

// Show Create Form (must go before /jobs/{job})
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Job Detail Route
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => $job
    ]);
});

// Store Job (with validation)
Route::post('/jobs', function () {
    $validated = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => 1 // Hard-coded for now
    ]);

    return redirect('/jobs');
});

// Show Edit Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update a Job
Route::patch('/jobs/{job}', function (Job $job) {
    // validation
    $validated = request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // update
    $job->update([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});
