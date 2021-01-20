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
use App\Http\Controllers\Admin\AdminFaqController;

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
Route::group( ['prefix' => 'admin',"middleware" => "auth"], function() {
		Route::get('/', [AdminHomeController::class,'show'])->name("admin_home");
		Route::get('users', [AdminUserController::class,'show'])->name("admin_user");
		Route::any('appointments', [AdminAppointmentController::class,'show'])->name("admin_appointment");
		Route::any('settings', [AdminSettingsController::class,'show'])->name("admin_setting");
		Route::any('settings/save', [AdminSettingsController::class,'save'])->name("admin_setting_save");

		Route::any('gallerys', [AdminGallerysController::class,'show'])->name("admin_gallery");
			Route::any('gallerys/save', [AdminGallerysController::class,'save'])->name("admin_gallery_save");
			Route::any('gallerys/delete/{id}', [AdminGallerysController::class,'delete'])->name("admin_gallery_delete");
			
			
	Route::group( ['prefix' => 'cures'], function() {
		Route::any('/', [AdminCuresController::class,'index'])->name("admin_cure");
		Route::any('edit/{id}', [AdminCuresController::class,'edit'])->name("admin_cure_edit");
		Route::any('save', [AdminCuresController::class,'store'])->name("admin_cure_save");
		Route::any('new', [AdminCuresController::class,'create'])->name("admin_cure_create");
		Route::any('delete/{id}', [AdminCuresController::class,'destroy'])->name("admin_cure_delete");
		Route::any('update/{id}', [AdminCuresController::class,'update'])->name("admin_cure_update");
	});
			
	Route::group( ['prefix' => 'faq'], function() {
		Route::any('/', [AdminFaqController::class,'index'])->name("admin_faq");
		Route::any('new', [AdminFaqController::class,'create'])->name("admin_faq_new");
		Route::any('save', [AdminFaqController::class,'store'])->name("admin_faq_save");
		Route::any('edit/{id}', [AdminFaqController::class,'edit'])->name("admin_faq_edit");
		Route::any('update/{id}', [AdminFaqController::class,'update'])->name("admin_faq_update");
		Route::any('delete/{id}', [AdminFaqController::class,'destroy'])->name("admin_faq_delete");
	});
			
		Route::any('comment', [AdminCommentController::class,'show'])->name("admin_comment");

		
	Route::group( ['prefix' => 'contact'], function() {
		Route::any('/', [AdminContactController::class,'index'])->name("admin_contact");
		Route::any('save', [AdminContactController::class,'store'])->name("admin_contact_save");
		Route::any('edit/{id}', [AdminContactController::class,'edit'])->name("admin_contact_edit");
		Route::any('update/{id}', [AdminContactController::class,'update'])->name("admin_contact_update");
		Route::any('delete/{id}', [AdminContactController::class,'destroy'])->name("admin_contact_delete");
	});
		
});


Route::get('/', [HomeController::class,'show']);
Route::get('/home', [HomeController::class,'show'])->name("home");
Route::get('/about', [AboutController::class,'show'])->name("about");
Route::get('/gallery', [GalleryController::class,'show'])->name("gallery");
Route::get('/faq', [FaqController::class,'show'])->name("faq");
Route::get('/services/{url}', [ServiceController::class,'show'])->name("services");

Route::group( ['prefix' => 'profile'], function() {
	Route::any('/', [ProfileController::class,'show'])->name("profile");
	Route::any('/userinfo', [ProfileController::class,'userinfo'])->name("profile_userinfo");
		Route::any('/userupdate', [ProfileController::class,'userupdate'])->name("user_update");
	Route::any('/appointment', [ProfileController::class,'appointment'])->name("profile_appointment");
	Route::any('/review', [ProfileController::class,'review'])->name("profile_review");
	
});


Route::get('/contact', [ContactController::class,'show'])->name("contact");
Route::post('/contact/send', [ContactController::class,'send'])->name("contact_sendmessage");
Route::any('/references', [ReferenceController::class,'show'])->name("references");
Route::any('/appointment', [AppointmentController::class,'show'])->name("appointment");
Route::any('/login', [AuthController::class,'login'])->name("login");
Route::any('/register', [AuthController::class,'register'])->name("register");
Route::get('/logout', [AuthController::class,'logout'])->name("logout");






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
