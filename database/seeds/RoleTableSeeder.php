<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{

    
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'name'  => 'admin',
            ],
            [
                'id'    => 2,
                'name'  => 'Mechanic',
            ],
            [
                'id'    => 3,
                'name'  => 'Chasier',
            ],
            [
                'id'    => 4,
                'name'  => 'Service Advisor',
            ],
            [
                'id'    => 5,
                'name'  => 'Customers Service',
            ],
            [
                'id'    => 6,
                'name'  => 'User Member', 
            ],
            [
                'id'    => 7,
                'name'  => 'Debt Collector',
            ],
        ];
        Role::insert($roles);
    }
}
