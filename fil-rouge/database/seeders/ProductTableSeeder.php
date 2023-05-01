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
                'title' => 'Product wall art',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'd1.jpg',
                'price' => 200.99,
               
                'quantity'=>23,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 4,
            ],
            [
                'title' => 'deco wall',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'd2.png',
                'price' => 160.59,
                
                'quantity'=>23,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 4,
            ],
            [
                'title' => 'art design ',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'd5.png',
                'price' => 135.99,
                
                'quantity'=>44,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 4,
            ],
            [
                'title' => 'wall art',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'd4.png',
                'price' => 231.50,
               
                'quantity'=>52,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 4,
            ],
            [
                'title' => 'carpet design',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'cap11.png',
                'price' => 100.54,
                
                'quantity'=>67,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 5,
            ],
            [
                'title' => 'small carpet',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'cap2.png',
                'price' => 120.30,
                
                'quantity'=>82,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' =>5,
            ],
            [
                'title' => 'hand made carpet',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'cap1.png',
                'price' => 121.99,
                
                'quantity'=>25,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 5,
            ],
            [
                'title' => 'carpet Product ',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'cap22.png',
                'price' => 231.43,
                
                'quantity'=>34,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 1,
                'sub_category' => 5,
            ],
            [
                'title' => 'floawer crochet',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'f7.png',
                'price' => 15.99,
               
                'quantity'=>32,
                'Availability'=>'in stock',
                'user_id' => 1,
                'category_id' => 2,
                'sub_category' => 6,
            ],
            [
                'title' => 'best flower',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'f1.png',
                'price' => 132.99,
                
                'quantity'=>14,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 6,
            ],
            [
                'title' => 'bouquet flower',
                'slug' => 'product-1',
                'description' => 'Description of Product 1',
                'cover' => 'f2.jpg',
                'price' => 89.99,
                'quantity'=>62,
                'Availability'=>'in stock',
                'user_id' => 1,


                'category_id' => 2,
                'sub_category' => 6,
            ],
            [
                'title' => ' flower',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'f3.png',
                'price' => 99,
                'quantity'=>63,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 6,
            ],
            [
                'title' => ' crochet ART',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'c1.png',
                'price' => 99,
                'quantity'=>43,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 7,
            ],
            [
                'title' => ' decor crochet',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'c2.png',
                'price' => 99,
                'quantity'=>86,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 7,
            ],
            [
                'title' => ' crochet ART',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'c3.png',
                'price' => 99,
                'quantity'=>72,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 7,
            ],
            [
                'title' => ' decor crochet',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'c4.png',
                'price' => 99,
                'quantity'=>47,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 2,
                'sub_category' => 7,
            ],
            [
                'title' => ' embroidery dess',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'emb.png',
                'price' => 99,
                'quantity'=>26,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
                'sub_category' => 11,
            ],
            [
                'title' => ' embroidery dess',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'emb1.png',
                'price' => 99,
                'quantity'=>34,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
                'sub_category' => 11,
            ],
            [
                'title' => ' embroidery dess',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'emb2.png',
                'price' => 99,
                'quantity'=>21,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
                'sub_category' => 11,
            ],
            [
                'title' => ' embroidery art',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'ea1.jpg',
                'price' => 99,
                
                'quantity'=>18,

                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
                'sub_category' => 9,
            ],
            [
                'title' => ' embroidery hoop',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'ea2.jpg',
                'price' => 99,
                
                'quantity'=>20,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
                
                'sub_category' => 9,
            ],
            [
                'title' => ' embroidery hoop',
                'slug' => 'product-2',
                'description' => 'Description of Product 2',
                'cover' => 'ee1.jpg',
                'price' => 99,
                'quantity'=>28,
                'Availability'=>'in stock',
                'user_id' => 1,

                'category_id' => 3,
               

                'sub_category' => 10,
            ]


            
        ]);

        // DB::table('products')->insert($products);
    }
}
