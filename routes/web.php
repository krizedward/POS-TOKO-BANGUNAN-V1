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
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\KategoriSuplierController;
use App\Http\Controllers\ProdukController;
use RealRashid\SweetAlert\Facades\Alert;

// Route::get('products', [ProductController::class, 'index'])->name('products.index');
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('products', [ProductController::class, 'store'])->name('products.store');
// Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::resource('kategori-produk', KategoriProdukController::class);

// Ketegori Produk
Route::get('kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori.produk.index');
Route::get('kategori-produk/create', [KategoriProdukController::class, 'create'])->name('kategori.produk.create');
Route::post('kategori-produk', [KategoriProdukController::class, 'store'])->name('kategori.produk.store');
Route::get('kategori-produk/{id}/edit', [KategoriProdukController::class, 'edit'])->name('kategori.produk.edit');
Route::get('kategori-produk/{id}', [KategoriProdukController::class, 'show'])->name('kategori.produk.show');
Route::put('kategori-produk/{id}', [KategoriProdukController::class, 'update'])->name('kategori.produk.update');
Route::delete('kategori-produk/{id}', [KategoriProdukController::class, 'destroy'])->name('kategori.produk.destroy');

// Kategori Suplier
Route::get('kategori-suplier', [KategoriSuplierController::class, 'index'])->name('kategori.suplier.index');
Route::get('kategori-suplier/create', [KategoriSuplierController::class, 'create'])->name('kategori.suplier.create');
Route::post('kategori-suplier', [KategoriSuplierController::class, 'store'])->name('kategori.suplier.store');
Route::get('kategori-suplier/{id}/edit', [KategoriSuplierController::class, 'edit'])->name('kategori.suplier.edit');
Route::get('kategori-suplier/{id}', [KategoriSuplierController::class, 'show'])->name('kategori.suplier.show');
Route::put('kategori-suplier/{id}', [KategoriSuplierController::class, 'update'])->name('kategori.suplier.update');
Route::delete('kategori-suplier/{id}', [KategoriSuplierController::class, 'destroy'])->name('kategori.suplier.destroy');

// Ketegori Produk
Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::get('produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::put('produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

Route::get('/', function () {
    Alert::success('Success', 'You have been successfully logged in.')->autoclose(3000);
    // return view('kategori_produk.index');
    return view('blank');
    // return view('owner.master_product_index');
    // return view('skull.dashboard');
    // return view('welcome');
    // ada di halaman blank dan sudah terintergrasi
    // dengan info.js
    // https://introjs.com/docs/examples/basic/json-config
})->name('dashboard');

Route::get('/page', function () {
    Alert::success('Success', 'You have been successfully logged in.')->autoclose(3000);
    return view('blank');
});

Route::get('test', function () {
	return view('admin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
