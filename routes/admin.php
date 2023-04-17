<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
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
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::post('/detail/{id}', [ProductController::class, 'show'])->name('detail');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });
});
