<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/details', function () {
    return view('detailsp');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/we', function () {
    return view('we');
});
Route::get('/rol', function () {
    return view('rol');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/accountven', function () {
    return view('accountvendor');
});
