<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


// Public
Route::get('/', fn() => view('welcome'))->name('welcome');

// Auth
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', fn() => redirect()->route('login'))->name('logout');

// Halaman Shop (public but review posting butuh login)
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

// Store Review (login required)
Route::post('/reviews', [ReviewController::class, 'store'])
     ->middleware('auth')
     ->name('reviews.store');

     Route::get('/dashboard', function () {
          return view('dashboard');
      })->middleware('auth')->name('dashboard');
      
      Route::get('/home', [ProductController::class, 'index'])->name('home');
      
      Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

      Route::middleware('auth')->group(function () {
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/remove/{key}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

});