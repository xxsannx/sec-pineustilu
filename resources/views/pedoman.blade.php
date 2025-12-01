@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
    <header class="text-center py-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#017249] tracking-wider">SYARAT & KETENTUAN</h1>
    </header>

    <div class="max-w-screen-xl mx-auto">
        <div class="bg-white rounded-lg shadow-sm overflow-hidden p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[#0b5a3e]">
                <!-- LEFT COLUMN -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4] shrink-0">?</div>
                        <div>
                            <div class="font-semibold">Check-in pukul 14.00 WIB &amp; Check-out pukul 12.00 WIB.</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Jaga kebersihan area</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Musik dengan volume rendah</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang merokok dalam tenda</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang membawa daging babi dan makanan anjing pada peralatan BBQ &amp; api unggun</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Pisahkan sampah organik dan anorganik</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang melakukan aktivitas tidak bermoral</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Jaga keselamatan &amp; berhati-hati di area camping</div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang membawa narkoba &amp; alkohol</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Jaga barang pribadi tetap aman</div>
                            <div class="text-[#017249] font-semibold">Kerusakan &amp; kehilangan diluar tanggung jawab Pineus Tilu</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang membawa anjing</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Dilarang karaoke</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Tidak diperbolehkan alat pengeras suara</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Tidak ada microphone</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded text-[#017249] bg-[#f0fdf4]">?</div>
                        <div>
                            <div class="font-semibold">Tidak diperbolehkan alat musik dengan suara keras</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- divider: garis hijau panjang -->
            <div class="max-w-screen-xl mx-auto">
                <div class="border-t-4 border-[#017249] my-8"></div>
            </div>

            <!-- KEBIJAKAN (updated to match reference) -->
            <h2 class="text-4xl md:text-5xl font-extrabold text-center text-[#017249] mb-8">KEBIJAKAN</h2>

            <div class="max-w-screen-xl mx-auto px-4 md:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-[#0b5a3e]">
                    <!-- Penjadwalan Ulang -->
                    <div>
                        <h3 class="text-2xl font-extrabold text-[#017249] mb-4">Penjadwalan Ulang</h3>
                        <ul class="list-disc list-inside marker:text-[#017249] space-y-3 text-lg">
                            <li><span class="font-semibold">Sebelum H-7:</span> Gratis / tidak ada biaya tambahan</li>
                            <li><span class="font-semibold">H-7 sampai H-3:</span> Biaya tambahan <span class="font-semibold text-[#017249]">Rp 150.000</span>/tenda</li>
                            <li><span class="font-semibold">H-2 sampai H-1:</span> Biaya tambahan <span class="font-semibold text-[#017249]">Rp 250.000</span>/tenda</li>
                            <li><span class="font-semibold">Hari-H:</span> Biaya tambahan sesuai harga tenda</li>
                        </ul>
                    </div>

                    <!-- Pembatalan -->
                    <div>
                        <h3 class="text-2xl font-extrabold text-[#017249] mb-4">Pembatalan</h3>
                        <ul class="list-disc list-inside marker:text-[#017249] space-y-3 text-lg">
                            <li><span class="font-semibold">Sebelum H-7:</span> Biaya <span class="font-extrabold text-[#017249]">25%</span> per tenda</li>
                            <li><span class="font-semibold">H-7 sampai H-4:</span> Biaya <span class="font-extrabold text-[#017249]">50%</span> per tenda</li>
                            <li><span class="font-semibold">H-3 sampai H-2:</span> Biaya <span class="font-extrabold text-[#017249]">75%</span> per tenda</li>
                            <li><span class="font-semibold">H-1 sampai Hari-H:</span> Biaya <span class="font-extrabold text-[#017249]">100%</span> per tenda</li>
                        </ul>
                    </div>
                </div>

                <!-- divider: garis hijau panjang -->
                <div class="max-w-screen-xl mx-auto">
                    <div class="border-t-4 border-[#017249] my-8"></div>
                </div>

                <!-- Informasi -->
                <div class="max-w-3xl mx-auto text-[#0b5a3e]">
                    <h4 class="italic text-[#017249] font-extrabold text-lg mb-4">Informasi</h4>
                    <ul class="list-disc list-inside marker:text-[#017249] space-y-3 text-base text-gray-700 mb-6">
                        <li>Kelebihan pembayaran/pengembalian dana akan ditransfer paling lambat 14 hari kerja setelah data rekening penerima diberikan.</li>
                        <li>Pengembalian dana akibat reservasi gagal akan diproses paling lambat 3 hari kerja setelah data rekening penerima diberikan.</li>
                        <li>Jika terjadi keadaan di luar kendali (misalnya pembatasan pemerintah/lockdown yang menyebabkan area ditutup), pengembalian dana dikenakan potongan 50%.</li>
                    </ul>

                    <p class="text-center italic text-gray-600">Dalam semua kasus lain, syarat &amp; ketentuan berlaku sebagaimana tertulis</p>
                </div>
            </div>

            <!-- divider: garis hijau panjang -->
            <div class="max-w-screen-xl mx-auto">
                <div class="border-t-4 border-[#017249] my-8"></div>
            </div>

            <!-- TEMPAT PARKIR -->
            <h2 class="text-4xl md:text-5xl font-extrabold text-center text-[#017249] mb-8">TEMPAT PARKIR</h2>

            <div class="max-w-screen-xl mx-auto px-4 md:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
                    <div>
                        <img src="{{ asset('images/aktivitas/parkir.jpg') }}" alt="Parkir" class="w-full rounded-2xl object-cover h-80 shadow-md">
                    </div>

                    <div class="text-[#0b5a3e]">
                        <h3 class="text-xl font-extrabold text-[#017249] mb-3">Parkir Menginap</h3>
                        <ul class="list-disc list-inside marker:text-[#017249] space-y-2 text-lg mb-6">
                            <li>Mobil &amp; Minibus: <span class="font-semibold text-[#017249]">Rp 40.000</span>/malam</li>
                            <li>Bus Sedang: <span class="font-semibold text-[#017249]">Rp 120.000</span>/malam</li>
                            <li>Bus Besar: <span class="font-semibold text-[#017249]">Rp 160.000</span>/malam</li>
                            <li>Sepeda Motor: <span class="font-semibold text-[#017249]">Rp 10.000</span>/malam</li>
                            <li>Sepeda: <span class="font-semibold text-[#017249]">Rp 2.000</span>/malam</li>
                        </ul>

                        <h3 class="text-xl font-extrabold text-[#017249] mb-3">Parkir Transit</h3>
                        <ul class="list-disc list-inside marker:text-[#017249] space-y-2 text-lg">
                            <li>Mobil &amp; Minibus: <span class="font-semibold text-[#017249]">Rp 10.000</span>/hari</li>
                            <li>Bus Sedang: <span class="font-semibold text-[#017249]">Rp 30.000</span>/hari</li>
                            <li>Bus Besar: <span class="font-semibold text-[#017249]">Rp 50.000</span>/hari</li>
                            <li>Sepeda Motor: <span class="font-semibold text-[#017249]">Rp 5.000</span>/hari</li>
                            <li>Sepeda: <span class="font-semibold text-[#017249]">Rp 2.000</span>/hari</li>
                        </ul>

                        <p class="mt-6 text-sm text-[#017249] font-semibold">Notes :</p>
                        <p class="text-sm text-gray-700">Biaya parkir dikelola oleh pengelola parkir terpisah, bukan oleh Pineus Tilu. Pembayaran harus dilakukan langsung di lokasi kepada pihak pengelola parkir.</p>
                    </div>
                </div>
            </div>

            <!-- divider: garis hijau panjang -->
            <div class="max-w-screen-xl mx-auto">
                <div class="border-t-4 border-[#017249] my-8"></div>
            </div>

            <!-- Informasi Asuransi -->
            <section class="max-w-screen-xl mx-auto px-4 md:px-0">
                <h2 class="text-4xl md:text-5xl font-extrabold text-center text-[#017249] mb-6">INFORMASI ASURANSI</h2>

                <h3 class="text-xl md:text-2xl font-extrabold text-center text-[#017249] mb-6">PERNYATAAN PERSETUJUAN</h3>

                <div class="max-w-3xl mx-auto text-justify text-[#0b5a3e] leading-relaxed">
                    <p class="mb-4">Mulai Januari 2022, setiap pengunjung yang bermalam di <span class="font-extrabold text-[#017249]">Pineus Tilu Camping Ground</span> wajib menyampaikan pernyataan berikut. Sebagai penanggung jawab diri sendiri dan rombongan, saya menyatakan bahwa apabila terjadi kecelakaan/bencana/musibah selama bermalam di area <span class="font-extrabold text-[#017249]">Pineus Tilu Camping Ground</span>, pihak pengelola tidak bertanggung jawab, kecuali apabila kami berhak menerima pertanggungan asuransi yang disediakan bekerja sama dengan Perhutani sesuai dengan rincian tanggungan berikut:</p>

                    <p class="mb-6">Pengunjung menerima perlindungan asuransi kecelakaan dari <span class="font-extrabold text-[#017249] uppercase">ASURANSI SYARIAH AMANAH GITHA</span> Master Policy No. <span class="font-extrabold text-[#017249]">809000050100188</span> untuk kecelakaan sejak memasuki gerbang hingga meninggalkan area. Perlindungan asuransi adalah sebagai berikut:</p>

                    <ol class="list-decimal list-inside space-y-3 ml-4">
                        <li><span class="font-semibold">Meninggal dunia karena kecelakaan (dalam 24 jam):</span> <span class="font-extrabold text-[#017249]">Rp 15.000.000</span></li>
                        <li><span class="font-semibold">Meninggal dunia di lokasi wisata bukan akibat kecelakaan:</span> <span class="font-extrabold text-[#017249]">Rp 3.000.000</span></li>
                        <li><span class="font-semibold">Cacat tetap sesuai presentase (%):</span> sesuai syarat umum polis, <span class="font-extrabold text-[#017249]">maksimum Rp 20.000.000</span></li>
                        <li><span class="font-semibold">Biaya perawatan/pengobatan akibat kecelakaan (maksimal):</span> <span class="font-extrabold text-[#017249]">Rp 3.000.000</span></li>
                    </ol>
                </div>
            </section>

            <!-- divider: garis hijau panjang -->
            <div class="max-w-screen-xl mx-auto">
                <div class="border-t-4 border-[#017249] my-8"></div>
            </div>
        </div>
    </div>
</main>
@endsection