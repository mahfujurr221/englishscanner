<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $superAdmin = User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'type' => 'supper-admin',
            'email' => 'supper-admin@shetab.tech',
            'phone' => '00000000000',
            'password' => bcrypt('supperadmin1234'),
        ]);
        $developer = User::create([
            'fname' => 'Developer',
            'lname' => 'OP',
            'type' => 'dev',
            'email' => 'limon@shetab.tech',
            'phone' => '01781342259',
            'password' => bcrypt('developer1234'),
        ]);

        //Role Seeder 
        \Spatie\Permission\Models\Role::create(['name' => 'Super Admin', 'guard_name' => 'web']);
        \Spatie\Permission\Models\Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        \Spatie\Permission\Models\Role::create(['name' => 'SR', 'guard_name' => 'web']);
        \Spatie\Permission\Models\Role::create(['name' => 'Employee', 'guard_name' => 'web']);

        $superAdmin->assignRole('Super Admin');
        $developer->assignRole('Super Admin');

        //Permission Seeder call
        $this->call(PermissionTableSeeder::class);
    }
}
