<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    
    public function run()
    {
        Role::findOrFail(1)->roleUsers()->sync(1); // admin
        Role::findOrFail(2)->roleUsers()->sync([2, 8, 9, 10]); // Mechanics
        Role::findOrFail(3)->roleUsers()->sync(3); // Chasier
        Role::findOrFail(4)->roleUsers()->sync(4); // Service Advisor
        Role::findOrFail(5)->roleUsers()->sync(5); // Customers Services
        Role::findOrFail(6)->roleUsers()->sync(6); // User-General
        Role::findOrFail(7)->roleUsers()->sync([7, 11, 12]); // Debt Collector
    }
}
