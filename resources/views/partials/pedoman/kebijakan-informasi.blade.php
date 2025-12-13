{{-- Kebijakan Section --}}
<section class="bg-white rounded-3xl shadow-xl border-2 border-gray-100 overflow-hidden" 
         data-aos="fade-up" 
         data-aos-duration="800"
         aria-labelledby="kebijakan-heading">
    <div class="p-6 sm:p-8 md:p-10">
        {{-- Section Header --}}
        <header class="text-center mb-8 md:mb-12">
            <h2 id="kebijakan-heading" 
                class="text-3xl md:text-4xl font-bold text-[#017249] mb-3" 
                style="font-family: 'Bizon', sans-serif;">
                KEBIJAKAN
            </h2>
        </header>

        @php
            // Data dalam array - mudah update
            $rescheduleRules = [
                ['time' => 'Sebelum H-7', 'fee' => 'Gratis / tidak ada biaya tambahan'],
                ['time' => 'H-7 sampai H-3', 'fee' => 'Biaya tambahan', 'amount' => 'Rp 150.000', 'unit' => '/tenda'],
                ['time' => 'H-2 sampai H-1', 'fee' => 'Biaya tambahan', 'amount' => 'Rp 250.000', 'unit' => '/tenda'],
                ['time' => 'Hari-H', 'fee' => 'Biaya tambahan sesuai harga tenda'],
            ];

            $cancellationRules = [
                ['time' => 'Sebelum H-7', 'percentage' => '25%'],
                ['time' => 'H-7 sampai H-4', 'percentage' => '50%'],
                ['time' => 'H-3 sampai H-2', 'percentage' => '75%'],
                ['time' => 'H-1 sampai Hari-H', 'percentage' => '100%'],
            ];
        @endphp

        {{-- Policy Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 mb-12" 
             style="font-family: 'Poppins', sans-serif;">
            
            {{-- Penjadwalan Ulang --}}
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border-2 border-gray-100">
                <h3 class="text-xl md:text-2xl font-bold text-[#017249] mb-5 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Penjadwalan Ulang
                </h3>
                <ul class="space-y-4">
                    @foreach($rescheduleRules as $rule)
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                            <div class="flex-1">
                                <span class="font-semibold text-gray-900">{{ $rule['time'] }}:</span>
                                <span class="text-gray-700"> {{ $rule['fee'] }}</span>
                                @isset($rule['amount'])
                                    <span class="font-bold text-[#017249]"> {{ $rule['amount'] }}</span><span class="text-gray-700">{{ $rule['unit'] ?? '' }}</span>
                                @endisset
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Pembatalan --}}
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 border-2 border-gray-100">
                <h3 class="text-xl md:text-2xl font-bold text-[#017249] mb-5 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Pembatalan
                </h3>
                <ul class="space-y-4">
                    @foreach($cancellationRules as $rule)
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                            <div class="flex-1">
                                <span class="font-semibold text-gray-900">{{ $rule['time'] }}:</span>
                                <span class="text-gray-700"> Biaya </span>
                                <span class="font-bold text-[#017249]">{{ $rule['percentage'] }}</span>
                                <span class="text-gray-700"> per tenda</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Information Box --}}
        <div class="bg-gradient-to-br from-[#017249]/5 to-[#017249]/10 rounded-2xl p-6 md:p-8 border-2 border-[#017249]/20" 
             style="font-family: 'Poppins', sans-serif;">
            <h4 class="flex items-center gap-2 text-[#017249] font-bold text-lg md:text-xl mb-5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Informasi
            </h4>
            <ul class="space-y-4 text-gray-700 mb-6">
                <li class="flex items-start gap-3">
                    <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                    <div>
                        Kelebihan <span class="text-[#017249] font-semibold">pembayaran/pengembalian</span> dana akan ditransfer paling lambat <span class="text-[#017249] font-semibold">14 hari kerja</span> setelah data rekening penerima diberikan.
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                    <div>
                        Pengembalian dana <span class="text-[#017249] font-semibold">akibat reservasi gagal</span> akan diproses paling lambat <span class="text-[#017249] font-semibold">3 hari kerja</span> setelah data rekening penerima diberikan.
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="flex-shrink-0 w-2 h-2 rounded-full bg-[#017249] mt-2"></div>
                    <div>
                        Jika terjadi keadaan di luar kendali (misalnya <span class="text-[#017249] font-semibold">pembatasan pemerintah/lockdown</span> yang menyebabkan area ditutup), pengembalian dana dikenakan potongan <span class="text-[#017249] font-semibold">50%</span>.
                    </div>
                </li>
            </ul>
            <p class="text-center italic text-gray-600 text-sm border-t-2 border-[#017249]/20 pt-5">
                Dalam semua kasus lain, syarat & ketentuan berlaku sebagaimana tertulis
            </p>
        </div>
    </div>
</section>