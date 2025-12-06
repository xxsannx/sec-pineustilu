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

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i=1;$i<=6;$i++)
                <img src="{{ asset('images/morikafe/gallery-'.$i.'.jpg') }}" alt="foto {{$i}}" class="w-full h-44 object-cover rounded-2xl shadow-md">
            @endfor
        </div>
    </div>
</section>