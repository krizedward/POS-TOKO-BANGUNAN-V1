<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\API\BarangSatuanController;

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

Route::get('/barang-satuan', [BarangSatuanController::class, 'index']);

Route::get('/kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori.produk.index');
Route::post('/kategori-produk', [KategoriProdukController::class, 'store'])->name('kategori.produk.store');
