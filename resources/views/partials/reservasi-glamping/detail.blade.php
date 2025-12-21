<section class="bg-white rounded-xl shadow-md p-6 mb-8 border-2 border-[#0b5a3e]/10">
    <h2 class="text-xl font-semibold text-[#017249] mb-4">Detail Reservasi</h2>

    <div class="w-full pb-4 mb-6">
        <div id="areaSelector">
            <div class="area-track rounded-full relative" id="areaTrack" aria-hidden="true">
                <div id="areaKnob" class="area-knob" style="left:0;"></div>
            </div>

            <div id="areaItems" class="area-items" role="tablist" aria-label="Pilih Area">
                <button role="tab" aria-pressed="false" data-area="pineus-tilu-1" class="area-item">
                    <div class="text-xs">PINEUS TILU</div>
                    <div class="num">1</div>
                </button>
                <button role="tab" aria-pressed="false" data-area="pineus-tilu-2" class="area-item">
                    <div class="text-xs">PINEUS TILU</div>
                    <div class="num">2</div>
                </button>
                <button role="tab" aria-pressed="false" data-area="pineus-tilu-3-vip" class="area-item">
                    <div class="text-xs">PINEUS TILU</div>
                    <div class="num">3 <span class="text-xs font-medium">VIP</span></div>
                </button>
                <button role="tab" aria-pressed="false" data-area="pineus-tilu-4" class="area-item">
                    <div class="text-xs">PINEUS TILU</div>
                    <div class="num">4</div>
                </button>
                <button role="tab" aria-pressed="false" data-area="pineus-tilu-cabin" class="area-item">
                    <div class="text-xs">PINEUS TILU</div>
                    <span class="num">CABIN</span>
                </button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start mt-4">
        <div class="md:col-span-6 gallery-col">
            <div class="gallery-inner">
                <div id="mainImage" class="main-preview rounded-lg">
                    <span class="text-gray-400">PINEUS TILU 1 — galeri kosong</span>
                </div>

                <div class="thumbs" id="thumbs">
                    <div class="thumb rounded-md">Thumb 1</div>
                    <div class="thumb rounded-md">Thumb 2</div>
                    <div class="thumb rounded-md">Thumb 3</div>
                    <div class="thumb rounded-md">Thumb 4</div>
                </div>

                <div class="flex items-center gap-2 text-sm text-[#017249]">
                    <button id="infoBtn"
                        class="flex items-center gap-2 underline decoration-dotted text-sm text-[#017249]">
                        Klik untuk informasi detail
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 rounded-full border border-green-200 text-[#017249]">i</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="md:col-span-6 map-col flex items-start">
            <div id="mapPlaceholder" class="map-column w-full rounded-lg">
                <span class="text-gray-400">Map (kosong) — klik untuk buka (nanti)</span>
            </div>
        </div>
    </div>

    <!-- Keterangan tersedia / tidak berada di atas ringkasan -->
    <div class="mt-6">
        <div class="bg-white rounded-xl shadow-md p-6 border-2 border-[#0b5a3e]/10">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-3 text-sm text-[#017249]">
                    <span class="inline-flex items-center gap-1"><span
                            class="w-3 h-3 inline-block rounded-full bg-green-500"></span> Tersedia</span>
                    <span class="inline-flex items-center gap-1"><span
                            class="w-3 h-3 inline-block rounded-full bg-red-400"></span> Tidak tersedia</span>
                </div>
            </div>

            <!-- Di sini kita pindahkan input input ringkasan (tetap terhubung ke form melalui atribut form="reservasiForm") -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="text-sm font-semibold text-[#017249] mb-2">Ringkasan Pilihan</h3>

                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm text-gray-600 mb-2" for="checkin">Tanggal Check-In</label>
                                <input id="checkin" name="checkin" type="date" form="reservasiForm"
                                    class="w-full rounded-lg border px-3 py-2 bg-white" />
                            </div>
                            <div>
                                <label class="block text-sm text-gray-600 mb-2" for="checkout">Tanggal Check-Out</label>
                                <input id="checkout" name="checkout" type="date" form="reservasiForm"
                                    class="w-full rounded-lg border px-3 py-2 bg-white" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm text-gray-600 mb-2" for="selectedArea">Area Yang Dipilih</label>
                            <input id="selectedArea" name="selectedArea" type="text" readonly form="reservasiForm"
                                class="w-full rounded-lg border px-3 py-2 bg-gray-50" value="PINEUS TILU 1">
                        </div>

                        <div>
                            <label class="block text-sm text-gray-600 mb-2" for="selectedUnit">Unit Yang Dipilih</label>
                            <input id="selectedUnit" name="selectedUnit" type="text" readonly form="reservasiForm"
                                class="w-full rounded-lg border px-3 py-2 bg-gray-50" value="DECK 1 (dummy)">
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-[#017249] mb-2">Info</h3>
                    <div class="text-sm text-gray-600">
                        Pilih area dan tanggal untuk melihat ketersediaan unit. Ringkasan akan diperbarui otomatis.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>