<?php
// Memuat konfigurasi dan header
require 'includes/config.php';
include 'includes/header.php';

// Menentukan halaman yang akan dimuat
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pagePath = 'pages/' . $page . '.php';

if (file_exists($pagePath)) {
    include $pagePath;
} else {
    echo "<h1>404 - Halaman tidak ditemukan</h1>";
}

// Memuat footer
include 'includes/footer.php';
?>
