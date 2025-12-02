@extends('layouts.app')

@section('title', 'Pineus Tilu - Glamping & Outbound')

@section('content')
    <!-- Hero Section with Video Background Placeholder -->
    <section class="relative px-4 min-h-screen flex items-center justify-center pt-20 bg-[#1a1a1a] bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('/images/suasana.jpg');">
        <div class="absolute inset-0 brightness-110"></div>
        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-white mb-6 md:mb-8 leading-tight px-4 drop-shadow-[3px_3px_6px_rgba(0,0,0,0.8)]" style="font-family: 'Bizon', sans-serif;">
                    PENGALAMAN TAK TERLUPAKAN DI ALAM.
                </h1>
                <div class="flex justify-center">
                    <a href="{{ url('/reservasi/glamping') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 md:px-10 md:py-4 rounded-full font-semibold text-sm md:text-base transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                        Reservasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-12 md:py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center justify-center mb-12 md:mb-16">
                <div class="flex-shrink-0" data-aos="fade-right" data-aos-duration="800">
                    <img src="{{ asset('images/logo.png') }}" alt="Pineus Tilu Logo" class="h-24 md:h-40">
                </div>
                <div class="flex-1 max-w-3xl" data-aos="fade-left" data-aos-duration="800">
                    <p class="text-[#017249] leading-relaxed text-sm md:text-lg px-2 [line-height:1.8]">
                        Adalah Sebuah Glamping Yang Menjadi Pelopor Atau Pionir Di Keindahan Alam Hutan Pinus Rahong, Dengan Pemandangan Sungai Palayangan Yang Menjadi Daya Tarik Khusus Untuk Aktivitas Rafting Di Pangalengan, Kabupaten Bandung, Indonesia
                    </p>
                </div>
            </div>

            <!-- Feature Cards Grid -->
            <div class="max-w-5xl mx-auto space-y-8 md:space-y-12 mt-8 md:mt-16">
                <!-- Tenda -->
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/tenda.jpg') }}" alt="Tenda" class="rounded-2xl h-56 md:h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-xl md:text-3xl font-bold text-[#017249] mb-3 md:mb-4" style="font-family: 'Bizon', sans-serif;">TENDA</h3>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-lg">
                            Nikmati suasana berkemah di tepi sungai dengan perlengkapan yang telah disediakan. Tenda, matras, kantong tidur, dan peralatan yang nyaman siap menjadikan liburan anda praktis dan menyenangkan.
                        </p>
                    </div>
                </div>

                <!-- Ruang Pemulihan -->
                <div class="flex flex-col md:flex-row-reverse gap-6 md:gap-8 items-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/pemulihan.jpg') }}" alt="Ruang Pemulihan" class="rounded-2xl h-56 md:h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-xl md:text-3xl font-bold text-[#017249] mb-3 md:mb-4" style="font-family: 'Bizon', sans-serif;">RUANG PEMULIHAN</h3>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-lg">
                            Dikelilingi oleh udara segar, pohon pinus, dan suara sungai yang menenangkan, Pineus Tilu adalah tempat yang sempurna untuk menyegarkan pikiran dan jiwa Anda dan kembali ke kota dengan energi baru.
                        </p>
                    </div>
                </div>

                <!-- Suasana -->
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/suasana.jpg') }}" alt="Suasana" class="rounded-2xl h-56 md:h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-xl md:text-3xl font-bold text-[#017249] mb-3 md:mb-4" style="font-family: 'Bizon', sans-serif;">SUASANA</h3>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-lg">
                            Dikelilingi pegunungan pinus dan sungai. Nikmati pengalaman alam yang kualitas dan kabin dengan udara segar dan suasana alam yang menenangkan.
                        </p>
                    </div>
                </div>

                <!-- Api Unggun -->
                <div class="flex flex-col md:flex-row-reverse gap-6 md:gap-8 items-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/apiunggun.jpg') }}" alt="Api Unggun" class="rounded-2xl h-56 md:h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-xl md:text-3xl font-bold text-[#017249] mb-3 md:mb-4" style="font-family: 'Bizon', sans-serif;">API UNGGUN</h3>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-lg">
                            Nikmati malam yang hangat di dekat api unggun di bawah bintang-bintang. Bagikan cerita, tawa, dan kebersamaan di tengah alam untuk momen berkemah yang tak terlupakan.
                        </p>
                    </div>
                </div>

                <!-- Aktivitas -->
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/aktifitas.jpg') }}" alt="Aktivitas" class="rounded-2xl h-56 md:h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-xl md:text-3xl font-bold text-[#017249] mb-3 md:mb-4" style="font-family: 'Bizon', sans-serif;">AKTIVITAS</h3>
                        <p class="text-gray-700 leading-relaxed text-sm md:text-lg">
                            Rasakan serunya arung jeram, flying fox, paintball, ATV & offroad yang seru, serta aktivitas team building seru yang menghadirkan momen petualangan dan kebersamaan tak terlupakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation CTA Section -->
    <x-reservation-cta />

    <!-- Area Cards Section -->
    <section class="py-16 md:py-24 px-4 bg-[#017249]">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4" style="font-family: 'Bizon', sans-serif;">AREA</h2>
                <p class="text-white/90 text-sm md:text-base max-w-xl mx-auto">
                    Pilih area camping yang sesuai dengan kebutuhan Anda
                </p>
            </div>
            
            <!-- All Areas Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                <!-- Pineus Tilu 1 -->
                <a href="{{ url('/area/pineus-tilu-1') }}" class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300">
                    <div class="md:flex">
                        <div class="md:w-2/5 aspect-square md:aspect-auto bg-gray-100 relative overflow-hidden">
                            <!-- Image akan diisi dari panel admin -->
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-xs font-medium text-gray-700 shadow-sm">Tenda</span>
                        </div>
                        <div class="md:w-3/5 p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 group-hover:text-[#017249] transition-colors">Pineus Tilu 1</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Area camping dengan view sungai yang menenangkan
                            </p>
                            <div class="flex items-center text-[#017249] font-semibold text-sm">
                                Lihat detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pineus Tilu 2 -->
                <a href="{{ url('/area/pineus-tilu-2') }}" class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300">
                    <div class="md:flex">
                        <div class="md:w-2/5 aspect-square md:aspect-auto bg-gray-100 relative overflow-hidden">
                            <!-- Image akan diisi dari panel admin -->
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-xs font-medium text-gray-700 shadow-sm">Tenda</span>
                        </div>
                        <div class="md:w-3/5 p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 group-hover:text-[#017249] transition-colors">Pineus Tilu 2</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Area camping di tengah hutan pinus yang asri
                            </p>
                            <div class="flex items-center text-[#017249] font-semibold text-sm">
                                Lihat detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pineus Tilu 3 VIP -->
                <a href="{{ url('/area/pineus-tilu-3-vip') }}" class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300">
                    <div class="md:flex">
                        <div class="md:w-2/5 aspect-square md:aspect-auto bg-gray-100 relative overflow-hidden">
                            <!-- Image akan diisi dari panel admin -->
                            <span class="absolute top-4 left-4 bg-amber-400 px-3 py-1.5 rounded-lg text-xs font-bold text-white shadow-sm">VIP</span>
                        </div>
                        <div class="md:w-3/5 p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 group-hover:text-[#017249] transition-colors">Pineus Tilu 3 VIP</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Area premium dengan fasilitas lengkap dan eksklusif
                            </p>
                            <div class="flex items-center text-[#017249] font-semibold text-sm">
                                Lihat detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pineus Tilu 4 -->
                <a href="{{ url('/area/pineus-tilu-4') }}" class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300">
                    <div class="md:flex">
                        <div class="md:w-2/5 aspect-square md:aspect-auto bg-gray-100 relative overflow-hidden">
                            <!-- Image akan diisi dari panel admin -->
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-xs font-medium text-gray-700 shadow-sm">Tenda</span>
                        </div>
                        <div class="md:w-3/5 p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 group-hover:text-[#017249] transition-colors">Pineus Tilu 4</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Area camping dekat kolam dengan suasana sejuk
                            </p>
                            <div class="flex items-center text-[#017249] font-semibold text-sm">
                                Lihat detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Cabin -->
                <a href="{{ url('/area/cabin') }}" class="group block bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-[#017249] hover:shadow-xl transition-all duration-300">
                    <div class="md:flex">
                        <div class="md:w-2/5 aspect-square md:aspect-auto bg-gray-100 relative overflow-hidden">
                            <!-- Image akan diisi dari panel admin -->
                            <span class="absolute top-4 left-4 bg-[#017249] px-3 py-1.5 rounded-lg text-xs font-bold text-white shadow-sm">Cabin</span>
                        </div>
                        <div class="md:w-3/5 p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 group-hover:text-[#017249] transition-colors">Pineus Tilu Cabin</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-5">
                                Cabin eksklusif dengan fasilitas modern
                            </p>
                            <div class="flex items-center text-[#017249] font-semibold text-sm">
                                Lihat detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Map & Location Section Combined -->
    <section class="py-12 md:py-20 px-4 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <!-- Section Title -->
            <div class="text-center mb-8 md:mb-12" data-aos="fade-down" data-aos-duration="800">
                <h2 class="text-3xl md:text-5xl font-bold text-[#017249] mb-3" style="font-family: 'Bizon', sans-serif;">PETA & LOKASI</h2>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Temukan lokasi kami dan jelajahi peta interaktif area camping ground
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">
                <!-- Left Column - Interactive Map -->
                <div data-aos="fade-right" data-aos-duration="800">
                    <div class="bg-white rounded-2xl p-4 md:p-6 shadow-xl">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-6 h-6 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800">Peta Area Camping</h3>
                        </div>
                        
                        <div class="cursor-pointer group relative rounded-2xl overflow-visible shadow-md" onclick="openMapModal()">
                            <img src="/images/fullmap.jpeg" alt="Peta Pineus Tilu Camp Ground" class="w-full h-auto block rounded-2xl relative z-[1]">
                            <div class="absolute inset-0 bg-transparent group-hover:bg-black group-hover:bg-opacity-20 transition-colors duration-300 flex items-center justify-center pointer-events-none z-[2] rounded-2xl">
                                <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:scale-110">
                                    <div style="background-color: white; border-radius: 9999px; padding: 1rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);">
                                        <svg style="width: 2rem; height: 2rem; color: #017249;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 flex items-center justify-center gap-2 text-gray-600 text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                            <span class="font-medium">Klik untuk zoom & navigasi interaktif</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Address & Google Maps -->
                <div data-aos="fade-left" data-aos-duration="800" class="space-y-6">
                    <!-- Address Card -->
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-xl">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="bg-[#017249] rounded-full p-2.5 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Alamat Lengkap</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Hutan Rahong, Pulosari, Kec. Pangalengan,<br>
                                    Kabupaten Bandung, Jawa Barat 40378
                                </p>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-[#017249]/10 to-[#017249]/5 rounded-xl p-4 mb-4">
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base italic">
                                "Pineus Tilu terletak di Hutan Rahong, dikelilingi pohon pinus dan sungai, menawarkan pengalaman berkemah dengan ruang tanpa batas."
                            </p>
                        </div>
                        
                        <a href="https://www.google.com/maps/place/Pineus+Tilu+Camp+Ground/@-7.1819655,107.542411,17z/data=!3m1!4b1!4m6!3m5!1s0x2e689144cb1ebb5d:0x5e98bae230f55aaf!8m2!3d-7.1819655!4d107.5449859!16s%2Fg%2F11qp2mvpv0?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full inline-flex items-center justify-center gap-2 bg-[#017249] hover:bg-[#015a3a] text-white font-semibold px-6 py-3.5 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Buka di Google Maps
                        </a>
                    </div>

                    <!-- Google Maps Embed -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8579874598244!2d107.54241099999999!3d-7.1819655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e689144cb1ebb5d%3A0x5e98bae230f55aaf!2sPineus%20Tilu%20Camp%20Ground!5e0!3m2!1sen!2sid!4v1732528234567!5m2!1sen!2sid"
                            width="100%"
                            height="320"
                            class="border-0 w-full"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Modal -->
    <div id="mapModal" class="fixed inset-0 z-[9999] bg-black bg-opacity-60 backdrop-blur-sm" onclick="closeMapModalOnBackground(event)" style="display: none;">
        <div class="relative w-full h-full">
            <!-- Close Button -->
            <button onclick="event.stopPropagation(); closeMapModal();" class="absolute top-6 right-6 z-[10001] bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110 hover:rotate-90 group">
                <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Zoom Controls -->
            <div class="absolute top-6 left-6 z-[10001] flex flex-col gap-2">
                <button onclick="event.stopPropagation(); zoomIn();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                    </svg>
                </button>
                <button onclick="event.stopPropagation(); zoomOut();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7"></path>
                    </svg>
                </button>
                <button onclick="event.stopPropagation(); resetZoom();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </button>
            </div>

            <!-- Zoom Level Indicator -->
            <div class="absolute bottom-6 left-6 z-[10001] bg-white rounded-full px-4 py-2 shadow-xl">
                <span class="text-sm font-semibold text-gray-800" id="zoomLevel">100%</span>
            </div>

            <!-- Instructions -->
            <div class="absolute bottom-6 right-6 z-[10001] bg-white rounded-lg px-4 py-2 shadow-xl max-w-xs hidden md:block">
                <p class="text-xs text-gray-600">
                    <span class="font-semibold">💡 Tips:</span> Scroll untuk zoom, drag untuk menggeser
                </p>
            </div>

            <!-- Map Image Container -->
            <div id="mapContainer" class="absolute inset-0 flex items-center justify-center overflow-hidden touch-none" onclick="event.stopPropagation();">
                <img id="mapImage" src="{{ asset('images/fullmap.jpeg') }}" alt="Peta Pineus Tilu Camp Ground" class="max-h-[90vh] max-w-[90vw] object-contain select-none transition-none cursor-grab" draggable="false">
            </div>
        </div>
    </div>

    <!-- Aksesibilitas Section -->
    <section class="py-12 md:py-20 px-4 bg-gradient-to-br from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-8 md:mb-12" data-aos="fade-down" data-aos-duration="800">
                <h2 class="text-3xl md:text-5xl font-bold text-[#017249] mb-3" style="font-family: 'Bizon', sans-serif;">AKSESIBILITAS</h2>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Pilih lokasi keberangkatan Anda untuk panduan perjalanan lengkap menuju Pineus Tilu
                </p>
            </div>

            <!-- Route Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" data-aos="fade-up" data-aos-duration="800">
                <!-- Jabodetabek Card -->
                <div onclick="openModal('modalJabodetabek')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249]">
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
                <div onclick="openModal('modalJawaTengahTimur')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249]">
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
                <div onclick="openModal('modalLuarNegeri')" class="group cursor-pointer bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 border-2 border-transparent hover:border-[#017249]">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
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

    <!-- Reservation CTA Section -->
    <x-reservation-cta />

    <!-- Modal Jabodetabek -->
    <div id="modalJabodetabek" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl animate-modal">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-gradient-to-r from-[#017249] to-[#015a3a] text-white p-6 md:p-8 flex justify-between items-start z-10">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold">Jakarta & Sekitarnya</h3>
                    </div>
                    <p class="text-white/90 text-sm">Bogor • Depok • Tangerang • Bekasi</p>
                </div>
                <button onclick="closeModal('modalJabodetabek')" class="bg-white/10 hover:bg-white/20 p-2 rounded-full transition-all duration-300 hover:rotate-90">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6 md:p-8 space-y-6 overflow-y-auto max-h-[calc(85vh-120px)]">
                <!-- Kereta Regular -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-5 border-2 border-blue-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-blue-900 mb-2 flex items-center gap-2">
                                Kereta (Regular)
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Naik kereta reguler dari stasiun-stasiun di Jakarta, Bogor, Depok, atau Bekasi (seperti Stasiun Gambir atau Pasar Senen) menuju Stasiun Bandung. Dari Stasiun Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kereta Cepat Whoosh -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-5 border-2 border-red-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-red-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-red-900 mb-2 flex items-center gap-2">
                                Kereta Cepat (Whoosh)
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Naik Kereta Cepat Whoosh dari Stasiun Halim (Jakarta) menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bus / Travel -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-5 border-2 border-green-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-green-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-green-900 mb-2 flex items-center gap-2">
                                Bus / Minibus / Travel
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Dari wilayah Jabodetabek, Anda dapat naik bus antarkota atau minibus langsung ke Bandung — biasanya tiba di Terminal Leuwipanjang (Bandung Barat) atau Terminal Cicaheum (Bandung Timur). Jika menggunakan layanan travel/shuttle, titik turun akan berbeda tergantung perusahaan dan layanan yang dipilih. Dari titik kedatangan di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mobil Pribadi -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-5 border-2 border-purple-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-purple-900 mb-2 flex items-center gap-2">
                                Mobil Pribadi
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Berkendara melalui Tol Jakarta–Cikampek, lanjut ke Tol Cipularang, keluar di Soreang, kemudian ikuti rute menuju Pangalengan. Perjalanan dari Bandung ke Pangalengan memakan waktu sekitar 2 jam. Ini merupakan pilihan paling fleksibel untuk keluarga atau rombongan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Jawa Tengah & Timur -->
    <div id="modalJawaTengahTimur" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl animate-modal">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-gradient-to-r from-[#017249] to-[#015a3a] text-white p-6 md:p-8 flex justify-between items-start z-10">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold">Jawa Tengah & Timur</h3>
                    </div>
                    <p class="text-white/90 text-sm">Cirebon • Yogyakarta • Surabaya</p>
                </div>
                <button onclick="closeModal('modalJawaTengahTimur')" class="bg-white/10 hover:bg-white/20 p-2 rounded-full transition-all duration-300 hover:rotate-90">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6 md:p-8 space-y-6 overflow-y-auto max-h-[calc(85vh-120px)]">
                <!-- Kereta Regular -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-5 border-2 border-blue-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-blue-900 mb-2 flex items-center gap-2">
                                Kereta (Regular)
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Naik kereta reguler dari Surabaya (Stasiun Gubeng atau Pasar Turi) ke Bandung, dari Yogyakarta (Stasiun Tugu) ke Bandung, atau dari Cirebon (Stasiun Cirebon) ke Bandung. Setelah tiba di Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bus / Travel -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-5 border-2 border-green-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-green-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-green-900 mb-2 flex items-center gap-2">
                                Bus / Minibus / Travel
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Anda juga dapat naik bus antarkota atau layanan travel/minibus dari Surabaya ke Bandung, dari Yogyakarta ke Bandung, atau dari Cirebon ke Bandung. Setelah tiba di Bandung, lanjutkan perjalanan dengan transportasi umum lokal atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mobil Pribadi -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-5 border-2 border-purple-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-purple-900 mb-2 flex items-center gap-2">
                                Mobil Pribadi
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Bagi yang lebih memilih berkendara sendiri, gunakan Tol Trans-Jawa dari Surabaya atau Yogyakarta, atau Tol Cipali–Cipularang dari Cirebon untuk menuju Bandung. Keluar di Soreang dan lanjutkan ke Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Luar Negeri -->
    <div id="modalLuarNegeri" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl animate-modal">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-gradient-to-r from-[#017249] to-[#015a3a] text-white p-6 md:p-8 flex justify-between items-start z-10">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold">Luar Negeri</h3>
                    </div>
                    <p class="text-white/90 text-sm">Via Bandara Internasional</p>
                </div>
                <button onclick="closeModal('modalLuarNegeri')" class="bg-white/10 hover:bg-white/20 p-2 rounded-full transition-all duration-300 hover:rotate-90">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-6 md:p-8 space-y-6 overflow-y-auto max-h-[calc(85vh-120px)]">
                <!-- Pesawat + Kereta Regular -->
                <div class="bg-gradient-to-br from-sky-50 to-sky-100 rounded-2xl p-5 border-2 border-sky-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-sky-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-sky-900 mb-2 flex items-center gap-2">
                                Pesawat + Kereta (Regular)
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Jika Anda mendarat di Jakarta, naik kereta reguler dari Stasiun Gambir atau Pasar Senen ke Bandung. Dari Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang menuju Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pesawat + Whoosh -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-5 border-2 border-orange-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-orange-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-orange-900 mb-2 flex items-center gap-2">
                                Pesawat + Kereta Cepat (Whoosh)
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari bandara, pindah ke Stasiun Halim (Jakarta) dan naik Kereta Cepat Whoosh menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pesawat + Bus -->
                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-5 border-2 border-teal-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-teal-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-teal-900 mb-2 flex items-center gap-2">
                                Pesawat + Bus / Travel
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari Jakarta, naik bus antarkota atau layanan travel/minibus menuju Bandung (Terminal Leuwipanjang atau Terminal Cicaheum). Setelah tiba di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pesawat + Mobil -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-5 border-2 border-indigo-200 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-500 p-3 rounded-xl flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-indigo-900 mb-2 flex items-center gap-2">
                                Pesawat + Mobil Rental
                            </h4>
                            <p class="text-gray-700 leading-relaxed text-sm md:text-base">
                                Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Di kedua bandara ini Anda dapat langsung menyewa mobil. Dari Jakarta, berkendara melalui Tol Jakarta–Cikampek dan Tol Cipularang, keluar di Soreang, lalu lanjutkan ke Pangalengan (2 jam dari Bandung).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
