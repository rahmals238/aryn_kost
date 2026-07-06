<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        // Membuat role
        Role::firstOrCreate(['name' => 'owner']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'penghuni']);
    }
}
