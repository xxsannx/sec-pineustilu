<section class="bg-white rounded-xl shadow-md p-6 mb-8 border-2 border-[#0b5a3e]/10">
    <h2 class="text-xl font-semibold text-[#017249] mb-4">Detail Reservasi</h2>

    <div class="w-full pb-4 mb-6">
        <div id="outSelector">
            <!-- Track + knob disamakan style dengan glamping -->
            <div class="out-track rounded-full relative h-2 bg-[#E7F4EF]" aria-hidden="true">
                <span id="outKnob"
                    class="absolute -top-2 left-0 w-5 h-5 bg-[#017249] rounded-full shadow transition-all"></span>
            </div>

            <!-- Items kategori (pill buttons, seragam glamping) -->
            <div id="outCatList" class="out-cat-list" role="tablist" aria-label="Pilih Outbound">
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="arung-jeram">ARUNG JERAM</button>
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="flying-fox">FLYING FOX</button>
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="offroad">OFFROAD</button>
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="fun-atv">FUN ATV</button>
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="paintball">PAINTBALL</button>
                <button type="button"
                    class="out-cat-btn px-5 py-3 rounded-xl font-extrabold text-[#017249] bg-[#E7F4EF] hover:bg-[#d9efe7] focus:outline-none focus:ring-2 focus:ring-[#017249]/40 transition"
                    role="tab" aria-pressed="false" data-key="team-building">TEAM BUILDING</button>
            </div>
        </div>
    </div>

    <!-- Tanpa map: satu kolom galeri, seragam dengan glamping -->
    <div class="grid grid-cols-1 gap-6 items-start mt-4">
        <div class="gallery-col">
            <div id="outMainImage" class="rounded-2xl bg-[#F2F7F5] p-8 text-center text-gray-400">
                Pilih aktivitas untuk melihat galeri
            </div>
            <div id="outThumbs" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>

            <div class="flex items-center gap-2 text-sm text-[#017249] mt-4">
                <button id="outInfoBtn" type="button" class="flex items-center gap-2 underline decoration-dotted">
                    Klik untuk informasi detail
                    <span
                        class="inline-flex items-center justify-center w-5 h-5 text-xs bg-[#E7F4EF] text-[#017249] rounded-full">i</span>
                </button>
            </div>
        </div>
    </div>
</section>