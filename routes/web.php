<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/secpage', [\App\Http\Controllers\HomeController::class, 'secpage']);
Route::get('/thpage', [\App\Http\Controllers\HomeController::class, 'thpage']);
Route::get('/fourpage', [\App\Http\Controllers\HomeController::class, 'fourpage']);
Route::get('/fipage', [\App\Http\Controllers\HomeController::class, 'fipage']);

