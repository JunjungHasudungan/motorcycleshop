<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
class PermissionRoleTableSeeder extends Seeder
{

    
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id')); // Admin

        $mechanics = $admin_permissions->whereIn('title', ['service_access', 'service_show', 'access_logout', 
        'service_create', 'service_delete', 'service_update' ]);
        Role::findOrFail(2)->permissions()->sync($mechanics); // Mechanics - service

        $chasiers = $admin_permissions->whereIn('title', ['sparepart_access', 'sparepart_show', 'service_show',
         'sparepart_create', 'sparepart_edit', 'sparepart_delete' ]);
        Role::findOrFail(3)->permissions()->sync($chasiers); // Chasiers - service

        $service_advisors = $admin_permissions->whereIn('title', ['service_create', 'service_show', 'sparepart_access', 
        'sparepart_access', 'sparepart_show' ]);
        Role::findOrFail(4)->permissions()->sync($service_advisors); // Service advisors- sparepart

        $customer_services = $admin_permissions->whereIn('title', [
            'user_member_payment_access', 'user_member_payment_create','user_member_payment_update', 
            'user_member_payment_show', 'user_member_payment_delete','motor_access', 
            'motor_create','motor_edit', 'motor_show', 'motor_delete'
            ]);
        Role::findOrFail(5)->permissions()->sync($customer_services); // Customer Service - sparepart

        $user_members = $admin_permissions->whereIn('title', ['user_member_payment_show']);
        Role::findOrFail(6)->permissions()->sync($user_members); //user member - payment


        $debt_collectors = $admin_permissions->whereIn('title', ['user_member_payment_show', 'user_member_payment_access']);
        Role::findOrFail(7)->permissions()->sync($debt_collectors); //Debt Colector - payment
    

    }
}
