<?php

// server.php - Laravel PHP Built-in Server Router
// Diletakkan di root project, digunakan oleh `php artisan serve`

// php artisan serve menjalankan proses PHP dengan CWD = public/
// sehingga kita gunakan __DIR__ (root project) lalu append /public
$rootPath   = __DIR__;
$publicPath = $rootPath . '/public';

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.

// =========================================================================
// KEAMANAN: OWASP A05 - Security Misconfiguration
// Blokir akses ke semua hidden files (file yang diawali dengan titik).
// Pemblokiran dilakukan langsung di router ini (bukan di Middleware Laravel)
// agar benar-benar mencegah file tersebut dilayani secara statis oleh
// PHP built-in server sebelum Laravel sempat memproses request.
// Pengecualian: /.well-known/ (diperlukan untuk validasi SSL Let's Encrypt)
// =========================================================================
$segments    = explode('/', $uri);
$isHiddenFile = false;
foreach ($segments as $segment) {
    if ($segment !== '' && str_starts_with($segment, '.')) {
        $isHiddenFile = true;
        break;
    }
}

// Izinkan .well-known untuk SSL
if (str_starts_with($uri, '/.well-known/')) {
    $isHiddenFile = false;
}

if ($isHiddenFile) {
    // Kembalikan HTTP 403 Forbidden langsung di level router
    http_response_code(403);
    header('Content-Type: text/plain; charset=UTF-8');
    echo '403 Forbidden';
    return true; // 'return true' menandakan request sudah dihandle, jangan proses lebih lanjut
}

// Untuk file statis yang ada (CSS, JS, gambar, dll), layani langsung tanpa melalui Laravel
if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false;
}

// Semua request lainnya diarahkan ke Laravel front controller
require_once $publicPath . '/index.php';
