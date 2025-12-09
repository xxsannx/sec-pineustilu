<section class="bg-white rounded-xl shadow-md p-6 border-2 border-[#0b5a3e]/10 mt-6">
    <h2 class="text-xl font-semibold text-[#017249] mb-4">Reservasi</h2>

    <form id="outReservasiForm" class="grid grid-cols-1 md:grid-cols-2 gap-6" autocomplete="off" novalidate>
        <div class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="outCheckin">Tanggal Check-In</label>
                    <input id="outCheckin" name="checkin" type="date"
                        class="w-full rounded-lg border px-3 py-2 bg-white" />
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="outCheckout">Tanggal Check-Out</label>
                    <input id="outCheckout" name="checkout" type="date"
                        class="w-full rounded-lg border px-3 py-2 bg-white" />
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-2" for="outSelectedCat">Outbond Yang Dipilih :</label>
                <input id="outSelectedCat" name="selectedOutbond" type="text" readonly
                    class="w-full rounded-lg border px-3 py-2 bg-gray-50" value="Arung Jeram">
            </div>

            <div class="grid grid-cols-3 gap-3 items-center">
                <label class="text-sm text-gray-600">Jumlah Pengunjung</label>
                <div class="col-span-2 flex items-center gap-2">
                    <button type="button" id="outGuestDecrease" aria-label="Kurangi pengunjung"
                        class="px-3 py-1 rounded-lg border bg-white text-[#017249]">-</button>
                    <input type="text" id="outGuestCount" name="guestCount" value="1" readonly
                        class="w-16 text-center rounded-lg border px-2 py-1 bg-gray-50" aria-live="polite">
                    <button type="button" id="outGuestIncrease" aria-label="Tambahkan pengunjung"
                        class="px-3 py-1 rounded-lg border bg-white text-[#017249]">+</button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="outName">Nama :</label>
                    <input id="outName" name="name" type="text" class="w-full rounded-lg border px-3 py-2"
                        placeholder="Nama lengkap">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-2" for="outEmail">Email :</label>
                    <input id="outEmail" name="email" type="email" class="w-full rounded-lg border px-3 py-2"
                        placeholder="Email@Domain.Com">
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-2" for="outPhone">No Telepon :</label>
                <input id="outPhone" name="phone" type="tel" class="w-full rounded-lg border px-3 py-2"
                    placeholder="08xxxx">
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" id="outAgree" name="agree" class="h-4 w-4">
                <label for="outAgree" class="text-sm text-gray-600">Saya Menyetujui Syarat &amp; Ketentuan Yang
                    Berlaku</label>
            </div>

            <div>
                <button type="submit" class="w-full bg-[#017249] text-white rounded-lg py-3 font-semibold">Pesan
                    Sekarang</button>
            </div>
        </div>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-[#017249]">Paket & Tambahan</h3>

            <div class="grid gap-3 max-h-64 overflow-auto pr-2">
                <label class="flex items-start gap-3">
                    <input type="checkbox" name="extras[]" value="dokumentasi" class="mt-1">
                    <div>
                        <div class="font-medium">Dokumentasi Foto/Video</div>
                        <div class="text-sm text-gray-500">Opsional</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="extras[]" value="snack" class="mt-1">
                    <div>
                        <div class="font-medium">Snack & Minum</div>
                        <div class="text-sm text-gray-500">Opsional</div>
                    </div>
                </label>

                <label class="flex items-start gap-3">
                    <input type="checkbox" name="extras[]" value="instruktur" class="mt-1">
                    <div>
                        <div class="font-medium">Instruktur Tambahan</div>
                        <div class="text-sm text-gray-500">Opsional</div>
                    </div>
                </label>
            </div>
        </div>
    </form>
</section>