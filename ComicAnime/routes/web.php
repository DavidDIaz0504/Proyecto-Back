<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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

// Página de bienvenida
Route::get('/', [ProductController::class, 'index'])->name('home');

// Rutas para el registro de usuarios
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

// Rutas para la sesión de usuarios
Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

// Ruta para la vista del administrador
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

// Otras vistas
Route::get('/store', function () {
    return view('store');
})->name('store');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/we', function () {
    return view('we');
})->name('we');

Route::get('/rol', function () {
    return view('rol');
})->name('rol');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/accountven', function () {
    return view('accountvendor');
})->name('account.vendor');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');


// Rutas para productos
Route::get('/store', [ProductController::class, 'ist'])->name('store');
Route::get('/details/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');



// Rutas para el carrito de compras
Route::post('/cart/add', [CartController::class, 'addProduct'])->name('cart.add');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::delete('/cart/remove/{index}', [CartController::class, 'removeProduct'])->name('cart.remove');
