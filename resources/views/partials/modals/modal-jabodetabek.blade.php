<!-- Modal Jabodetabek -->
<div id="modalJabodetabek" class="fixed inset-0 backdrop-blur-sm bg-black/20 z-50 items-center justify-center p-4 hidden">
    <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl max-w-5xl w-full max-h-[90vh] overflow-hidden shadow-2xl border-2 border-gray-100">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b-2 border-gray-100 p-6 md:p-8 flex justify-between items-center z-10 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="bg-gradient-to-br from-[#017249] to-[#015a3a] p-3 rounded-2xl shadow-lg">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800" style="font-family: 'Bizon', sans-serif;">Jakarta & Sekitarnya</h3>
                    <p class="text-gray-500 text-sm mt-1">Bogor • Depok • Tangerang • Bekasi</p>
                </div>
            </div>
            <button data-close-modal="jabodetabek" class="bg-gray-100 hover:bg-[#017249] hover:text-white text-gray-600 p-3 rounded-full transition-all duration-300 hover:rotate-90 hover:scale-110 shadow-md cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Content -->
        <div class="p-6 md:p-8 space-y-5 overflow-y-auto max-h-[calc(90vh-140px)]">
            <!-- Kereta Regular -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-blue-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3.5h6M3 8h18M4 8v8a2 2 0 002 2h12a2 2 0 002-2V8M8 18v2m8-2v2m-6-8h4"/>
                            <rect x="7" y="3" width="10" height="5" rx="1" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Kereta (Regular)</h4>
                            <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Ekonomis</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Naik kereta reguler dari stasiun-stasiun di Jakarta, Bogor, Depok, atau Bekasi (seperti Stasiun Gambir atau Pasar Senen) menuju Stasiun Bandung. Dari Stasiun Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~3-4 jam</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Terjangkau</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kereta Cepat Whoosh -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-red-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-red-500 to-red-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Kereta Cepat (Whoosh)</h4>
                            <span class="bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">Cepat</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Naik Kereta Cepat Whoosh dari Stasiun Halim (Jakarta) menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~2-3 jam</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                                <span>Modern & Nyaman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bus / Travel -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-green-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Bus / Minibus / Travel</h4>
                            <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Praktis</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Dari wilayah Jabodetabek, Anda dapat naik bus antarkota atau minibus langsung ke Bandung — biasanya tiba di Terminal Leuwipanjang (Bandung Barat) atau Terminal Cicaheum (Bandung Timur). Jika menggunakan layanan travel/shuttle, titik turun akan berbeda tergantung perusahaan dan layanan yang dipilih. Dari titik kedatangan di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~3-4 jam</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Door to Door</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobil Pribadi -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-purple-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.5 17h13m-13 0a2 2 0 01-2-2V9.5A2.5 2.5 0 016 7h12a2.5 2.5 0 012.5 2.5V15a2 2 0 01-2 2m-13 0a2 2 0 110-4m13 4a2 2 0 110-4M7 7V5a2 2 0 012-2h6a2 2 0 012 2v2"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Mobil Pribadi</h4>
                            <span class="bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Fleksibel</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Berkendara melalui Tol Jakarta–Cikampek, lanjut ke Tol Cipularang, keluar di Soreang, kemudian ikuti rute menuju Pangalengan. Perjalanan dari Bandung ke Pangalengan memakan waktu sekitar 2 jam. Ini merupakan pilihan paling fleksibel untuk keluarga atau rombongan.
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~3-4 jam</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>Untuk Rombongan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
