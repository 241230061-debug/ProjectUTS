<?php

// 1. Definisikan jalur folder temporary yang diizinkan Vercel
$storagePath = '/tmp/storage';

// 2. Otomatis buat struktur folder framework yang dibutuhkan Laravel jika belum ada
if (!is_dir("$storagePath/framework/views")) {
    mkdir("$storagePath/framework/views", 0755, true);
}
if (!is_dir("$storagePath/framework/cache/data")) {
    mkdir("$storagePath/framework/cache/data", 0755, true);
}
if (!is_dir("$storagePath/framework/sessions")) {
    mkdir("$storagePath/framework/sessions", 0755, true);
}

// 3. Set environment variable secara runtime agar Laravel membacanya langsung
$_ENV['VIEW_COMPILED_PATH'] = "$storagePath/framework/views";

// 4. Jalankan aplikasi Laravel
require __DIR__ . '/../public/index.php';