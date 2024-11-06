<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function ()
{
    Route::resource('task', TaskController::class);
});

