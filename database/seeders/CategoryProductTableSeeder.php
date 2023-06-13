<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;
use Database\Factories\CategoryProductFactory;


class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create
        // CategoryProduct::create([
        //     'name' => 'test',
        //     'slug' => 'test',
        //     'description' => 'dekripsi',
        // ]);

        CategoryProduct::factory()->count(10)->create();
    }
}
