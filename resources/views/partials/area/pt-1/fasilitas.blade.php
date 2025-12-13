<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-3xl md:text-4xl font-extrabold text-[#017249] text-center mb-10">FASILITAS</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div class="text-center">
                <h4 class="text-lg font-semibold text-[#017249] mb-3">Tenda 4.2</h4>
                <div
                    class="mx-auto w-full max-w-sm h-48 bg-gray-100 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center">
                    <!-- Diagram Tenda 4.2 -->
                    <img src="{{ asset('images/area-galeri/pt-1/4.2.jpg') }}" alt="Diagram Tenda 4.2"
                        class="w-full h-full object-contain rounded-md">
                </div>
            </div>

            <div class="text-center">
                <h4 class="text-lg font-semibold text-[#017249] mb-3">Tenda 4.0</h4>
                <div
                    class="mx-auto w-full max-w-sm h-48 bg-gray-100 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center">
                    <!-- Diagram Tenda 4.0 -->
                    <img src="{{ asset('images/area-galeri/pt-1/4.0.webp') }}" alt="Diagram Tenda 4.0"
                        class="w-full h-full object-contain rounded-md">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div>
                <button type="button"
                    class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white border border-gray-200 rounded shadow-sm"
                    data-target="fac-pri" aria-expanded="false">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center"
                            aria-hidden="true"></span>
                        <span class="font-semibold text-[#065f46]">Fasilitas Pribadi</span>
                    </div>
                    <svg class="w-5 h-5 text-gray-500 ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div id="fac-pri" class="ft-panel mt-3 bg-white border border-gray-100 rounded p-4 hidden">
                    <p class="text-sm text-[#017249] font-semibold mb-3">Fasilitas untuk 4 orang termasuk :</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700">
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>4 Kasur Busa</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>4 Bantal</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>4 Kantong Tidur</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>4 Sarapan</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Meja makan pribadi (Deck 1, 8 & 9)</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Hammock jaring (Deck 1, 2)</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Terminal listrik</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Lampu dalam & luar</li>
                    </ul>
                </div>
            </div>

            <div>
                <button type="button"
                    class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white border border-gray-200 rounded shadow-sm"
                    data-target="fac-gen" aria-expanded="false">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center"
                            aria-hidden="true"></span>
                        <span class="font-semibold text-[#065f46]">Fasilitas Umum</span>
                    </div>
                    <svg class="w-5 h-5 text-gray-500 ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div id="fac-gen" class="ft-panel mt-3 bg-white border border-gray-100 rounded p-4 hidden">
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700">
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Kamar mandi dengan pemanas air</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Air minum & dispenser</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Meja umum berukuran besar</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Api unggun & panggangan</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Panggang BBQ (bahan tidak termasuk)</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>10 Hammock (area umum)</li>
                        <li class="flex items-center gap-3"><span class="w-5 h-5 bg-gray-200 rounded-sm"
                                aria-hidden="true"></span>Tikar bambu</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white border border-gray-100 rounded p-4 flex items-start gap-4">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <h4 class="text-lg font-semibold text-[#065f46]">Barang Tambahan</h4>
                    <a href="{{ route('barang-tambahan') }}"
                        class="inline-flex items-center text-sm text-[#065f46] hover:underline" title="Barang Tambahan">
                        <span class="w-4 h-4 bg-gray-200 rounded-sm mr-2" aria-hidden="true"></span>
                        Detail
                    </a>
                </div>

                <p class="text-sm text-gray-600">
                    <strong>Catatan :</strong><br>
                    Untuk lebih detail mengenai item tambahan seperti penyewaan peralatan atau pembelian tambahan,
                    silakan klik judul di atas.
                </p>
            </div>
        </div>
    </div>
</section>