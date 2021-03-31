<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [

                'id'        => '1',
                'title'     => 'teacher'
            ],
            [
                'id'        => '2',
                'title'     => 'student'
            ],
            [
                'id'        => '3',
                'title'     => 'admin'
            ],
            [
                'id'    => 1,
                'name'  => 'admin',
            ],
            [
                'id'    => 2,
                'name'  => 'mekanik'
            ],
            [
                'id'    => 3,
                'name'  => 'kasir'
            ],
            [
                'id'    => 4,
                'name'  => 'service advisor'
            ],
            [
                'id'    => 5,
                'name'  => 'service counter'
            ],
            [
                'id'    => 6,
                'name'  => 'customers service'
            ],
            [
                'id'    => 7,
                'name'  => 'user'
            ],
            [
                'id'    => 8,
                'name'  => 'debt collector'
            ]
        ];
        Role::insert($roles);
    }
}
