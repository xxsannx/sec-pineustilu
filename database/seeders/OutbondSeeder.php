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
        $outbonds = [
            // ========================================
            // ARUNG JERAM (River Rafting)
            // ========================================
            [
                'name' => 'Arung Jeram',
                'description' => 'Pemandu & penyelamat, Kotak pertolongan pertama/peralatan keselamatan, area bilas, asuransi, transportasi lokal & instruktur, dokumentasi (termasuk foto dan video). Durasi 5 Km (~90 menit). Diskon untuk tamu Pineus Tilu Rp 50.000/perahu.',
                'pax' => 0, // Harga per group/perahu, bukan per pax
                'min_participation' => 1, // Minimum 4 orang per perahu
                'max_participation' => 6, // Maximum 6 orang per perahu
                'duration' => 90, // 90 minutes
                'age' => 10, // Min. 10 tahun
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // FLYING FOX
            // ========================================
            [
                'name' => 'Flying Fox',
                'description' => 'Tali pengaman, termasuk instruktur, tiket, Kotak P3K/Peralatan keselamatan. Panjang 200 meter dengan ketinggian 12 meter.',
                'pax' => 1, // Per person
                'min_participation' => 4, // Min 4 pax
                'max_participation' => 100, // No strict max
                'duration' => 30, // ~30 minutes per session
                'age' => 6, // Min. 6 tahun
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // OFFROAD
            // ========================================
            [
                'name' => 'Offroad',
                'description' => 'Unit offroad Land Rover, termasuk pengemudi, instruktur, Kotak P3K/Peralatan keselamatan, asuransi, transportasi lokal dan tiket. Durasi 9 Km (~120 menit).',
                'pax' => 1, // Per unit (max 7 orang/unit)
                'min_participation' => 1, // Min 1 unit
                'max_participation' => 7, // Max 7 orang per unit
                'duration' => 120, // 120 minutes
                'age' => 4, // Min. 4 tahun
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // FUN ATV
            // ========================================
            [
                'name' => 'Fun ATV',
                'description' => 'Unit ATV, helm, instruktur, Kotak P3K/Peralatan keselamatan, asuransi & tiket. Durasi 4 Km (60 menit). Min. 13 tahun (sebagai pengemudi), Min. 5 tahun (sebagai penumpang).',
                'pax' => 1, // Price per person/ATV
                'min_participation' => 1, // Min 1 person
                'max_participation' => 2, // Max 2 orang per ATV (satu/dua)
                'duration' => 60, // 60 minutes
                'age' => 5, // Min. 5 tahun (sebagai penumpang)
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // PAINTBALL
            // ========================================
            [
                'name' => 'Paintball',
                'description' => 'Seragam, rompi pelindung, masker/goggle, penanda/senjata paintball, 30 peluru, termasuk instruktur, tiket, Kotak P3K/Peralatan keselamatan. Durasi sampai peluru habis.',
                'pax' => 1, // Per person
                'min_participation' => 10, // Min 10 pax
                'max_participation' => 50, // Max ~50 people
                'duration' => 120, // ~2 hours average
                'age' => 13, // Min. 13 tahun
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // TEAM BUILDING
            // ========================================
            [
                'name' => 'Team Building',
                'description' => 'Peralatan, termasuk instruktur, sound system & Kotak P3K/Peralatan keselamatan. Durasi ~120 menit.',
                'pax' => 1, // Per person
                'min_participation' => 10, // Min. 10 pax
                'max_participation' => 100, // No strict max
                'duration' => 120, // 120 minutes
                'age' => 11, // Min. 11 tahun
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('outbonds')->insert($outbonds);
    }
}