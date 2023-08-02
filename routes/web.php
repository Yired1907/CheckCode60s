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



Route::get('/check-code', [CheckController::class, 'index']);
Route::post('/sub-code', [CheckController::class, 'store']);

Route::get('/count-down', [CountDownController::class, 'index']);
Route::post('/post-code', [CountDownController::class, 'create']);

Route::get('/home', [HomeController::class, 'index']);
