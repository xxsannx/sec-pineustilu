<!-- Aksesibilitas Section -->
<section class="py-12 md:py-20 px-4 bg-white overflow-hidden w-full">
    <div class="max-w-7xl mx-auto w-full">
        <!-- Section Header -->
        <div class="text-center mb-8 md:mb-12" data-aos="fade-down" data-aos-duration="800">
            <h2 class="text-3xl md:text-5xl font-bold text-[#017249] mb-3" style="font-family: 'Bizon', sans-serif;">AKSESIBILITAS</h2>
            <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                Pilih lokasi keberangkatan Anda untuk panduan perjalanan lengkap menuju Pineus Tilu
            </p>
        </div>

        <!-- Route Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 px-2" data-aos="fade-up" data-aos-duration="800">
            <!-- Jabodetabek Card -->
            <div onclick="openModal('modalJabodetabek')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249] mx-auto w-full max-w-sm">
                <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#017249] to-[#015a3a] rounded-full mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-[#017249] transition-colors">Jakarta & Sekitarnya</h3>
                <p class="text-sm text-gray-600 mb-3">Bogor, Depok, Tangerang, Bekasi</p>
                <div class="flex items-center text-[#017249] font-semibold text-sm group-hover:translate-x-2 transition-transform duration-300">
                    Lihat Rute
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>

            <!-- Jawa Tengah & Timur Card -->
            <div onclick="openModal('modalJawaTengahTimur')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249] mx-auto w-full max-w-sm">
                <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#017249] to-[#015a3a] rounded-full mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-[#017249] transition-colors">Jawa Tengah & Timur</h3>
                <p class="text-sm text-gray-600 mb-3">Cirebon, Yogyakarta, Surabaya</p>
                <div class="flex items-center text-[#017249] font-semibold text-sm group-hover:translate-x-2 transition-transform duration-300">
                    Lihat Rute
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>

            <!-- International Card -->
            <div onclick="openModal('modalLuarNegeri')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249] mx-auto w-full max-w-sm">
                <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#017249] to-[#015a3a] rounded-full mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-[#017249] transition-colors">Luar Negeri</h3>
                <p class="text-sm text-gray-600 mb-3">Via Bandara Internasional</p>
                <div class="flex items-center text-[#017249] font-semibold text-sm group-hover:translate-x-2 transition-transform duration-300">
                    Lihat Rute
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pickup Service Banner -->
        <div class="bg-gradient-to-r from-amber-50 via-amber-100 to-amber-50 rounded-2xl p-6 md:p-8 shadow-xl border-2 border-amber-200" data-aos="fade-up" data-aos-duration="800">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-amber-500 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Layanan Penjemputan Bandara
                    </h4>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-3">
                        Kami menyediakan layanan penjemputan langsung dari <strong>Bandara Soekarno–Hatta (CGK)</strong> ke Pineus Tilu dengan harga <strong class="text-[#017249]">USD 200/trip</strong> untuk maksimal 6 penumpang. Sudah termasuk mobil nyaman, sopir profesional, bahan bakar, tol, dan refreshment.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://wa.me/6287735482327" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1da851] text-white font-semibold px-5 py-2.5 rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 text-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                            </svg>
                            +62 877-3548-2327
                        </a>
                        <a href="https://wa.me/6281220413424" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1da851] text-white font-semibold px-5 py-2.5 rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 text-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                            </svg>
                            +62 812-2041-3424
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
