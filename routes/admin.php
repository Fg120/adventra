<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategorysController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;

Route::middleware(AdminCheck::class)->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/create', [UsersController::class, 'create'])->name('create');
        Route::post('/store', [UsersController::class, 'store'])->name('store');
        Route::post('/detail/{id}', [UsersController::class, 'show'])->name('detail');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [UsersController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('index');
        Route::get('/create', [ProductsController::class, 'create'])->name('create');
        Route::post('/store', [ProductsController::class, 'store'])->name('store');
        Route::post('/detail/{id}', [ProductsController::class, 'show'])->name('detail');
        Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductsController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [ProductsController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategorysController::class, 'index'])->name('index');
        Route::get('/create', [CategorysController::class, 'create'])->name('create');
        Route::post('/store', [CategorysController::class, 'store'])->name('store');
        Route::post('/detail/{id}', [CategorysController::class, 'show'])->name('detail');
        Route::get('/edit/{id}', [CategorysController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategorysController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [CategorysController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('order')->name('order.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
        Route::post('/order/{id}/confirm', [OrderController::class, 'confirm'])->name('confirm');
        Route::post('/edit/{id}/complete', [OrderController::class, 'complete'])->name('complete');
        Route::post('/destroy/{id}', [OrderController::class, 'destroy'])->name('destroy');

        // Route::get('/create', [CategorysController::class, 'create'])->name('create');
        // Route::post('/store', [CategorysController::class, 'store'])->name('store');
        // Route::post('/detail/{id}', [CategorysController::class, 'show'])->name('detail');
        // Route::post('/update/{id}', [CategorysController::class, 'update'])->name('update');
    });
});
