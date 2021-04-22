<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    
    public function run()
    {
        $permissions = [
            [
                'id'        => '1',
                'title'     => 'user_accsess',
            ],
            [
                'id'        => '2',
                'title'     => 'user_show',
            ],
            [
                'id'        => '3',
                'title'     => 'user_create',
            ],
            [
                'id'        => '4',
                'title'     => 'user_edit',
            ],
            [
                'id'        => '5',
                'title'     => 'user_delete,'
            ],
            [
                'id'        => '6',
                'title'     => 'role_accsess,'
            ],
            [
                'id'        => '7',
                'title'     => 'role_show',
            ],
            [
                'id'        => '8',
                'title'     => 'role_create,'
            ],
            [
                'id'        => '9',
                'title'     => 'role_edit',
            ],
            [
                'id'        => '10',
                'title'     => 'role_delete',
            ],
            [
                'id'        => '11',
                'title'     => 'motor_accsess',
            ],
            [
                'id'        => '12',
                'title'     => 'motor_create',
            ],
            [
                'id'        => '13',
                'title'     => 'motor_edit',
            ],
            [
                'id'        => '14',
                'title'     => 'motor_show',
            ],
            [
                'id'        => '15',
                'title'     => 'motor_delete',
            ]
        ];
        
        Permission::insert($permissions);
    }
}
