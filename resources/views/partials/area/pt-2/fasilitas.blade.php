<section class="py-16 bg-white text-gray-800" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
  <div class="max-w-6xl mx-auto px-6">
    <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-10 text-[#065f46]" data-aos="fade-down" data-aos-duration="700" style="font-family: 'Bizon', sans-serif;">FASILITAS</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="text-center">
        <h4 class="text-lg font-semibold text-gray-900 mb-3">Tenda 4.2</h4>
        <div class="mx-auto w-full max-w-sm h-48 bg-white rounded-2xl overflow-hidden flex items-center justify-center border-2 border-gray-200 shadow">
          <img src="{{ asset('images/area-galeri/pt-1/4.2.jpg') }}" alt="Diagram Tenda 4.2" class="w-full h-full object-contain rounded-md" loading="lazy">
        </div>
      </div>

      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="140" class="text-center">
        <h4 class="text-lg font-semibold text-gray-900 mb-3">Tenda 4.0</h4>
        <div class="mx-auto w-full max-w-sm h-48 bg-white rounded-2xl overflow-hidden flex items-center justify-center border-2 border-gray-200 shadow">
          <img src="{{ asset('images/area-galeri/pt-1/4.0.webp') }}" alt="Diagram Tenda 4.0" class="w-full h-full object-contain rounded-md" loading="lazy">
        </div>
      </div>
    </div>

    <div class="bg-[#0b6a48] rounded-2xl p-6 md:p-8 shadow-xl border border-[#074b36]">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="160">
          <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-2.5 bg-[#0e6f4b] border border-[#074b36] rounded-2xl shadow-sm" data-target="fac-pri" aria-expanded="false" aria-controls="fac-pri">
            <div class="flex items-center gap-3">
              <span class="w-8 h-8 bg-[#074b36] rounded flex items-center justify-center" aria-hidden="true"></span>
              <span class="font-semibold text-white">Fasilitas Pribadi</span>
            </div>
            <svg class="w-5 h-5 text-green-100 ft-icon transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <div id="fac-pri" class="ft-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 mt-2 bg-[#0f8057] border border-[#0a5c3e] rounded-2xl p-4" aria-hidden="true">
            <p class="text-sm text-green-100 font-semibold mb-3">Fasilitas untuk 4 orang termasuk :</p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-green-100">
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>4 Kasur Busa</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>4 Bantal</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>4 Kantong Tidur</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>4 Sarapan</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Meja makan pribadi (Deck 1, 8 & 9)</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Hammock jaring (Deck 1, 2)</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Terminal listrik</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Lampu dalam & luar</li>
            </ul>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
          <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-2.5 bg-[#0e6f4b] border border-[#074b36] rounded-2xl shadow-sm" data-target="fac-gen" aria-expanded="false" aria-controls="fac-gen">
            <div class="flex items-center gap-3">
              <span class="w-8 h-8 bg-[#074b36] rounded flex items-center justify-center" aria-hidden="true"></span>
              <span class="font-semibold text-white">Fasilitas Umum</span>
            </div>
            <svg class="w-5 h-5 text-green-100 ft-icon transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <div id="fac-gen" class="ft-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 mt-2 bg-[#0f8057] border border-[#0a5c3e] rounded-2xl p-4" aria-hidden="true">
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-green-100">
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Kamar mandi dengan pemanas air</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Air minum & dispenser</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Meja umum berukuran besar</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Api unggun & panggangan</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Panggang BBQ (bahan tidak termasuk)</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>10 Hammock (area umum)</li>
              <li class="flex items-center gap-3"><span class="w-5 h-5 bg-[#074b36] rounded-sm" aria-hidden="true"></span>Tikar bambu</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="mt-6 bg-[#0b6a48] rounded-2xl p-6 md:p-8 shadow-inner border border-[#074b36]">
        <div class="flex items-center gap-3 mb-2">
          <h4 class="text-lg font-semibold text-white">Barang Tambahan</h4>
          <a href="{{ route('barang-tambahan') }}" class="inline-flex items-center text-sm text-green-100 hover:underline" title="Barang Tambahan">
            <span class="w-4 h-4 bg-[#074b36] rounded-sm mr-2" aria-hidden="true"></span>
            Detail
          </a>
        </div>

        <p class="text-sm text-green-100">
          <strong>Catatan :</strong><br>
          Untuk lebih detail mengenai item tambahan seperti penyewaan peralatan atau pembelian tambahan,
          silakan klik judul di atas.
        </p>
      </div>
    </div>
  </div>
</section>