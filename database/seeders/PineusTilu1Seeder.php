<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Area;
use Illuminate\Support\Str;

class PineusTilu1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get areas
        $pineusTilu1 = Area::where('name', 'Pineus Tilu 1')->first();

        if (!$pineusTilu1) {
            $this->command->error('Area Pineus Tilu 1 not found. Please run AreaSeeder first.');
            return;
        }

        $facilities = [];

        // Fasilitas Pribadi
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '4 Kasur Busa',
            'type' => 'pribadi',
            'icon' => null,
            'description' => 'Fasilitas untuk 4 orang termasuk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '4 Bantal',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '4 Kantong Tidur',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '4 Sarapan',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '4 Bantal duduk',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Meja kopi',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Terminal listrik',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Lampu dalam & luar',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Hammock jaring (Deck 1, 2)',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Meja makan pribadi dengan 4 bangku (Deck 1, 8 & 9)',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Meja makan pribadi dengan 4 bantal duduk (Deck 2, 3, 4, 5, 6 & 7)',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Tikar bambu',
            'type' => 'pribadi',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        
        // Fasilitas Umum
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Kamar mandi dengan pemanas air',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Air minum & Dispenser',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Meja umum berukuran besar',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Api unggun + pangganan api unggun',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => '10 Hammock',
            'type' => 'umum',
            'icon' => null,
            'description' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $facilities[] = [
            'area_id' => $pineusTilu1->id,
            'name' => 'Panggangan BBQ',
            'type' => 'umum',
            'icon' => null,
            'description' => '(tidak termasuk arang, bahan makanan, dan perlengkapan lainnya)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Try to auto-detect icon files in public/images/icons/area using flexible matching.
        // Strategies tried (in order):
        // 1) exact slug of full name
        // 2) slug after removing parenthesis content
        // 3) slug after removing digits
        // 4) slug after removing digits & parenthesis
        // 5) fallback: search filenames that contain one of the important keywords
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

            // full slug
            $candidates[] = Str::slug($name);
            // remove parenthesis content
            $noParen = preg_replace('/\s*\([^)]*\)/', '', $name);
            $candidates[] = Str::slug($noParen);
            // remove digits
            $noDigits = preg_replace('/\b\d+\b/', '', $name);
            $candidates[] = Str::slug($noDigits);
            // remove digits + parenthesis
            $candidates[] = Str::slug(preg_replace('/\s*\([^)]*\)/', '', $noDigits));

            $found = null;
            // try slug candidates
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

            // fallback: keyword match (pick first available file that contains a keyword)
            if (!$found && !empty($availableFiles)) {
                // build keywords (alphanumeric words length>2)
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

            $fac['icon'] = $found; // null if not found
        }
        unset($fac);

        DB::table('facilities')->insert($facilities);

        $this->command->info('Facilities for Pineus Tilu 1 & 2 seeded successfully!');
    }
}