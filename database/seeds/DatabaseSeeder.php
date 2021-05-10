<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionRoleTableSeeder::class,
            CategoriesTableSeeder::class,
            CapasityTableSeeder::class,
            MotorTableSeeder::class,
            SparepartTableSeeder::class,
            BiographyTableSeeder::class,
            ServiceTableSeeder::class,
            MotorServiceTableSeeder::class,
            // MotorServiceSeeder::class,
            // CapasityMotorTableSeeder::class,
            // CategoriesMotorTableSeeder::class,
            ]);
    }
}

// Lena: 0821-2236-4384
