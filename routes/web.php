<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', [GreetingController::class, 'showForm'])
    ->name('greeting.form');

Route::post('/greeting', [GreetingController::class, 'greet'])
    ->name('greeting.greet');