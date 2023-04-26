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
                'cover' => '1681221782.jpg',
                'price' => 10.99,
                'user_id' => 1,
                'quantity'=>2,

                'category_id' => 1,
                'sub_category' => 2,
            ],
            [
                'title' => 'Product 2',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => '1681221782.jpg',
                'price' => 10.99,
                'user_id' => 1,
                'quantity'=>2,
                'category_id' => 1,
                'sub_category' => 2,
            ]
        ]);

        // DB::table('products')->insert($products);
    }
}
