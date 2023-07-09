<?php

namespace Database\Seeders;

// add model
use App\Models\BarangSatuan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BarangSatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = array(
            array('nama' => 'kg'),
            array('nama' => 'sak'),
            array('nama' => 'm³'),
            array('nama' => 'meter'),
        );

        foreach ($datas as $data) {
            BarangSatuan::firstOrCreate(
                ['nama' => $data['nama']],
                ['slug' => Str::slug($data['nama'])]
            );
        }
    }
}
