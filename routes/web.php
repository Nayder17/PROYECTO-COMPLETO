<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/hotel', function () {
    return view('hotel');
})->name("hotel");

Route::get('/restaurant', function () {
    return view('restaurant');
})->name("restaurant");

Route::get('/store', function () {
    return view('tienda');
})->name("store");

Route::get('/place', function () {
    return view('lugar');
})->name("place");

