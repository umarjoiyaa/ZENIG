<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => true
]);
Route::middleware('auth')->group(function () {
    //PROFILE
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

    //DASHBOARD
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
