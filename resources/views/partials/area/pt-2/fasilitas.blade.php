<section class="py-16 bg-white text-gray-800" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
  <div class="max-w-6xl mx-auto px-6">
    <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-10 text-[#065f46]" data-aos="fade-down" data-aos-duration="700" style="font-family: 'Bizon', sans-serif;">FASILITAS</h3>

    @php
    use Illuminate\Support\Str;
    $iconExts = ['svg','png','webp','jpg','jpeg'];
    $iconDir = public_path('images/icons/area');
    $available = is_dir($iconDir) ? array_values(array_diff(scandir($iconDir), ['.','..'])) : [];
    $findIcon = function($label) use($iconExts, $iconDir, $available) {
      $try = [];
      $try[] = Str::slug($label);
      $noParen = preg_replace('/\s*\([^)]*\)/', '', $label);
      $try[] = Str::slug($noParen);
      $noDigits = preg_replace('/\b\d+\b/', '', $label);
      $try[] = Str::slug($noDigits);
      $try[] = Str::slug(preg_replace('/\s*\([^)]*\)/', '', $noDigits));

      foreach ($try as $t) {
        $t = trim($t, '-');
        if ($t === '') continue;
        foreach ($iconExts as $e) {
          $file = $t . '.' . $e;
          if (in_array($file, $available)) return 'images/icons/area/' . $file;
        }
      }

      // keyword fallback
      $clean = preg_replace('/[^A-Za-z0-9 ]/', ' ', $label);
      $words = array_filter(array_map('trim', explode(' ', $clean)), function($w){return strlen($w) > 2;});
      foreach ($available as $file) {
        $lower = strtolower($file);
        foreach ($words as $w) {
          if (strpos($lower, strtolower($w)) !== false) return 'images/icons/area/' . $file;
        }
      }

      return null;
    };
    // secondary icon folder (global/common icons) - prefer these for headers
    $globalDir = public_path('images/icons/global');
    $globalAvailable = is_dir($globalDir) ? array_values(array_diff(scandir($globalDir), ['.','..'])) : [];
    $findIconGlobal = function($label) use($iconExts, $globalAvailable) {
      $try = [];
      $try[] = Str::slug($label);
      $noParen = preg_replace('/\s*\([^)]*\)/', '', $label);
      $try[] = Str::slug($noParen);
      $noDigits = preg_replace('/\b\d+\b/', '', $label);
      $try[] = Str::slug($noDigits);
      $try[] = Str::slug(preg_replace('/\s*\([^)]*\)/', '', $noDigits));

      foreach ($try as $t) {
        $t = trim($t, '-');
        if ($t === '') continue;
        foreach ($iconExts as $e) {
          $file = $t . '.' . $e;
          if (in_array($file, $globalAvailable)) return 'images/icons/global/' . $file;
        }
      }

      // keyword fallback
      $clean = preg_replace('/[^A-Za-z0-9 ]/', ' ', $label);
      $words = array_filter(array_map('trim', explode(' ', $clean)), function($w){return strlen($w) > 2;});
      foreach ($globalAvailable as $file) {
        $lower = strtolower($file);
        foreach ($words as $w) {
          if (strpos($lower, strtolower($w)) !== false) return 'images/icons/global/' . $file;
        }
      }

      return null;
    };
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="text-center">
        <h4 class="text-lg font-semibold text-gray-900 mb-3">Tenda 4.2</h4>
        <div class="mx-auto w-full max-w-sm md:max-w-lg lg:max-w-xl bg-white rounded-2xl overflow-hidden flex items-center justify-center border-2 border-gray-200 shadow aspect-[16/9]">
          <img src="{{ asset('images/tent/4.2.jpg') }}" alt="Diagram Tenda 4.2" class="w-full h-full object-contain rounded-md" loading="lazy">
        </div>
      </div>

      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="140" class="text-center">
        <h4 class="text-lg font-semibold text-gray-900 mb-3">Tenda 4.0</h4>
        <div class="mx-auto w-full max-w-sm md:max-w-lg lg:max-w-xl bg-white rounded-2xl overflow-hidden flex items-center justify-center border-2 border-gray-200 shadow aspect-[16/9]">
          <img src="{{ asset('images/tent/4.0.webp') }}" alt="Diagram Tenda 4.0" class="w-full h-full object-contain rounded-md" loading="lazy">
        </div>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-200">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="160">
          <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-2.5 bg-white border border-gray-200 rounded-2xl shadow-sm" data-target="fac-pri" aria-expanded="false" aria-controls="fac-pri">
              <div class="flex items-center gap-3">
              @php
                $hdrIcon = $findIconGlobal('Tenda') ?? $findIconGlobal('Kasur Busa');
                if (!$hdrIcon && file_exists(public_path('images/icons/area/pribadi.png'))) {
                  $hdrIcon = 'images/icons/area/pribadi.png';
                }
                if (!$hdrIcon) {
                  $hdrIcon = $findIcon('Tenda') ?? $findIcon('Kasur Busa');
                }
              @endphp
              <span class="w-8 h-8 bg-white rounded flex items-center justify-center overflow-hidden" aria-hidden="true">
                @if($hdrIcon)
                  <img src="{{ asset($hdrIcon) }}" alt="" class="w-6 h-6 object-contain">
                @else
                  <span class="w-4 h-4 bg-[#065f46] rounded-sm"></span>
                @endif
              </span>
              <span class="font-semibold text-[#065f46]">Fasilitas Pribadi</span>
            </div>
            <svg class="w-5 h-5 text-[#065f46] ft-icon transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <div id="fac-pri" class="ft-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 mt-2 bg-white border border-gray-200 rounded-2xl p-6 md:p-8 shadow-sm text-gray-800" aria-hidden="true">
            <p class="text-base md:text-lg font-semibold mb-4">Fasilitas untuk 4 orang termasuk :</p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-base md:text-lg text-gray-800">
              <li class="flex items-center gap-4">@php $ic = $findIcon('4 Kasur Busa'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif 4 Kasur Busa</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('4 Bantal'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif 4 Bantal</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('4 Kantong Tidur'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif 4 Kantong Tidur</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('4 Sarapan'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif 4 Sarapan</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Meja makan pribadi (Deck 1, 8 & 9)'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Meja makan pribadi (Deck 1, 8 & 9)</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Hammock jaring (Deck 1, 2)'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Hammock jaring (Deck 1, 2)</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Terminal listrik'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Terminal listrik</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Lampu dalam & luar'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Lampu dalam & luar</li>
            </ul>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
          <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-2.5 bg-white border border-gray-200 rounded-2xl shadow-sm" data-target="fac-gen" aria-expanded="false" aria-controls="fac-gen">
              <div class="flex items-center gap-3">
              @php
                $hdrIcon = $findIconGlobal('Meja umum') ?? $findIconGlobal('meja-umum');
                if (!$hdrIcon && file_exists(public_path('images/icons/area/umum.png'))) {
                  $hdrIcon = 'images/icons/area/umum.png';
                }
                if (!$hdrIcon) {
                  $hdrIcon = $findIcon('Meja umum') ?? $findIcon('meja-umum');
                }
              @endphp
              <span class="w-8 h-8 bg-white rounded flex items-center justify-center overflow-hidden" aria-hidden="true">
                @if($hdrIcon)
                  <img src="{{ asset($hdrIcon) }}" alt="" class="w-6 h-6 object-contain">
                @else
                  <span class="w-4 h-4 bg-[#065f46] rounded-sm"></span>
                @endif
              </span>
              <span class="font-semibold text-[#065f46]">Fasilitas Umum</span>
            </div>
            <svg class="w-5 h-5 text-[#065f46] ft-icon transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <div id="fac-gen" class="ft-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 mt-2 bg-white border border-gray-200 rounded-2xl p-6 md:p-8 shadow-sm text-gray-800" aria-hidden="true">
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-base md:text-lg text-gray-800">
              <li class="flex items-center gap-4">@php $ic = $findIcon('Kamar mandi dengan pemanas air'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Kamar mandi dengan pemanas air</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Air minum & Dispenser'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Air minum & dispenser</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Meja umum berukuran besar'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Meja umum berukuran besar</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Api unggun & panggangan'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Api unggun & panggangan</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Panggang BBQ'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Panggang BBQ (bahan tidak termasuk)</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('10 Hammock'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif 10 Hammock (area umum)</li>
              <li class="flex items-center gap-4">@php $ic = $findIcon('Tikar bambu'); @endphp @if($ic)<img src="{{ asset($ic) }}" alt="" class="w-6 h-6 md:w-7 md:h-7 object-contain" aria-hidden="true">@else<span class="w-6 h-6 bg-[#074b36] rounded-sm" aria-hidden="true"></span>@endif Tikar bambu</li>
            </ul>
          </div>
        </div>
      </div>

          <div class="mt-6 bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-gray-200">
        <div class="flex items-center gap-3 mb-2">
          @php
            $addIcon = $findIconGlobal('Peralatan tambahan') ?? $findIconGlobal('peralatan-bbq') ?? $findIconGlobal('pantry');
            if (!$addIcon && file_exists(public_path('images/icons/area/barang-tambahan.png'))) {
              $addIcon = 'images/icons/area/barang-tambahan.png';
            }
            if (!$addIcon) {
              $addIcon = $findIcon('Peralatan tambahan') ?? $findIcon('peralatan-bbq') ?? $findIcon('pantry');
            }
          @endphp
          <h4 class="text-lg font-semibold text-gray-800">Barang Tambahan</h4>
          <a href="{{ route('barang-tambahan') }}" class="inline-flex items-center text-sm text-[#065f46] hover:underline" title="Barang Tambahan">
            <span class="w-4 h-4 bg-white rounded-sm mr-2 overflow-hidden inline-flex items-center justify-center" aria-hidden="true">
              @if($addIcon)
                <img src="{{ asset($addIcon) }}" alt="" class="w-4 h-4 object-contain">
              @else
                <span class="w-3 h-3 bg-[#065f46] rounded-sm"></span>
              @endif
            </span>
            Detail
          </a>
        </div>

        <p class="text-sm text-gray-700">
          <strong>Catatan :</strong><br>
          Untuk lebih detail mengenai item tambahan seperti penyewaan peralatan atau pembelian tambahan,
          silakan klik judul di atas.
        </p>
      </div>
    </div>
  </div>
</section>