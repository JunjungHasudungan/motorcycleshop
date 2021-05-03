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
                'price'                 => '35000', 
            ],
            [
                'id'                    => 2,
                'id_service'            => 'Se0011', 
                'name'                  => 'Serivce Injeksi', 
                'price'                 => '35000', 
            ],
        ];

        Service::insert($services);
    }
}
