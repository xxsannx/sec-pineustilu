@extends('layouts.app')

@section('title', 'Pineus Tilu - Glamping & Outbound')

@section('content')
    <!-- Hero Section with Video Background Placeholder -->
    <section class="relative bg-white py-20 px-4 min-h-screen flex items-start justify-center">
        <div class="max-w-7xl mx-auto mt-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-white mb-6 leading-tight" style="font-family: 'JapaneseBrush', cursive; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    PENGALAMAN TAK TERLUPAKAN DI ALAM
                </h1>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="{{ url('/reservasi/glamping') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-10 py-4 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                        Reservasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 items-center justify-center mb-16">
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Pineus Tilu Logo" class="h-32 md:h-40">
                </div>
                <div class="flex-1 max-w-3xl">
                    <p class="text-[#017249] leading-relaxed text-base md:text-lg" style="line-height: 1.8;">
                        Adalah Sebuah Glamping Yang Menjadi Pelopor Atau Pionir Di Keindahan Alam Hutan Pinus Rahong, Dengan Pemandangan Sungai Palayangan Yang Menjadi Daya Tarik Khusus Untuk Aktivitas Rafting Di Pangalengan, Kabupaten Bandung, Indonesia
                    </p>
                </div>
            </div>

            <!-- Feature Cards Grid -->
            <div class="max-w-5xl mx-auto space-y-12 mt-16">
                <!-- Tenda -->
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/tenda.jpg') }}" alt="Tenda" class="rounded-2xl h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#017249] mb-4" style="font-family: 'Bizon', sans-serif;">TENDA</h3>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            Nikmati suasana berkemah di tepi sungai dengan perlengkapan yang telah disediakan. Tenda, matras, kantong tidur, dan peralatan yang nyaman siap menjadikan liburan anda praktis dan menyenangkan.
                        </p>
                    </div>
                </div>

                <!-- Ruang Pemulihan -->
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/pemulihan.jpg') }}" alt="Ruang Pemulihan" class="rounded-2xl h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#017249] mb-4" style="font-family: 'Bizon', sans-serif;">RUANG PEMULIHAN</h3>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            Dikelilingi oleh udara segar, pohon pinus, dan suara sungai yang menenangkan, Pineus Tilu adalah tempat yang sempurna untuk menyegarkan pikiran dan jiwa Anda dan kembali ke kota dengan energi baru.
                        </p>
                    </div>
                </div>

                <!-- Suasana -->
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/suasana.JPG') }}" alt="Suasana" class="rounded-2xl h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#017249] mb-4" style="font-family: 'Bizon', sans-serif;">SUASANA</h3>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            Dikelilingi pegunungan pinus dan sungai. Nikmati pengalaman alam yang kualitas dan kabin dengan udara segar dan suasana alam yang menenangkan.
                        </p>
                    </div>
                </div>

                <!-- Api Unggun -->
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/apiunggun.jpg') }}" alt="Api Unggun" class="rounded-2xl h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#017249] mb-4" style="font-family: 'Bizon', sans-serif;">API UNGGUN</h3>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                            Nikmati malam yang hangat di dekat api unggun di bawah bintang-bintang. Bagikan cerita, tawa, dan kebersamaan di tengah alam untuk momen berkemah yang tak terlupakan.
                        </p>
                    </div>
                </div>

                <!-- Aktivitas -->
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <img src="{{ asset('images/aktifitas.JPG') }}" alt="Aktivitas" class="rounded-2xl h-80 w-full object-cover">
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#017249] mb-4" style="font-family: 'Bizon', sans-serif;">AKTIVITAS</h3>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg">
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
    <section class="py-20 px-4 bg-[#017249]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-white mb-4" style="font-family: 'Bizon', sans-serif;">AREA</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mt-12">
                <!-- Pineus Tilu 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gray-200"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu 1</h3>
                        <p class="text-sm text-gray-600 mb-4">Tenda</p>
                        <a href="{{ url('/area/pineus-tilu-1') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Pineus Tilu 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gray-200"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu 2</h3>
                        <p class="text-sm text-gray-600 mb-4">Tenda</p>
                        <a href="{{ url('/area/pineus-tilu-2') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Pineus Tilu 3 VIP -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gray-200"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu 3 VIP</h3>
                        <p class="text-sm text-gray-600 mb-4">Tenda</p>
                        <a href="{{ url('/area/pineus-tilu-3-vip') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Pineus Tilu 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gray-200"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu 4</h3>
                        <p class="text-sm text-gray-600 mb-4">Tenda</p>
                        <a href="{{ url('/area/pineus-tilu-4') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Cabin - Centered -->
                <div class="md:col-span-2 max-w-sm mx-auto w-full">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="h-48 bg-gray-200"></div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu Cabin</h3>
                            <p class="text-sm text-gray-600 mb-4">Cabin</p>
                            <a href="{{ url('/area/cabin') }}" class="inline-flex items-center justify-center bg-[#017249] hover:bg-[#015a3a] text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-[#017249] mb-12" style="font-family: 'Bizon', sans-serif;">PETA</h2>
            <div class="max-w-4xl mx-auto">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/fullmap.jpeg') }}" alt="Peta Pineus Tilu Camp Ground" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-[#017249] mb-6" style="font-family: 'Bizon', sans-serif;">ALAMAT</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Address Info -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">
                        Hutan Rahong, Pulosari, Kec. Pangalengan,<br>
                        Kabupaten Bandung, Jawa Barat 40378
                    </h3>
                    <p class="text-gray-700 leading-relaxed mt-6 mb-8">
                        "Pineus Tilu terletak di Hutan Rahong, dikelilingi pohon pinus dan sungai, menawarkan pengalaman berkemah dengan ruang tanpa batas."
                    </p>
                    <a href="https://www.google.com/maps/place/Pineus+Tilu+Camp+Ground/@-7.1819655,107.542411,17z/data=!3m1!4b1!4m6!3m5!1s0x2e689144cb1ebb5d:0x5e98bae230f55aaf!8m2!3d-7.1819655!4d107.5449859!16s%2Fg%2F11qp2mvpv0?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-3 bg-[#017249] hover:bg-[#015a3a] text-white px-10 py-4 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        Buka Google Maps
                    </a>
                </div>

                <!-- Right Column - Google Maps Embed -->
                <div>
                    <div class="rounded-2xl overflow-hidden shadow-lg">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5146137498546!2d107.54241097604924!3d-7.181965492823078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e689144cb1ebb5d%3A0x5e98bae230f55aaf!2sPineus%20Tilu%20Camp%20Ground!5e0!3m2!1sen!2sid!4v1764581097599!5m2!1sen!2sid"
                                width="100%"
                                height="320"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Pineus Tilu Camp Ground Location"
                                class="w-full">
                        </iframe>
                    </div>
                    {{-- <div class="mt-4 bg-white rounded-lg p-4 shadow">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-[#017249]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Pineus Tilu Camp Ground</h4>
                                <p class="text-sm text-gray-600">Pulosari, Pangalengan, Bandung Regency, West Java 40378</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-yellow-500">★★★★★</span>
                                    <span class="text-sm text-gray-600">4.6 • 1,762 reviews</span>
                                </div>
                                <a href="https://www.google.com/maps/place/Pineus+Tilu+Camp+Ground/@-7.1819655,107.542411,17z/data=!3m1!4b1!4m6!3m5!1s0x2e689144cb1ebb5d:0x5e98bae230f55aaf!8m2!3d-7.1819655!4d107.5449859!16s%2Fg%2F11qp2mvpv0?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="text-[#017249] text-sm hover:underline">
                                    View larger map
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Aksesibilitas Section -->
            <div class="mt-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#017249] mb-8" style="font-family: 'Bizon', sans-serif;">AKSESIBILITAS</h2>
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="space-y-4">
                        <!-- Dari Jakarta, Bogor, Depok, Tangerang & Bekasi -->
                        <div class="border-b border-gray-200 pb-4">
                            <button onclick="openModal('modalJabodetabek')" class="w-full text-left hover:text-[#017249] transition duration-300 group">
                                <h4 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-[#017249]">Dari Jakarta, Bogor, Depok, Tangerang & Bekasi</h4>
                                <p class="text-sm text-gray-600">Overview: Akses melalui kereta (regular/Whoosh), bus, travel, atau mobil pribadi menuju Bandung, lalu lanjut ke Pangalengan via Tol Soreang. <span class="text-[#017249] font-semibold">Klik untuk detail lengkap →</span></p>
                            </button>
                        </div>

                        <!-- Dari Cirebon, Yogyakarta & Surabaya -->
                        <div class="border-b border-gray-200 pb-4">
                            <button onclick="openModal('modalJawaTengahTimur')" class="w-full text-left hover:text-[#017249] transition duration-300 group">
                                <h4 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-[#017249]">Dari Cirebon, Yogyakarta & Surabaya</h4>
                                <p class="text-sm text-gray-600">Overview: Akses melalui kereta reguler, bus/travel, atau mobil via Tol Trans-Jawa menuju Bandung, lalu lanjut ke Pangalengan. <span class="text-[#017249] font-semibold">Klik untuk detail lengkap →</span></p>
                            </button>
                        </div>

                        <!-- Dari Luar Negeri -->
                        <div class="border-b border-gray-200 pb-4">
                            <button onclick="openModal('modalLuarNegeri')" class="w-full text-left hover:text-[#017249] transition duration-300 group">
                                <h4 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-[#017249]">Dari Luar Negeri</h4>
                                <p class="text-sm text-gray-600">Overview: Terbang ke Jakarta (CGK) atau Bandung (BDO), lalu lanjut dengan kereta, bus, atau mobil ke Pangalengan. <span class="text-[#017249] font-semibold">Klik untuk detail lengkap →</span></p>
                            </button>
                        </div>

                        <!-- Catatan -->
                        <div class="mt-6 bg-amber-50 border-l-4 border-amber-500 p-4 rounded">
                            <h4 class="font-bold text-gray-800 mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                Catatan
                            </h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Layanan penjemputan langsung dari Bandara Internasional Soekarno–Hatta (CGK) ke Pineus Tilu Camping Ground tersedia dengan tarif <strong>USD 200 per perjalanan</strong>, untuk maksimal 6 penumpang dengan mobil nyaman dan sopir profesional. Harga sudah termasuk mobil, bahan bakar, sopir, biaya parkir, tol, air minum, dan camilan ringan. Untuk pemesanan dan penjadwalan, silakan hubungi admin kami di <a href="https://wa.me/6287735482327" class="text-[#017249] font-semibold hover:underline">+62 877-3548-2327</a> atau <a href="https://wa.me/6281220413424" class="text-[#017249] font-semibold hover:underline">+62 812-2041-3424</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation CTA Section -->
    <x-reservation-cta />

    <!-- Modal Jabodetabek -->
    <div id="modalJabodetabek" class="fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[80vh] overflow-y-auto shadow-2xl">
            <div class="sticky top-0 bg-[#017249] text-white p-6 rounded-t-2xl flex justify-between items-center">
                <h3 class="text-2xl font-bold">Dari Jakarta, Bogor, Depok, Tangerang & Bekasi</h3>
                <button onclick="closeModal('modalJabodetabek')" class="text-white hover:text-gray-200 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Kereta (Regular):</h4>
                    <p class="leading-relaxed">Naik kereta reguler dari stasiun-stasiun di Jakarta, Bogor, Depok, atau Bekasi (seperti Stasiun Gambir atau Pasar Senen) menuju Stasiun Bandung. Dari Stasiun Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Kereta Cepat (Whoosh):</h4>
                    <p class="leading-relaxed">Naik Kereta Cepat Whoosh dari Stasiun Halim (Jakarta) menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Bus / Minibus / Travel:</h4>
                    <p class="leading-relaxed">Dari wilayah Jabodetabek, Anda dapat naik bus antarkota atau minibus langsung ke Bandung — biasanya tiba di Terminal Leuwipanjang (Bandung Barat) atau Terminal Cicaheum (Bandung Timur). Jika menggunakan layanan travel/shuttle, titik turun akan berbeda tergantung perusahaan dan layanan yang dipilih. Dari titik kedatangan di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Mobil:</h4>
                    <p class="leading-relaxed">Berkendara melalui Tol Jakarta–Cikampek, lanjut ke Tol Cipularang, keluar di Soreang, kemudian ikuti rute menuju Pangalengan. Perjalanan dari Bandung ke Pangalengan memakan waktu sekitar 2 jam. Ini merupakan pilihan paling fleksibel untuk keluarga atau rombongan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Jawa Tengah & Timur -->
    <div id="modalJawaTengahTimur" class="fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[80vh] overflow-y-auto shadow-2xl">
            <div class="sticky top-0 bg-[#017249] text-white p-6 rounded-t-2xl flex justify-between items-center">
                <h3 class="text-2xl font-bold">Dari Cirebon, Yogyakarta & Surabaya</h3>
                <button onclick="closeModal('modalJawaTengahTimur')" class="text-white hover:text-gray-200 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Train (Regular):</h4>
                    <p class="leading-relaxed">Naik kereta reguler dari Surabaya (Stasiun Gubeng atau Pasar Turi) ke Bandung, dari Yogyakarta (Stasiun Tugu) ke Bandung, atau dari Cirebon (Stasiun Cirebon) ke Bandung. Setelah tiba di Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Bus / Minibus / Travel:</h4>
                    <p class="leading-relaxed">Anda juga dapat naik bus antarkota atau layanan travel/minibus dari Surabaya ke Bandung, dari Yogyakarta ke Bandung, atau dari Cirebon ke Bandung. Setelah tiba di Bandung, lanjutkan perjalanan dengan transportasi umum lokal atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Mobil:</h4>
                    <p class="leading-relaxed">Bagi yang lebih memilih berkendara sendiri, gunakan Tol Trans-Jawa dari Surabaya atau Yogyakarta, atau Tol Cipali–Cipularang dari Cirebon untuk menuju Bandung. Keluar di Soreang dan lanjutkan ke Pangalengan (sekitar 2 jam).</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Luar Negeri -->
    <div id="modalLuarNegeri" class="fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[80vh] overflow-y-auto shadow-2xl">
            <div class="sticky top-0 bg-[#017249] text-white p-6 rounded-t-2xl flex justify-between items-center">
                <h3 class="text-2xl font-bold">Dari Luar Negeri</h3>
                <button onclick="closeModal('modalLuarNegeri')" class="text-white hover:text-gray-200 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Pesawat + Kereta (Regular):</h4>
                    <p class="leading-relaxed">Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Jika Anda mendarat di Jakarta, naik kereta reguler dari Stasiun Gambir atau Pasar Senen ke Bandung. Dari Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang menuju Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Pesawat + Kereta (Whoosh):</h4>
                    <p class="leading-relaxed">Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari bandara, pindah ke Stasiun Halim (Jakarta) dan naik Kereta Cepat Whoosh menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Pesawat + Bus / Minibus / Travel:</h4>
                    <p class="leading-relaxed">Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari Jakarta, naik bus antarkota atau layanan travel/minibus menuju Bandung (Terminal Leuwipanjang atau Terminal Cicaheum). Setelah tiba di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-[#017249] mb-2">Pesawat + Mobil:</h4>
                    <p class="leading-relaxed">Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Di kedua bandara ini Anda dapat langsung menyewa mobil. Dari Jakarta, berkendara melalui Tol Jakarta–Cikampek dan Tol Cipularang, keluar di Soreang, lalu lanjutkan ke Pangalengan (2 jam dari Bandung).</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.querySelectorAll('[id^="modal"]').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal(this.id);
                }
            });
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('[id^="modal"]').forEach(modal => {
                    if (modal.style.display === 'flex') {
                        closeModal(modal.id);
                    }
                });
            }
        });
    </script>
@endsection
