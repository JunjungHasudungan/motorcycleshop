<?php

use Illuminate\Database\Seeder;
use App\Models\Major;
class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            [
                'id'    => '1',
                'name'  => 'Programming',
                'cost'  => '20000000'
            ],
            [
                'id'    => '2',
                'name'  => 'Networking',
                'cost'  => '18000000'
            ],
            [
                'id'    => '3',
                'name'  => 'Management and Analysis',
                'cost'  => '22000000'
            ]
        ];

        Major::insert($majors);
    }
}
