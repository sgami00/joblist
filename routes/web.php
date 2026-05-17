<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // ← this was missing

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', compact('jobs'));
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('job-detail', compact('job')); 
});