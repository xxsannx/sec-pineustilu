<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AreaUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [];

        // ========================================
        // PINEUS TILU 1 - 9 Decks
        // ========================================
        // Deck 1, 2, 8, 9 (Tenda 4.2)
        foreach ([1, 2, 8, 9] as $deckNumber) {
            $units[] = [
                'area_id' => 1, // Pineus Tilu 1
                'name' => "Deck {$deckNumber}",
                'default_people' => 4,
                'max_people' => 6,
                'tent_type' => 'Tenda 4.2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        
        // Deck 3, 4, 5, 6, 7 (Tenda 4.0)
        foreach ([3, 4, 5, 6, 7] as $deckNumber) {
            $units[] = [
                'area_id' => 1,
                'name' => "Deck {$deckNumber}",
                'default_people' => 4,
                'max_people' => 6,
                'tent_type' => 'Tenda 4.0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 2 - 9 Decks
        // ========================================
        // Deck 1, 2, 3, 4, 5, 6 (Tenda 4.0)
        foreach ([1, 2, 3, 4, 5, 6] as $deckNumber) {
            $units[] = [
                'area_id' => 2, // Pineus Tilu 2
                'name' => "Deck {$deckNumber}",
                'default_people' => 4,
                'max_people' => 6,
                'tent_type' => 'Tenda 4.0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        
        // Deck 7, 8, 9 (Tenda 4.2)
        foreach ([7, 8, 9] as $deckNumber) {
            $units[] = [
                'area_id' => 2,
                'name' => "Deck {$deckNumber}",
                'default_people' => 4,
                'max_people' => 6,
                'tent_type' => 'Tenda 4.2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 3 VIP - 9 Decks
        // ========================================
        // Deck 1, 2, 3, 4, 5 (Tenda 6.3)
        foreach ([1, 2, 3, 4, 5] as $deckNumber) {
            $units[] = [
                'area_id' => 3, // Pineus Tilu 3 VIP
                'name' => "Deck {$deckNumber}",
                'default_people' => 6,
                'max_people' => 10,
                'tent_type' => 'Tenda 6.3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        
        // Deck 6, 7, 8, 9 (Tenda 5.2)
        foreach ([6, 7, 8, 9] as $deckNumber) {
            $units[] = [
                'area_id' => 3,
                'name' => "Deck {$deckNumber}",
                'default_people' => 5,
                'max_people' => 9,
                'tent_type' => 'Tenda 5.2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 4 - 21 Plots (Plot = Deck)
        // ========================================
        for ($plotNumber = 1; $plotNumber <= 21; $plotNumber++) {
            $units[] = [
                'area_id' => 4, // Pineus Tilu 4
                'name' => "Plot {$plotNumber}",
                'default_people' => 4,
                'max_people' => 6,
                'tent_type' => 'Tenda 4.2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU CABIN - 1 Unit
        // ========================================
        $units[] = [
            'area_id' => 5, // Pineus Tilu Cabin
            'name' => 'Cabin',
            'default_people' => 2,
            'max_people' => 5,
            'tent_type' => 'Cabin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('area_units')->insert($units);
    }
}