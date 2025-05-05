<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create Admin Role
        $adminRole = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);

        // Define Necessary Permissions (Add More as Needed)
        $defaultPermissions = [
        ];

        // Create Permissions if They Don’t Exist
        foreach ($defaultPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission['name'], 'guard_name' => 'web', 'group_name' => $permission['group_name']]);
        }

        // Fetch All Permissions & Assign to Admin Role
        $permissions = Permission::pluck('name')->toArray();
        $adminRole->syncPermissions($permissions);

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Change Password After Seeding
            ]
        );

        // Ensure Guard is Set & Assign Role
        $admin->assignRole($adminRole);

        echo "✅ Admin user created with full access!\n";
    }
}
