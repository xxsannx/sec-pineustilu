<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User Management
            'view users',
            'create users',
            'edit users',
            'delete users',
            
            // Booking Management
            'view bookings',
            'create bookings',
            'edit bookings',
            'delete bookings',
            'approve bookings',
            'cancel bookings',
            
            // Area Management
            'view areas',
            'create areas',
            'edit areas',
            'delete areas',
            
            // Facility Management
            'view facilities',
            'create facilities',
            'edit facilities',
            'delete facilities',
            
            // Gallery Management
            'view galleries',
            'create galleries',
            'edit galleries',
            'delete galleries',
            
            // Item Management
            'view items',
            'create items',
            'edit items',
            'delete items',
            
            // Outbound Management
            'view outbounds',
            'create outbounds',
            'edit outbounds',
            'delete outbounds',
            
            // Price Management
            'view prices',
            'create prices',
            'edit prices',
            'delete prices',
            
            // Payment Management
            'view payments',
            'process payments',
            'refund payments',
            
            // Report Management
            'view reports',
            'export reports',
            
            // Settings
            'manage settings',
            'manage roles',
            'manage permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission],
                ['guard_name' => 'web']
            );
        }

        // Create roles and assign permissions
        
        // Super Admin Role - has all permissions
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'super-admin'],
            ['guard_name' => 'web']
        );
        $superAdminRole->givePermissionTo(Permission::all());

        // Admin Role - has most permissions except user management and settings
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            ['guard_name' => 'web']
        );
        $adminRole->givePermissionTo([
            'view bookings',
            'create bookings',
            'edit bookings',
            'approve bookings',
            'cancel bookings',
            'view areas',
            'create areas',
            'edit areas',
            'view facilities',
            'create facilities',
            'edit facilities',
            'view galleries',
            'create galleries',
            'edit galleries',
            'view items',
            'create items',
            'edit items',
            'view outbounds',
            'create outbounds',
            'edit outbounds',
            'view prices',
            'create prices',
            'edit prices',
            'view payments',
            'process payments',
            'view reports',
            'export reports',
        ]);

        // Staff Role - limited permissions
        $staffRole = Role::firstOrCreate(
            ['name' => 'staff'],
            ['guard_name' => 'web']
        );
        $staffRole->givePermissionTo([
            'view bookings',
            'create bookings',
            'edit bookings',
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbounds',
            'view prices',
            'view payments',
        ]);

        // Customer/User Role - basic permissions
        $customerRole = Role::firstOrCreate(
            ['name' => 'customer'],
            ['guard_name' => 'web']
        );
        $customerRole->givePermissionTo([
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbounds',
            'view prices',
            'create bookings',
            'view bookings', // only their own bookings
            'view payments', // only their own payments
        ]);

        // User Role - alias for customer
        $userRole = Role::firstOrCreate(
            ['name' => 'user'],
            ['guard_name' => 'web']
        );
        $userRole->givePermissionTo([
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbounds',
            'view prices',
            'create bookings',
            'view bookings',
            'view payments',
        ]);

        // Guest Role - view only
        $guestRole = Role::firstOrCreate(
            ['name' => 'guest'],
            ['guard_name' => 'web']
        );
        $guestRole->givePermissionTo([
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbounds',
            'view prices',
        ]);

        // Create a default super admin user if doesn't exist
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@pineustilu.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
        $superAdmin->assignRole('super-admin');

        $this->command->info('Roles and permissions seeded successfully!');
    }
}