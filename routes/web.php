<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class,'show']);
Route::get('/home', [HomeController::class,'show']);
Route::get('/about', [AboutController::class,'show']);
Route::get('/pages/{url}', [PageController::class,'show']);
Route::get('/profile/{url}', [ProfileController::class,'show']);
Route::get('/contact', [ContactController::class,'show']);
Route::any('/reservation', [ReservationController::class,'show']);
Route::any('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);

