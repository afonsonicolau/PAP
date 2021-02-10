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
Route::view('/', 'welcome');

Auth::routes();

// Admin Login
//Route::view('/login-admin', 'auth.admin.login-admin');
// Admin Dashboard
Route::get('/admin', 'Home@index')->name('home');
Route::post('/admin', 'Home@index')->name('home');


// Online Shop Page
//Route::view('/loja-online', 'onlineshop.loja-online');
// Online Outlet Page
//Route::view('/outlet', 'outlet.loja-outlet');
