<?php

use App\Models\Biography;
use Illuminate\Database\Seeder;

class BiographyTableSeeder extends Seeder
{

    public function run()
    {
        $biographies = [
            [
                'id'                => 1,
                'birthdayOfPlace'   =>'Tanjung Balai, Sumatera-Utara', 
                'birthdayOfDate'    => '18 Maret 1993', 
                'domicile'          => 'Cirebon', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 1 // admin
            ],
            [
                'id'                => 2,
                'birthdayOfPlace'   =>'Parong pong, Bandung Barat', 
                'birthdayOfDate'    => '25 Mei 1996', 
                'domicile'          => 'Bandung Barat', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 2
            ],
            [
                'id'                => 3,
                'birthdayOfPlace'   =>'Jakarta', 
                'birthdayOfDate'    => '15 April 1997', 
                'domicile'          => 'Jakarta', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 3
            ],
            [
                'id'                => 4,
                'birthdayOfPlace'   =>'Blintar, Jawa Tengah', 
                'birthdayOfDate'    => '27 Agustus 1989', 
                'domicile'          => 'Batam', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 4
            ],
            [
                'id'                => 5,
                'birthdayOfPlace'   =>'Stabat, Sumatera Utara', 
                'birthdayOfDate'    => '09 September 1993', 
                'domicile'          => 'Stabat', 
                'gender'            => 'Perempuan', 
                'user_id'           => 5
            ],
            [
                'id'                => 6,
                'birthdayOfPlace'   =>'Aceh Singkil, Banda Aceh', 
                'birthdayOfDate'    => '01 Oktober 1991', 
                'domicile'          => 'Bandung', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 6
            ],
            [
                'id'                => 7,
                'birthdayOfPlace'   =>'Cisarua, Bandung-Barat', 
                'birthdayOfDate'    => '28 Februari 1993', 
                'domicile'          => 'Cisarua', 
                'gender'            => 'Laki-Laki', 
                'user_id'           => 7
            ],
        ];

        Biography::insert($biographies);
    }
}
