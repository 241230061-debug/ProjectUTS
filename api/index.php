<?php

// Otomatis buat folder cache di /tmp Vercel agar tidak Error 500
mkdir('/tmp/storage/framework/views' -p, 0755, true);
mkdir('/tmp/storage/framework/cache' -p, 0755, true);
mkdir('/tmp/storage/framework/sessions' -p, 0755, true);

require __DIR__ . '/../public/index.php';