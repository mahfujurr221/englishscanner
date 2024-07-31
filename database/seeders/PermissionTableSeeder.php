<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create permissions
        $permissions = [
            //role
            'list-role',
            'create-role',
            'edit-role',
            'delete-role',

            //permission
            'list-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',

            //user
            'list-user',
            'create-user',
            'edit-user',
            'delete-user',

            //course
            'list-course',
            'create-course',
            'edit-course',
            'delete-course',

            //lets learn
            'list-lets-learn',
            'create-lets-learn',
            'edit-lets-learn',
            'delete-lets-learn',

            //video
            // 'list-video',
            // 'create-video',
            // 'edit-video',
            // 'delete-video',

            //profile
            'list-profile',
            'edit-profile',
            'delete-profile',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name' => 'web']);
        }

        $role = Role::findByName('Super Admin');
        $role->givePermissionTo(Permission::all());
    }
}
