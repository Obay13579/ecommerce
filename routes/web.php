<?php

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\admin_panel\DashboardController;
use App\Http\Controllers\admin_panel\CategoriesController;
use App\Http\Controllers\admin_panel\ProductsController;
use App\Http\Controllers\admin_panel\ManagementController;

Route::get('admin', [LoginController::class, 'adminIndex'])->name('admin.login');
Route::post('admin', [LoginController::class, 'adminPosted']);

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin_panel', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/logout', [LoginController::class, 'adminLogout'])->name('admin.logout');
    
    // Categories
    Route::get('/admin_panel/categories', [CategoriesController::class, 'index'])->name('admin.categories');
    Route::post('/admin_panel/categories', [CategoriesController::class, 'posted']);
    Route::get('/admin_panel/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/admin_panel/categories/edit/{id}', [CategoriesController::class, 'update']);
    Route::get('/admin_panel/categories/delete/{id}', [CategoriesController::class, 'delete'])->name('admin.categories.delete');
    Route::post('/admin_panel/categories/delete/{id}', [CategoriesController::class, 'destroy']);

    // Products
    Route::get('/admin_panel/products', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('/admin_panel/products/create', [ProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/admin_panel/products/create', [ProductsController::class, 'store']);
    Route::get('/admin_panel/products/edit/{id}', [ProductsController::class, 'edit'])->name('admin.products.edit');
    Route::post('/admin_panel/products/edit/{id}', [ProductsController::class, 'update']);
    Route::get('/admin_panel/products/delete/{id}', [ProductsController::class, 'delete'])->name('admin.products.delete');
    Route::post('/admin_panel/products/delete/{id}', [ProductsController::class, 'destroy']);

    // Order management
    Route::get('/admin_panel/management', [ManagementController::class, 'manage'])->name('admin.orderManagement');
    Route::post('/admin_panel/management', [ManagementController::class, 'update'])->name('admin.orderUpdate');
});

Route::get('/login', [LoginController::class, 'userIndex'])->name('user.login');
Route::post('/login', [LoginController::class, 'userPosted']);

// Signup
Route::get('/signup', [SignupController::class, 'userIndex'])->name('user.signup');
Route::post('/signup', [SignupController::class, 'userPosted']);
Route::post('/check_email', [SignupController::class, 'emailCheck'])->name('user.signup.check_email');

// User routes
Route::get('/', [UserController::class, 'index'])->name('user.home');
Route::get('/product/{id}', [UserController::class, 'view'])->name('user.product');
Route::get('/search', [UserController::class, 'search'])->name('user.search');
Route::get('/search/category/{id}', [UserController::class, 'searchByCategory'])->name('user.search.cat');
Route::get('/view/{id}', [UserController::class, 'view'])->name('user.view');
Route::post('/view/{id}', [UserController::class, 'post']);
Route::get('/cart', [UserController::class, 'cart'])->name('user.cart');
Route::post('/cart', [UserController::class, 'confirm']);
Route::post('/edit_cart', [UserController::class, 'editCart'])->name('user.editCart');
Route::post('/delete_item_from_cart', [UserController::class, 'deleteCartItem'])->name('user.deleteCartItem');
Route::get('/logout', [LoginController::class, 'userLogout'])->name('user.logout');

// In routes/web.php
Route::post('/ai-search', [AISearchController::class, 'searchByImage'])->name('ai.search');
Route::get('/search/ai', [ProductController::class, 'aiSearchResults'])->name('search.ai');

Route::group(['middleware' => 'user'], function() {
    Route::get('/history', [UserController::class, 'history'])->name('user.history');
});