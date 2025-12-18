<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(): View
    {
        // cache menyimpan array hasil mapping (lebih aman untuk serialisasi)
        $rows = Cache::remember('items_with_prices_v1', 300, function () {
            return Item::with('prices')->get()->map(function (Item $item) {
                $latest = $item->prices->sortByDesc('created_at')->first();
                $rawPrice = $latest ? (is_numeric($latest->price) ? (float) $latest->price : null) : null;

                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'type' => $item->type,
                    'price' => $rawPrice,
                    'price_display' => $this->formatPrice($rawPrice, $item->type),
                    'group' => $this->determineGroup($item),
                ];
            })->toArray();
        });

        $collection = collect($rows)->groupBy('group');

        $perlengkapan = $this->sortByName($collection->get('perlengkapan', []));
        $daging       = $this->sortByName($collection->get('daging', []));
        $saus         = $this->sortByName($collection->get('saus', []));

        return view('barang-tambahan', compact('perlengkapan', 'daging', 'saus'));
    }

    private function formatPrice(?float $amount, ?string $type = null): ?string
    {
        if ($amount === null) {
            return null;
        }

        // Jika DB menyimpan dalam satuan rupiah mis. 98000
        if ($amount >= 1000 && fmod($amount, 1000) === 0.0) {
            $display = intval($amount / 1000) . 'k';
        } else {
            // tampilkan tanpa pecahan jika bulat, atau 2 desimal jika perlu
            $display = ($amount == intval($amount)) ? number_format($amount, 0, ',', '.') : number_format($amount, 2, ',', '.');
        }

        $unitMap = [
            'pax' => ' / pax',
            'set' => ' / set',
            'kresek' => ' / kresek',
            'iket' => ' / iket',
            'pack' => '',
            'botol' => '',
        ];

        return $display . ($unitMap[$type] ?? '');
    }

    private function determineGroup(Item $item): string
    {
        // preferensi grouping berbasis tipe
        $perlengkapanTypes = ['pax', 'set', 'kresek', 'iket'];
        $dagingTypes = ['pack'];
        $sausTypes = ['botol'];

        if ($item->type && in_array($item->type, $perlengkapanTypes, true)) {
            return 'perlengkapan';
        }

        if ($item->type && in_array($item->type, $dagingTypes, true)) {
            return 'daging';
        }

        if ($item->type && in_array($item->type, $sausTypes, true)) {
            return 'saus';
        }

        // fallback berdasarkan nama (case-insensitive)
        $name = strtolower($item->name);
        if (Str::contains($name, ['saus', 'sauce', 'bbq'])) {
            return 'saus';
        }
        if (Str::contains($name, ['beef', 'sosis', 'meat'])) {
            return 'daging';
        }

        return 'perlengkapan';
    }

    private function sortByName($items): array
    {
        return collect($items)
            ->sortBy(fn($r) => strtolower($r['name'] ?? ''))
            ->values()
            ->all();
    }
}
