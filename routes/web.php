<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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

// Menampilkan halaman awal website
Route::get('/', [HomeController::class,'home']);

// Menampilkan daftar product (route prefix)
Route::prefix('category')->group(function() {
    Route::get('/food-beverage',[ProductsController::class, 'foodbeverage']);
    Route::get('/beauty-health',[ProductsController::class, 'beautyhealth']);
    Route::get('/home-care',[ProductsController::class, 'homecare']);
    Route::get('/baby-kid',[ProductsController::class, 'babykid']);
});

// Menampilkan profil pengguna (route param)
Route::get('/user/{id}/name/{name}',[UserController::class,'user']);

// Menampilkan halaman transaksi POS
Route::get('/penjualan', [PenjualanController::class,'transaksi']);