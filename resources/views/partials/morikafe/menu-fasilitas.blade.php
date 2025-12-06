<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <div class="col-span-1 md:col-span-2">
            <h3 class="text-2xl md:text-3xl font-extrabold text-[#017249] uppercase text-center md:text-left mb-6">Menu
            </h3>

            <div class="relative rounded-2xl overflow-hidden border-4 border-[#0b5a3e] shadow-lg">
                <iframe src="https://drive.google.com/file/d/1Dr8EPHERgTZMYIp0581AtYuIdKhyiooD/preview"
                    class="w-full h-[720px] md:h-[820px] lg:h-[900px]" frameborder="0" allow="autoplay; encrypted-media"
                    loading="lazy"></iframe>

                <a href="https://drive.google.com/file/d/1Dr8EPHERgTZMYIp0581AtYuIdKhyiooD/view" target="_blank"
                    rel="noopener"
                    class="absolute top-3 right-3 bg-white/90 text-[#0b5a3e] hover:bg-white px-3 py-1 rounded-full text-sm flex items-center gap-2 shadow-sm">
                    Buka di Drive
                </a>
            </div>
        </div>

        <div class="col-span-1">
            <h3 class="text-2xl md:text-3xl font-extrabold text-[#017249] uppercase text-center md:text-left mb-6">
                Fasilitas</h3>

            <div class="grid grid-cols-2 gap-6">
                @for($i = 1; $i <= 6; $i++)
                    <div class="rounded-2xl overflow-hidden shadow-md">
                        <img src="{{ asset('images/morikafe/facility-' . $i . '.jpg') }}" alt="fasilitas {{$i}}"
                            class="w-full h-48 md:h-[240px] lg:h-[280px] object-cover rounded-2xl transition-transform duration-300 hover:scale-105">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>