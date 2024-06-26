<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);



//Route::controller(JobController::class)->group(function() {
//Route::get('/jobs',  'index');
//Route::get('jobs/create',  'create');
//Route::get('/jobs/{job}',  'show');
//Route::post('/jobs',  'store');
//Route::get('/jobs/{job}/edit',  'edit');
//Route::patch('/jobs/{job}',  'update');
//Route::delete('/jobs/{job}',  'destroy');
//});
//

//Route::get('/jobs', [JobController::class, 'index']);
//Route::get('jobs/create', [JobController::class, 'create']);
//Route::get('/jobs/{job}', [JobController::class, 'show']);
//Route::post('/jobs', [JobController::class, 'store']);
//Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
//Route::patch('/jobs/{job}', [JobController::class, 'update']);
//Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
