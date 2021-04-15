<?php

use App\Models\Capasity;
use Illuminate\Database\Seeder;

class CapasityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $capasities = [
        [            
            'id'        => 1,
            'capasity'  => '110 CC',
            'motor_id'  =>'',
        ],
        [
            'id'        => 2, 
            'capasity'  => '125 CC',
            'motor_id'  =>'',
        ],
        [
            'id'        => 3,
            'capasity'  => '150 CC',
            'motor_id'  =>'',
        ],
        [
            'id'        => 4,
            'capasity'  => '155 CC',
            'motor_id'  =>'',
        ]
    ];

        Capasity::insert($capasities);
    }
}
