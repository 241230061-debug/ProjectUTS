<?php

// Membuat folder temporary yang dibutuhkan Laravel di server Vercel dengan benar
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}
if (!is_dir('/tmp/storage/framework/cache')) {
    mkdir('/tmp/storage/framework/cache', 0755, true);
}
if (!is_dir('/tmp/storage/framework/sessions')) {
    mkdir('/tmp/storage/framework/sessions', 0755, true);
}

// Panggil file index Laravel bawaan
require __DIR__ . '/../public/index.php';