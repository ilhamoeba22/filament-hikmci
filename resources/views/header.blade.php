<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BPRS HIK MCI</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('frontend/img/logo/head_logo.png') }}" type="image/png" sizes="225x225" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/logo/head_logo.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="BPRS HIK MCI, Bank Syariah HIK MCI, Pembiayaan Syariah, Deposito Syariah, Tabungan Syariah, BPRS Sleman Yogyakarta" name="keywords" />
    <meta content="PT BPRS HIK MCI (Harta Insan Karimah Mitra Cahaya Indonesia) - Bank Pembiayaan Rakyat Syariah berizin dan diawasi oleh OJK serta dijamin LPS. Berpusat di Jalan Kaliurang KM 09, Sleman, Yogyakarta." name="description" />

    <!-- Open Graph / Meta Identitas -->
    <meta property="og:type" content="business.business" />
    <meta property="og:title" content="BPRS HIK MCI - Bank Pembiayaan Rakyat Syariah" />
    <meta property="og:description" content="Wujudkan Keuangan Syariah yang Berkah dan Terpercaya bersama BPRS HIK MCI. Berizin dan diawasi OJK, dijamin LPS." />
    <meta property="og:url" content="https://bprshikmciyk.co.id" />
    <meta property="og:site_name" content="BPRS HIK MCI" />
    <meta property="og:image" content="{{ asset('frontend/img/logo/logo_mci.png') }}" />

    <!-- Schema.org JSON-LD Structured Data untuk Google Knowledge Graph & Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BankOrCreditUnion",
        "name": "BPRS HIK MCI",
        "alternateName": [
            "PT BPRS Harta Insan Karimah Mitra Cahaya Indonesia",
            "PT Bank Pembiayaan Rakyat Syariah Mitra Cahaya Indonesia",
            "Bank Syariah HIK MCI",
            "BPRS HIK MCI Yogyakarta"
        ],
        "url": "https://bprshikmciyk.co.id",
        "logo": "{{ asset('frontend/img/logo/logo_mci.png') }}",
        "image": "{{ asset('frontend/img/logo/logo_mci.png') }}",
        "telephone": "+62-274-881159",
        "email": "corsec@bprshikmci.co.id",
        "priceRange": "Rp",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jalan Kaliurang KM 09, Kel. Sardonoharjo, Kec. Ngaglik",
            "addressLocality": "Sleman",
            "addressRegion": "Daerah Istimewa Yogyakarta",
            "postalCode": "55581",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -7.7290519,
            "longitude": 110.3981184
        },
        "hasMap": "https://maps.app.goo.gl/QypJrDjHsZMNwof48",
        "sameAs": [
            "https://maps.app.goo.gl/QypJrDjHsZMNwof48",
            "https://www.instagram.com/bprshikmci/",
            "https://www.facebook.com/people/Bank-Syariah-HIK-MCI/61554427015454/"
        ]
    }
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Web Fonts (Outfit & Inter for Modern Fintech UI) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

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
    <!-- Floating Soft Backdrop (pixel-io style ambient glow) -->
    <div class="ambient-backdrop pointer-events-none" aria-hidden="true">
        <div class="ambient-orb ambient-orb-1"></div>
        <div class="ambient-orb ambient-orb-2"></div>
        <div class="ambient-orb ambient-orb-3"></div>
    </div>

    <!-- Fixed Header Start (pixel-io modern floating pill nav) -->
    <header class="fixed-top modern-header-wrapper">
        <div class="container-fluid px-3 px-lg-4">
            <nav class="navbar navbar-expand-lg modern-navbar px-3 px-lg-4 py-2">
                <a href="{{ url('/') }}" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" alt="Logo BPRS HIK MCI" class="navbar-logo" />
                </a>
                <button class="navbar-toggler modern-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
                    <span class="fa fa-bars text-success fs-5"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('about') || request()->is('team') || request()->is('lapkeu') || request()->is('pengaduan') || request()->is('penghargaan') || request()->is('piagam-audit') ? 'active' : '' }}" data-bs-toggle="dropdown">Tentang Kami</a>
                            <div class="dropdown-menu modern-dropdown m-0">
                                <a href="{{ url('about') }}" class="dropdown-item {{ request()->is('about') ? 'active' : '' }}">Profile</a>
                                <a href="{{ url('team') }}" class="dropdown-item {{ request()->is('team') ? 'active' : '' }}">Pengurus</a>
                                <a href="{{ url('lapkeu') }}" class="dropdown-item {{ request()->is('lapkeu') ? 'active' : '' }}">Laporan Keuangan</a>
                                <a href="{{ url('pengaduan') }}" class="dropdown-item {{ request()->is('pengaduan') ? 'active' : '' }}">Layanan Pengaduan</a>
                                <a href="{{ url('penghargaan') }}" class="dropdown-item {{ request()->is('penghargaan') ? 'active' : '' }}">Penghargaan</a>
                                <a href="{{ url('piagam-audit') }}" class="dropdown-item {{ request()->is('piagam-audit') ? 'active' : '' }}">Piagam Audit Internal</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('tabungan') || request()->is('deposito') || request()->is('pembiayaan') ? 'active' : '' }}" data-bs-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu modern-dropdown m-0">
                                <a href="{{ url('tabungan') }}" class="dropdown-item {{ request()->is('tabungan') ? 'active' : '' }}">Tabungan</a>
                                <a href="{{ url('main-deposito') }}" class="dropdown-item {{ request()->is('main-deposito') ? 'active' : '' }}">Deposito</a>
                                <a href="{{ url('pembiayaan') }}" class="dropdown-item {{ request()->is('pembiayaan') ? 'active' : '' }}">Pembiayaan</a>
                                <a href="{{ url('https://riplay.bprshikmciyk.co.id/') }}" class="dropdown-item" target="_blank">RIPLAY</a>
                            </div>
                        </div>
                        <a href="{{ url('berita') }}" class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                        <a href="{{ url('karir') }}" class="nav-item nav-link {{ request()->is('karir') ? 'active' : '' }}">Karir</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('asset') || request()->is('edukasi') || request()->is('ebook') ? 'active' : '' }}" data-bs-toggle="dropdown">Layanan Lainnya</a>
                            <div class="dropdown-menu modern-dropdown m-0">
                                <a href="{{ url('asset') }}" class="dropdown-item {{ request()->is('asset') ? 'active' : '' }}">E-Asset</a>

                                <div class="dropend">
                                    <a href="#" class="dropdown-item dropdown-toggle {{ request()->is('edukasi') || request()->is('ebook') ? 'active' : '' }}" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
                                    <ul class="dropdown-menu modern-dropdown m-0">
                                        <li><a class="dropdown-item {{ request()->is('edukasi') ? 'active' : '' }}" href="{{ url('edukasi') }}">Edukasi</a></li>
                                        <li><a class="dropdown-item {{ request()->is('ebook') ? 'active' : '' }}" href="{{ route('ebook.index') }}">E-Book</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item ms-lg-3 mt-3 mt-lg-0">
                            <a href="https://wa.me/+6281222770657" target="_blank" class="btn btn-nav-cta">
                                <i class="fab fa-whatsapp me-1"></i> Buka Rekening
                            </a>
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

    <script>
      // Navbar scroll effect
      window.addEventListener('scroll', () => {
        const header = document.querySelector('header.fixed-top');
        if (header) header.classList.toggle('scrolled', window.scrollY > 20);
      });
      // Page load fade in
      window.addEventListener('load', () => {
        document.body.classList.add('loaded');
        // Hide spinner
        const spinner = document.getElementById('spinner');
        if (spinner) setTimeout(() => { spinner.style.display = 'none'; }, 300);
      });
    </script>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->