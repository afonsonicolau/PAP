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



// Welcome Page
Route::view('/', 'welcome')->name('home');

// Online Shop Page
Route::view('/loja-online', 'onlineshop.loja-online')->name('online_store');

// Online Outlet Page
Route::view('/outlet', 'outlet.loja-outlet')->name('outlet_store');



Auth::routes();

// Admin
// Login
Route::view('/login-admin', 'auth.admin.login-admin')->name('login_admin');
// Dashboard
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('admin');
Route::view('/produtos', 'auth.admin.products.read-products')->middleware('auth')->name('read_products');



