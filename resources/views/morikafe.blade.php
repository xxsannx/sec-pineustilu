@extends('layouts.app')

@section('title', 'Morikafe Pangalengan - Pineus Tilu - Glamping & Outbound')

@section('content')
@include('layouts.navbar')

<!-- HERO -->
    <section class="relative bg-gray-800 py-32 px-4 min-h-screen flex items-center justify-center">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    MORIKAFE PANGALENGAN
                </h1>
            </div>
        </div>
    </section>

<!-- SARAPAN -->
<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-center text-[#017249] text-3xl md:text-4xl font-extrabold mb-2">SARAPAN</h2>
        <p class="text-center text-sm md:text-base text-[#0b5a3e] mb-4">Di sajikan setiap hari di Morikafe — 7 - 10 pagi (khusus pemesanan)</p>

        <div class="text-center mb-6">
            <h3 class="text-2xl font-extrabold text-[#017249]">Menu</h3>
            <p class="text-sm italic text-[#0b5a3e]/80 mt-1">メニュー</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-[#0b5a3e] text-sm">
            <div>
                <ul class="space-y-3 text-left">
                    <li>
                        <span class="font-medium">Nasi goreng</span>
                        <span class="block text-xs text-[#0b5a3e]/70">炒飯</span>
                    </li>
                    <li>
                        <span class="font-medium">Nasi Uduk</span>
                        <span class="block text-xs text-[#0b5a3e]/70">ウドゥクライス</span>
                    </li>
                    <li>
                        <span class="font-medium">Nasi kuning</span>
                        <span class="block text-xs text-[#0b5a3e]/70">黄色いご飯</span>
                    </li>
                    <li>
                        <span class="font-medium">Omelette</span>
                        <span class="block text-xs text-[#0b5a3e]/70">オムレツ</span>
                    </li>
                    <li>
                        <span class="font-medium">Orek Tempeh</span>
                        <span class="block text-xs text-[#0b5a3e]/70">オレック・テンペ</span>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="space-y-3 text-left">
                    <li>
                        <span class="font-medium">Tahu goreng</span>
                        <span class="block text-xs text-[#0b5a3e]/70">揚げ豆腐</span>
                    </li>
                    <li>
                        <span class="font-medium">Kerupuk Udang</span>
                        <span class="block text-xs text-[#0b5a3e]/70">エビのクラッカー</span>
                    </li>
                    <li>
                        <span class="font-medium">Bawang goreng</span>
                        <span class="block text-xs text-[#0b5a3e]/70">フライドオニオン</span>
                    </li>
                    <li>
                        <span class="font-medium">Kacang goreng</span>
                        <span class="block text-xs text-[#0b5a3e]/70">揚げ大豆</span>
                    </li>
                    <li>
                        <span class="font-medium">Tomat Segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">フレッシュトマト</span>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="space-y-3 text-left">
                    <li>
                        <span class="font-medium">Selada segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">新鮮なサラダ</span>
                    </li>
                    <li>
                        <span class="font-medium">Timun segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">新鮮なキュウリ</span>
                    </li>
                    <li>
                        <span class="font-medium">Sambal matah</span>
                        <span class="block text-xs text-[#0b5a3e]/70">チリソース</span>
                    </li>
                    <li>
                        <span class="font-medium">Sambal tomat</span>
                        <span class="block text-xs text-[#0b5a3e]/70">トマトソース</span>
                    </li>
                    <li>
                        <span class="font-medium">Sambal gowang</span>
                        <span class="block text-xs text-[#0b5a3e]/70">ゴワソース</span>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="space-y-3 text-left">
                    <li>
                        <span class="font-medium">Air minum segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">新鮮な飲料水</span>
                    </li>
                    <li>
                        <span class="font-medium">Jus melon / mangga segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">フレッシュジュース（メロン／マンゴー）</span>
                    </li>
                    <li>
                        <span class="font-medium">Susu hangat segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">温かいミルク</span>
                    </li>
                    <li>
                        <span class="font-medium">Teh panas + sugar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">熱いお茶と砂糖</span>
                    </li>
                    <li>
                        <span class="font-medium">Es teh lemon segar</span>
                        <span class="block text-xs text-[#0b5a3e]/70">フレッシュなアイスレモンティー</span>
                    </li>
                    <li>
                        <span class="font-medium">Air infus</span>
                        <span class="block text-xs text-[#0b5a3e]/70">インフューズドウォーター</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- gallery (6 images, large rounded corners like reference) -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i=1;$i<=6;$i++)
                <img src="{{ asset('images/morikafe/gallery-'.$i.'.jpg') }}" alt="foto {{$i}}" class="w-full h-44 object-cover rounded-2xl shadow-md">
            @endfor
        </div>
    </div>
</section>

<!-- GREEN INFO BAND -->
<section class="bg-[#017249] text-white py-16">
    <div class="max-w-6xl mx-auto px-6 space-y-12">
        <!-- Item 1: image left, text right -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('images/morikafe/card-1.jpg') }}" alt="kafe" class="w-full h-56 md:h-64 object-cover rounded-2xl shadow-md">
            </div>
            <div>
                <h4 class="font-extrabold text-2xl md:text-3xl uppercase">Kafe di Dalam Hutan</h4>
                <p class="mt-4 text-sm md:text-base text-white/90 leading-relaxed max-w-xl">Morikafe Pangalengan adalah kafe bambu yang terletak di jantung Hutan Pinus Rahong (Pineus Tilu). Para tamu dapat menikmati hidangan dan minuman lezat sambil merasakan suasana terbuka serta pemandangan area berkemah di sekitarnya.</p>
            </div>
        </div>

        <!-- Item 2: image right, text left (reversed on md) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="order-2 md:order-1">
                <h4 class="font-extrabold text-2xl md:text-3xl uppercase">Peristirahatan Nuansa Alam</h4>
                <p class="mt-4 text-sm md:text-base text-white/90 leading-relaxed max-w-xl">Rasakan udara segar, suara aliran air, dan ketenangan hutan pinus — sebuah pengalaman penyembuhan alami. Morikafe adalah tempat yang sempurna untuk bersantai, baik setelah aktivitas luar ruangan maupun sekadar untuk relaksasi dan memulihkan energi.</p>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/morikafe/card-2.jpg') }}" alt="peristirahatan" class="w-full h-56 md:h-64 object-cover rounded-2xl shadow-md">
            </div>
        </div>

        <!-- Item 3: image left, text right -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('images/morikafe/card-3.jpg') }}" alt="suasana" class="w-full h-56 md:h-64 object-cover rounded-2xl shadow-md">
            </div>
            <div>
                <h4 class="font-extrabold text-2xl md:text-3xl uppercase">Suasana</h4>
                <p class="mt-4 text-sm md:text-base text-white/90 leading-relaxed max-w-xl">Rustik, nyaman, dan alami — itulah suasana khas Morikafe Pangalengan. Struktur bambu yang indah berpadu dengan pemandangan pohon pinus dan sungai, menciptakan pengalaman bersantap yang hangat dan berkesan bersama keluarga atau teman.</p>
            </div>
        </div>
    </div>
</section>

<!-- MENU & FASILITAS -->
<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <!-- LEFT: large PDF viewer (Google Drive preview) -->
        <div class="col-span-1 md:col-span-2">
            <h3 class="text-2xl md:text-3xl font-extrabold text-[#017249] uppercase text-center md:text-left mb-6">Menu</h3>

            <div class="relative rounded-2xl overflow-hidden border-4 border-[#0b5a3e] shadow-lg">
                <!-- iframe preview (use Google Drive preview URL) -->
                <iframe
                    src="https://drive.google.com/file/d/1Dr8EPHERgTZMYIp0581AtYuIdKhyiooD/preview"
                    class="w-full h-[720px] md:h-[820px] lg:h-[900px]"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    loading="lazy"
                ></iframe>

                <!-- small button top-right to open in Drive -->
                <a href="https://drive.google.com/file/d/1Dr8EPHERgTZMYIp0581AtYuIdKhyiooD/view" target="_blank" rel="noopener" class="absolute top-3 right-3 bg-white/90 text-[#0b5a3e] hover:bg-white px-3 py-1 rounded-full text-sm flex items-center gap-2 shadow-sm">
                    Buka di Drive
                </a>
            </div>
        </div>

        <!-- RIGHT: fasilitas grid -->
        <div class="col-span-1">
            <h3 class="text-2xl md:text-3xl font-extrabold text-[#017249] uppercase text-center md:text-left mb-6">Fasilitas</h3>

            <div class="grid grid-cols-2 gap-6">
                @for($i=1;$i<=6;$i++)
                    <div class="rounded-2xl overflow-hidden shadow-md">
                        <img src="{{ asset('images/morikafe/facility-'.$i.'.jpg') }}" alt="fasilitas {{$i}}" class="w-full h-48 md:h-[240px] lg:h-[280px] object-cover rounded-2xl transition-transform duration-300 hover:scale-105">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<!-- GALERI -->
<section class="bg-[#0b5a3e] py-12">
    <div class="max-w-6xl mx-auto px-6 text-white">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center mb-8 tracking-wider">GALERI</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i=1;$i<=6;$i++)
                <div class="overflow-hidden rounded-2xl shadow-md">
                    <img src="{{ asset('images/morikafe/galeri-'.$i.'.jpg') }}" alt="galeri {{$i}}" class="w-full h-56 md:h-64 lg:h-72 object-cover">
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- RUANGAN RAPAT -->
<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-extrabold text-center text-[#017249] mb-6 tracking-wider">RUANGAN RAPAT</h3>

        <!-- Top row: 3 large images -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for($i=1;$i<=3;$i++)
                <div class="overflow-hidden rounded-2xl shadow-lg bg-gray-50">
                    <img src="{{ asset('images/morikafe/meeting-'.$i.'.jpg') }}" alt="meeting {{$i}}" class="w-full h-72 md:h-80 lg:h-96 object-cover rounded-2xl">
                </div>
            @endfor
        </div>

        <!-- Bottom row: 3 large images (same size as top) -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            @for($i=4;$i<=6;$i++)
                <div class="overflow-hidden rounded-2xl shadow-lg bg-gray-50">
                    <img src="{{ asset('images/morikafe/meeting-'.$i.'.jpg') }}" alt="meeting {{$i}}" class="w-full h-72 md:h-80 lg:h-96 object-cover rounded-2xl">
                </div>
            @endfor
        </div>

        <p class="text-sm md:text-base text-[#0b5a3e] mt-4">
            <span class="font-extrabold text-[#017249]">Catatan :</span>
            <span class="block mt-2 leading-relaxed">
                Ruangan berkapasitas maksimal 50 orang ini gratis untuk tamu camping. Untuk tamu non-camping tarifnya
                <strong class="font-extrabold text-[#017249]">IDR 200.000/jam</strong> atau
                <strong class="font-extrabold text-[#017249]">IDR 750.000/6 jam</strong>
                (belum termasuk makanan &amp; minuman). Untuk reservasi, silakan hubungi admin atau reservasi langsung di lokasi.
            </span>
        </p>
    </div>
</section>

<!-- RUANGAN LESEHAN -->
<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-2xl font-extrabold text-center text-[#017249] mb-6 tracking-wider">RUANGAN LESEHAN</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
            <!-- Left: layout (span 2 on md) -->
            <div class="col-span-2 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('images/morikafe/lesehan-layout.jpg') }}" alt="lesehan layout" class="w-full h-64 md:h-[480px] lg:h-[560px] object-cover rounded-2xl">
            </div>

            <!-- Right: pengunjung -->
            <div class="col-span-1 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('images/morikafe/lesehan-people.jpg') }}" alt="pengunjung" class="w-full h-64 md:h-[480px] lg:h-[560px] object-cover rounded-2xl">
            </div>
        </div>
    </div>
</section>
@endsection