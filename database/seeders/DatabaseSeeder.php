<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Officer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create(['name' => 'super admin']);
        Permission::create(['name' => 'crud employees']);
        $staffRole = Role::create(['name' => 'staff']);
        $staffRole->givePermissionTo('crud employees');

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
        ])->assignRole('super admin');

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ])->assignRole('staff');

        Employee::factory(5)->create();
        Officer::factory(5)->create();
    }
}
