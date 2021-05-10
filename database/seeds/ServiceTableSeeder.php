<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    
    public function run()
    {
        $services = [
            [
                'id'                    => 1,
                'id_service'            => 'Se0001', 
                'name'                  => 'Serivce CVT', 
                'user_id'               => 11,
                'price'                 => '35000', 

            ],
            [
                'id'                    => 2,
                'id_service'            => 'Se0011', 
                'name'                  => 'Serivce Injeksi', 
                'user_id'               => null,
                'price'                 => '35000', 
            ],
            [
                'id'                    => 3,
                'id_service'            => 'Se0012', 
                'name'                  => 'Serivce Kelistrikan', 
                'user_id'               => 12,
                'price'                 => '20000', 
            ],
        ];

        Service::insert($services);
    }
}
