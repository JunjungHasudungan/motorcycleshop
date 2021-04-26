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
                'title' => 'matic',
            ],
            [
                'id'    => 2, 
                'title' => 'matic-sport',
            ],
            [
                'id'    => 3, 
                'title' => 'manual-bebek',
            ],
            [
                'id'    => 4, 
                'title' => 'manual-bebek-kopling',
            ],
            [
                'id'    => 5, 
                'title' => 'manual-sport-kopling',
            ],
        ];

        Category::insert($categories);
    }
}
