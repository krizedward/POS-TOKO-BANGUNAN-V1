<?php

use Illuminate\Database\Seeder;
use App\Models\BarangBesi;

class BarangBesiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarangBesi::create([
            'ukuran' => '6 x 12',
            'lonjor' => '1',
            'harga' => '10.300',
        ]);
    }
}
