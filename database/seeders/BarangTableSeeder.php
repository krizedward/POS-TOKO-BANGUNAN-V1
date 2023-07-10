<?php

namespace Database\Seeders;

// add model
use App\Models\Barang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = array(
            array('nama' => 'Tiga Roda'),
        );

        foreach ($datas as $data) {
            Barang::firstOrCreate(
                ['nama' => $data['nama']],
                ['slug' => Str::slug($data['nama'])]
            );
        }
    }
}
