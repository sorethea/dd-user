<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $role = Role::findOrCreate("admin");
        $permissionList =[
            "users.viewAny",
            "users.view",
            "users.create",
            "users.update",
            "users.delete",
            "users.restore",
            "users.forceDelete",
        ];
        foreach ($permissionList as $perm){
            $permission = Permission::findOrCreate($perm);
            $role->givePermissionTo($perm);
        }
    }
}
