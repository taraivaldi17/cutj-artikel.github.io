<?php 
$url = 'cutj-artikel';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CU Tilung Jaya</title>
</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container-lg">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/<?= $url; ?>/#home">
            <img src="img/cu-icon.png" width="35" height="35" class="d-inline-block" alt="Logo Company">
            <span class="small ms-2 d-none d-lg-inline text-secondary">CU Tilung Jaya</span>
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLeft"
            aria-controls="navbarLeft" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Left links -->
        <div class="collapse navbar-collapse" id="navbarLeft">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/<?= $url; ?>/#home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" dropdown-toggle="dropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-secondary" href="/<?= $url; ?>/#about">Tentang Kami</a>
                        <a class="dropdown-item text-secondary" href="/<?= $url; ?>/#visimisi">Visi & Misi Kami</a>
                        <a class="dropdown-item text-secondary" href="/<?= $url; ?>/struktur.php">Struktur</a>
                        <a class="dropdown-item text-secondary" href="/<?= $url; ?>/#contact">Hubungi Kami</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?= $url; ?>/products-services.php">Produk & Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?= $url; ?>/menjadi-anggota.php">Menjadi Anggota</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" dropdown-toggle="dropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">CU News</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="/<?= $url; ?>/news.php" class="dropdown-item text-secondary">Berita & Kisah
                            Sukses</a>
                        <a href="/<?= $url; ?>/agenda.php" class="dropdown-item text-secondary">Agenda</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?= $url; ?>/kalkulator.php">Kalkulator</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- End Navbar -->