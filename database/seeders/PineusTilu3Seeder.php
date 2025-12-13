<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Area;

class PineusTilu3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Pineus Tilu 3 VIP area
        $pineusTilu3 = Area::where('name', 'Pineus Tilu 3 VIP')->first();

        if (!$pineusTilu3) {
            $this->command->error('Area Pineus Tilu 3 VIP not found. Please run AreaSeeder first.');
            return;
        }

        $facilities = [];

        // ========== FASILITAS PRIBADI ==========
        // Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5)
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Kasur Busa',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Handuk',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Sarapan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Kantong Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Sikat gigi dengan pasta gigi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 6 orang untuk Tenda 6.3 (Deck 1, 2, 3, 4, 5) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9)
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Kasur Busa',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Handuk',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Sarapan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Kantong Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Sikat gigi dengan pasta gigi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9) termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Teras Dek
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '2 Ayunan Hammock',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Hammock Jaring',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '6 Kursi Rotan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Kulkas',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Terminal Listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Kursi Ayun',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Lampu',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tempat Sampah',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Air Minum & Dispenser',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Meja kayu solid panjang & mewah (80-85 cm x 2,5 m)',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Panggangan BBQ',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Teras Dek (termasuk arang dan kipas)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Dek & Tenda
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tenda Keluarga 6.3',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda (Deck 1, 2, 3, 4, 5)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tenda Keluarga 5.2',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda (Deck 6, 7, 8, 9)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Kursi Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '2 Beanbag',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Meja Kopi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Gantungan Pakaian berdiri',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '2 Lampu Meja',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '1 Terminal Listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tikar dalam dan luar ruangan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tempat Sampah',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => '5 Kursi Kayu',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Karpet',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Meja Bar',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Dek & Tenda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // ========== FASILITAS UMUM ==========
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Bangku',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Tempat Sampah',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Kursi Kayu',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Lampu luar ruangan',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Api Unggun',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Meja Panjang 5m',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Patung Kayu',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Wastafel',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'Wifi',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu3->id,
            'name' => 'CCTV',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('facilities')->insert($facilities);

        $this->command->info('Facilities for Pineus Tilu 3 VIP seeded successfully!');
    }
}