<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'id'    => 1, 
                'name' => 'matic',
            ],
            [
                'id'    => 2, 
                'name' => 'matic-sport',
            ],
            [
                'id'    => 3, 
                'name' => 'manual-bebek',
            ],
            [
                'id'    => 4, 
                'name' => 'manual-bebek-kopling',
            ],
            [
                'id'    => 5, 
                'name' => 'manual-sport-kopling',
            ],
        ];

        Category::insert($categories);
    }
}
