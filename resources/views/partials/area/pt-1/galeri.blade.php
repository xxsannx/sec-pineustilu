<section class="bg-[#0b5a3e] py-12">
    <div class="max-w-6xl mx-auto px-6 text-white">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider">GALERI</h3>

        @php
            $galeri = [
                'galeri1-pt1.jpeg',
                'galeri2-pt1.jpeg',
                'galeri3-pt1.jpg',
                'galeri4-pt1.jpg',
                'galeri5-pt1.jpeg',
                'galeri6-pt1.jpg',

            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($galeri as $img)
                <div class="overflow-hidden rounded-2xl shadow-md group">
                    <img src="{{ asset('images/area-galeri/galeri-pt1/' . $img) }}" alt="Galeri Pineus Tilu" loading="lazy"
                        class="block w-full h-56 md:h-64 lg:h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-200">
                    Belum ada gambar galeri.
                </div>
            @endforelse
        </div>
    </div>
</section>