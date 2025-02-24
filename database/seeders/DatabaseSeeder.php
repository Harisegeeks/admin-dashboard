<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call([
        RoleSeeder::class,
        PermissionSeeder::class,
        UserSeeder::class,
    ]);
       $user = User::where('email', 'admin@example.com')->first();
    }
}
