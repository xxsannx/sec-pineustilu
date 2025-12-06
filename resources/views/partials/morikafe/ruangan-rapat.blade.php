<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-extrabold text-center text-[#017249] mb-6 tracking-wider">RUANGAN RAPAT</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for($i = 1; $i <= 3; $i++)
                <div class="overflow-hidden rounded-2xl shadow-lg bg-gray-50">
                    <img src="{{ asset('images/morikafe/meeting-' . $i . '.jpg') }}" alt="meeting {{$i}}"
                        class="w-full h-72 md:h-80 lg:h-96 object-cover rounded-2xl">
                </div>
            @endfor
        </div>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            @for($i = 4; $i <= 6; $i++)
                <div class="overflow-hidden rounded-2xl shadow-lg bg-gray-50">
                    <img src="{{ asset('images/morikafe/meeting-' . $i . '.jpg') }}" alt="meeting {{$i}}"
                        class="w-full h-72 md:h-80 lg:h-96 object-cover rounded-2xl">
                </div>
            @endfor
        </div>

        <p class="text-sm md:text-base text-[#0b5a3e] mt-4">
            <span class="font-extrabold text-[#017249]">Catatan :</span>
            <span class="block mt-2 leading-relaxed">
                Ruangan berkapasitas maksimal 50 orang ini gratis untuk tamu camping. Untuk tamu non-camping tarifnya
                <strong class="font-extrabold text-[#017249]">IDR 200.000/jam</strong> atau
                <strong class="font-extrabold text-[#017249]">IDR 750.000/6 jam</strong>
                (belum termasuk makanan &amp; minuman). Untuk reservasi, silakan hubungi admin atau reservasi langsung
                di lokasi.
            </span>
        </p>
    </div>
</section>