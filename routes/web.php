<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
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
Route::get('/services/{url}', [ServiceController::class,'show']);
Route::get('/profile/{url}', [ProfileController::class,'show']);
Route::get('/services', function () {
	return redirect('/home');
});
Route::get('/profile', function () {
	return redirect('/home');
});

Route::get('/contact', [ContactController::class,'show']);
Route::any('/appointment', [AppointmentController::class,'show']);
Route::any('/login', [AuthController::class,'login']);
Route::any('/register', [AuthController::class,'register']);
Route::get('/logout', [AuthController::class,'logout']);

