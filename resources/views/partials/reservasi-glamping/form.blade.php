<section class="bg-white rounded-xl shadow-md p-6 border-2 border-[#0b5a3e]/10 mt-6">
    <h2 class="text-xl font-semibold text-[#017249] mb-4">Reservasi</h2>

    <form class="grid grid-cols-1 md:grid-cols-2 gap-6" id="reservasiForm" autocomplete="off" novalidate>
        <div class="space-y-4">
            <!-- Catatan: bagian Tanggal & pilihan Area/Unit dipindah ke bawah map (detail partial)
                 Input-input tersebut tetap terhubung ke form lewat atribut `form="reservasiForm"` -->
            <div class="grid grid-cols-3 gap-3 items-center">
                <label class="text-sm text-gray-600">Jumlah Pengunjung</label>
                <div class="col-span-2 flex items-center gap-2">
                    <button type="button" id="guestDecrease" aria-label="Kurangi pengunjung"
                        class="px-3 py-1 rounded-lg border bg-white text-[#017249]">-</button>
                    <input type="text" id="guestCount" name="guestCount" value="1" readonly
                        class="guest-count-input w-16 text-center rounded-lg border px-2 py-1 bg-gray-50"
                        aria-live="polite">
                    <button type="button" id="guestIncrease" aria-label="Tambahkan pengunjung"
                        class="px-3 py-1 rounded-lg border bg-white text-[#017249]">+</button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="name">Nama</label>
                    <input id="name" name="name" type="text" class="w-full rounded-lg border px-3 py-2"
                        placeholder="Nama lengkap">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="phone">No Telepon</label>
                    <input id="phone" name="phone" type="tel" class="w-full rounded-lg border px-3 py-2"
                        placeholder="08xxxx">
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-2" for="email">Email</label>
                <input id="email" name="email" type="email" class="w-full rounded-lg border px-3 py-2"
                    placeholder="email@domain.com">
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" id="agree" name="agree" class="h-4 w-4">
                <label for="agree" class="text-sm text-gray-600">Saya Menyetujui Syarat &amp; Ketentuan Yang
                    Berlaku</label>
            </div>

            <div>
                <button type="submit" class="w-full bg-[#017249] text-white rounded-lg py-3 font-semibold">Pesan
                    Sekarang</button>
            </div>
        </div>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-[#017249]">Extra Amenities</h3>

            <div class="grid gap-3 max-h-64 overflow-auto pr-2">
                <label class="flex items-start gap-3">
                    <input type="checkbox" name="amenities[]" value="breakfast" class="mt-1">
                    <div>
                        <div class="font-medium">Extra Breakfast (Buffet)</div>
                        <div class="text-sm text-gray-500">40.000 / Pax</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="amenities[]" value="pax_124" class="mt-1">
                    <div>
                        <div class="font-medium">Pax Amenities (1,2,4)</div>
                        <div class="text-sm text-gray-500">100.000 / Pax (dummy)</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="amenities[]" value="pax_vip3" class="mt-1">
                    <div>
                        <div class="font-medium">Pax Amenities (3 VIP)</div>
                        <div class="text-sm text-gray-500">150.000 / Pax (dummy)</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="amenities[]" value="arang" class="mt-1">
                    <div>
                        <div class="font-medium">Arang</div>
                        <div class="text-sm text-gray-500">50.000 / Pax</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="amenities[]" value="sewa_paket_1" class="mt-1">
                    <div>
                        <div class="font-medium">Sewa Paket 1 (Kompor, Gas)</div>
                        <div class="text-sm text-gray-500">100.000 / Malam</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" id="amenitiesOtherToggle" name="amenities[]" value="lainnya" class="mt-1">
                    <div>
                        <div class="font-medium">Lainnya</div>
                        <div class="text-sm text-gray-500">Centang untuk menambahkan amenities lain</div>
                    </div>
                </label>

                <div id="amenitiesOtherPanel" class="mt-2 p-3 rounded-lg border border-gray-100 bg-gray-50"
                    style="display:none;" aria-hidden="true">
                    <label class="block text-sm text-gray-600 mb-1" for="amenitiesOtherName">Nama Amenities</label>
                    <input id="amenitiesOtherName" name="amenitiesOtherName" type="text"
                        class="w-full rounded-lg border px-3 py-2 mb-2" placeholder="Contoh: Kayu bakar + layanan"
                        disabled>

                    <label class="block text-sm text-gray-600 mb-1" for="amenitiesOtherPrice">Harga (opsional)</label>
                    <input id="amenitiesOtherPrice" name="amenitiesOtherPrice" type="number" min="0"
                        class="w-full rounded-lg border px-3 py-2 mb-2" placeholder="Harga dalam rupiah" disabled>

                    <label class="block text-sm text-gray-600 mb-1" for="amenitiesOtherNotes">Keterangan</label>
                    <textarea id="amenitiesOtherNotes" name="amenitiesOtherNotes" rows="3"
                        class="w-full rounded-lg border px-3 py-2"
                        placeholder="Detail / catatan (mis. jumlah, preferensi)" disabled></textarea>
                </div>
            </div>

            <div class="pt-4 text-sm text-gray-500"><!-- helper note --></div>
        </div>
    </form>
</section>