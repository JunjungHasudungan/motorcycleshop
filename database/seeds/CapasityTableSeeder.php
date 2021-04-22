<?php

use App\Models\Capasity;
use Illuminate\Database\Seeder;

class CapasityTableSeeder extends Seeder
{

    public function run()
    {
        $capasities = [
        [            
            'id'        => 1,
            'capasity'  => '110 CC',
        ],
        [
            'id'        => 2, 
            'capasity'  => '125 CC',
        ],
        [
            'id'        => 3,
            'capasity'  => '150 CC',
        ],
        [
            'id'        => 4,
            'capasity'  => '155 CC',
        ]
    ];

        Capasity::insert($capasities);
    }
}
