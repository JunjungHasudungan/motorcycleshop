<?php

use Illuminate\Database\Seeder;
use App\Models\Motor;
class MotorTableSeeder extends Seeder
{

    public function run()
    {
        $motors = [
            [
            'id'                => '1',
            'name'              => 'Vario',
            'type'              => 'CBS',
            'created_at_year'   => '2006',
            'capasity_id'       => '1',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '2',
            'name'              => 'Vario',
            'type'              => 'Techno',
            'created_at_year'   => '2009',
            'capasity_id'       => '2',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
            // 
        ],
        [
            'id'                => '3',
            'name'              => 'Vario',
            'type'              => 'Techno FI',
            'created_at_year'   => '2012',
            'capasity_id'       => '2',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '4',
            'name'              => 'Vario',
            'type'              => 'eSP',
            'created_at_year'   => '2015',
            'capasity_id'       => '2',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '5',
            'name'              => 'Vario',
            'type'              => 'CBS',
            'created_at_year'   => '2015',
            'capasity_id'       => '2',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '6',
            'name'              => 'Vario',
            'type'              => 'CBS',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 2
        ],
        [
            'id'                => '7',
            'name'              => 'Verza',
            'type'              => 'MACHO MATTE BLAC',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       =>  5
        ],
        [
            'id'                => '8',
            'name'              => 'NEW REVO X',
            'type'              => 'ATTRACTIVE RED FI',
            'created_at_year'   => '2020',
            'capasity_id'       => '1',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 3
        ],
        [
            'id'                => '9',
            'name'              => 'CB',
            'type'              => 'SPECIAL EDITION',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 5
        ],
        [
            'id'                => '10',
            'name'              => 'ALL NEW SUPRA GTR',
            'type'              => 'MANUAL',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 4
        ],
        [
            'id'                => '11',
            'name'              => 'SUPRA X ',
            'type'              => 'PGM-FI',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 3
        ],
        [
            'id'                => '12',
            'name'              => 'ALL NEW PCX',
            'type'              => 'CBS',
            'created_at_year'   => '2020',
            'capasity_id'       => '4',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 2
        ],
        [
            'id'                => '13',
            'name'              => 'NEW SCOPPY',
            'type'              => 'KEYLESS',
            'created_at_year'   => '2020',
            'capasity_id'       => '1',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '14',
            'name'              => 'BEAT',
            'type'              => 'STREE',
            'created_at_year'   => '2020',
            'capasity_id'       => '1',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 1
        ],
        [
            'id'                => '15',
            'name'              => 'SH',
            'type'              => 'SPECIAL EDITION',
            'created_at_year'   => '2020',
            'capasity_id'       => '4',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 2
        ],
        [
            'id'                => '16',
            'name'              => 'SONIC',
            'type'              => 'SPECIAL EDITION',
            'created_at_year'   => '2020',
            'capasity_id'       => '3',
            'no_plat'           => null,
            'slug'              => null,            
            'category_id'       => 4
        ]
    ];

        Motor::insert($motors);
    }

}
