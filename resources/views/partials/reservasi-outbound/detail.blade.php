<section class="bg-white rounded-xl shadow-md p-6 mb-8 border-2 border-[#0b5a3e]/10">
    <h2 class="text-xl font-semibold text-[#017249]">Detail Reservasi</h2>

    <div class="mt-3">
        <div id="outCatList" class="out-cat-list" role="tablist" aria-label="Pilih Outbound">
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="arung-jeram">ARUNG JERAM</button>
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="flying-fox">FLYING FOX</button>
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="offroad">OFFROAD</button>
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="fun-atv">FUN ATV</button>
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="paintball">PAINTBALL</button>
            <button class="out-cat-btn" role="tab" aria-pressed="false" data-key="team-building">TEAM BUILDING</button>
        </div>

        <div class="out-track" aria-hidden="true">
            <div id="outKnob" class="out-knob" style="left:0;"></div>
        </div>
    </div>

    <div class="out-main mt-2">
        <div class="out-preview">
            <div id="outMainImage" class="main-image">
                <span class="text-gray-400">Pilih aktivitas untuk melihat galeri</span>
            </div>

            <div id="outThumbs" class="thumbs mt-3">
                <!-- Thumbs diisi via JS -->
            </div>

            <div class="out-helper">
                <button id="outInfoBtn" class="underline decoration-dotted">Klik untuk informasi detail</button>
                <span class="info">i</span>
            </div>
        </div>
    </div>
</section>