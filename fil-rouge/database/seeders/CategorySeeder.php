<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(  [
            [
                'name' => 'home decoration',
                
            ],
            [
                'name' => 'crochet art',
                
            ],
            [
                'name' => 'embroidery art',
                
            ],
            [   
                'name' => 'wall art',
                
                
            ],
            [   
                'name' => 'carpet',
                
                
            ],
            [   
                'name' => 'flower',
                
                
            ],
            [   
                'name' => 'crochet decor',
                
                
            ],
            [   
                'name' => 'bag',
                
                
            ],
            [   
                'name' => 'hoop arabic',
                
                
            ],
            [
                
                'name' => 'hoop english',
                
                
            ],
            [   
                'name' => 'clothes',
                
                
            ]

            ]);
           }
}
