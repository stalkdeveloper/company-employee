<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles and assigning permissions
        $permissions = [
                                    'role-list',
                                    'role-create',
                                    'role-edit',
                                    'role-delete',
                                    'company-list',
                                    'company-create',
                                    'company-edit',
                                    'company-delete',
                                    'employee-list',
                                    'employee-create',
                                    'employee-edit',
                                    'employee-delete',
                                    'user-list',
                                    'user-create',
                                    'user-edit',
                                    'user-delete',
                                ];     
 
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

         $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);    

        $role = Role::create(['name' => 'Admin']);   

        $permissions = Permission::pluck('id','id')->all();   

        $role->syncPermissions($permissions);    

        $user->assignRole([$role->id]);

    }
}
