<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/tasks',[TaskControllerApi::class,'index']);
Route::get('/tasks/{Task}',[TaskControllerApi::class,'store']);
Route::post('/tasks',[TaskControllerApi::class,'apiStore']);
Route::put('/tasks/{Task}',[TaskControllerApi::class,'apiUpdate']);
Route::delete('/tasks/{Task}',[TaskControllerApi::class,'apiDelete']);
