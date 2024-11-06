<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function ()
{
    Route::controller(LoginController::class)->group( function () 
    {        
        Route::get('/login','index')->name('login');
        Route::post('login', 'login')->name('login.post');
    });
    Route::controller(RegisterController::class)->group( function () 
    {
        Route::get('register','index')->name('register');
        Route::post('register', 'register')->name('register.post');
    });
});
Route::middleware('auth')->group(function ()
{
    Route::controller(LogoutController::class)->group( function () 
    {        
        Route::get('/logout','logout')->name('logout');
    });
});

