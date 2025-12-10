<section class="bg-[#0b5a3e] py-12">
    <div class="max-w-6xl mx-auto px-6 text-white">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider">GALERI</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i = 1; $i <= 6; $i++)
                <div class="overflow-hidden rounded-2xl shadow-md flex items-center justify-center">
                    <div class="w-full h-56 md:h-64 lg:h-72 bg-gray-200 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center"
                        role="img" aria-label="Placeholder gambar kosong">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
