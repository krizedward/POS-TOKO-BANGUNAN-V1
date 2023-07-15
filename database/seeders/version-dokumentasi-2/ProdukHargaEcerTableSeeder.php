<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukHargaEcer;

class ProdukHargaEcerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProdukHargaEcer::create([
            'produk_id' => 1,
            'jumlah' => 0,
            'harga' => 0,
        ]);
    }
}
