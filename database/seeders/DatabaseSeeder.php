<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call RolePermissionSeeder first to create roles and permissions
        $this->call([
            RolePermissionSeeder::class,
            AreaSeeder::class,
            AreaUnitSeeder::class,
            SeasonDateSeeder::class,
            TentPriceSeeder::class,
            ItemSeeder::class,
            ItemPriceSeeder::class,

            // Outbound data
            OutboundSeeder::class,
            OutboundVariantSeeder::class,
            OutboundVariantPriceSeeder::class,
            OutboundPriceSeeder::class,

            PineusTilu1Seeder::class,
            PineusTilu2Seeder::class,
            PineusTilu3Seeder::class,
            PineusTilu4Seeder::class,
            PineusTiluCabinSeeder::class,
        ]);

        // User::factory(10)->create();

        // Create test user with customer role
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $testUser->assignRole('customer');
    }
}
