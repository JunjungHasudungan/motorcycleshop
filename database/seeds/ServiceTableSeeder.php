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
                'id_service'            => '', 
                'name'                  => '', 
                'price'                 => '', 
                'total_price_service'
            ],
        ];

        Service::insert($services);
    }
}
