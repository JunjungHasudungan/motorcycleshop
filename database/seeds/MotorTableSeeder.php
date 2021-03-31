<?php

use Illuminate\Database\Seeder;
use App\Models\Motor;
class MotorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motors = [
            [
            'id'        => '1',
            'name'      => 'Vario',
            'type'      => 'CBS',
            'year'      => '2006',
            'capasity'  => '110 CC'
        ],
        [
            'id'        => '2',
            'name'      => 'Vario',
            'type'      => 'Techno',
            'year'      => '2009',
            'capasity'  => '125 CC'
        ],
        [
            'id'        => '3',
            'name'      => 'Vario',
            'type'      => 'Techno FI',
            'year'      => '2012',
            'capasity'  => '125 CC'
        ],
        [
            'id'        => '4',
            'name'      => 'Vario',
            'type'      => 'eSP',
            'year'      => '2015',
            'capasity'  => '110 CC'
        ],
        [
            'id'        => '5',
            'name'      => 'Vario',
            'type'      => 'CBS',
            'year'      => '2015',
            'capasity'  => '125 CC'
        ],
        [
            'id'        => '6',
            'name'      => 'Vario',
            'type'      => 'CBS',
            'year'      => '2020',
            'capasity'  => '150 CC'
        ],
        [
            'id'        => '7',
            'name'      => 'Verza',
            'type'      => 'MACHO MATTE BLAC',
            'year'      => '2020',
            'capasity'  => '150 CC'
        ],
        [
            'id'        => '8',
            'name'      => 'NEW REVO X',
            'type'      => 'ATTRACTIVE RED FI',
            'year'      => '2020',
            'capasity'  => '110 CC'
        ],
        [
            'id'        => '9',
            'name'      => 'CB',
            'type'      => 'SPECIAL EDITION',
            'year'      => '2020',
            'capasity'  => '150 CC'
        ],
        [
            'id'        => '10',
            'name'      => 'ALL NEW SUPRA GTR',
            'type'      => 'MANUAL',
            'year'      => '2020',
            'capasity'  => '150 CC'
        ],
        [
            'id'        => '11',
            'name'      => 'SUPRA X ',
            'type'      => 'PGM-FI',
            'year'      => '2020',
            'capasity'  => '125 CC'
        ],
        [
            'id'        => '12',
            'name'      => 'ALL NEW PCX',
            'type'      => 'CBS',
            'year'      => '2020',
            'capasity'  => '150 CC'
        ],
        [
            'id'        => '13',
            'name'      => 'NEW SCOPPY',
            'type'      => 'KEYLESS',
            'year'      => '2020',
            'capasity'  => '110 CC'
        ],
        [
            'id'        => '14',
            'name'      => 'BEAT',
            'type'      => 'STREE',
            'year'      => '2020',
            'capasity'  => '110 CC'
        ],
        [
            'id'        => '15',
            'name'      => 'SH',
            'type'      => 'SPECIAL EDITION',
            'year'      => '2020',
            'capasity'  => '155 CC'
        ]
    ];

        Motor::insert($motors);
    }

}
