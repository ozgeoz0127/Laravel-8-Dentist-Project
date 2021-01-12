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
use App\Http\Controllers\ReferenceController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminAppointmentController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminCuresController;
use App\Http\Controllers\Admin\AdminGallerysController;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminContactController;

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
		Route::get('/', [AdminHomeController::class,'show'])->name("admin_home");
		Route::get('users', [AdminUserController::class,'show'])->name("admin_user");
		Route::any('appointments', [AdminAppointmentController::class,'show'])->name("admin_appointment");
		Route::any('settings', [AdminSettingsController::class,'show'])->name("admin_setting");
		Route::any('settings/save', [AdminSettingsController::class,'save'])->name("admin_setting_save");
		Route::any('cures', [AdminCuresController::class,'show'])->name("admin_cure");
			Route::any('cures/getdata', [AdminCuresController::class,'getdata'])->name("admin_cure_data");
			Route::any('cures/save', [AdminCuresController::class,'save'])->name("admin_cure_save");
			Route::any('cures/delete/{id}', [AdminCuresController::class,'delete'])->name("admin_delete");
		Route::any('gallerys', [AdminGallerysController::class,'show'])->name("admin_gallery");
		Route::any('gallerys/save', [AdminGallerysController::class,'save'])->name("admin_gallery_save");
		Route::any('gallerys/delete/{id}', [AdminGallerysController::class,'delete'])->name("admin_gallery_delete");
		Route::any('faq', [AdminGallerysController::class,'show'])->name("admin_faq");
		Route::any('comment', [AdminCommentController::class,'show'])->name("admin_comment");
		Route::any('contact', [AdminContactController::class,'show'])->name("admin_contact");
});


Route::get('/', [HomeController::class,'show']);
Route::get('/home', [HomeController::class,'show'])->name("home");
Route::get('/about', [AboutController::class,'show'])->name("about");
Route::get('/gallery', [GalleryController::class,'show'])->name("gallery");
Route::get('/faq', [FaqController::class,'show'])->name("faq");
Route::get('/services/{url}', [ServiceController::class,'show'])->name("services");
Route::get('/profile/{url}', [ProfileController::class,'show'])->name("profile");

/*Route::get('/services', function () {
	return redirect('/home');
});
Route::get('/profile', function () {
	return redirect('/home');
});*/

Route::get('/contact', [ContactController::class,'show'])->name("contact");
Route::post('/contact/send', [ContactController::class,'send'])->name("contact_sendmessage");
Route::any('/references', [ReferenceController::class,'show'])->name("references");
Route::any('/appointment', [AppointmentController::class,'show'])->name("appointment");
Route::any('/login', [AuthController::class,'login'])->name('login');
Route::any('/register', [AuthController::class,'register'])->name("register");
Route::get('/logout', [AuthController::class,'logout'])->name("logout");





