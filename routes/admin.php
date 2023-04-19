<?php

use App\Http\Controllers\Admin\AdminController;
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
});
