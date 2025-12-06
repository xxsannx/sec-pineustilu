@extends('layouts.app')

@section('title', 'Pineus Tilu 1 - Pineus Tilu - Glamping & Outbound')

@section('content')
    <!-- HERO -->
    <section class="relative bg-gray-800 py-32 px-4 min-h-screen flex items-center justify-center">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight"
                    style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    PINEUS TILU I
                </h1>
            </div>
        </div>
    </section>

    <!-- SKEMA DECK + DESKRIPSI -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-8">
                <p class="text-green-700 font-medium">
                    Rasakan pengalaman menginap paling dekat dengan alam di Pineus Tilu I, yang terletak tepat di tepi
                    sungai. Cocok untuk yang ingin bersantai sambil menikmati suara aliran air dan panorama sungai hanya
                    beberapa
                    langkah dari tempat Anda.
                </p>
            </div>

            <h2 class="text-2xl md:text-3xl font-extrabold text-[#017249] text-center mb-6">SKEMA DECK</h2>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex flex-col items-center">
                    <!-- Placeholder box untuk skema deck (kosong sementara) -->
                    <div class="w-full max-w-2xl h-64 md:h-80 lg:h-96 bg-gray-100 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center"
                        role="img" aria-label="Placeholder untuk skema deck (kosong)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HARGA & KAPASITAS (dengan toggle group) -->
    <section class="py-16 bg-[#0b6a48] text-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 items-start">
                <!-- HARGA (kiri) -->
                <div>
                    <h3 class="text-3xl font-extrabold mb-6 tracking-wide">HARGA</h3>

                    <div class="space-y-3 mb-6">
                        <div>
                            <button type="button"
                                class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                                data-target="price-weekdays" data-group="price" aria-expanded="false">
                                <span class="font-semibold">Weekdays</span>
                                <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div id="price-weekdays" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                                <p class="text-sm leading-relaxed">
                                    Deck 1, 2, 8, 9 (Tenda 4.2)
                                    <span class="font-bold">IDR 750.000</span>
                                    /Malam
                                </p>
                                <p class="text-sm leading-relaxed mt-1">
                                    Deck 3, 4, 5, 6, 7 (Tenda 4.0)
                                    <span class="font-bold">IDR 650.000</span>
                                    /Malam
                                </p>
                            </div>
                        </div>

                        <div>
                            <button type="button"
                                class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                                data-target="price-weekend" data-group="price" aria-expanded="false">
                                <span class="font-semibold">Weekend</span>
                                <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div id="price-weekend" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                                <p class="text-sm leading-relaxed">
                                    Deck 1, 2, 8, 9 (Tenda 4.2)
                                    <span class="font-bold">IDR 950.000</span>
                                    /Malam
                                </p>
                                <p class="text-sm leading-relaxed mt-1">
                                    Deck 3, 4, 5, 6, 7 (Tenda 4.0)
                                    <span class="font-bold">IDR 900.000</span>
                                    /Malam
                                </p>
                            </div>
                        </div>

                        <div>
                            <button type="button"
                                class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                                data-target="price-high" data-group="price" aria-expanded="false">
                                <span class="font-semibold">High Season</span>
                                <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div id="price-high" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                                <p class="text-sm leading-relaxed">
                                    Semua Deck
                                    <span class="font-bold">IDR 1.100.000</span>
                                    /Malam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAPASITAS (kanan) -->
                <div>
                    <h3 class="text-3xl font-extrabold mb-6 tracking-wide">KAPASITAS</h3>

                    <div class="space-y-3 mb-6">
                        <div>
                            <button type="button"
                                class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                                data-target="cap-standard" data-group="capacity" aria-expanded="false">
                                <span class="font-semibold">Standar Kapasitas</span>
                                <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div id="cap-standard" class="cap-panel bg-white/5 rounded p-4 mt-2 hidden">
                                <p class="text-sm mb-2"><span class="font-semibold">Standar 4 orang</span> — <span
                                        class="font-semibold">Maksimal 6 orang</span></p>
                                <p class="text-sm italic">Tamu di atas 2 tahun dikenakan biaya.</p>
                            </div>
                        </div>

                        <div>
                            <button type="button"
                                class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                                data-target="cap-additional" data-group="capacity" aria-expanded="false">
                                <span class="font-semibold">Fasilitas Tambahan</span>
                                <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor">
                                    <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div id="cap-additional" class="cap-panel bg-white/5 rounded p-4 mt-2 hidden">
                                <p class="text-sm mb-2"><span class="font-semibold">Biaya tambahan :</span></p>
                                <p class="text-sm leading-relaxed">
                                    <span class="font-bold">IDR 100.000/orang</span><br>
                                    <em class="text-sm">(kantong tidur, sarapan, kasur busa + bantal)</em>
                                </p>
                                <p class="text-sm leading-relaxed mt-3">
                                    atau<br>
                                    <span class="font-bold">IDR 40.000/orang</span><br>
                                    <em class="text-sm">(hanya sarapan)</em>
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="text-sm text-white/90 mt-2">Untuk informasi tambahan atau permintaan khusus, silakan hubungi
                        admin reservasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HARGA PROMO RAMADHAN 2026 (styled like HARGA / KAPASITAS) -->
    <section class="py-16 bg-[#0b3e2f] text-white">
        <div class="max-w-4xl mx-auto px-6">
            <h3 class="text-3xl md:text-4xl font-extrabold mb-6 tracking-wider text-center">HARGA PROMO RAMADHAN <span
                    class="text-2xl md:text-3xl">2026</span></h3>

            <div class="max-w-xl mx-auto">
                <div class="space-y-3 mb-4">
                    <div>
                        <button type="button"
                            class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                            data-target="promo-weekdays" data-group="promo" aria-expanded="false">
                            <span class="font-semibold">Weekdays</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div id="promo-weekdays" class="promo-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm leading-relaxed">
                                Deck 3, 4, 5, 6, 7 (Tenda 4.0)
                                <span class="font-bold">IDR 500.000</span>
                                /Malam
                            </p>
                            <p class="text-sm leading-relaxed mt-1">
                                Deck 1, 2, 8, 9 (Tenda 4.2)
                                <span class="font-bold">IDR 500.000</span>
                                /Malam
                            </p>
                        </div>
                    </div>

                    <div>
                        <button type="button"
                            class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded"
                            data-target="promo-weekend" data-group="promo" aria-expanded="false">
                            <span class="font-semibold">Weekend</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div id="promo-weekend" class="promo-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm leading-relaxed">
                                Deck 3, 4, 5, 6, 7 (Tenda 4.0)
                                <span class="font-bold">IDR 650.000</span>
                                /Malam
                            </p>
                            <p class="text-sm leading-relaxed mt-1">
                                Deck 1, 2, 8, 9 (Tenda 4.2)
                                <span class="font-bold">IDR 750.000</span>
                                /Malam
                            </p>
                        </div>
                    </div>
                </div>

                <p class="mt-4 text-sm italic">
                    <strong>Notes :</strong><br>
                    Harga ini berlaku saat bulan Ramadhan
                </p>
            </div>
        </div>
    </section>

    <!-- FASILITAS -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl md:text-4xl font-extrabold text-[#017249] text-center mb-10">FASILITAS</h3>

            <!-- tenda gambar di atas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div class="text-center">
                    <h4 class="text-lg font-semibold text-[#017249] mb-3">Tenda 4.2</h4>
                    <div
                        class="mx-auto w-full max-w-sm h-48 bg-gray-100 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center">
                        <!-- placeholder image kosong -->
                    </div>
                </div>

                <div class="text-center">
                    <h4 class="text-lg font-semibold text-[#017249] mb-3">Tenda 4.0</h4>
                    <div
                        class="mx-auto w-full max-w-sm h-48 bg-gray-100 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center">
                        <!-- placeholder image kosong -->
                    </div>
                </div>
            </div>

            <!-- fasilitas (toggle untuk hemat ruang) -->
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

            <!-- Barang Tambahan -->
            <div class="bg-white border border-gray-100 rounded p-4 flex items-start gap-4">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <h4 class="text-lg font-semibold text-[#065f46]">Barang Tambahan</h4>
                        <a href="{{ route('barang-tambahan') }}" class="inline-flex items-center text-sm text-[#065f46] hover:underline"
                            title="Barang Tambahan (nanti)">
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

    <!-- GALERI -->
    <section class="bg-[#0b5a3e] py-12">
        <div class="max-w-6xl mx-auto px-6 text-white">
            <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider">GALERI</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @for($i = 1; $i <= 6; $i++)
                    <div class="overflow-hidden rounded-2xl shadow-md flex items-center justify-center">
                        <div class="w-full h-56 md:h-64 lg:h-72 bg-gray-200 border-2 border-dashed border-gray-200 rounded-md flex items-center justify-center"
                            role="img" aria-label="Placeholder gambar kosong">
                            <!-- kosong / placeholder -->
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- RESERVASI -->
    <section class="relative bg-cover bg-center py-20" style="background-image: url('/images/reservasi-bg.jpg');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative max-w-6xl mx-auto px-6 text-center text-white">
            <h3 class="text-3xl md:text-4xl font-extrabold mb-4 tracking-wider">SIAP UNTUK RESERVASI?</h3>
            <p class="mx-auto max-w-2xl text-sm md:text-base text-white/90 mb-6">
                Lakukan reservasi sekarang untuk merasakan pengalaman glamping yang unik di tengah hutan pinus dan indahnya
                Sungai Palayangan.
            </p>
            <a href="#"
                class="inline-block bg-[#0b6a48] hover:bg-[#07593f] text-white font-semibold px-8 py-3 rounded-full shadow-md transition"
                aria-disabled="true" onclick="return false;">
                Reservasi
            </a>
        </div>
    </section>

    <!-- Script: perbarui handler toggle agar mendukung group behavior -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Semua toggle (termasuk fasilitas dan price/capacity)
            const toggles = Array.from(document.querySelectorAll('.ft-toggle'));

            toggles.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetId = btn.dataset.target;
                    const group = btn.dataset.group; // optional
                    const panel = document.getElementById(targetId);
                    const isExpanded = btn.getAttribute('aria-expanded') === 'true';

                    if (group) {
                        // tutup semua toggle lain di group
                        const groupButtons = Array.from(document.querySelectorAll(`.ft-toggle[data-group="${group}"]`));
                        groupButtons.forEach(gb => {
                            const gid = gb.dataset.target;
                            const gp = document.getElementById(gid);
                            if (gb !== btn) {
                                gb.setAttribute('aria-expanded', 'false');
                                if (gp) gp.classList.add('hidden');
                                const gi = gb.querySelector('.ft-icon');
                                if (gi) gi.style.transform = 'rotate(0deg)';
                            }
                        });
                        // toggle current: jika sudah terbuka, tutup; jika tertutup, buka
                        const newState = (!isExpanded).toString();
                        btn.setAttribute('aria-expanded', newState);
                        if (panel) {
                            panel.classList.toggle('hidden', isExpanded); // hide if was open
                        }
                        const icon = btn.querySelector('.ft-icon');
                        if (icon) icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                    } else {
                        // fallback: perilaku toggle sederhana (sebelumnya)
                        btn.setAttribute('aria-expanded', (!isExpanded).toString());
                        if (panel) panel.classList.toggle('hidden');
                        const icon = btn.querySelector('.ft-icon');
                        if (icon) icon.style.transform = !isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
                    }
                });
            });

            // Pastikan panel default yang diberikan aria-expanded="true" tampil
            Array.from(document.querySelectorAll('.ft-toggle[aria-expanded="true"]')).forEach(btn => {
                const pid = btn.dataset.target;
                const p = document.getElementById(pid);
                if (p) p.classList.remove('hidden');
                const icon = btn.querySelector('.ft-icon');
                if (icon) icon.style.transform = 'rotate(180deg)';
            });
        });
    </script>
@endsection