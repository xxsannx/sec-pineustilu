<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Area;
use Illuminate\Support\Str;

class PineusTilu2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get areas
        $pineusTilu2 = Area::where('name', 'Pineus Tilu 2')->first();

        if (!$pineusTilu2) {
            $this->command->error('Area Pineus Tilu 2 not found. Please run AreaSeeder first.');
            return;
        }

        $facilities = [];

        // Fasilitas Pribadi
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => '4 Kasur Busa',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => '4 Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => '4 Kantong Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => '4 Sarapan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => '4 Bantal duduk',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Meja makan pribadi dengan 4 bantal duduk',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Terminal listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Lampu dalam & luar',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Hammock jaring',
            'type' => 'pribadi',
            'icon' => null,
            'description' => '(Deck 7, 8 & 9)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Meja kopi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Tikar bambu',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        
        // Fasilitas Umum
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Kamar mandi dengan pemanas air',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Air minum & Dispenser',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Meja umum berukuran besar',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Api unggun + pangganan api unggun',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Kolam bermain anak',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu2->id,
            'name' => 'Panggangan BBQ',
            'type' => 'umum',
            'icon' => null,
            'description' => '(tidak termasuk arang, bahan makanan, dan perlengkapan lainnya)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Try to auto-detect icon files in public/images/icons/area using flexible matching.
        $extensions = ['svg', 'png', 'webp', 'jpg', 'jpeg'];
        $iconDir = public_path('images/icons/area');
        $availableFiles = [];
        if (is_dir($iconDir)) {
            foreach (scandir($iconDir) as $f) {
                if (in_array($f, ['.', '..'])) continue;
                $availableFiles[] = $f;
            }
        }

        foreach ($facilities as &$fac) {
            if (!empty($fac['icon'])) continue;

            $name = $fac['name'];
            $candidates = [];
            $candidates[] = Str::slug($name);
            $noParen = preg_replace('/\s*\([^)]*\)/', '', $name);
            $candidates[] = Str::slug($noParen);
            $noDigits = preg_replace('/\b\d+\b/', '', $name);
            $candidates[] = Str::slug($noDigits);
            $candidates[] = Str::slug(preg_replace('/\s*\([^)]*\)/', '', $noDigits));

            $found = null;
            foreach ($candidates as $cand) {
                $cand = trim($cand, '-');
                if ($cand === '') continue;
                foreach ($extensions as $ext) {
                    $file = $cand . '.' . $ext;
                    if (in_array($file, $availableFiles)) {
                        $found = 'images/icons/area/' . $file;
                        break 2;
                    }
                }
            }

            if (!$found && !empty($availableFiles)) {
                $clean = preg_replace('/[^A-Za-z0-9 ]/', ' ', $name);
                $words = array_filter(array_map('trim', explode(' ', $clean)), function ($w) { return strlen($w) > 2; });
                foreach ($availableFiles as $file) {
                    $lower = strtolower($file);
                    foreach ($words as $w) {
                        if (strpos($lower, strtolower($w)) !== false) {
                            $found = 'images/icons/area/' . $file;
                            break 2;
                        }
                    }
                }
            }

            $fac['icon'] = $found;
        }
        unset($fac);

        DB::table('facilities')->insert($facilities);

        $this->command->info('Facilities for Pineus Tilu 2 seeded successfully!');
    }
}