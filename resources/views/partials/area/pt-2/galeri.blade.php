<section class="py-12 bg-white text-gray-800" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider text-[#065f46]" data-aos="fade-down" data-aos-duration="700" style="font-family: 'Bizon', sans-serif;">GALERI</h3>

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
                <div class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ 50 * $loop->index }}">
                    <img src="{{ asset('images/area-galeri/galeri-pt1/' . $img) }}" alt="Galeri Pineus Tilu" loading="lazy"
                        class="block w-full h-56 md:h-64 lg:h-72 object-cover transition-transform duration-300 group-hover:scale-105" />
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-600">
                    Belum ada gambar galeri.
                </div>
            @endforelse
        </div>
    </div>
</section>
