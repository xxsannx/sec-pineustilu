<section class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100" aria-labelledby="daging-heading" role="region">
    <h3 id="daging-heading" class="text-[#017249] font-semibold mb-4 text-lg md:text-xl" data-aos="fade-down" data-aos-duration="700">Daging & Saus</h3>

    <ul class="space-y-3 divide-y divide-gray-100">
        @forelse($daging ?? [] as $item)
            <li class="py-3" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ 50 * $loop->index }}">
                <div class="flex items-start justify-between gap-4">
                    <div class="min-w-0">
                        <div class="text-base md:text-lg font-semibold text-gray-800 truncate">{{ $item['name'] }}</div>
                        @if(!empty($item['description']))
                            <div class="text-sm md:text-base text-gray-500 mt-1">{{ $item['description'] }}</div>
                        @endif
                    </div>

                    <div class="flex-shrink-0">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-50 text-[#017249] border border-green-100 font-semibold text-sm md:text-base">
                            {{ $item['price_display'] ?? '—' }}
                        </span>
                    </div>
                </div>
            </li>
        @empty
            <li class="py-6" data-aos="fade-up" data-aos-duration="700">
                <div class="text-center text-sm md:text-base text-gray-500">
                    Belum ada produk daging tersedia saat ini.
                </div>
            </li>
        @endforelse
    </ul>

    <div class="mt-6" data-aos="fade-up" data-aos-duration="700" >
        <h4 class="text-base md:text-lg font-semibold text-[#017249] mb-3">Saus & Pelengkap</h4>

        <ul class="space-y-3 divide-y divide-gray-100">
            @forelse($saus ?? [] as $item)
                <li class="py-3" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ 50 * $loop->index }}">
                    <div class="flex items-start justify-between gap-4">
                        <div class="min-w-0 text-base md:text-lg text-gray-800 truncate">
                            {{ $item['name'] }} @if(!empty($item['description'])) <span class="text-sm md:text-base text-gray-500">({{ $item['description'] }})</span> @endif
                        </div>
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-50 text-[#017249] border border-green-100 font-semibold text-sm md:text-base">{{ $item['price_display'] ?? '—' }}</span>
                        </div>
                    </div>
                </li>
            @empty
                <li class="py-6" data-aos="fade-up" data-aos-duration="700">
                    <div class="text-center text-sm md:text-base text-gray-500">
                        Belum ada saus atau pelengkap yang terdaftar.
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
</section>