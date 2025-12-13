{{-- Tempat Parkir Section --}}
<section class="bg-white rounded-3xl shadow-xl border-2 border-gray-100 overflow-hidden" 
         data-aos="fade-up"
         data-aos-duration="800"
         aria-labelledby="parkir-heading">
    <div class="p-6 sm:p-8 md:p-10">
        {{-- Section Header --}}
        <header class="text-center mb-8 md:mb-12">
            <h2 id="parkir-heading" 
                class="text-3xl md:text-4xl font-bold text-[#017249] mb-3" 
                style="font-family: 'Bizon', sans-serif;">
                TEMPAT PARKIR
            </h2>
        </header>

        @php
            // Data tarif parkir - satu sumber kebenaran
            $parkingRates = [
                'menginap' => [
                    'title' => 'Parkir Menginap',
                    'unit' => 'malam',
                    'items' => [
                        ['vehicle' => 'Mobil & Minibus', 'price' => 'Rp 40.000'],
                        ['vehicle' => 'Bus Sedang', 'price' => 'Rp 120.000'],
                        ['vehicle' => 'Bus Besar', 'price' => 'Rp 160.000'],
                        ['vehicle' => 'Sepeda Motor', 'price' => 'Rp 10.000'],
                        ['vehicle' => 'Sepeda', 'price' => 'Rp 2.000'],
                    ],
                ],
                'transit' => [
                    'title' => 'Parkir Transit',
                    'unit' => 'hari',
                    'items' => [
                        ['vehicle' => 'Mobil & Minibus', 'price' => 'Rp 10.000'],
                        ['vehicle' => 'Bus Sedang', 'price' => 'Rp 30.000'],
                        ['vehicle' => 'Bus Besar', 'price' => 'Rp 50.000'],
                        ['vehicle' => 'Sepeda Motor', 'price' => 'Rp 5.000'],
                        ['vehicle' => 'Sepeda', 'price' => 'Rp 2.000'],
                    ],
                ],
            ];
        @endphp

        {{-- Content Layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8"
             style="font-family: 'Poppins', sans-serif;">
            
            {{-- Image & Notes - Left Side --}}
            <div data-aos="fade-right" data-aos-duration="800">
                <div class="flex flex-col h-full gap-6">
                    {{-- Image --}}
                    <div class="rounded-2xl overflow-hidden shadow-lg border-2 border-gray-100 bg-gradient-to-br from-gray-100 to-gray-200 flex-1">
                        <div class="aspect-[4/3] w-full flex items-center justify-center">
                            <span class="text-gray-400 text-lg">Image Placeholder</span>
                        </div>
                    </div>

                    {{-- Catatan/Notes --}}
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-4 border-2 border-amber-200">
                        <p class="flex items-start gap-3 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>
                                <strong class="text-amber-900">Catatan:</strong> Biaya parkir dikelola oleh pengelola parkir terpisah, bukan oleh Pineus Tilu. Pembayaran harus dilakukan langsung di lokasi kepada pihak pengelola parkir.
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Parking Info - Right Side --}}
            <div data-aos="fade-left" data-aos-duration="800">
                <div class="flex flex-col h-full gap-6">
                    {{-- Parkir Menginap --}}
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border-2 border-gray-100 flex-1">
                        <h3 class="text-xl md:text-2xl font-bold text-[#017249] mb-5 flex items-center gap-2">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.5 3C8.257 3 4 7.03 4 12c0 4.97 4.257 9 9.5 9 5.244 0 9.5-4.03 9.5-9 0-4.97-4.256-9-9.5-9zm2.334 9.27h-1.417v4.482h-1.834V12.27H11.17V10.73h4.664v1.54z"/>
                            </svg>
                            {{ $parkingRates['menginap']['title'] }}
                        </h3>
                        <ul class="space-y-4">
                            @foreach($parkingRates['menginap']['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-gray-700">{{ $item['vehicle'] }}</span>
                                        <span class="font-bold text-[#017249]">
                                            {{ $item['price'] }}
                                            <span class="text-sm font-normal text-gray-600">/{{ $parkingRates['menginap']['unit'] }}</span>
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Parkir Transit --}}
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border-2 border-gray-100">
                        <h3 class="text-xl md:text-2xl font-bold text-[#017249] mb-5 flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $parkingRates['transit']['title'] }}
                        </h3>
                        <ul class="space-y-4">
                            @foreach($parkingRates['transit']['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-gray-700">{{ $item['vehicle'] }}</span>
                                        <span class="font-bold text-[#017249]">
                                            {{ $item['price'] }}
                                            <span class="text-sm font-normal text-gray-600">/{{ $parkingRates['transit']['unit'] }}</span>
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
