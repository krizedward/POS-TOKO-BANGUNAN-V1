<?php

use App\Models\ProductOut;
use Illuminate\Database\Seeder;

class ProductOutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOut::create([
            'product_id' => 1,
            'qty' => 1,
            'date_send' => 1658422800000,
        ]);
    }
}
