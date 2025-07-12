<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            'view dashboard',
            'manage users',
            'create users',
            'edit users',
            'delete users',
            'view users',
            'manage roles',
            'manage permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin role
        $adminRole = Role::create(['name' => 'admin']);

        // Assign all permissions to admin role
        $adminRole->givePermissionTo($permissions);

        // Create user role
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo(['view dashboard']);
    }
}
