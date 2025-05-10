<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\EcommerceController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

});
