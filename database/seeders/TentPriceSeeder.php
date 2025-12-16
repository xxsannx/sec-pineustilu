<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TentPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [];

        // Get season IDs
        $weekdaySeasonId = DB::table('season_dates')->where('season_type', 'weekday')->first()->id;
        $weekendSeasonId = DB::table('season_dates')->where('season_type', 'weekend')->first()->id;
        $highSeasonId = DB::table('season_dates')->where('season_type', 'high_season')->first()->id;

        // ========================================
        // PINEUS TILU 1 PRICES
        // ========================================
        // Get unit IDs for Pineus Tilu 1
        $pt1_deck_42 = DB::table('area_units')
            ->where('area_id', 1)
            ->whereIn('name', ['Deck 1', 'Deck 2', 'Deck 8', 'Deck 9'])
            ->pluck('id');
        
        $pt1_deck_40 = DB::table('area_units')
            ->where('area_id', 1)
            ->whereIn('name', ['Deck 3', 'Deck 4', 'Deck 5', 'Deck 6', 'Deck 7'])
            ->pluck('id');

        // Weekday Prices
        foreach ($pt1_deck_42 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 750000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt1_deck_40 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 650000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Weekend Prices
        foreach ($pt1_deck_42 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 950000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt1_deck_40 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 900000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // High Season Prices (all decks same price)
        $pt1_all_decks = $pt1_deck_42->merge($pt1_deck_40);
        foreach ($pt1_all_decks as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $highSeasonId,
                'price' => 1100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 2 PRICES
        // ========================================
        $pt2_deck_40 = DB::table('area_units')
            ->where('area_id', 2)
            ->whereIn('name', ['Deck 1', 'Deck 2', 'Deck 3', 'Deck 4', 'Deck 5', 'Deck 6'])
            ->pluck('id');
        
        $pt2_deck_42 = DB::table('area_units')
            ->where('area_id', 2)
            ->whereIn('name', ['Deck 7', 'Deck 8', 'Deck 9'])
            ->pluck('id');

        // Weekday Prices
        foreach ($pt2_deck_40 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 650000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt2_deck_42 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 750000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Weekend Prices
        foreach ($pt2_deck_40 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 900000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt2_deck_42 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 950000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // High Season Prices
        $pt2_all_decks = $pt2_deck_40->merge($pt2_deck_42);
        foreach ($pt2_all_decks as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $highSeasonId,
                'price' => 1100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 3 VIP PRICES
        // ========================================
        $pt3_deck_63 = DB::table('area_units')
            ->where('area_id', 3)
            ->whereIn('name', ['Deck 1', 'Deck 2', 'Deck 3', 'Deck 4', 'Deck 5'])
            ->pluck('id');
        
        $pt3_deck_52 = DB::table('area_units')
            ->where('area_id', 3)
            ->whereIn('name', ['Deck 6', 'Deck 7', 'Deck 8', 'Deck 9'])
            ->pluck('id');

        // Weekday Prices
        foreach ($pt3_deck_63 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 1600000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt3_deck_52 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 1500000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Weekend Prices
        foreach ($pt3_deck_63 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 2000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt3_deck_52 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 1900000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // High Season Prices
        foreach ($pt3_deck_63 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $highSeasonId,
                'price' => 2300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        foreach ($pt3_deck_52 as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $highSeasonId,
                'price' => 2200000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU 4 PRICES
        // ========================================
        $pt4_all_plots = DB::table('area_units')
            ->where('area_id', 4)
            ->pluck('id');

        // Weekday Prices
        foreach ($pt4_all_plots as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekdaySeasonId,
                'price' => 750000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Weekend Prices
        foreach ($pt4_all_plots as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $weekendSeasonId,
                'price' => 950000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // High Season Prices
        foreach ($pt4_all_plots as $unitId) {
            $prices[] = [
                'unit_id' => $unitId,
                'item_id' => null,
                'outbound_id' => null,
                'season_id' => $highSeasonId,
                'price' => 1100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // ========================================
        // PINEUS TILU CABIN PRICES
        // ========================================
        $cabin_id = DB::table('area_units')
            ->where('area_id', 5)
            ->where('name', 'Cabin')
            ->first()->id;

        // Weekday Price
        $prices[] = [
            'unit_id' => $cabin_id,
            'item_id' => null,
            'outbound_id' => null,
            'season_id' => $weekdaySeasonId,
            'price' => 1500000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Weekend Price
        $prices[] = [
            'unit_id' => $cabin_id,
            'item_id' => null,
            'outbound_id' => null,
            'season_id' => $weekendSeasonId,
            'price' => 1900000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // High Season Price
        $prices[] = [
            'unit_id' => $cabin_id,
            'item_id' => null,
            'outbound_id' => null,
            'season_id' => $highSeasonId,
            'price' => 2200000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Insert all prices
        DB::table('prices')->insert($prices);
    }
}