<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangStok extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder BarangStokTableSeeder
     * php artisan db:seed --class=BarangStokTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'barang_stok';
    
    protected $fillable = [
      'barang_id',
      'stok_masuk',
      'stok_keluar',
    ];
}
