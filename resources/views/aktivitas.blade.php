@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
    <header class="text-center py-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#017249] tracking-wider">AKTIVITAS OUTDOOR</h1>
        <p class="mt-3 text-sm md:text-base text-[#0b5a3e] max-w-2xl mx-auto">
            Rasakan sensasi arung jeram, flying fox, paintball, ATV & offroad, serta kegiatan team building yang menghadirkan momen petualangan dan kebersamaan tak terlupakan.
        </p>
    </header>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- ARUNG JERAM (detail kanan + gambar kiri) - dibungkus box -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <!-- Gambar kiri (2 stacked) -->
                    <div class="space-y-6">
                        <img src="{{ asset('images/aktivitas/arung-jeram-1.jpg') }}" alt="Arung Jeram 1" class="w-full rounded-lg shadow-md object-cover h-56">
                        <img src="{{ asset('images/aktivitas/arung-jeram-2.jpg') }}" alt="Arung Jeram 2" class="w-full rounded-lg shadow-md object-cover h-56">
                    </div>

                    <!-- Teks kanan -->
                    <div class="text-[#0b5a3e]">
                        <h2 class="text-2xl font-extrabold text-[#017249] mb-4">ARUNG JERAM</h2>

                        <h3 class="text-sm font-extrabold text-[#017249] mb-2">HARGA</h3>
                        <ul class="text-sm leading-relaxed list-none space-y-1 mb-4">
                            <li>1 Perahu &lt; 4 orang = <strong>Rp 550.000</strong> <span class="text-gray-600">(tidak termasuk dokumentasi)</span></li>
                            <li>1 Perahu 4 orang = <strong>Rp 700.000</strong> <span class="text-gray-600">(termasuk dokumentasi)</span></li>
                            <li>1 Perahu 5 orang = <strong>Rp 850.000</strong> <span class="text-gray-600">(termasuk dokumentasi)</span></li>
                            <li>1 Perahu 6 orang = <strong>Rp 950.000</strong> <span class="text-gray-600">(termasuk dokumentasi)</span></li>
                            <li class="text-sm text-gray-600 mt-1">*Dokumentasi tambahan: <strong>Rp 100.000</strong>/perahu</li>
                        </ul>

                        <h3 class="text-sm font-extrabold text-[#017249] mb-2">KEMAH + ARUNG JERAM</h3>
                        <p class="text-sm leading-relaxed mb-3">Harga paket khusus untuk tamu Pineus Tilu yang juga memesan arung jeram. Diskon arung jeram <strong>Rp 50.000</strong>/perahu. Syarat: Tamu Pineus Tilu &amp; Follow IG @boomrafting</p>

                        <h3 class="text-sm font-extrabold text-[#017249] mb-2">ARUNG JERAM + MAKAN</h3>
                        <p class="text-sm leading-relaxed mb-3">Harga paket arung jeram + Nasi Liwet Lengkap, disajikan dalam panci. Diskon <strong>Rp 30.000</strong>/panci.</p>
                        <ul class="text-sm list-none space-y-1 mb-4">
                            <li>Panci No. 5: <strong>Rp 220.000 – Rp 30.000 = Rp 190.000</strong> (4 orang)</li>
                            <li>Panci No. 6: <strong>Rp 275.000 – Rp 30.000 = Rp 245.000</strong> (5 orang)</li>
                            <li>Panci No. 7: <strong>Rp 330.000 – Rp 30.000 = Rp 300.000</strong> (6 orang)</li>
                        </ul>

                        <h3 class="text-sm font-extrabold text-[#017249] mb-2">FASILITAS</h3>
                        <p class="text-sm leading-relaxed mb-2">Pemandu &amp; penyelamat, kotak pertolongan pertama/peralatan keselamatan, area bilas, asuransi, transportasi lokal &amp; instruktur, dokumentasi (termasuk foto dan video).</p>

                        <div class="mt-4 text-sm">
                            <p class="mb-1"><strong>DURASI</strong><br>5 Km (~90 menit)</p>
                            <p class="mb-1"><strong>UMUR</strong><br>Min. 10 tahun</p>
                            <p class="mt-3">Lebih lengkap: <a href="https://boomrafting.id" class="text-[#017249] font-semibold" target="_blank" rel="noopener">boomrafting.id</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- FLYING FOX + OFFROAD (side-by-side on md) - masing-masing dibungkus box -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Flying Fox (left) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div>
                            <img src="{{ asset('images/aktivitas/flying-fox.jpg') }}" alt="Flying Fox" class="w-full rounded-lg shadow-md object-cover h-56">
                        </div>
                        <div class="text-[#0b5a3e]">
                            <h3 class="text-xl font-extrabold text-[#017249] mb-3">FLYING FOX</h3>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">HARGA</h4>
                            <p class="text-sm mb-2"><strong>Rp 35.000/pax</strong> <span class="text-gray-600">(min 4 pax)</span></p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">FASILITAS</h4>
                            <p class="text-sm leading-relaxed mb-2">Tali pengaman, instruktur, tiket, Kotak P3K / Peralatan keselamatan.</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">DURASI</h4>
                            <p class="text-sm mb-1">Panjang 200 meter dengan ketinggian 12 meter</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">USIA</h4>
                            <p class="text-sm">Min. 6 tahun</p>
                        </div>
                    </div>
                </div>

                <!-- Offroad (right) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div>
                            <img src="{{ asset('images/aktivitas/offroad.jpg') }}" alt="Offroad" class="w-full rounded-lg shadow-md object-cover h-56">
                        </div>
                        <div class="text-[#0b5a3e]">
                            <h3 class="text-xl font-extrabold text-[#017249] mb-3">OFFROAD</h3>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">HARGA</h4>
                            <p class="text-sm mb-2"><strong>Rp 1.500.000/unit</strong> <span class="text-gray-600">(max 7 orang/unit)</span></p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">FASILITAS</h4>
                            <p class="text-sm leading-relaxed mb-2">Unit offroad (Land Rover), termasuk pengemudi, instruktur, Kotak P3K / Peralatan keselamatan, asuransi, transportasi lokal dan tiket.</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">DURASI</h4>
                            <p class="text-sm mb-1">9 Km (~120 menit)</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">USIA</h4>
                            <p class="text-sm">Min. 4 tahun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- FUN ATV + PAINTBALL (side-by-side on md) - masing-masing dibungkus box -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Fun ATV (left) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div>
                            <img src="{{ asset('images/aktivitas/fun-atv.jpg') }}" alt="Fun ATV" class="w-full rounded-lg shadow-md object-cover h-56">
                        </div>
                        <div class="text-[#0b5a3e]">
                            <h3 class="text-xl font-extrabold text-[#017249] mb-3">FUN ATV</h3>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">HARGA</h4>
                            <p class="text-sm mb-2">
                                <strong>Rp 175.000</strong>/1 pax <span class="text-gray-600">(satu)</span><br>
                                <strong>Rp 250.000</strong>/2 pax <span class="text-gray-600">(dua)</span>
                            </p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">FASILITAS</h4>
                            <p class="text-sm leading-relaxed mb-2">Unit ATV, helm, instruktur, Kotak P3K / Peralatan keselamatan, asuransi &amp; tiket.</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">DURASI</h4>
                            <p class="text-sm mb-1">4 Km (~60 menit)</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">USIA</h4>
                            <p class="text-sm">Min. 13 tahun (sebagai pengemudi) / Min. 5 tahun (sebagai penumpang)</p>
                        </div>
                    </div>
                </div>

                <!-- Paintball (right) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                        <div>
                            <img src="{{ asset('images/aktivitas/paintball.jpg') }}" alt="Paintball" class="w-full rounded-lg shadow-md object-cover h-56">
                        </div>
                        <div class="text-[#0b5a3e]">
                            <h3 class="text-xl font-extrabold text-[#017249] mb-3">PAINTBALL</h3>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">HARGA</h4>
                            <p class="text-sm mb-2"><strong>Rp 80.000</strong>/pax <span class="text-gray-600">(min 10 pax)</span></p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">FASILITAS</h4>
                            <p class="text-sm leading-relaxed mb-2">Seragam, rompi pelindung, masker/goggle, penanda/senjata paintball, 30 peluru; termasuk instruktur, tiket, Kotak P3K / Peralatan keselamatan.</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">DURASI</h4>
                            <p class="text-sm mb-1">Sampai peluru habis</p>

                            <h4 class="text-sm font-extrabold text-[#017249] mb-1">USIA</h4>
                            <p class="text-sm">Min. 13 tahun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- TEAM BUILDING (tepat dibawah FUN ATV + PAINTBALL) - dibungkus box -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <!-- Gambar kiri -->
                    <div>
                        <img src="{{ asset('images/aktivitas/team-building.jpg') }}" alt="Team Building" class="w-full rounded-lg shadow-md object-cover h-56">
                    </div>

                    <!-- Teks kanan -->
                    <div class="text-[#0b5a3e]">
                        <h3 class="text-xl font-extrabold text-[#017249] mb-3">TEAM BUILDING</h3>

                        <h4 class="text-sm font-extrabold text-[#017249] mb-1">HARGA</h4>
                        <p class="text-sm mb-2"><strong>Rp 175.000</strong>/pax</p>

                        <h4 class="text-sm font-extrabold text-[#017249] mb-1">FASILITAS</h4>
                        <p class="text-sm leading-relaxed mb-2">Peralatan, termasuk instruktur, sound system &amp; Kotak P3K/Peralatan keselamatan.</p>

                        <h4 class="text-sm font-extrabold text-[#017249] mb-1">DURASI</h4>
                        <p class="text-sm mb-1">~120 menit</p>

                        <h4 class="text-sm font-extrabold text-[#017249] mb-1">USIA</h4>
                        <p class="text-sm">Min. 11 tahun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- Activities grid -->
    <section class="w-full">
        <h2 class="text-2xl md:text-3xl font-extrabold text-center text-[#017249] tracking-wider mb-8">AKTIVITAS DI SEKITAR PINEUS TILU</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/jogging.jpg') }}" alt="Jogging" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Jogging dengan Udara Segar</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Nikmati jogging menyegarkan yang dikelilingi pepohonan pinus dan angin pegunungan — sempurna untuk relaksasi dan menjaga kebugaran.</p>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/situ-cileunca.jpg') }}" alt="Situ Cileunca" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Situ Cileunca</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Danau indah untuk kegiatan berperahu, arung jeram ringan, dan momen damai di tepi air. Berlokasi ±3km dari area camping.</p>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/sunrise-point.jpg') }}" alt="Sunrise Point" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Sunrise Point Cukul</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Spot sunrise di atas perkebunan teh & perbukitan berkabut — lokasi wajib untuk pecinta fotografi. ±12km dari area camping.</p>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/rekreasi.jpg') }}" alt="Area Rekreasi" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Area Rekreasi</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Destinasi populer dengan wahana keluarga dan spot foto menarik, berjarak sekitar ±10km dari area camping.</p>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/kebun-teh-kopi.jpg') }}" alt="Kebun Teh dan Kopi" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Kebun Teh dan Kopi</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Hamparan perkebunan teh hijau yang ideal untuk berjalan, belajar proses teh/kopi, dan bersantai di sekitar area camping.</p>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="w-full h-48 md:h-40 lg:h-44 overflow-hidden">
                    <img src="{{ asset('images/aktivitas/pemandian-air-panas.jpg') }}" alt="Pemandian Air Panas" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-bold text-[#017249] mb-2">Area Pemandian Air Panas</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">Kolam air panas alami di daerah pegunungan — tempat sempurna untuk relaksasi setelah aktivitas outdoor. ±13km dari area camping.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>

    <!-- Informasi -->
    <section class="w-full mt-10">
        <div class="max-w-screen-xl mx-auto">

            <div class="bg-white rounded-b-lg border-l border-r border-[#e6f3ec] -mt-1 p-8">
                <h2 class="text-center text-2xl font-extrabold text-[#017249] tracking-wider mb-6">INFORMASI</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[#0b5a3e]">
                    <div>
                        <h3 class="text-sm font-extrabold text-[#017249] mb-3">LAYANAN ANTAR JEMPUT</h3>
                        <p class="text-sm leading-relaxed">
                            Selain untuk Arung Jeram & Offroad, biaya antar‑jemput dari area camping ke arena outbound dikenakan
                            <strong>Rp 200.000/mobil</strong>, maksimal 10 orang.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-sm font-extrabold text-[#017249] mb-3">PEMBATALAN</h3>
                        <p class="text-sm leading-relaxed">
                            Khusus untuk Team Building & Offroad, pendaftaran harus dilakukan paling lambat <strong>H‑3</strong> (3 hari sebelum acara).
                            Jika pembatalan dilakukan pada hari‑H, <strong>50% dari biaya tidak dapat dikembalikan</strong>. Pengembalian dana diproses maksimal 14 hari kerja.
                        </p>
                    </div>
                </div>

                <!-- baris bawah: ASURANSI (full width) -->
                <div class="mt-8 text-[#0b5a3e]">
                    <h3 class="text-sm font-extrabold text-[#017249] mb-3">ASURANSI</h3>
                    <p class="text-sm leading-relaxed mb-3">Semua peserta kegiatan Arung Jeram, Paintball, Flying Fox, Offroad, ATV dilindungi oleh asuransi:</p>
                    <ul class="text-sm list-none space-y-2">
                        <li>Meninggal bukan karena kecelakaan: <strong>Rp 5.000.000</strong></li>
                        <li>Meninggal karena kecelakaan: <strong>Rp 15.000.000</strong></li>
                        <li>Cacat tetap akibat kecelakaan (maks): <strong>Rp 20.000.000</strong></li>
                        <li>Perawatan medis akibat kecelakaan (maks): <strong>Rp 1.000.000</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: garis hijau panjang -->
    <div class="max-w-screen-xl mx-auto">
        <div class="border-t-4 border-[#017249] my-8"></div>
    </div>
</main>
@endsection