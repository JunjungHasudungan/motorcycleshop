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

        $mechanic_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) == 'service_';
        });
        Role::findOrFail(2)->permissions()->sync($mechanic_permissions); // Mechanics

        $chasier_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) == 'service_' && substr($permission->title, 0, 10) =='sparepart_';
        });
        Role::findOrFail(3)->permissions()->sync($chasier_permissions); // Chasiers

        $service_advisor_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 6) == 'motor_' && substr($permission->title, 0, 8) =='service_';
        });
        Role::findOrFail(4)->permissions()->sync($service_advisor_permissions); // Service Advisor

        $customer_service_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 6) == 'motor_' && substr($permission->title, 0, 11) =='user_member_';
        });
        Role::findOrFail(5)->permissions()->sync($customer_service_permissions); // Customers Service 

        $user_member_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) == 'service_';
        });
        Role::findOrFail(6)->permissions()->sync($user_member_permissions); // Debt Colector

        $debt_colector_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 11) == 'user_member_';
        });
        Role::findOrFail(7)->permissions()->sync($debt_colector_permissions); // Debt Colector
        

    }
}
