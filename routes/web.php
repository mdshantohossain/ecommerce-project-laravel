<?php

use App\Http\Controllers\Website\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\EcommerceController;
use App\Http\Controllers\Website\UserController;
// middleware
use App\Http\Middleware\AuthenticatedMiddleware;


Route::get('/', [EcommerceController::class, 'index'])->name('home');

// cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.view');
Route::post('/cart-add', [CartController::class, 'addCart'])->name('cart.add');
Route::get('/cart-remove-item/{rowId}', [CartController::class, 'productRemove'])->name('cart.remove');
Route::post('/cart-update-item', [CartController::class, 'updateCartProduct'])->name('cart.update');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/product-detail/{id}', [EcommerceController::class, 'productDetail'])->name('product.detail');
Route::get('/sub-category-product/{id}', [CategoryController::class, 'subCategoryProducts'])->name('sub-category.product');
Route::get('/category-product/{id}', [CategoryController::class, 'categoryProducts'])->name('category.product');

// order routes

Route::get('/order-place', [OrderController::class, 'orderPlace'])->name('order.place');

// auth
Route::get('/profile', [UserController::class, 'index'])->name('user.profile')->middleware(AuthenticatedMiddleware::class);


Route::resource('/categories', CategoryController::class)->except(['show']);
Route::resource('/sub-categories', SubCategoryController::class)->except(['show']);
Route::get('/get-sub-categories/{categoryId}', [SubCategoryController::class,  'getSubCategories']);
Route::resource('/products', ProductController::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

});
