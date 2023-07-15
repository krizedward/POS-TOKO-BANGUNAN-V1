<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukSatuan;

class ProdukSatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProdukSatuan::create([
            'nama' => 'duz',
            'slug' => 'duz', 
        ]);
    }
}
