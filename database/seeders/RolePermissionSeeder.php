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
            'view outbonds',
            'create outbonds',
            'edit outbonds',
            'delete outbonds',
            
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
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        
        // Super Admin Role - has all permissions
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $superAdminRole->givePermissionTo(Permission::all());

        // Admin Role - has most permissions except user management and settings
        $adminRole = Role::create(['name' => 'admin']);
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
            'view outbonds',
            'create outbonds',
            'edit outbonds',
            'view prices',
            'create prices',
            'edit prices',
            'view payments',
            'process payments',
            'view reports',
            'export reports',
        ]);

        // Staff Role - limited permissions
        $staffRole = Role::create(['name' => 'staff']);
        $staffRole->givePermissionTo([
            'view bookings',
            'create bookings',
            'edit bookings',
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbonds',
            'view prices',
            'view payments',
        ]);

        // Customer Role - basic permissions
        $customerRole = Role::create(['name' => 'customer']);
        $customerRole->givePermissionTo([
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbonds',
            'view prices',
            'create bookings',
            'view bookings', // only their own bookings
            'view payments', // only their own payments
        ]);

        // Guest Role - view only
        $guestRole = Role::create(['name' => 'guest']);
        $guestRole->givePermissionTo([
            'view areas',
            'view facilities',
            'view galleries',
            'view items',
            'view outbonds',
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
