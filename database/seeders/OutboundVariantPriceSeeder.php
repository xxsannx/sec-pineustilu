<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutboundVariantPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Look up variant IDs by label (assumes outboundVariantSeeder ran first)
        $v_ars_lt4 = DB::table('outbound_variants')->where('variant_label', '1 Perahu < 4 orang')->value('id');
        $v_ars_4 = DB::table('outbound_variants')->where('variant_label', '1 Perahu 4 orang')->value('id');
        $v_ars_5 = DB::table('outbound_variants')->where('variant_label', '1 Perahu 5 orang')->value('id');
        $v_ars_6 = DB::table('outbound_variants')->where('variant_label', '1 Perahu 6 orang')->value('id');

        $v_atv_single = DB::table('outbound_variants')->where('variant_label', 'Single (1 pax)')->value('id');
        $v_atv_double = DB::table('outbound_variants')->where('variant_label', 'Double (2 pax)')->value('id');

        $rows = [];

        if ($v_ars_lt4) {
            $rows[] = [
                'outbound_variant_id' => $v_ars_lt4,
                'price' => 550000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($v_ars_4) {
            $rows[] = [
                'outbound_variant_id' => $v_ars_4,
                'price' => 700000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($v_ars_5) {
            $rows[] = [
                'outbound_variant_id' => $v_ars_5,
                'price' => 850000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($v_ars_6) {
            $rows[] = [
                'outbound_variant_id' => $v_ars_6,
                'price' => 950000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($v_atv_single) {
            $rows[] = [
                'outbound_variant_id' => $v_atv_single,
                'price' => 175000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if ($v_atv_double) {
            $rows[] = [
                'outbound_variant_id' => $v_atv_double,
                'price' => 250000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if (!empty($rows)) {
            DB::table('prices')->insert($rows);
        }
    }
}