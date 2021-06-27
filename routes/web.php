<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductTypeController;


Route::get('/', [PageController::class, 'index']);

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::Class, 'login']);
Route::get('/register/customer', [RegisterController::class, 'index'])->name('register');
Route::post('/register/customer', [RegisterController::class, 'register']);
Route::get('/register/trader', [RegisterController::class, 'trader'])->name('register.trader');
Route::post('/register/trader', [RegisterController::class, 'registerTrader']);
Route::get('/verify/resend/{id}', [VerificationController::class, 'resend'])->name('verify.resend');
Route::get('/verify/{code}', [VerificationController::class, 'index'])->name('verify');
Route::get('/logout', function(){ abort(400); });
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Account
Route::get('/account', [AccountController::class, 'index'])->name('accounts.index');
Route::post('/account', [AccountController::class, 'update'])->name('accounts.update');
Route::get('/account/change-password', [AccountController::class, 'changePassword'])->name('accounts.changePassword');
Route::post('/account/change-password', [AccountController::class, 'updatePassword'])->name('accounts.updatePassword');

// Shops
Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');
Route::get('/shops/create', [ShopController::class, 'create'])->name('shops.create');
Route::post('/shops', [ShopController::class, 'store'])->name('shops.store');
Route::get('/shops/{id}', [ShopController::class, 'show'])->name('shops.show');
Route::get('/shops/{id}/edit', [ShopController::class, 'edit'])->name('shops.edit');
Route::put('/shops/{id}', [ShopController::class, 'update'])->name('shops.update');
Route::delete('/shops/{id}', [ShopController::class, 'destroy'])->name('shops.destroy');

// Product Types
Route::get('/product-types', [ProductTypeController::class, 'index'])->name('product-types.index');
Route::get('/product-types/create', [ProductTypeController::class, 'create'])->name('product-types.create');
Route::post('/product-types', [ProductTypeController::class, 'store'])->name('product-types.store');
Route::get('/product-types/{id}', [ProductTypeController::class, 'show'])->name('product-types.show');
Route::get('/product-types/{id}/edit', [ProductTypeController::class, 'edit'])->name('product-types.edit');
Route::put('/product-types/{id}', [ProductTypeController::class, 'update'])->name('product-types.update');
Route::delete('/product-types/{id}', [ProductTypeController::class, 'destroy'])->name('product-types.destroy');
