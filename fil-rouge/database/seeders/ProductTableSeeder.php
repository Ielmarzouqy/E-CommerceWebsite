<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(  [
            [
                'title' => 'Product 1',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'product1.jpg',
                'price' => 10.99,
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 1,
            ],
            [
                'title' => 'Product 2',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'product1.jpg',
                'price' => 10.99,
                'user_id' => 2,
                'category_id' => 2,
                'sub_category' => 2,
            ]
        ]);

        // DB::table('products')->insert($products);
    }
}
