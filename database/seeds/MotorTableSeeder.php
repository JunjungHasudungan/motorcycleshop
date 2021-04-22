<?php

use Illuminate\Database\Seeder;
use App\Models\Motor;
class MotorTableSeeder extends Seeder
{

    public function run()
    {
        $motors = [
            [
            'id'            => '1',
            'name'          => 'Vario',
            'type'          => 'CBS',
            'year'          => '2006',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ],
        [
            'id'            => '2',
            'name'          => 'Vario',
            'type'          => 'Techno',
            'year'          => '2009',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 2
            // 
        ],
        [
            'id'            => '3',
            'name'          => 'Vario',
            'type'          => 'Techno FI',
            'year'          => '2012',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 2
        ],
        [
            'id'            => '4',
            'name'          => 'Vario',
            'type'          => 'eSP',
            'year'          => '2015',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ],
        [
            'id'            => '5',
            'name'          => 'Vario',
            'type'          => 'CBS',
            'year'          => '2015',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 2
        ],
        [
            'id'            => '6',
            'name'          => 'Vario',
            'type'          => 'CBS',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 3
        ],
        [
            'id'            => '7',
            'name'          => 'Verza',
            'type'          => 'MACHO MATTE BLAC',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 3
        ],
        [
            'id'            => '8',
            'name'          => 'NEW REVO X',
            'type'          => 'ATTRACTIVE RED FI',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ],
        [
            'id'            => '9',
            'name'          => 'CB',
            'type'          => 'SPECIAL EDITION',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 3
        ],
        [
            'id'            => '10',
            'name'          => 'ALL NEW SUPRA GTR',
            'type'          => 'MANUAL',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 3
        ],
        [
            'id'            => '11',
            'name'          => 'SUPRA X ',
            'type'          => 'PGM-FI',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 2
        ],
        [
            'id'            => '12',
            'name'          => 'ALL NEW PCX',
            'type'          => 'CBS',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 4
        ],
        [
            'id'            => '13',
            'name'          => 'NEW SCOPPY',
            'type'          => 'KEYLESS',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ],
        [
            'id'            => '14',
            'name'          => 'BEAT',
            'type'          => 'STREE',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ],
        [
            'id'            => '15',
            'name'          => 'SH',
            'type'          => 'SPECIAL EDITION',
            'year'          => '2020',
            // 'user_id'       => 'null',
            'no_plat'       => 'null',
            'slug'          => null,            
            // 'capasity_id'   => 1
        ]
    ];

        Motor::insert($motors);
    }

}
