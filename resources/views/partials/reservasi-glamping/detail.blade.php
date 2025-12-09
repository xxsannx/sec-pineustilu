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

                    <div class="ml-auto text-xs text-gray-500 flex items-center gap-3">
                        <span class="inline-flex items-center gap-1"><span
                                class="w-3 h-3 inline-block rounded-full bg-green-500"></span> Tersedia</span>
                        <span class="inline-flex items-center gap-1"><span
                                class="w-3 h-3 inline-block rounded-full bg-red-400"></span> Tidak tersedia</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-6 map-col flex items-start">
            <div id="mapPlaceholder" class="map-column w-full rounded-lg">
                <span class="text-gray-400">Map (kosong) — klik untuk buka (nanti)</span>
            </div>
        </div>
    </div>
</section>