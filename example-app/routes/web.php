<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello',
        'name' => 'Renzo'
    ]
    
    );
});

 Route::get('/jobs', function () {
$jobs = Job::with('employer')->get();

    return view('jobs', [
    'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
