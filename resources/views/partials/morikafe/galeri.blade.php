<section class="bg-[#0b5a3e] py-12">
    <div class="max-w-6xl mx-auto px-6 text-white">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider">GALERI</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i = 1; $i <= 6; $i++)
                <div class="overflow-hidden rounded-2xl shadow-md">
                    <img src="{{ asset('images/morikafe/galeri-' . $i . '.jpg') }}" alt="galeri {{$i}}"
                        class="w-full h-56 md:h-64 lg:h-72 object-cover">
                </div>
            @endfor
        </div>
    </div>
</section>