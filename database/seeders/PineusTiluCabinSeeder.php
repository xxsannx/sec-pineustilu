<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Area;

class PineusTiluCabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Pineus Tilu Cabin area
        $pineusTiluCabin = Area::where('name', 'Pineus Tilu Cabin')->first();

        if (!$pineusTiluCabin) {
            $this->command->error('Area Pineus Tilu Cabin not found. Please run AreaSeeder first.');
            return;
        }

        $facilities = [];

        // ========== FASILITAS PRIBADI ==========
        // Kamar
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'King bed 180cmx200cm',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '4 Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '3 Kasur Busa',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Kantong Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '3 Lampu Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Sofa dengan 2 bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '3 Meja Kopi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Karpet nyaman',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Gantungan baju berdiri',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Meja Konsol',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '4 Terminal Listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Dispenser + galon',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Smart TV',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Wifi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Teras
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Meja Makan Mewah',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '5 Kursi Rotan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '4 Kayu Gelondongan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Peralatan BBQ',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '2 Lampu Gantung',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Teras gantung dengan atap',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Pantri
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Meja Pantri',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Wastafel Bulat',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Kulkas',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Kompor Portable',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Wajan BBQ',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Pantri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Kamar Mandi
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Bak Mandi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Kipas Pembuangan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Lemari',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Shower Hangat',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '5 Sikat gigi + pasta gigi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Sampo',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Sabun',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Kamar Mandi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // ========== FASILITAS UMUM ==========
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Kamar mandi dengan pemanas air',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Air minum & Dispenser',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Meja umum berukuran besar',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Api unggun + pangganan api unggun',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => '10 Hammock',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTiluCabin->id,
            'name' => 'Panggangan BBQ',
            'type' => 'umum',
            'icon' => null,
            'description' => '(tidak termasuk arang, bahan makanan, dan perlengkapan lainnya)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('facilities')->insert($facilities);

        $this->command->info('Facilities for Pineus Tilu Cabin seeded successfully!');
    }
}