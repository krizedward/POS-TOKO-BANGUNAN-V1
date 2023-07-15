<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukHargaModal;

class ProdukHargaModalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProdukHargaModal::create([
            'produk_id' => 1,
            'jumlah' => 0,
            'harga' => 0,
        ]);
    }
}
