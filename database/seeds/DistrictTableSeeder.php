<?php

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictTableSeeder extends Seeder
{
    public function run()
    {
        $districts = [ 
            [
                'id'    => 1,
                'name'  => 'KEJAKSAN'
            ],
            [
                'id'    => 2,
                'name'  => 'KESAMBI'
            ],
            [
                'id'    => 3,
                'name'  => 'PEKALIPAN'
            ],
            [
                'id'    => 4,
                'name'  => 'LEMAHWUNGKUK'
            ],
            [
                'id'    => 5,
                'name'  => 'HARJAMUKTI'
            ],
        ];

        District::insert($districts);
    
    }
}
