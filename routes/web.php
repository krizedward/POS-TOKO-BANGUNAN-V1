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
use App\Http\Controllers\BarangMasterController;
use App\Http\Controllers\BarangStokController;
use App\Http\Controllers\LogBarangMasukController;
use App\Http\Controllers\LogBarangKeluarController;
use App\Http\Controllers\BarangFotoController;

// Test
Route::get('/', [BarangFotoController::class, 'index']);
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Log Barang Keluar
Route::get('/log-barang-keluar', [LogBarangKeluarController::class, 'index']);

//Log Barang Masuk
Route::get('/log-barang-masuk', [LogBarangMasukController::class, 'index']);

//Barang Satuan
Route::get('/barang-satuan', [BarangSatuanController::class, 'index']);

//Barang
Route::get('/barang', [BarangController::class, 'index']);

//Barang Ukuran
Route::get('/barang-ukuran', [BarangUkuranController::class, 'index']);

//Barang Master
Route::get('/barang-master', [BarangMasterController::class, 'index']);

//Barang Stok
Route::get('/barang-stok', [BarangStokController::class, 'index']);
Route::get('/barang-stok/create', [BarangStokController::class, 'create']);
Route::post('/barang-stok', [BarangStokController::class, 'store']);

// Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
