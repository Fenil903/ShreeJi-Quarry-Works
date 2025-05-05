<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        Permission::create(['name' => 'manage_inventory', 'group_name' => 'Inventory']);
        Permission::create(['name' => 'manage_fleet', 'group_name' => 'Fleet']);
        Permission::create(['name' => 'manage_assets', 'group_name' => 'Assets']);
        Permission::create(['name' => 'manage_purchases', 'group_name' => 'Purchases']);
        Permission::create(['name' => 'manage_hr', 'group_name' => 'Human Resources']);
        Permission::create(['name' => 'manage_tasks', 'group_name' => 'Task Management']);

        // Create Roles
        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->givePermissionTo(Permission::all());

        $managerRole = Role::create(['name' => 'Manager']);
        $managerRole->givePermissionTo(['manage_inventory', 'manage_fleet', 'manage_assets']);

        $userRole = Role::create(['name' => 'User']);
        $userRole->givePermissionTo(['manage_tasks']);
    }
}

