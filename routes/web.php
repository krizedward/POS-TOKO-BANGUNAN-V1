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

// use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarangSatuanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangUkuranController;

// Test
Route::get('/', [BarangUkuranController::class, 'index']);
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Barang Satuan
Route::get('/barang-satuan', [BarangSatuanController::class, 'index']);

//Barang
Route::get('/barang', [BarangController::class, 'index']);

// Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
