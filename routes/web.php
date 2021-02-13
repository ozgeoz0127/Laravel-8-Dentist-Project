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
use App\Http\Controllers\Admin\AdminHomeSlaytController;
use App\Http\Controllers\Admin\AdminReviewController;
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
    Route::middleware('admin')->group(function(){
        Route::get('/', [AdminHomeController::class,'show'])->name("admin_home");

        Route::group( ['prefix' => 'users'], function() {
            Route::get('/', [AdminUserController::class,'index'])->name("admin_user");
            Route::get('delete/{id}', [AdminUserController::class,'destroy'])->name("admin_user_delete");
            Route::get('edit/{id}', [AdminUserController::class,'edit'])->name("admin_user_edit");
            Route::get('create/', [AdminUserController::class,'create'])->name("admin_user_create");
            Route::post('store/', [AdminUserController::class,'store'])->name("admin_user_store");
            Route::post('update/{id}', [AdminUserController::class,'update'])->name("admin_user_update");
            Route::get('userrole/{id}', [AdminUserController::class,'user_roles'])->name("admin_user_roles");
            Route::post('userrolestore/{id}', [AdminUserController::class,'user_role_store'])->name("admin_user_role_add");
            Route::get('userroledelete/{userid}/{roleid}', [AdminUserController::class,'user_role_delete'])->name("admin_user_role_delete");
        });


        Route::get('appointments', [AdminAppointmentController::class,'show'])->name("admin_appointment");
        Route::get('appointments/delete/{id}', [AdminAppointmentController::class,'delete'])->name("admin_appointment_delete");
        Route::get('appointments/status/{id}', [AdminAppointmentController::class,'status'])->name("admin_appointment_status");
        Route::get('settings', [AdminSettingsController::class,'show'])->name("admin_setting");
        Route::post('settings/save', [AdminSettingsController::class,'save'])->name("admin_setting_save");


        Route::group( ['prefix' => 'gallerys'], function() {
            Route::get('/', [AdminGallerysController::class,'show'])->name("admin_gallery");
            Route::post('gallerys/save', [AdminGallerysController::class,'save'])->name("admin_gallery_save");
            Route::get('gallerys/delete/{id}', [AdminGallerysController::class,'delete'])->name("admin_gallery_delete");
        });

        Route::group( ['prefix' => 'slayts'], function() {
            Route::get('/', [AdminHomeSlaytController::class,'show'])->name("admin_slayt");
            Route::post('store', [AdminHomeSlaytController::class,'store'])->name("admin_slayt_store");
            Route::get('delete/{id}', [AdminHomeSlaytController::class,'destroy'])->name("admin_slayt_delete");
        });


        Route::group( ['prefix' => 'cures'], function() {
            Route::get('/', [AdminCuresController::class,'index'])->name("admin_cure");
            Route::get('edit/{id}', [AdminCuresController::class,'edit'])->name("admin_cure_edit");
            Route::post('save', [AdminCuresController::class,'store'])->name("admin_cure_save");
            Route::get('new', [AdminCuresController::class,'create'])->name("admin_cure_create");
            Route::get('delete/{id}', [AdminCuresController::class,'destroy'])->name("admin_cure_delete");
            Route::get('update/{id}', [AdminCuresController::class,'update'])->name("admin_cure_update");
        });

        Route::group( ['prefix' => 'faq'], function() {
            Route::get('/', [AdminFaqController::class,'index'])->name("admin_faq");
            Route::get('new', [AdminFaqController::class,'create'])->name("admin_faq_new");
            Route::post('save', [AdminFaqController::class,'store'])->name("admin_faq_save");
            Route::get('edit/{id}', [AdminFaqController::class,'edit'])->name("admin_faq_edit");
            Route::get('update/{id}', [AdminFaqController::class,'update'])->name("admin_faq_update");
            Route::get('delete/{id}', [AdminFaqController::class,'destroy'])->name("admin_faq_delete");
        });

        Route::group( ['prefix' => 'review'], function() {
            Route::get('/', [AdminReviewController::class,'show'])->name("admin_review");
            Route::get('edit/{id}', [AdminReviewController::class,'edit'])->name("admin_review_edit");
            Route::post('update/{id}', [AdminReviewController::class,'update'])->name("admin_review_update");
            Route::get('delete/{id}', [AdminReviewController::class,'destroy'])->name("admin_review_delete");
        });

        Route::group( ['prefix' => 'contact'], function() {
            Route::get('/', [AdminContactController::class,'index'])->name("admin_contact");
            Route::post('save', [AdminContactController::class,'store'])->name("admin_contact_save");
            Route::get('edit/{id}', [AdminContactController::class,'edit'])->name("admin_contact_edit");
            Route::post('update/{id}', [AdminContactController::class,'update'])->name("admin_contact_update");
            Route::get('delete/{id}', [AdminContactController::class,'destroy'])->name("admin_contact_delete");
        });
    });
});


Route::get('/', [HomeController::class,'show']);
Route::get('/home', [HomeController::class,'show'])->name("home");
Route::get('/about', [AboutController::class,'show'])->name("about");
Route::get('/gallery', [GalleryController::class,'show'])->name("gallery");
Route::get('/faq', [FaqController::class,'show'])->name("faq");
Route::get('/services/{url}', [ServiceController::class,'show'])->name("services");

Route::group( ['prefix' => 'profile'], function() {
	Route::get('/', [ProfileController::class,'show'])->name("profile");
	Route::get('/userinfo', [ProfileController::class,'userinfo'])->name("profile_userinfo");
		Route::post('/userupdate', [ProfileController::class,'userupdate'])->name("user_update");
	Route::get('/appointment', [ProfileController::class,'appointment'])->name("profile_appointment");
	Route::get('/appointment/delete/{id}', [ProfileController::class,'appointment_delete'])->name("profile_appointment_delete");
	Route::get('/review', [ProfileController::class,'review'])->name("profile_review");
	Route::get('/review/delete/{id}', [ProfileController::class,'review_delete'])->name("profile_review_delete");

});


Route::get('/contact', [ContactController::class,'show'])->name("contact");
Route::post('/contact/send', [ContactController::class,'send'])->name("contact_sendmessage");
Route::get('/references', [ReferenceController::class,'show'])->name("references");
Route::post('/appointment', [AppointmentController::class,'show'])->name("appointment");
Route::any('/login', [AuthController::class,'login'])->name("login");
Route::any('/register', [AuthController::class,'register'])->name("register");
Route::get('/logout', [AuthController::class,'logout'])->name("logout");






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
