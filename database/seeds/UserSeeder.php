<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = Sorethea\Dduser\Models\User::create([
            "name"=>"Administrator",
            "email"=>"admin@demo.com",
            "password"=>Hash::make("12345678"),
        ]);
        $role = Role::findOrCreate("admin");
        $user->assignRole($role->name);
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
