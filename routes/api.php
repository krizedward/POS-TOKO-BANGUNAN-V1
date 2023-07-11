<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\API\BarangSatuanController;
use App\Http\Controllers\API\BarangController;
use App\Http\Controllers\API\BarangUkuranController;
use App\Http\Controllers\API\BarangMasterController;
use App\Http\Controllers\API\BarangStokController;
use App\Http\Controllers\API\BarangFotoController;
use App\Http\Controllers\API\LogBarangMasukController;
use App\Http\Controllers\API\LogBarangKeluarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// barang satuan
Route::get('/barang-satuan', [BarangSatuanController::class, 'index']);
// barang
Route::get('/barang', [BarangController::class, 'index']);
// barang ukuran
Route::get('/barang-ukuran', [BarangUkuranController::class, 'index']);
// barang master
Route::get('/barang-master', [BarangMasterController::class, 'index']);
// barang stok
Route::get('/barang-stok', [BarangStokController::class, 'index']);
// log barang masuk
Route::get('/log-barang-masuk', [LogBarangMasukController::class, 'index']);
// log barang keluar
Route::get('/log-barang-keluar', [LogBarangKeluarController::class, 'index']);
// barang foto
Route::get('/barang-foto', [BarangFotoController::class, 'index']);

Route::get('/kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori.produk.index');
Route::post('/kategori-produk', [KategoriProdukController::class, 'store'])->name('kategori.produk.store');
