<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            MotorTableSeeder::class,
            SparepartTableSeeder::class,
            UserTableSeeder::class,
            PermissionTableSeeder::class,
            CapasityTableSeeder::class,
            CapasityMotorTableSeeder::class,
            RoleUserTableSeeder::class,
            BiographyTableSeeder::class,
            SparepartMotorSeeder::class,
            PermissionRoleTableSeeder::class,
            ]);
    }
}

// Lena: 0821-2236-4384
