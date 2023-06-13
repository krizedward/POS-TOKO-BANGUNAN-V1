<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    
    /**
     * Next Step.
     * php artisan make:seeder KategoriProdukTableSeeder
     * php artisan db:seed --class=KategoriProdukTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'kategori_produk';

    protected $fillable = [
        'kode_id',
		'kode_nomor',
		'nama',
		'slug',
		'deskripsi',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
