<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            MotorTableSeeder::class,
            SparepartTableSeeder::class,
            UserTableSeeder::class,
            PermissionTableSeeder::class,
            CapasityTableSeeder::class,
            RoleUserTableSeeder::class,
            BiographyTableSeeder::class,
            PermissionRoleTableSeeder::class,
            ]);
    }
}
