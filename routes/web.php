<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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
Route::get('/product', [HomeController::class, 'product'])->name('home.product');
Route::get('/product/view/{id}', [HomeController::class, 'view'])->name('home.view');
Route::get('test', function()
{
    return view('test');
});

// Route::get('/register', [RegisterController::class, 'index']) -> name('register');
// Route::POST('/register/store', [RegisterController::class, 'store'])->name('register.store');

// Route::get('login', [LoginController::class, 'create'])->name('login');
// Route::post('login', [LoginController::class, 'store'])->name('login');

Route::get('login', function () {
    return redirect('auth');
});

Route::get('auth', [LoginController::class, 'create'])->name('auth');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::middleware('auth')->group(function() {
    Route::post('/cart/{products}', [CartController::class, 'create'])->name('cart.create');
    Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
    Route::patch('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::post('/order/{order}/pay', [OrderController::class, 'pay'])->name('order.pay');
    Route::get('/profile', [ProfileController::class, 'show_profile'])->name('show_profile');
    Route::post('/profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
  });