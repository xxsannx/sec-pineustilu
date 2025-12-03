<!-- Modal Jawa Tengah & Timur -->
<div id="modalJawaTengahTimur" class="fixed inset-0 bg-white/20 backdrop-blur-md z-50 flex items-center justify-center p-4" style="display: none;">
    <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl animate-modal">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b-2 border-gray-100 p-6 md:p-8 flex justify-between items-start z-10">
            <div>
                <div class="flex items-center gap-4 mb-2">
                    <div class="bg-gradient-to-br from-[#017249] to-[#015a3a] p-3 rounded-2xl shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Jawa Tengah & Timur</h3>
                        <p class="text-gray-500 text-sm mt-1">Cirebon • Yogyakarta • Surabaya</p>
                    </div>
                </div>
            </div>
            <button onclick="closeModal('modalJawaTengahTimur')" class="bg-gray-100 hover:bg-[#017249] hover:text-white p-2.5 rounded-full transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Content -->
        <div class="p-6 md:p-8 space-y-6 overflow-y-auto max-h-[calc(85vh-120px)]">
            <!-- Kereta Regular -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-gray-100 hover:border-blue-300">
                <div class="flex items-start gap-5">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 rounded-xl flex-shrink-0 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Kereta (Regular)</h4>
                            <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Ekonomis</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Naik kereta reguler dari Surabaya (Stasiun Gubeng atau Pasar Turi) ke Bandung, dari Yogyakarta (Stasiun Tugu) ke Bandung, atau dari Cirebon (Stasiun Cirebon) ke Bandung. Setelah tiba di Bandung, lanjutkan dengan transportasi lokal, travel/minibus, atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~6-8 jam</span>
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
                            Anda juga dapat naik bus antarkota atau layanan travel/minibus dari Surabaya ke Bandung, dari Yogyakarta ke Bandung, atau dari Cirebon ke Bandung. Setelah tiba di Bandung, lanjutkan perjalanan dengan transportasi umum lokal atau sewa mobil melalui Tol Soreang untuk mencapai Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~7-10 jam</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-bold text-xl text-gray-800">Mobil Pribadi</h4>
                            <span class="bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Fleksibel</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Bagi yang lebih memilih berkendara sendiri, gunakan Tol Trans-Jawa dari Surabaya atau Yogyakarta, atau Tol Cipali–Cipularang dari Cirebon untuk menuju Bandung. Keluar di Soreang dan lanjutkan ke Pangalengan (sekitar 2 jam).
                        </p>
                        <div class="flex items-center gap-4 mt-4 text-xs text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>~6-8 jam</span>
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
