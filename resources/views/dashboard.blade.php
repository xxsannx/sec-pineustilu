@extends('layouts.app')

@section('title', 'Pineus Tilu - Glamping & Outbound')

@section('content')
    <!-- Hero Section with Video Background Placeholder -->
    <section class="relative bg-gray-800 py-32 px-4 min-h-screen flex items-center justify-center">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    PENGALAMAN TAK TERLUPAKAN DI ALAM
                </h1>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="{{ url('/reservasi/glamping') }}" class="bg-[#017249] hover:bg-[#015a3a] text-white px-10 py-4 rounded-full font-semibold transition duration-300 shadow-lg">
                        Reservasi
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
                        <div class="bg-gray-200 rounded-2xl h-64 w-full"></div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl font-bold text-[#017249] mb-4">TENDA</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nikmati suasana berkemah di tepi sungai dengan perlengkapan yang telah disediakan. Tenda, matras, kantong tidur, dan peralatan yang nyaman siap menjadikan liburan anda praktis dan menyenangkan.
                        </p>
                    </div>
                </div>

                <!-- Ruang Pemulihan -->
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <div class="bg-gray-200 rounded-2xl h-64 w-full"></div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl font-bold text-[#017249] mb-4">RUANG PEMULIHAN</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Dikelilingi oleh udara segar, pohon pinus, dan suara sungai yang menenangkan, Pineus Tilu adalah tempat yang sempurna untuk menyegarkan pikiran dan jiwa Anda dan kembali ke kota dengan energi baru.
                        </p>
                    </div>
                </div>

                <!-- Suasana -->
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <div class="bg-gray-200 rounded-2xl h-64 w-full"></div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl font-bold text-[#017249] mb-4">SUASANA</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Dikelilingi pegunungan pinus dan sungai. Nikmati pengalaman alam yang kualitas dan kabin dengan udara segar dan suasana alam yang menenangkan.
                        </p>
                    </div>
                </div>

                <!-- Api Unggun -->
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <div class="bg-gray-200 rounded-2xl h-64 w-full"></div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl font-bold text-[#017249] mb-4">API UNGGUN</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nikmati malam yang hangat di dekat api unggun di bawah bintang-bintang. Bagikan cerita, tawa, dan kebersamaan di tengah alam untuk momen berkemah yang tak terlupakan.
                        </p>
                    </div>
                </div>

                <!-- Aktivitas -->
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-5/12">
                        <div class="bg-gray-200 rounded-2xl h-64 w-full"></div>
                    </div>
                    <div class="w-full md:w-7/12">
                        <h3 class="text-2xl font-bold text-[#017249] mb-4">AKTIVITAS</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Rasakan serunya arung jeram, flying fox, paintball, ATV & offroad yang seru, serta aktivitas team building seru yang menghadirkan momen petualangan dan kebersamaan tak terlupakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Area Cards Section -->
    <section class="py-20 px-4 bg-[#017249]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-white mb-4">AREA</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mt-12">
                <!-- Pineus Tilu 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gray-200"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pineus Tilu 1</h3>
                        <p class="text-sm text-gray-600 mb-4">Tenda</p>
                        <a href="{{ url('/area/pineus-tilu-1') }}" class="inline-block bg-white border-2 border-[#017249] text-[#017249] px-6 py-2 rounded-full font-semibold hover:bg-[#017249] hover:text-white transition duration-300">
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
                        <a href="{{ url('/area/pineus-tilu-2') }}" class="inline-block bg-white border-2 border-[#017249] text-[#017249] px-6 py-2 rounded-full font-semibold hover:bg-[#017249] hover:text-white transition duration-300">
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
                        <a href="{{ url('/area/pineus-tilu-3-vip') }}" class="inline-block bg-white border-2 border-[#017249] text-[#017249] px-6 py-2 rounded-full font-semibold hover:bg-[#017249] hover:text-white transition duration-300">
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
                        <a href="{{ url('/area/pineus-tilu-4') }}" class="inline-block bg-white border-2 border-[#017249] text-[#017249] px-6 py-2 rounded-full font-semibold hover:bg-[#017249] hover:text-white transition duration-300">
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
                            <a href="{{ url('/area/cabin') }}" class="inline-block bg-white border-2 border-[#017249] text-[#017249] px-6 py-2 rounded-full font-semibold hover:bg-[#017249] hover:text-white transition duration-300">
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
            <h2 class="text-4xl font-bold text-center text-[#017249] mb-12">PETA</h2>
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
                    <p class="text-gray-500">Map/Denah Pineus Tilu akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-[#017249] mb-6">ALAMAT</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Address Info -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">
                        Hutan Rahong, Pulosari, Kec. Pangalengan,<br>
                        Kabupaten Bandung, Jawa Barat 40378
                    </h3>
                    <p class="text-gray-700 leading-relaxed mt-6">
                        "Pineus Tilu terletak di Hutan Rahong, dikelilingi pohon pinus dan sungai, menawarkan pengalaman berkemah dengan ruang tanpa batas."
                    </p>
                </div>

                <!-- Right Column - Google Maps Embed -->
                <div>
                    <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-lg">
                        <div class="h-80 flex items-center justify-center">
                            <p class="text-gray-500">Google Maps akan ditampilkan di sini</p>
                        </div>
                    </div>
                    <div class="mt-4 bg-white rounded-lg p-4 shadow">
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
                                <a href="#" class="text-[#017249] text-sm hover:underline">View larger map</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aksesibilitas Section -->
            <div class="mt-16">
                <h2 class="text-4xl font-bold text-[#017249] mb-8">AKSESIBILITAS</h2>
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Jalur Keluar Pintu Gerbang Bandung:</h4>
                            <p>Dari Ciwidey, Bandung, perjalanan ke Pineus Tilu memakan waktu sekitar 1,5-2 jam, melewati jalur dengan pemandangan pegunungan yang indah dan udara sejuk khas Bandung.</p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Transportasi Berbayar:</h4>
                            <p>Pengunjung dapat menggunakan transportasi umum atau rental mobil dari Bandung. Jalur menuju lokasi relatif mudah diakses dengan kendaraan pribadi maupun tour travel. Pastikan kendaraan dalam kondisi baik karena sebagian jalan menuju lokasi berupa jalur pegunungan.</p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Area Parkir Pribadi:</h4>
                            <p>Pineus Tilu menyediakan area parkir yang luas dan aman untuk kendaraan pribadi pengunjung, baik mobil maupun motor. Area parkir terletak tidak jauh dari area camping utama sehingga memudahkan akses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
