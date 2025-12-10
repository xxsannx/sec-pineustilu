{{-- Syarat & Ketentuan Section --}}
<section class="bg-white rounded-3xl shadow-xl border-2 border-gray-100 overflow-hidden"
         data-aos="fade-up" 
         data-aos-duration="800"
         aria-labelledby="syarat-heading">
    <div class="p-6 sm:p-8 md:p-10">
        {{-- Section Header --}}
        <header class="text-center mb-8 md:mb-12">
            <h2 id="syarat-heading" 
                class="text-3xl md:text-4xl font-bold text-[#017249] mb-3"
                style="font-family: 'Bizon', sans-serif;">
                SYARAT & KETENTUAN
            </h2>
        </header>

        @php
            // Data-driven approach dengan icon
            $rules = [
                // Column 1
                [
                    ['text' => 'Check-in pukul 14.00 WIB & Check-out pukul 12.00 WIB.', 'icon' => 'checkin.png'],
                    ['text' => 'Jaga kebersihan area', 'icon' => 'kebersihan.png'],
                    ['text' => 'Musik dengan volume rendah', 'icon' => 'volume.png'],
                    ['text' => 'Dilarang merokok dalam tenda', 'icon' => 'smoke.png'],
                    ['text' => 'Dilarang membawa daging babi dan makanan anjing pada peralatan BBQ & api unggun', 'icon' => 'pork.png'],
                    ['text' => 'Pisahkan sampah organik dan anorganik', 'icon' => 'sampah.png'],
                    ['text' => 'Dilarang melakukan aktivitas tidak bermoral', 'icon' => 'immoral.png'],
                    ['text' => 'Jaga keselamatan & berhati-hati di area camping', 'icon' => 'safe.png'],
                ],
                // Column 2
                [
                    ['text' => 'Dilarang membawa narkoba & alkohol', 'icon' => 'drugs.png'],
                    ['text' => 'Jaga barang pribadi tetap aman', 'sub' => 'Kerusakan & kehilangan diluar tanggung jawab Pineus Tilu', 'icon' => 'barang.png'],
                    ['text' => 'Dilarang membawa anjing', 'icon' => 'dogs.png'],
                    ['text' => 'Dilarang karaoke', 'icon' => 'karaoke.png'],
                    ['text' => 'Tidak diperbolehkan alat pengeras suara', 'icon' => 'sound.png'],
                    ['text' => 'Tidak ada microphone', 'icon' => 'mic.png'],
                    ['text' => 'Tidak diperbolehkan alat musik dengan suara keras', 'icon' => 'musik.png'],
                ],
            ];
        @endphp

        {{-- Rules Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6" 
             style="font-family: 'Poppins', sans-serif;">
            
            @foreach($rules as $column)
                <div class="space-y-6">
                    @foreach($column as $rule)
                        <x-pedoman.rule-item 
                            :icon="$rule['icon']" 
                            :sub="$rule['sub'] ?? null">
                            {{ $rule['text'] }}
                        </x-pedoman.rule-item>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
