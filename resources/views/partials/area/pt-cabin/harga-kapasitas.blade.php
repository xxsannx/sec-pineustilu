<section class="py-16 bg-[#0b6a48] text-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-8 items-start">
            <div>
                <h3 class="text-3xl font-extrabold mb-6 tracking-wide">HARGA</h3>

                <div class="space-y-3 mb-6">
                    <div>
                        <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded" data-target="price-weekdays" data-group="price" aria-expanded="false">
                            <span class="font-semibold">Weekdays</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div id="price-weekdays" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm leading-relaxed">CABIN <span class="font-bold">IDR 1.500.000</span> /Malam</p>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded" data-target="price-weekend" data-group="price" aria-expanded="false">
                            <span class="font-semibold">Weekend</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div id="price-weekend" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm leading-relaxed">CABIN <span class="font-bold">IDR 1.900.000</span> /Malam</p>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded" data-target="price-high" data-group="price" aria-expanded="false">
                            <span class="font-semibold">High Season</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div id="price-high" class="price-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm leading-relaxed">CABIN <span class="font-bold">IDR 2.200.000</span> /Malam</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-3xl font-extrabold mb-6 tracking-wide">KAPASITAS</h3>

                <div class="space-y-3 mb-6">
                    <div>
                        <button type="button" class="ft-toggle w-full text-left flex items-center justify-between px-4 py-3 bg-white/5 border border-white/10 rounded" data-target="cap-standard" data-group="capacity" aria-expanded="false">
                            <span class="font-semibold">Standar Kapasitas</span>
                            <svg class="w-5 h-5 text-white ft-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div id="cap-standard" class="cap-panel bg-white/5 rounded p-4 mt-2 hidden">
                            <p class="text-sm mb-2"><span class="font-semibold">Standar 2 orang</span> — <span class="font-semibold">Maksimal 5 orang</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
