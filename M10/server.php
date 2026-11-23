<?php
$nama = trim($_POST['nama'] ?? '');

if (empty($nama)) {
    echo 'Error: Input nama tidak boleh kosong!';
} else {
    echo "Halo, $nama! Selamat datang di AJAX!";
}
