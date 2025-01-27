<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login-page');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::get('/dashboard', [DashboardController::class, 'index']);
