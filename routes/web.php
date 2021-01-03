<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FaqController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminAppointmentController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminCuresController;
use App\Http\Controllers\Admin\AdminGallerysController;

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

Route::any('admin/login', function() {
	return view('admin.login');
})->name('admin.login');

// admin roots
//Route::group( ['prefix' => 'admin',  'middleware' => 'auth'], function() {
Route::group( ['prefix' => 'admin',"middleware" => "auth"], function() {
		Route::get('/', [AdminHomeController::class,'show']);
		Route::get('users', [AdminUserController::class,'show']);
		Route::any('appointments', [AdminAppointmentController::class,'show']);
		Route::any('settings', [AdminSettingsController::class,'show']);
		Route::any('cures', [AdminCuresController::class,'show']);
			Route::any('cures/getdata', [AdminCuresController::class,'getdata']);
			Route::any('cures/save', [AdminCuresController::class,'save']);
			Route::any('cures/delete/{id}', [AdminCuresController::class,'delete']);
		Route::any('gallerys', [AdminGallerysController::class,'show']);
		Route::any('gallerys/delete/{id}', [AdminGallerysController::class,'delete']);
});


Route::get('/', [HomeController::class,'show']);
Route::get('/home', [HomeController::class,'show']);
Route::get('/about', [AboutController::class,'show']);
Route::get('/gallery', [GalleryController::class,'show']);
Route::get('/faq', [FaqController::class,'show']);
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
Route::any('/login', [AuthController::class,'login'])->name('login');
Route::any('/register', [AuthController::class,'register']);
Route::get('/logout', [AuthController::class,'logout']);





