<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder ProdukTableSeeder
     * php artisan db:seed --class=ProdukTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
        'stok_minimum',
        'kategori',
        'supplier',
        'tanggal_pembelian_terakhir',
        'tanggal_kadaluarsa',
    ];
}
