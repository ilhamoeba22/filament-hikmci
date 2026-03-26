<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BPRS HIK MCI</title>
    <link rel="icon" href="{{ asset('frontend/img/logo/head_logo.png') }}" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Fixed Header Start -->
    <header class="fixed-top">
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                    <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('about') || request()->is('team') || request()->is('lapkeu') || request()->is('pengaduan') ? 'active' : '' }}" data-bs-toggle="dropdown">Tentang Kami</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('about') }}" class="dropdown-item {{ request()->is('about') ? 'active' : '' }}">Profile</a>
                                <a href="{{ url('team') }}" class="dropdown-item {{ request()->is('team') ? 'active' : '' }}">Pengurus</a>
                                <a href="{{ url('lapkeu') }}" class="dropdown-item {{ request()->is('lapkeu') ? 'active' : '' }}">Laporan Keuangan</a>
                                <a href="{{ url('pengaduan') }}" class="dropdown-item {{ request()->is('pengaduan') ? 'active' : '' }}">Layanan Pengaduan</a>
                                <a href="{{ url('penghargaan') }}" class="dropdown-item {{ request()->is('penghargaan') ? 'active' : '' }}">Penghargaan</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('tabungan') || request()->is('deposito') || request()->is('pembiayaan') ? 'active' : '' }}" data-bs-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('tabungan') }}" class="dropdown-item {{ request()->is('tabungan') ? 'active' : '' }}">Tabungan</a>
                                <a href="{{ url('main-deposito') }}" class="dropdown-item {{ request()->is('main-deposito') ? 'active' : '' }}">Deposito</a>
                                <a href="{{ url('pembiayaan') }}" class="dropdown-item {{ request()->is('pembiayaan') ? 'active' : '' }}">Pembiayaan</a>
                                <a href="{{ url('https://riplay.bprshikmciyk.co.id/') }}" class="dropdown-item">RIPLAY</a>
                            </div>
                        </div>
                        <a href="{{ url('berita') }}" class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                        <a href="{{ url('karir') }}" class="nav-item nav-link {{ request()->is('karir') ? 'active' : '' }}">Karir</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('asset') || request()->is('edukasi') || request()->is('ebook') ? 'active' : '' }}" data-bs-toggle="dropdown">Layanan Lainnya</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('asset') }}" class="dropdown-item {{ request()->is('asset') ? 'active' : '' }}">E-Asset</a>

                                <div class="dropend"> <a href="#" class="dropdown-item dropdown-toggle {{ request()->is('edukasi') || request()->is('ebook') ? 'active' : '' }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        Media
                                    </a>
                                    <ul class="dropdown-menu m-0">
                                        <li><a class="dropdown-item {{ request()->is('edukasi') ? 'active' : '' }}" href="{{ url('edukasi') }}">Edukasi</a></li>
                                        <li><a class="dropdown-item {{ request()->is('ebook') ? 'active' : '' }}" href="{{ route('ebook.index') }}">E-Book</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fixed Header End -->
    <?php
    // Fungsi untuk menentukan halaman aktif
    function isActive($page)
    {
        $current_page = basename($_SERVER['PHP_SELF']);
        return $current_page == $page ? 'active' : '';
    }
    ?>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->