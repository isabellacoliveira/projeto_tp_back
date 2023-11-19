<?php

use Illuminate\Support\Facades\Route;

Route::resource('/tasks',App\Http\Controllers\TaskController::class);

Route::get('/', function () {
    return view('welcome');
});
