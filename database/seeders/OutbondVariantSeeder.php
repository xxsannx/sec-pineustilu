<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutbondVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Find outbond IDs by slug to avoid hardcoding IDs (assumes OutbondSeeder ran first)
        $arungId = DB::table('outbonds')->where('slug', 'arung-jeram')->value('id');
        $atvId = DB::table('outbonds')->where('slug', 'fun-atv')->value('id');

        $variants = [];

        if ($arungId) {
            // Arung Jeram variants (capacity-based)
            $variants[] = [
                'outbond_id' => $arungId,
                'variant_type' => 'capacity_based',
                'variant_label' => '1 Perahu < 4 orang',
                'min_pax_per_unit' => 1,
                'max_pax_per_unit' => 3,
                'includes_documentation' => false,
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $variants[] = [
                'outbond_id' => $arungId,
                'variant_type' => 'capacity_based',
                'variant_label' => '1 Perahu 4 orang',
                'min_pax_per_unit' => 4,
                'max_pax_per_unit' => 4,
                'includes_documentation' => true,
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $variants[] = [
                'outbond_id' => $arungId,
                'variant_type' => 'capacity_based',
                'variant_label' => '1 Perahu 5 orang',
                'min_pax_per_unit' => 5,
                'max_pax_per_unit' => 5,
                'includes_documentation' => true,
                'is_active' => true,
                'sort_order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $variants[] = [
                'outbond_id' => $arungId,
                'variant_type' => 'capacity_based',
                'variant_label' => '1 Perahu 6 orang',
                'min_pax_per_unit' => 6,
                'max_pax_per_unit' => 6,
                'includes_documentation' => true,
                'is_active' => true,
                'sort_order' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($atvId) {
            // Fun ATV variants (single/double)
            $variants[] = [
                'outbond_id' => $atvId,
                'variant_type' => 'single',
                'variant_label' => 'Single (1 pax)',
                'min_pax_per_unit' => 1,
                'max_pax_per_unit' => 1,
                'includes_documentation' => false,
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $variants[] = [
                'outbond_id' => $atvId,
                'variant_type' => 'double',
                'variant_label' => 'Double (2 pax)',
                'min_pax_per_unit' => 2,
                'max_pax_per_unit' => 2,
                'includes_documentation' => false,
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if (!empty($variants)) {
            DB::table('outbond_variants')->insert($variants);
        }
    }
}