<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutbondPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Look up outbond IDs by slug (assumes OutbondSeeder ran first)
        $arungId = DB::table('outbonds')->where('slug', 'arung-jeram')->value('id');
        $flyingId = DB::table('outbonds')->where('slug', 'flying-fox')->value('id');
        $offroadId = DB::table('outbonds')->where('slug', 'offroad')->value('id');
        $paintballId = DB::table('outbonds')->where('slug', 'paintball')->value('id');
        $teamId = DB::table('outbonds')->where('slug', 'team-building')->value('id');

        $rows = [];

        // Activities without variants: store as outbond_id
        if ($flyingId) {
            $rows[] = [
                'outbond_id' => $flyingId,
                'price' => 35000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($offroadId) {
            $rows[] = [
                'outbond_id' => $offroadId,
                'price' => 1500000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($paintballId) {
            $rows[] = [
                'outbond_id' => $paintballId,
                'price' => 80000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($teamId) {
            $rows[] = [
                'outbond_id' => $teamId,
                'price' => 175000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        // Documentation add-on for Arung Jeram: stored as a price row linked to outbond_id (variant null).
        // Alternative: create an outbond_variant for addon; here we add as a separate price row for simplicity.
        if ($arungId) {
            $rows[] = [
                'outbond_id' => $arungId,
                'price' => 100000, // dokumentasi tambahan per perahu
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        // Global transportation price (outbond_id = NULL) to represent per-mobil transport fee
        $rows[] = [
            'outbond_id' => null,
            'price' => 200000, // Rp 200.000 per mobil
            'created_at' => $now,
            'updated_at' => $now,
        ];

        if (!empty($rows)) {
            DB::table('prices')->insert($rows);
        }
    }
}