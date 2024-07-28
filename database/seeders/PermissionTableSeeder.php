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
            'list-role',
            'create-role',
            'edit-role',
            'delete-role',

            'list-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',

            'list-user',
            'create-user',
            'edit-user',
            'delete-user',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name' => 'web']);
        }

        $role = Role::findByName('Super Admin');
        $role->givePermissionTo(Permission::all());
    }
}
