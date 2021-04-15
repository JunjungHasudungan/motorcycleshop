<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
class PermissionRoleTableSeeder extends Seeder
{

    
    public function run()
    {
        $permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($permissions->pluck('id')); // admin

        $user_mechanics = $permissions->filter(function($permission){
            return subtr($permission->title, 0, 8) == 'mekanik_';
        });
        Role::findOrFail(2)->permissions()->sync($user_mechanics);
        
    }
}
