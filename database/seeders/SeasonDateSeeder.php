<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeasonDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            // Weekday Season (Minggu - Kamis)
            [
                'season_type' => 'weekday',
                'start_date' => '2025-01-01',
                'end_date' => '2026-12-31',
                'description' => 'Minggu - Kamis (Harga Normal)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Weekend Season (Jumat - Sabtu)
            [
                'season_type' => 'weekend',
                'start_date' => '2025-01-01',
                'end_date' => '2026-12-31',
                'description' => 'Jumat - Sabtu (Harga Weekend)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // HIGH SEASON 2025 (Libur Nasional Indonesia)
            // ========================================
            
            // Natal & Tahun Baru (Extended)
            [
                'season_type' => 'high_season',
                'start_date' => '2025-12-20',
                'end_date' => '2026-01-05',
                'description' => 'Libur Natal & Tahun Baru (+ Cuti Bersama)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Hari Raya Natal
            [
                'season_type' => 'high_season',
                'start_date' => '2025-12-25',
                'end_date' => '2025-12-25',
                'description' => 'Hari Raya Natal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // HIGH SEASON 2026 (Preview untuk booking)
            // ========================================
            
            // Tahun Baru 2026
            [
                'season_type' => 'high_season',
                'start_date' => '2026-01-01',
                'end_date' => '2026-01-01',
                'description' => 'Tahun Baru Masehi 2026',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Imlek 2026
            [
                'season_type' => 'high_season',
                'start_date' => '2026-02-17',
                'end_date' => '2026-02-17',
                'description' => 'Tahun Baru Imlek 2577 Kongzili',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Hari Raya Idul Fitri 1447 H (Estimated)
            [
                'season_type' => 'high_season',
                'start_date' => '2026-03-20',
                'end_date' => '2026-03-28',
                'description' => 'Hari Raya Idul Fitri 1447 H (+ Cuti Bersama)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('season_dates')->insert($seasons);
    }
}