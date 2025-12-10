{{-- Informasi Asuransi Section --}}
<section class="bg-white rounded-3xl shadow-xl border-2 border-gray-100 overflow-hidden" 
         data-aos="fade-up" 
         data-aos-duration="800"
         aria-labelledby="asuransi-heading">
    <div class="p-6 sm:p-8 md:p-10">
        {{-- Section Header --}}
        <header class="text-center mb-8 md:mb-12">
            <h2 id="asuransi-heading" 
                class="text-3xl md:text-4xl font-bold text-[#017249] mb-3" 
                style="font-family: 'Bizon', sans-serif;">
                INFORMASI ASURANSI
            </h2>
            <h3 class="text-xl md:text-2xl font-bold text-[#017249]" 
                style="font-family: 'Bizon', sans-serif;">
                PERNYATAAN PERSETUJUAN
            </h3>
        </header>

        @php
            // Data asuransi - single source of truth
            $insurance = [
                'provider' => 'ASURANSI SYARIAH AMANAH GITHA',
                'policyNumber' => '809000050100188',
                'coverage' => [
                    [
                        'description' => 'Meninggal dunia karena kecelakaan (dalam 24 jam)',
                        'amount' => 'Rp 15.000.000',
                    ],
                    [
                        'description' => 'Meninggal dunia di lokasi wisata bukan akibat kecelakaan',
                        'amount' => 'Rp 3.000.000',
                    ],
                    [
                        'description' => 'Cacat tetap sesuai presentase (%)',
                        'note' => 'sesuai syarat umum polis',
                        'amount' => 'maksimum Rp 20.000.000',
                    ],
                    [
                        'description' => 'Biaya perawatan/pengobatan akibat kecelakaan (maksimal)',
                        'amount' => 'Rp 3.000.000',
                    ],
                ],
            ];
        @endphp

        {{-- Content --}}
        <div class="max-w-4xl mx-auto" style="font-family: 'Poppins', sans-serif;">
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 md:p-8 border-2 border-gray-100 mb-8">
                <p class="text-gray-700 leading-relaxed text-justify mb-4">
                    Mulai Januari 2022, setiap pengunjung yang berkemah di 
                    <span class="font-bold text-[#017249]">Pineus Tilu Camping Ground</span> 
                    wajib menyampaikan pernyataan berikut. Sebagai penanggung jawab diri sendiri dan rombongan, 
                    saya menyatakan bahwa apabila terjadi kecelakaan/bencana/musibah selama berkemah di area 
                    <span class="font-bold text-[#017249]">Pineus Tilu Camping Ground</span>, 
                    pihak pengelola tidak bertanggung jawab, kecuali apabila kami berhak menerima pertanggungan 
                    asuransi yang disediakan bekerja sama dengan Perhutani sesuai dengan rincian tanggungan berikut:
                </p>

                <p class="text-gray-700 leading-relaxed text-justify">
                    Pengunjung menerima perlindungan asuransi kecelakaan dari 
                    <span class="font-bold text-[#017249] uppercase">{{ $insurance['provider'] }}</span> 
                    Master Policy No. <span class="font-bold text-[#017249]">{{ $insurance['policyNumber'] }}</span> 
                    untuk kecelakaan sejak memasuki gerbang hingga meninggalkan area. Perlindungan asuransi adalah sebagai berikut:
                </p>
            </div>

            <div class="bg-gradient-to-br from-[#017249]/5 to-[#017249]/10 rounded-2xl p-6 md:p-8 border-2 border-[#017249]/20">
                <h4 class="text-lg font-bold text-[#017249] mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    Cakupan Perlindungan Asuransi
                </h4>
                <ol class="space-y-4">
                    @foreach($insurance['coverage'] as $index => $item)
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#017249] text-white flex items-center justify-center font-bold text-sm">
                                {{ $index + 1 }}
                            </div>
                            <div class="flex-1 pt-1">
                                <span class="font-semibold text-gray-900">{{ $item['description'] }}:</span>
                                @isset($item['note'])
                                    <span class="text-gray-700"> {{ $item['note'] }}, </span>
                                @endisset
                                <span class="font-bold text-[#017249]">{{ $item['amount'] }}</span>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>