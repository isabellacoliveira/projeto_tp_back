<?php

use Illuminate\Support\Facades\Route;

Route::resource('/bibliotecas',App\Http\Controllers\BibliotecaController::class);

Route::get('/', function () {
    return view('welcome');
});
