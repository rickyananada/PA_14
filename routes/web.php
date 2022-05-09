<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Controllers\admin\CriticsController;
use App\Http\Controllers\web\ProductUserController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\WebProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('product', ProductUserController::class);


Route::prefix('user/')->name('user.')->group(function(){
    Route::get('/', [AuthController::class, 'index']);
    Route::prefix('auth/')->name('auth.')->group(function(){
        Route::get('',[AuthController::class, 'index'])->name('index');
        Route::get('/register',[AuthController::class, 'register'])->name('register');
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
        Route::get('logout',[AuthController::class, 'do_logout'])->name('logout');
    });
});

Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [AuthAdminController::class, 'index']);
    Route::prefix('auth/')->name('auth.')->group(function(){
        Route::get('',[AuthAdminController::class, 'index'])->name('index');
        Route::post('login',[AuthAdminController::class, 'do_login'])->name('login');
        Route::post('register',[AuthAdminController::class, 'do_register'])->name('register');
        Route::get('logout',[AuthAdminController::class, 'do_logout'])->name('logout');
    });
    Route::resource('productcategory', ProductCategoryController::class);
    Route::resource('product', ProductAdminController::class);
    Route::resource('critics', CriticsController::class);
    Route::resource('webprofile', WebProfileController::class);
    Route::post('product/{product}/published',[ProductAdminController::class, 'published'])->name('product.published');
    Route::post('product/{product}/inactive',[ProductAdminController::class, 'inactive'])->name('product.inactive');
});