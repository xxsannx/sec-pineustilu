@extends('layouts.app')

@section('title', 'Pineus Tilu 3 VIP')

@push('head')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Merriweather:ital@0;1&display=swap" rel="stylesheet">
@endpush

@section('content')

<!-- Hero Section -->
<section class="relative w-full h-screen bg-cover bg-center bg-no-repeat flex items-start justify-center pt-32" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/pt3/hero.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-6xl md:text-8xl font-black mb-4 drop-shadow-2xl tracking-widest" style="font-family: 'Playfair Display', serif; font-weight: 900; letter-spacing: 0.15em; text-shadow: 3px 3px 6px rgba(0,0,0,0.8);">
            PINEUS TILU 3 VIP
        </h1>
        <p class="text-3xl md:text-5xl font-light drop-shadow-lg" style="font-family: 'Merriweather', serif; font-style: italic; font-weight: 400; letter-spacing: 0.05em; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
            RestoreYourLife
        </p>
    </div>
</section>

<!-- Description Section -->
<section class="py-12 px-4 md:px-12 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-green-700 text-lg md:text-xl leading-relaxed font-light">
            Nikmati pengalaman eksklusif di Pineus Tilu 3 VIP, dengan fasilitas yang lebih lengkap untuk pengalaman glamping premium yang dilengkapi sejumlah hiburan pineus.
        </p>
    </div>
</section>

<!-- Skema Deck Section -->
<section class="py-16 px-4 md:px-8 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16 text-green-700">SKEMA DECK</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Skema Deck 1-5 -->
            <div class="bg-white text-center">
                <img src="{{ asset('images/pt3/SkemaDek1-5.jpg') }}" alt="Skema Deck 1-5" class="w-full mb-4 rounded-lg">
                <p class="text-gray-700 text-sm font-light">(Tent 5,2) : Deck 1 - 2 - 3 - 4 - 5</p>
            </div>
            <!-- Skema Deck 6-9 -->
            <div class="bg-white text-center">
                <img src="{{ asset('images/pt3/SkemaDek6-9.jpg') }}" alt="Skema Deck 6-9" class="w-full mb-4 rounded-lg">
                <p class="text-gray-700 text-sm font-light">(Tent 5,2) : Deck 6 - 7 - 8 - 9</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing & Capacity Section -->
<section class="py-16 px-4 md:px-8" style="background-color: #1e6b45;">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <!-- Pricing -->
            <div>
                <h3 class="text-3xl font-bold text-white mb-6">HARGA</h3>
                <div class="space-y-6">
                    <div>
                        <h4 class="font-bold text-white mb-2">Weekdays</h4>
                        <p class="text-white text-sm mb-1">Deck 1, 2, 3, 4, 5 (Tenda 6.3) <span class="font-bold">IDR 1.600.000</span>/Malam</p>
                        <p class="text-white text-sm">Deck 6, 7, 8, 9 (Tenda 5.2) <span class="font-bold">IDR 1.500.000</span>/Malam</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-white mb-2">Weekend</h4>
                        <p class="text-white text-sm mb-1">Deck 1, 2, 3, 4, 5 (Tenda 6.3) <span class="font-bold">IDR 2.000.000</span>/Malam</p>
                        <p class="text-white text-sm">Deck 6, 7, 8, 9 (Tenda 5.2) <span class="font-bold">IDR 1.900.000</span>/Malam</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-white mb-2">High Season</h4>
                        <p class="text-white text-sm mb-1">Deck 1, 2, 3, 4, 5 (Tenda 6.3) <span class="font-bold">IDR 2.300.000</span>/Malam</p>
                        <p class="text-white text-sm">Deck 6, 7, 8, 9 (Tenda 5.2) <span class="font-bold">IDR 2.200.000</span>/Malam</p>
                    </div>
                </div>
            </div>

            <!-- Capacity -->
            <div>
                <h3 class="text-3xl font-bold text-white mb-6">KAPASITAS</h3>
                <div class="space-y-4">
                    <div>
                        <p class="font-bold text-white mb-1">Standar 6 orang - Maksimal 10 orang (Deck 1, 2, 3, 4, 5)</p>
                        <p class="text-white text-sm">Standar 5 orang - Maksimal 9 orang (Deck 6, 7, 8, 9)</p>
                    </div>
                    <p class="text-white text-sm italic">Tamu dilatas 2 tahun dikenakan biaya.</p>
                    <div>
                        <h4 class="font-bold text-white mb-2">Fasilitas Tambahan :</h4>
                        <p class="text-white text-sm font-bold mb-1">IDR 150.000/orang</p>
                        <p class="text-white text-sm mb-3">(kantong tidur, sarapan, kasur busa + bantal, handuk, sikat gigi)</p>
                        <p class="text-white text-sm font-bold mb-1">atau</p>
                        <p class="text-white text-sm font-bold mb-1">IDR 40.000/orang</p>
                        <p class="text-white text-sm">(hanya sarapan)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Harga Promo Ramadhan Section -->
<section class="py-16 px-4 md:px-8" style="background-color: #064e3b;">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-white mb-12">HARGA PROMO RAMADHAN 2026</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Weekdays Promo -->
            <div>
                <h3 class="font-bold text-white text-lg mb-4">Weekdays</h3>
                <div class="space-y-2">
                    <p class="text-white text-sm">Deck 1, 2, 3, 4, 5 (Tenda 6.3) <span class="font-bold">IDR 1.300.000</span>/Malam</p>
                    <p class="text-white text-sm">Deck 6, 7, 8, 9 (Tenda 5.2) <span class="font-bold">IDR 1.200.000</span>/Malam</p>
                </div>
            </div>

            <!-- Weekend Promo -->
            <div>
                <h3 class="font-bold text-white text-lg mb-4">Weekend</h3>
                <div class="space-y-2">
                    <p class="text-white text-sm">Deck 1, 2, 3, 4, 5 (Tenda 6.3) <span class="font-bold">IDR 1.600.000</span>/Malam</p>
                    <p class="text-white text-sm">Deck 6, 7, 8, 9 (Tenda 5.2) <span class="font-bold">IDR 1.500.000</span>/Malam</p>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p class="text-white text-sm"><span class="font-bold">Notes :</span></p>
            <p class="text-white text-sm italic">Harga ini berlaku saat bulan Ramadhan</p>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section class="py-16 px-4 md:px-8 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-green-700">FASILITAS</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Tenda 6.3 -->
            <div>
                <div class="text-center mb-4">
                    <h3 class="text-green-700 font-bold text-lg mb-2">Tenda 6.3</h3>
                </div>
                <img src="{{ asset('images/pt3/Tenda6.3.png') }}" alt="Fasilitas Tenda 6.3" class="max-w-sm mx-auto mb-6 rounded-lg">
                
                <h4 class="font-bold text-green-700 mb-3 text-sm">Fasilitas Pribadi Tenda 6.3 (Deck 1, 2, 3, 4, 5):</h4>
                <div class="grid grid-cols-2 gap-3 text-sm mb-4 bg-white p-4 rounded-lg">
                    <div class="flex items-center"><img src="{{ asset('images/pt3/KasurBusa.png') }}" alt="Kasur Busa" class="w-6 h-6 mr-2">6 Kasur Busa</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/Bantal.png') }}" alt="Bantal" class="w-6 h-6 mr-2">4 Bantal</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/Handuk.png') }}" alt="Handuk" class="w-6 h-6 mr-2">6 Handuk</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/Sarapan.png') }}" alt="Sarapan" class="w-6 h-6 mr-2">6 Sarapan</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/KantongTdr.png') }}" alt="Kantong Tidur" class="w-6 h-6 mr-2">6 Kantong Tidur</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/Sikatgigi.png') }}" alt="Sikat Gigi" class="w-6 h-6 mr-2">6 Sikat Gigi</div>
                </div>
            </div>

            <!-- Tenda 5.2 -->
            <div>
                <div class="text-center mb-4">
                    <h3 class="text-green-700 font-bold text-lg mb-2">Tenda 5.2</h3>
                </div>
                <img src="{{ asset('images/pt3/Tenda5.2.png') }}" alt="Fasilitas Tenda 5.2" class="max-w-sm mx-auto mb-6 rounded-lg">
                
                <h4 class="font-bold text-green-700 mb-3 text-sm">Fasilitas 5 orang untuk Tenda 5.2 (Deck 6, 7, 8, 9):</h4>
                <div class="grid grid-cols-2 gap-3 text-sm bg-white p-4 rounded-lg">
                    <div class="flex items-center"><img src="{{ asset('images/pt3/kasurbusa.png') }}" alt="Kasur Busa" class="w-6 h-6 mr-2">5 Kasur Busa</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/bantal.png') }}" alt="Bantal" class="w-6 h-6 mr-2">5 Bantal</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/handuk.png') }}" alt="Handuk" class="w-6 h-6 mr-2">5 Handuk</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/sarapan.png') }}" alt="Sarapan" class="w-6 h-6 mr-2">5 Sarapan</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/KantongTdr.png') }}" alt="Kantong Tidur" class="w-6 h-6 mr-2">5 Kantong Tidur</div>
                    <div class="flex items-center"><img src="{{ asset('images/pt3/sikatgigi.png') }}" alt="Sikat Gigi" class="w-6 h-6 mr-2">5 Sikat Gigi</div>
                </div>
            </div>
        </div>

        <!-- General Facilities -->
        <div class="bg-white p-8 rounded-lg">
            <!-- Teras Dek Section -->
            <div class="mb-8">
                <h4 class="font-bold text-green-700 mb-4 text-lg">Teras Dek :</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/hammock.png') }}" alt="Ayunan Hammock" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">2 Ayunan Hammock</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/KursiR.png') }}" alt="KursiR" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">6 Kursi Rotan</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/hamJar.png') }}" alt="Hammock Jaring" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Hammock Jaring</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/kulkas.png') }}" alt="Kulkas" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Kulkas</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/terminal.png') }}" alt="Terminal" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">5 Terminal Listrik</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/lampu.png') }}" alt="Lampu" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Lampu</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/dsipenser.png') }}" alt="Air Minum & Dispenser" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Air Minum & Dispenser</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/tempatsampah.png') }}" alt="Tempat Sampah" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Tempat Sampah</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/bbq.png') }}" alt="BBQ" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Panggangan BBQ</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/pantry.png') }}" alt="Pantry" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Pantry dengan meja dan wastafel</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/KursiA.png') }}" alt="Kursi Ayun" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Kursi Ayun</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/MejaKayu.png') }}" alt="Meja Panjang" class="w-8 h-8 mr-2 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Meja kayu solid panjang & mewah (80-85 cm x 2,5 m)</span>
                    </div>
                </div>
            </div>

            <!-- Dek & Tenda Section -->
            <div class="mb-8">
                <h4 class="font-bold text-green-700 mb-4 text-lg">Dek & Tenda :</h4>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="flex items-start">
                        <img src="{{ asset('images/pt3/tenda.png') }}" alt="Tenda Keluarga" class="w-10 h-10 mr-3 flex-shrink-0 mt-1">
                        <div>
                            <p class="text-sm text-green-700 font-semibold">Tenda Keluarga 6.3</p>
                            <p class="text-xs text-gray-600">(Deck 1, 2, 3, 4, 5)</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <img src="{{ asset('images/pt3/tenda.png') }}" alt="Tenda Keluarga" class="w-10 h-10 mr-3 flex-shrink-0 mt-1">
                        <div>
                            <p class="text-sm text-green-700 font-semibold">Tenda Keluarga 5.2</p>
                            <p class="text-xs text-gray-600">(Deck 6, 7, 8, 9)</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/kursibantal.png') }}" alt="Kursi Bantal" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">5 Kursi Bantal</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/beanbag.png') }}" alt="Beanbag" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">2 Beanbag</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/mejakopi.png') }}" alt="Meja Kopi" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Meja Kopi</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/gantungan.png') }}" alt="Gantungan Pakaian" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Gantungan Pakaian berdiri</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/kursikayu.png') }}" alt="Kursi Kayu" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">5 Kursi Kayu</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/tempatsampah.png') }}" alt="Tempat Sampah" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Tempat Sampah</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/tikar.png') }}" alt="Tikar Dalam & Luar" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Tikar dalam dan luar ruangan</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/lampu.png') }}" alt="Lampu Meja" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">2 Lampu Meja</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/karpet.png') }}" alt="Karpet" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Karpet</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/mejabar.png') }}" alt="Meja Bar" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Meja Bar</span>
                    </div>
                </div>
            </div>

            <!-- Kamar Mandi Section -->
            <div class="mb-8">
                <h4 class="font-bold text-green-700 mb-4 text-lg">Kamar Mandi :</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/shower.png') }}" alt="Kamar Mandi Pribadi" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Kamar Mandi Pribadi</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/cermin.png') }}" alt="Cermin" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Cermin</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/lemari.png') }}" alt="Lemari" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Lemari</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/wastafel.png') }}" alt="Wastafel" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Wastafel</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/sampo.png') }}" alt="Sampo" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Sampo</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/sabun.png') }}" alt="Sabun" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Sabun</span>
                    </div>
                </div>
            </div>

            <!-- Fasilitas Umum Section -->
            <div class="mb-8">
                <h4 class="font-bold text-green-700 mb-4 text-lg">Fasilitas Umum</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/bangku.png') }}" alt="Bangku" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Bangku</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/tempatsampah.png') }}" alt="Tempat Sampah" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Tempat Sampah</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/apiunggun.png') }}" alt="Api Unggun" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Api Unggun</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/kursikayu.png') }}" alt="Kursi Kayu" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Kursi Kayu</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/lampu.png') }}" alt="Lampu" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Lampu luar ruangan</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/patung kayu.png') }}" alt="Patung Kayu" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Patung Kayu</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/wastafel.png') }}" alt="Wastafel" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Wastafel</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/meja5.png') }}" alt="Meja Panjang" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Meja Panjang 5m</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/wifi.png') }}" alt="Wifi" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">Wifi</span>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/pt3/cctv.png') }}" alt="CCTV" class="w-10 h-10 mr-3 flex-shrink-0">
                        <span class="text-sm text-green-700 font-semibold">CCTV</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 p-4 bg-yellow-50 border-l-4 border-yellow-400">
                <h4 class="font-bold mb-2">Barang Tambahan</h4>
                <p class="text-sm text-gray-700">Catatan: Untuk lebih detail mengenai item tambahan seperti penyewaan peralatan atau pembellian tambahan, silakan klik juduel di atas.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-16 px-4 md:px-8" style="background-color: #064e3b;">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-white">GALERI</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery1.png') }}" alt="Gallery 1" class="w-full h-80 object-cover">
            </div>
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery2.png') }}" alt="Gallery 2" class="w-full h-80 object-cover">
            </div>
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery3.png') }}" alt="Gallery 3" class="w-full h-80 object-cover">
            </div>
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery4.png') }}" alt="Gallery 4" class="w-full h-80 object-cover">
            </div>
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery5.png') }}" alt="Gallery 5" class="w-full h-80 object-cover">
            </div>
            <div class="overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <img src="{{ asset('images/pt3/gallery6.png') }}" alt="Gallery 6" class="w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 px-4 md:px-8 bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/pt3/siapreservasi.png') }}');">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-4">SIAP UNTUK RESERVASI?</h2>
        <p class="text-white text-lg mb-8">Hubungi kami sekarang untuk memesan pengalaman glamping premium Anda di Pineus Tilu 3 VIP atau kunjungi website kami untuk informasi lebih lanjut.</p>
        <a href="{{ route('reservasi.glamping') }}" class="inline-block bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-lg transition">
            Reservasi
        </a>
    </div>
</section>

@endsection