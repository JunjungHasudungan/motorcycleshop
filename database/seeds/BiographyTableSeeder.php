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
                'birthday_of_place'   =>'Tanjung Balai, Sumatera-Utara', 
                'birthday_of_date'    => '18 Maret 1993', 
                'domicile'          => 'Cirebon', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00121,
                'user_id'           => 1 // admin
            ],
            [
                'id'                => 2,
                'birthday_of_place'   =>'Parong pong, Bandung Barat', 
                'birthday_of_date'    => '25 Mei 1996', 
                'domicile'          => 'Bandung Barat', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00122,
                'user_id'           => 2
            ],
            [
                'id'                => 3,
                'birthday_of_place'   =>'Jakarta', 
                'birthday_of_date'    => '15 April 1997', 
                'domicile'          => 'Jakarta', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00123,
                'user_id'           => 3
            ],
            [
                'id'                => 4,
                'birthday_of_place'   =>'Blintar, Jawa Tengah', 
                'birthday_of_date'    => '27 Agustus 1989', 
                'domicile'          => 'Batam', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00124,
                'user_id'           => 4
            ],
            [
                'id'                => 5,
                'birthday_of_place'   =>'Stabat, Sumatera Utara', 
                'birthday_of_date'    => '09 September 1993', 
                'domicile'          => 'Stabat', 
                'gender'            => 'Perempuan', 
                'id_user'           => 00125,
                'user_id'           => 5
            ],
            [
                'id'                => 6,
                'birthday_of_place'   =>'Aceh Singkil, Banda Aceh', 
                'birthday_of_date'    => '01 Oktober 1991', 
                'domicile'          => 'Bandung', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00126,
                'user_id'           => 6
            ],
            [
                'id'                => 7,
                'birthday_of_place'   =>'Cisarua, Bandung-Barat', 
                'birthday_of_date'    => '28 Februari 1993', 
                'domicile'          => 'Cisarua', 
                'gender'            => 'Laki-Laki', 
                'id_user'           => 00127,
                'user_id'           => 7
            ],
        ];

        Biography::insert($biographies);
    }
}
