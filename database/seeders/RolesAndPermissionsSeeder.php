<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'create articles',
            'edit articles',
            'delete articles',
            'publish articles',
            'view users',
            'manage users',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo($permissions); // Admin gets all permissions

        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $editorRole->givePermissionTo(['create articles', 'edit articles', 'publish articles']);

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $userRole->givePermissionTo(['view users']); // Basic user permissions

        // Assign the admin role to the first user if they don't have any role
        $user = \App\Models\User::first(); 
        if ($user && !$user->hasAnyRole(Role::all())) {
            $user->assignRole('admin'); 
        }

        echo "Roles and Permissions seeded successfully!\n";
    }
}
