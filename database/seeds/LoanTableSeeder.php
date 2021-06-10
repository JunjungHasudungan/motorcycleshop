<?php

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanTableSeeder extends Seeder
{
    public function run()
    {
        $loans = [
            [
                'id'            => '1',
                'name'          => 'Kejaksan',
                'district_id'   => '1'
            ],
            [
                'id'            => '2',
                'name'          => 'Kebon Baru',
                'district_id'   => '1'
            ],
            [
                'id'            => '3',
                'name'          => 'Suka Pura',
                'district_id'   => '1'
            ],
            [
                'id'            => '4',
                'name'          => 'Kesenden',
                'district_id'   => '1'
            ],
            [
                'id'            => '5',
                'name'          => 'Karyamulya',
                'district_id'   => '2'
            ],
            [
                'id'            => '6',
                'name'          => 'Sunyaragi',
                'district_id'   => '2'
            ],
            [
                'id'            => '7',
                'name'          => 'Drajat',
                'district_id'   => '2'
            ],
            [
                'id'            => '8',
                'name'          => 'Pekiringan',
                'district_id'   => '2'
            ],
            [
                'id'            => '9',
                'name'          => 'Jagastru',
                'district_id'   => '3'
            ],
            [
                'id'            => '10',
                'name'          => 'Pulosaren',
                'district_id'   => '3'
            ],
            [
                'id'            => '11',
                'name'          => 'Pekalipan',
                'district_id'   => '3'
            ],
            [
                'id'            => '12',
                'name'          => 'Pekalangan',
                'district_id'   => '3'
            ],
            [
                'id'            => '13',
                'name'          => 'Pengambiran',
                'district_id'   => '4'
            ],
            [
                'id'            => '14',
                'name'          => 'Kasepuhan',
                'district_id'   => '4'
            ],
            [
                'id'            => '15',
                'name'          => 'Lemahwungkuk',
                'district_id'   => '4'
            ],
            [
                'id'            => '16',
                'name'          => 'Panjunan',
                'district_id'   => '4'
            ],
            [
                'id'            => '17',
                'name'          => 'Argasunya',
                'district_id'   => '5'
            ],
            [
                'id'            => '18',
                'name'          => 'Kalijaga',
                'district_id'   => '5'
            ],
            [
                'id'            => '19',
                'name'          => 'Harjamukti',
                'district_id'   => '5'
            ],
            [
                'id'            => '20',
                'name'          => 'Kecapi',
                'district_id'   => '5'
            ],
            [
                'id'            => '21',
                'name'          => 'Larangan',
                'district_id'   => '5'
            ],
        ];

        Loan::insert($loans);
    }
}


