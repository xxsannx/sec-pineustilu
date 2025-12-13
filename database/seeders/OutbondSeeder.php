<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutbondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $outbonds = [
            [
                'name' => 'Arung Jeram',
                'slug' => 'arung-jeram',
                'description' => 'Pemandu & penyelamat, Kotak pertolongan pertama/peralatan keselamatan, area bilas, asuransi, transportasi lokal & instruktur, dokumentasi (foto dan video). Durasi 5 Km (~90 menit).',
                'pricing_type' => 'per_unit',
                'unit_name' => 'perahu',
                'min_participants' => 1, // min booking unit (perahu)
                'max_participants' => null, // total participants not strictly limited here
                'min_age' => 10,
                'duration' => 90,
                'distance' => 5.00,
                'has_variants' => true,
                'allows_documentation_addon' => true,
                'requires_transportation' => false, // special handling: no general pickup fee here
                'has_camping_package' => true,
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Flying Fox',
                'slug' => 'flying-fox',
                'description' => 'Tali pengaman, termasuk instruktur, tiket, Kotak P3K/Peralatan keselamatan. Panjang 200 meter dengan ketinggian 12 meter.',
                'pricing_type' => 'per_pax',
                'unit_name' => null,
                'min_participants' => 4,
                'max_participants' => null,
                'min_age' => 6,
                'duration' => 30,
                'distance' => 0.20,
                'has_variants' => false,
                'allows_documentation_addon' => false,
                'requires_transportation' => true,
                'has_camping_package' => false,
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Offroad',
                'slug' => 'offroad',
                'description' => 'Unit offroad Land Rover, termasuk pengemudi, instruktur, Kotak P3K/Peralatan keselamatan, asuransi, transportasi lokal dan tiket. Durasi 9 Km (~120 menit).',
                'pricing_type' => 'per_unit',
                'unit_name' => 'mobil',
                'min_participants' => 1,
                'max_participants' => 7, // per unit
                'min_age' => 4,
                'duration' => 120,
                'distance' => 9.00,
                'has_variants' => false,
                'allows_documentation_addon' => false,
                'requires_transportation' => false, // Offroad excluded from general pickup fee
                'has_camping_package' => false,
                'is_active' => true,
                'sort_order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Fun ATV',
                'slug' => 'fun-atv',
                'description' => 'Unit ATV, helm, instruktur, Kotak P3K/Peralatan keselamatan, asuransi & tiket. Durasi 4 Km (60 menit).',
                'pricing_type' => 'per_pax',
                'unit_name' => 'atv',
                'min_participants' => 1,
                'max_participants' => 2, // per ATV
                'min_age' => 5,
                'duration' => 60,
                'distance' => 4.00,
                'has_variants' => true, // single/double
                'allows_documentation_addon' => false,
                'requires_transportation' => true,
                'has_camping_package' => false,
                'is_active' => true,
                'sort_order' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Paintball',
                'slug' => 'paintball',
                'description' => 'Seragam, rompi pelindung, masker/goggle, penanda/senjata paintball, 30 peluru, termasuk instruktur, tiket, Kotak P3K/Peralatan keselamatan.',
                'pricing_type' => 'per_pax',
                'unit_name' => null,
                'min_participants' => 10,
                'max_participants' => 70,
                'min_age' => 13,
                'duration' => 120,
                'distance' => null,
                'has_variants' => false,
                'allows_documentation_addon' => false,
                'requires_transportation' => true,
                'has_camping_package' => false,
                'is_active' => true,
                'sort_order' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Team Building',
                'slug' => 'team-building',
                'description' => 'Peralatan, termasuk instruktur, sound system & Kotak P3K/Peralatan keselamatan.',
                'pricing_type' => 'per_pax',
                'unit_name' => null,
                'min_participants' => 5,
                'max_participants' => 100,
                'min_age' => 11,
                'duration' => 120,
                'distance' => null,
                'has_variants' => false,
                'allows_documentation_addon' => false,
                'requires_transportation' => true,
                'has_camping_package' => false,
                'is_active' => true,
                'sort_order' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('outbonds')->insert($outbonds);
    }
}