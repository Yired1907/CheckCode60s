<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\CountDownController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//-----Check code---
Route::controller(CheckController::class)->group(function () {
    Route::get('/check-code', 'index');
    Route::post('/sub-code', 'store');
});


Route::controller(CountDownController::class)->group(function () {
    Route::get('/count-down', 'index');
    Route::post('/post-code', 'create');
});


Route::get('/home', [HomeController::class, 'index']);
