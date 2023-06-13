<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriSuplier;

class KategoriSuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Next Step
     * php artisan make:factory KategoriSuplier
     * Happy Coding :)
     */
    public function run(): void
    {
        // membuat data
        KategoriSuplier::factory()->count(10)->create();
    }
}
