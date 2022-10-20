<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creating permissions
        $permissions = [

            'role-create',
            'role-edit',
            'role-delete',
            'guitar-create',
            'guitar-edit',
            'guitar-delete',
            'guitar-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'permission-list',


        ];

        foreach($permissions as $permission){
            Permission::create(['name'=>$permission]);
        }
    }
}
