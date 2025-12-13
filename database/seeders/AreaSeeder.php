<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $areas = [
            [
                'name' => 'Pineus Tilu 1',
                'description' => 'Rasakan pengalaman menginap paling dekat dengan alam di Pineus Tilu 1, yang terletak tepat di tepi sungai. Sangat cocok bagi Anda yang ingin bersantai dengan suara aliran air yang menenangkan hanya beberapa langkah dari tempat Anda berada.',
                'slug' => 'pineus-tilu-1',
                'extra_charge_full' => 100000,
                'extra_charge_breakfast' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pineus Tilu 2',
                'slug' => 'pineus-tilu-2',
                'description' => 'Ideal untuk keluarga, Pineus Tilu 2 dilengkapi dengan kolam bermain anak, menciptakan area yang menyenangkan dan aman bagi anak-anak untuk bermain, sementara orang tua dapat bersantai menikmati alam.',
                'extra_charge_full' => 100000,
                'extra_charge_breakfast' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pineus Tilu 3 VIP',
                'slug' => 'pineus-tilu-3-vip',
                'description' => 'Nikmati kenyamanan eksklusif di Pineus Tilu 3 VIP, dengan fasilitas yang lebih lengkap untuk pengalaman glamping premium yang dikelilingi sejuknya hutan pinus.',
                'extra_charge_full' => 150000,
                'extra_charge_breakfast' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pineus Tilu 4',
                'slug' => 'pineus-tilu-4',
                'description' => 'Pineus Tilu 4 menawarkan lebih banyak tenda dan area yang lebih luas, menjadikannya pilihan tepat bagi kelompok atau komunitas yang ingin berkemah bersama dalam suasana yang meriah.',
                'extra_charge_full' => 100000,
                'extra_charge_breakfast' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pineus Tilu Cabin',
                'slug' => 'pineus-tilu-cabin',
                'description' => 'Pengalaman menginap yang lebih private dan nyaman di cabin eksklusif Pineus Tilu, cocok untuk pasangan atau keluarga kecil yang menginginkan privasi lebih.',
                'extra_charge_full' => 150000,
                'extra_charge_breakfast' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('areas')->insert($areas);
    }
}