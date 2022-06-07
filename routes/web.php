<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/auth'], function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('get-login');
    Route::get('/register', [LoginController::class, 'getRegister'])->name('get-register');
    Route::get('/profile', [LoginController::class, 'getProfile'])->name('get-profile');
});
