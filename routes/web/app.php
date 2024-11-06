<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::controller(GeneralController::class)->group(function ()
{
        Route::get('/','index' );
        Route::get('home','index' )->name('home');    
});

