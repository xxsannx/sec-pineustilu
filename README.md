# PineusTilu

Website resmi Pineus Tilu untuk informasi dan pemesanan (reservasi) Glamping dan Outbound. Proyek ini dibangun dengan Laravel + Vite + Tailwind, menggunakan Blade untuk templating dan JavaScript modular untuk interaksi UI.

## Fitur Utama
- Halaman Reservasi Glamping dengan selector area, galeri, dan peta.
- Halaman Reservasi Outbound dengan kategori aktivitas, galeri, dan info detail.
- Komponen UI konsisten (track + knob, tombol kategori/area, galeri/thumbnails).
- Build tooling Vite untuk bundling aset (CSS/JS).

## Teknologi
- PHP 8.2+, Laravel 10+
- Node 18+, npm, Vite
- Tailwind CSS
- Blade Templates
- (Opsional) MySQL atau SQLite untuk data dinamis

## Persyaratan
- PHP 8.2+, Composer
- Node.js 18+ dan npm
- Database (MySQL/SQLite) bila diperlukan

## Setup Lokal (Windows)
1. Clone repo dan masuk folder:
   - git clone <repo-url>
   - cd PineusTilu
2. Instal dependensi backend:
   - composer install
3. Salin env dan generate key:
   - copy .env.example .env
   - php artisan key:generate
4. Konfigurasi DB di .env (optional), lalu:
   - php artisan migrate --seed (jika tersedia seeder)
5. Instal dependensi frontend:
   - npm install
6. Jalankan aplikasi:
   - php artisan serve
   - npm run dev
7. Akses:
   - http://127.0.0.1:8000

Build production:
- npm run build

## Struktur Direktori Terkait
- resources/views/partials
  - reservasi-glamping/
    - styles.blade.php
    - ... komponen tampilan glamping
  - reservasi-outbound/
    - styles.blade.php
    - detail.blade.php
    - ... komponen tampilan outbound
- resources/js/pages
  - reservasi-glamping.js
  - reservasi-outbound.js

## Catatan UI/Interaksi
- Glamping:
  - .area-items menggunakan grid untuk jarak kiri–kanan setara antar tombol.
  - Knob (#areaKnob) diposisikan relatif terhadap track (#areaTrack) dan diperbarui saat resize.
- Outbound:
  - .out-cat-list menggunakan grid repeat kolom tetap agar tombol tersebar merata.
  - Knob (#outKnob) mengikuti tombol aktif dan disinkronkan pada event resize.
- Style konsisten dengan palet hijau (#017249) dan komponen galeri (main + thumbs).

## Skrip npm
- npm run dev — development server + HMR (Vite)
- npm run build — bundling aset untuk production

## Troubleshooting
- Perubahan CSS/JS tidak tampil:
  - Pastikan npm run dev aktif atau jalankan npm run build.
  - Hard refresh browser (Ctrl+F5).
- Knob tidak sejajar setelah resize:
  - Pastikan listener resize aktif di file JS terkait (glamping/outbound).

## Lisensi
Hak cipta sesuai pemilik proyek. Penggunaan internal Pineus Tilu.
