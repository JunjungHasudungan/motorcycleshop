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
                'title'     => 'user_access',
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
                'title'     => 'role_access,'
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
                'title'     => 'motor_access',
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
            ],
            [
                'id'        => '16',
                'title'     => 'sparepart_access',
            ],
            [
                'id'        => '17',
                'title'     => 'sparepart_create',
            ],
            [
                'id'        => '18',
                'title'     => 'sparepart_edit',
            ],
            [
                'id'        => '19',
                'title'     => 'sparepart_show',
            ],
            [
                'id'        => '20',
                'title'     => 'sparepart_delete',
            ],
            [
                'id'        => '21',
                'title'     => 'service_access',
            ],
            [
                'id'        => '22',
                'title'     => 'mechanic_create',
            ],
            [
                'id'        => '23',
                'title'     => 'mechanic_edit',
            ],
            [
                'id'        => '24',
                'title'     => 'mechanic_show',
            ],
            [
                'id'        => '25',
                'title'     => 'mechanic_delete',
            ],
            [
                'id'        => '26',
                'title'     => 'user_member_access',
            ],
            [
                'id'        => '27',
                'title'     => 'user_member_create',
            ],
            [
                'id'        => '28',
                'title'     => 'user_member_edit',
            ],
            [
                'id'        => '29',
                'title'     => 'user_member_show',
            ],
            [
                'id'        => '30',
                'title'     => 'user_member_update',
            ],
            [
                'id'        => '31',
                'title'     => 'service_delete',
            ],
            [
                'id'        => '32',
                'title'     => 'mechanic_access',
            ],
            [
                'id'        => '33',
                'title'     => 'service_create',
            ],
            [
                'id'        => '34',
                'title'     => 'service_show',
            ],
            [
                'id'        => '35',
                'title'     => 'user_member_payment_access',
            ],
            [
                'id'        => '36',
                'title'     => 'user_member_payment_create',
            ],
            [
                'id'        => '37',
                'title'     => 'user_member_payment_update',
            ],
            [
                'id'        => '38',
                'title'     => 'user_member_payment_show',
            ],
            [
                'id'        => '39',
                'title'     => 'user_member_payment_delete',
            ],
            [
                'id'        =>'40',
                'title'     => 'user_register',
            ],
            [
                'id'        =>'41',
                'title'     => 'user_login',
            ]
            
        ];
        
        Permission::insert($permissions);
    }
}
