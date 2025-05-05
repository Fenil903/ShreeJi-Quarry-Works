<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        $permissions = [
            // Dashboard
            ['name' => 'dashboard.view', 'group_name' => 'Dashboard'],
            ['name' => 'dashboard.edit', 'group_name' => 'Dashboard'],
            
            // Admin
            ['name' => 'admin.create', 'group_name' => 'Admin'],
            ['name' => 'admin.view', 'group_name' => 'Admin'],
            ['name' => 'admin.edit', 'group_name' => 'Admin'],
            ['name' => 'admin.delete', 'group_name' => 'Admin'],
            ['name' => 'admin.approve', 'group_name' => 'Admin'],
            
            // Role
            ['name' => 'roles.create', 'group_name' => 'Role'],
            ['name' => 'roles.view', 'group_name' => 'Role'],
            ['name' => 'roles.edit', 'group_name' => 'Role'],
            ['name' => 'roles.delete', 'group_name' => 'Role'],
            ['name' => 'roles.approve', 'group_name' => 'Role'],
            
            // Profile
            ['name' => 'profile.view', 'group_name' => 'Profile'],
            ['name' => 'profile.edit', 'group_name' => 'Profile'],
            ['name' => 'profile.delete', 'group_name' => 'Profile'],
            ['name' => 'profile.update', 'group_name' => 'Profile'],
            
            // Users
            ['name' => 'users.create', 'group_name' => 'Users'],
            ['name' => 'users.view', 'group_name' => 'Users'],
            ['name' => 'users.edit', 'group_name' => 'Users'],
            ['name' => 'users.delete', 'group_name' => 'Users'],
            ['name' => 'users.approve', 'group_name' => 'Users'],
            
            // Products
            ['name' => 'products.create', 'group_name' => 'Products'],
            ['name' => 'products.view', 'group_name' => 'Products'],
            ['name' => 'products.edit', 'group_name' => 'Products'],
            ['name' => 'products.delete', 'group_name' => 'Products'],
            ['name' => 'products.approve', 'group_name' => 'Products'],
            
            // Categories
            ['name' => 'categories.create', 'group_name' => 'Categories'],
            ['name' => 'categories.view', 'group_name' => 'Categories'],
            ['name' => 'categories.edit', 'group_name' => 'Categories'],
            ['name' => 'categories.delete', 'group_name' => 'Categories'],
            ['name' => 'categories.approve', 'group_name' => 'Categories'],
            
            // Units
            ['name' => 'units.create', 'group_name' => 'Units'],
            ['name' => 'units.view', 'group_name' => 'Units'],
            ['name' => 'units.edit', 'group_name' => 'Units'],
            ['name' => 'units.delete', 'group_name' => 'Units'],
            ['name' => 'units.approve', 'group_name' => 'Units'],
            
            // Suppliers
            ['name' => 'suppliers.create', 'group_name' => 'Suppliers'],
            ['name' => 'suppliers.view', 'group_name' => 'Suppliers'],
            ['name' => 'suppliers.edit', 'group_name' => 'Suppliers'],
            ['name' => 'suppliers.delete', 'group_name' => 'Suppliers'],
            ['name' => 'suppliers.approve', 'group_name' => 'Suppliers'],
            
            // Requests
            ['name' => 'requests.create', 'group_name' => 'Requests'],
            ['name' => 'requests.view', 'group_name' => 'Requests'],
            ['name' => 'requests.edit', 'group_name' => 'Requests'],
            ['name' => 'requests.delete', 'group_name' => 'Requests'],
            ['name' => 'requests.approve', 'group_name' => 'Requests'],
            
            // Orders
            ['name' => 'orders.create', 'group_name' => 'Orders'],
            ['name' => 'orders.view', 'group_name' => 'Orders'],
            ['name' => 'orders.edit', 'group_name' => 'Orders'],
            ['name' => 'orders.delete', 'group_name' => 'Orders'],
            ['name' => 'orders.approve', 'group_name' => 'Orders'],
            
            // Vehicles
            ['name' => 'vehicles.create', 'group_name' => 'Vehicles'],
            ['name' => 'vehicles.view', 'group_name' => 'Vehicles'],
            ['name' => 'vehicles.edit', 'group_name' => 'Vehicles'],
            ['name' => 'vehicles.delete', 'group_name' => 'Vehicles'],
            ['name' => 'vehicles.approve', 'group_name' => 'Vehicles'],
            
            // Drivers
            ['name' => 'drivers.create', 'group_name' => 'Drivers'],
            ['name' => 'drivers.view', 'group_name' => 'Drivers'],
            ['name' => 'drivers.edit', 'group_name' => 'Drivers'],
            ['name' => 'drivers.delete', 'group_name' => 'Drivers'],
            ['name' => 'drivers.approve', 'group_name' => 'Drivers'],
            
            // Fuel Usages
            ['name' => 'fuel_usages.create', 'group_name' => 'Fuel Usages'],
            ['name' => 'fuel_usages.view', 'group_name' => 'Fuel Usages'],
            ['name' => 'fuel_usages.edit', 'group_name' => 'Fuel Usages'],
            ['name' => 'fuel_usages.delete', 'group_name' => 'Fuel Usages'],
            ['name' => 'fuel_usages.approve', 'group_name' => 'Fuel Usages'],
            
            // Reports
            ['name' => 'reports.create', 'group_name' => 'Reports'],
            ['name' => 'reports.view', 'group_name' => 'Reports'],
            ['name' => 'reports.edit', 'group_name' => 'Reports'],
            ['name' => 'reports.delete', 'group_name' => 'Reports'],
            ['name' => 'reports.approve', 'group_name' => 'Reports'],
            
            // Assets
            ['name' => 'assets.create', 'group_name' => 'Assets'],
            ['name' => 'assets.view', 'group_name' => 'Assets'],
            ['name' => 'assets.edit', 'group_name' => 'Assets'],
            ['name' => 'assets.delete', 'group_name' => 'Assets'],
            ['name' => 'assets.approve', 'group_name' => 'Assets'],
            
            // Parts
            ['name' => 'parts.create', 'group_name' => 'Parts'],
            ['name' => 'parts.view', 'group_name' => 'Parts'],
            ['name' => 'parts.edit', 'group_name' => 'Parts'],
            ['name' => 'parts.delete', 'group_name' => 'Parts'],
            ['name' => 'parts.approve', 'group_name' => 'Parts'],
            
            // Permissions
            ['name' => 'permissions.create', 'group_name' => 'Permissions'],
            ['name' => 'permissions.view', 'group_name' => 'Permissions'],
            ['name' => 'permissions.edit', 'group_name' => 'Permissions'],
            ['name' => 'permissions.delete', 'group_name' => 'Permissions'],
            ['name' => 'permissions.approve', 'group_name' => 'Permissions'],
            
            // Task
            ['name' => 'tasks.create', 'group_name' => 'Task'],
            ['name' => 'tasks.view', 'group_name' => 'Task'],
            ['name' => 'tasks.edit', 'group_name' => 'Task'],
            ['name' => 'tasks.delete', 'group_name' => 'Task'],
            ['name' => 'tasks.approve', 'group_name' => 'Task'],
            
            // Kitchen
            ['name' => 'kitchen.create', 'group_name' => 'Kitchen'],
            ['name' => 'kitchen.view', 'group_name' => 'Kitchen'],
            ['name' => 'kitchen.edit', 'group_name' => 'Kitchen'],
            ['name' => 'kitchen.delete', 'group_name' => 'Kitchen'],
            ['name' => 'kitchen.approve', 'group_name' => 'Kitchen'],
            
            // Services
            ['name' => 'services.create', 'group_name' => 'Services'],
            ['name' => 'services.view', 'group_name' => 'Services'],
            ['name' => 'services.edit', 'group_name' => 'Services'],
            ['name' => 'services.delete', 'group_name' => 'Services'],
            ['name' => 'services.approve', 'group_name' => 'Services'],
            
            // Vendors
            ['name' => 'vendors.create', 'group_name' => 'Vendors'],
            ['name' => 'vendors.view', 'group_name' => 'Vendors'],
            ['name' => 'vendors.edit', 'group_name' => 'Vendors'],
            ['name' => 'vendors.delete', 'group_name' => 'Vendors'],
            ['name' => 'vendors.approve', 'group_name' => 'Vendors'],
            
            // Services Request
            ['name' => 'services_request.create', 'group_name' => 'Services Request'],
            ['name' => 'services_request.view', 'group_name' => 'Services Request'],
            ['name' => 'services_request.edit', 'group_name' => 'Services Request'],
            ['name' => 'services_request.delete', 'group_name' => 'Services Request'],
            ['name' => 'services_request.approve', 'group_name' => 'Services Request'],
            
            // Services Order
            ['name' => 'services_order.create', 'group_name' => 'Services Order'],
            ['name' => 'services_order.view', 'group_name' => 'Services Order'],
            ['name' => 'services_order.edit', 'group_name' => 'Services Order'],
            ['name' => 'services_order.delete', 'group_name' => 'Services Order'],
            ['name' => 'services_order.approve', 'group_name' => 'Services Order'],
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission['name'], 'group_name' => $permission['group_name']]);
        }

        // Create Admin Role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        
        // Assign all permissions to Admin Role
        $adminRole->syncPermissions(Permission::all());
    }
}
