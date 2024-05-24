<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;



Route::controller(HomeController::class)->group(function(){
	Route::get('/','home')->name('home');
	Route::get('/about','about')->name('about');
	Route::get('/contact','contact')->name('contact');
	Route::get('/news','news')->name('news');
	Route::get('/developer','developer')->name('developer');
});




Route::controller(AuthController::class)->group(function (){
	Route::post('/login','login')->name('auth.login');
	Route::get('/login','login')->name('auth.login');
	Route::get('/register','register')->name('auth.register');
});


Route::controller(MemberController::class)->group(function (){
	Route::post('/member-register-permission','seekPermissionCreateMember')->name('auth.member.seek-permission.register');
	//Route::get('/login','login')->name('auth.login');
	//Route::get('/register','register')->name('auth.register');
});










Route::get('/admin-login',[AdminController::class,'adminLogin'])->name('auth.admin.login');

Route::post('/admin-login',[AdminController::class,'adminLogin'])->name('auth.admin.login');

Route::get('/admin-register',[AdminController::class,'adminRegister'])->name('auth.admin.register');






















/*

Route::post('/seek-permission-create-admin',[AdminController::class,'seekPermissionCreateAdmin'])->name('seek.permission.create.admin.registration');

Route::post('/login-admin',[AdminController::class,'LoginAdmin'])->name('check.admin.login');
Route::get('/login-admin',[AdminController::class,'LoginAdmin'])->name('check.admin.login');


Route::post('/create-admin-by-superadmin',[AdminController::class,'approved'])->name('create.admin.registration.bySuperadmin');

Route::post('/seek-permission-create-admin-cancel',[AdminController::class,'PermissionCancel'])->name('permission.admin.cancel');
Route::get('/seek-permission-create-admin-cancel',[AdminController::class,'PermissionCancel'])->name('permission.admin.cancel');

*/

Route::controller(AdminController::class)->group(function(){
	Route::get('/seek-permission-create-admin','adminLogin')->name('seek.permission.create.admin.registration');
	Route::post('/seek-permission-create-admin','seekPermissionCreateAdmin')->name('seek.permission.create.admin.registration');
	Route::post('/login-admin','LoginAdmin')->name('check.admin.login');
	Route::get('/login-admin','adminLogin')->name('check.admin.login');
	Route::post('/create-admin-by-superadmin','approved')->name('create.admin.registration.bySuperadmin');
	Route::post('/seek-permission-create-admin-cancel','PermissionCancel')->name('permission.admin.cancel');
	Route::get('/seek-permission-create-admin-cancel','adminLogin')->name('permission.admin.cancel');
	
});
































