<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            // ========================================
            // AMENITIES
            // ========================================
            [
                'name' => 'Amenities',
                'description' => 'Kasur busa, kantong tidur, sarapan',
                'type' => 'pax', // per orang
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Amenities VIP',
                'description' => 'Kasur busa, kantong tidur, sarapan, and alat mandi',
                'type' => 'pax', // per orang
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // SARAPAN & ALAT
            // ========================================
            [
                'name' => 'Sarapan Tambahan',
                'description' => 'Prasmanan - Makan sepuasnya',
                'type' => 'pax', // per orang
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Set Alat Mandi',
                'description' => '1 Handuk, 1 sikat gigi + pasta gigi',
                'type' => 'set', // per set
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Set Kompor Portabel',
                'description' => 'Termasuk 1 kompor, 1 gas, 1 wajan, 1 panci, and 1 capitan',
                'type' => 'set', // per set
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alat Makan',
                'description' => 'Termasuk 1 piring, dengan kertas nasi, 1 sendok plastik & garpu, 1 sumpit, 1 gelas kertas, dan 1 mangkuk kertas',
                'type' => 'set', // per set
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // BBQ FUEL
            // ========================================
            [
                'name' => 'Arang',
                'description' => 'Per kresek',
                'type' => 'kresek', // per kresek
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kayu Bakar',
                'description' => 'Per iket',
                'type' => 'iket', // per ikat
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // BEEF PRODUCTS
            // ========================================
            [
                'name' => 'Beef Sirloin',
                'description' => '4pcs/500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Beef Slice Short Plate',
                'description' => '500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Beef Slice Low Fat',
                'description' => '500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sosis Cocktail Original',
                'description' => 'Ukuran kecil 500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sosis Beef Frank Original',
                'description' => 'Ukuran sedang 500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Super Meatball',
                'description' => '35pcs - 39pcs/500g',
                'type' => 'pack', // per pack
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // ========================================
            // SAUCES
            // ========================================
            [
                'name' => 'BBQ Sauce',
                'description' => '1 botol 300ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bulgogi Sauce',
                'description' => '1 botol 300ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gochujang Sauce',
                'description' => '1 botol 300ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Blackpepper Teriyaki Sauce',
                'description' => '1 botol 300ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Garlic Teriyaki Sauce',
                'description' => '1 botol 300ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Korean BBQ Sauce',
                'description' => '1 botol 500ml',
                'type' => 'botol', // per botol
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('items')->insert($items);
    }
}