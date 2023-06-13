<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriProduk;

class KategoriProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Next Step
     * php artisan make:factory KategoriProduk
     * Happy Coding :)
     */
    public function run(): void
    {
        // membuat data
        KategoriProduk::factory()->count(10)->create();
    }
}
