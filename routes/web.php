<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\RegisterController;
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
<<<<<<< HEAD
Route::get('/register', [RegisterController::class, 'index']) -> name('register');
Route::POST('/register/store', [RegisterController::class, 'store'])->name('register.store');

=======

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');

//ROUTE ADMIN
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('admin/users', [UsersController::class, 'index'])->name('admin.users')->middleware('auth');
>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4
