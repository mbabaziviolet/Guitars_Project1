<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //admin seeder
         $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('joy')
       ]);
         //creating a role
         $role = Role::create([
            'name'=>'admin'
         ]);
         $permissions = Permission::pluck('id','id')->all();

         //syncPermissions assigns permiossions on a role
         $role->syncPermissions($permissions);
         $admin->assignRole($role);
    }
}
