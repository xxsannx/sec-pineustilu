<!-- Modal Luar Negeri -->
<div id="modalLuarNegeri" class="fixed inset-0 bg-white/20 backdrop-blur-md z-50 flex items-center justify-center p-4" style="display: none;">
    <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl animate-modal">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b-2 border-gray-100 p-6 md:p-8 flex justify-between items-start z-10">
            <div>
                <div class="flex items-center gap-4 mb-2">
                    <div class="bg-gradient-to-br from-[#017249] to-[#015a3a] p-3 rounded-2xl shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Luar Negeri</h3>
                        <p class="text-gray-500 text-sm mt-1">Via Bandara Internasional</p>
                    </div>
                </div>
            </div>
            <button onclick="closeModal('modalLuarNegeri')" class="bg-gray-100 hover:bg-[#017249] hover:text-white p-2.5 rounded-full transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Content -->
        <div class="p-6 md:p-8 space-y-6 overflow-y-auto max-h-[calc(85vh-120px)]">
            <!-- Pesawat + Kereta Regular -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-sky-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-sky-500 to-sky-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Pesawat + Kereta (Regular)</h4>
                            <span class="bg-sky-100 text-sky-700 text-xs font-semibold px-3 py-1 rounded-full">Internasional</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Jika Anda mendarat di Jakarta, naik kereta reguler dari Stasiun Gambir atau Pasar Senen ke Bandung. Dari Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang menuju Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Penerbangan + Transit</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Terjangkau</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pesawat + Whoosh -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-orange-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Pesawat + Kereta Cepat (Whoosh)</h4>
                            <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full">Super Cepat</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari bandara, pindah ke Stasiun Halim (Jakarta) dan naik Kereta Cepat Whoosh menuju Stasiun Padalarang (wilayah Bandung). Dari Padalarang, lanjut ke Stasiun Bandung menggunakan kereta feeder gratis yang disediakan oleh Whoosh. Dari Stasiun Bandung, Anda dapat melanjutkan perjalanan dengan transportasi umum lokal, travel/minibus, atau menyewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>Kereta Cepat</span>
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

            <!-- Pesawat + Bus -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-teal-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Pesawat + Bus / Travel</h4>
                            <span class="bg-teal-100 text-teal-700 text-xs font-semibold px-3 py-1 rounded-full">Praktis</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Terbang ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta). Dari Jakarta, naik bus antarkota atau layanan travel/minibus menuju Bandung (Terminal Leuwipanjang atau Terminal Cicaheum). Setelah tiba di Bandung, lanjutkan dengan transportasi umum lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Penerbangan + Bus</span>
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

            <!-- Pesawat + Mobil -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-indigo-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Pesawat + Mobil Rental</h4>
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full">Fleksibel</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Terbanglah ke Bandara Internasional Soekarno–Hatta (CGK, Jakarta) atau Bandara Internasional Husein Sastranegara (BDO, Bandung). Di kedua bandara ini Anda dapat langsung menyewa mobil. Dari Jakarta, berkendara melalui Tol Jakarta–Cikampek dan Tol Cipularang, keluar di Soreang, lalu lanjutkan ke Pangalengan (2 jam dari Bandung).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>Sewa Mobil Langsung</span>
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
