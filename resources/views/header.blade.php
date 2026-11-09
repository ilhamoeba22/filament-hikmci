<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $metaTitle ?? 'BPRS HIK MCI - Bank Pembiayaan Rakyat Syariah' }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('frontend/img/logo/head_logo.png') }}" type="image/png" sizes="225x225" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/logo/head_logo.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="{{ $metaKeywords ?? 'BPRS HIK MCI, Bank Syariah HIK MCI, Pembiayaan Syariah, Deposito Syariah, Tabungan Syariah, BPRS Sleman Yogyakarta' }}" name="keywords" />
    <meta content="{{ $metaDescription ?? 'PT BPRS HIK MCI (Harta Insan Karimah Mitra Cahaya Indonesia) - Bank Pembiayaan Rakyat Syariah berizin dan diawasi oleh OJK serta dijamin LPS. Berpusat di Jalan Kaliurang KM 09, Sleman, Yogyakarta.' }}" name="description" />

    <!-- Open Graph / Meta Identitas untuk Berbagi Link (WhatsApp, FB, Telegram, dll) -->
    <meta property="og:type" content="{{ $ogType ?? 'website' }}" />
    <meta property="og:title" content="{{ $metaTitle ?? 'BPRS HIK MCI - Bank Pembiayaan Rakyat Syariah' }}" />
    <meta property="og:description" content="{{ $metaDescription ?? 'Wujudkan Keuangan Syariah yang Berkah dan Terpercaya bersama BPRS HIK MCI. Berizin dan diawasi OJK, dijamin LPS.' }}" />
    <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}" />
    <meta property="og:site_name" content="BPRS HIK MCI" />
    <meta property="og:image" content="{{ $ogImage ?? asset('frontend/img/logo/logo_mci.png') }}" />
    <meta property="og:image:secure_url" content="{{ $ogImage ?? asset('frontend/img/logo/logo_mci.png') }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $metaTitle ?? 'BPRS HIK MCI - Bank Pembiayaan Rakyat Syariah' }}" />
    <meta name="twitter:description" content="{{ $metaDescription ?? 'Wujudkan Keuangan Syariah yang Berkah dan Terpercaya bersama BPRS HIK MCI.' }}" />
    <meta name="twitter:image" content="{{ $ogImage ?? asset('frontend/img/logo/logo_mci.png') }}" />
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}" />

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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet" />

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
                <button class="navbar-toggler modern-toggler d-lg-none border-0 shadow-none p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
                    <span class="fa fa-bars text-success fs-5"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('about') || request()->is('team') || request()->is('lapkeu') || request()->is('pengaduan') || request()->is('penghargaan') || request()->is('piagam-audit') ? 'active' : '' }}" data-bs-toggle="dropdown">Tentang Kami</a>
                            <div class="dropdown-menu modern-dropdown mega-dropdown m-0 shadow-lg">
                                <a href="{{ url('about') }}" class="rich-dropdown-item {{ request()->is('about') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-building"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Profile</div>
                                        <div class="item-desc">Sejarah, visi-misi &amp; legalitas resmi</div>
                                    </div>
                                </a>
                                <a href="{{ url('team') }}" class="rich-dropdown-item {{ request()->is('team') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-people-fill"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Pengurus</div>
                                        <div class="item-desc">Komisaris, Direksi &amp; Dewan Pengawas</div>
                                    </div>
                                </a>
                                <a href="{{ url('lapkeu') }}" class="rich-dropdown-item {{ request()->is('lapkeu') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-file-earmark-bar-graph"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Laporan Keuangan</div>
                                        <div class="item-desc">Publikasi berkala &amp; transparansi</div>
                                    </div>
                                </a>
                                <a href="{{ url('pengaduan') }}" class="rich-dropdown-item {{ request()->is('pengaduan') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-shield-check"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Layanan Pengaduan</div>
                                        <div class="item-desc">Mekanisme &amp; perlindungan nasabah</div>
                                    </div>
                                </a>
                                <a href="{{ url('penghargaan') }}" class="rich-dropdown-item {{ request()->is('penghargaan') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-trophy-fill"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Penghargaan</div>
                                        <div class="item-desc">Prestasi &amp; Infobank Awards</div>
                                    </div>
                                </a>
                                <a href="{{ url('piagam-audit') }}" class="rich-dropdown-item {{ request()->is('piagam-audit') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-patch-check-fill"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Piagam Audit Internal</div>
                                        <div class="item-desc">Tata kelola pengawasan internal</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('tabungan') || request()->is('deposito') || request()->is('main-deposito*') || request()->is('pembiayaan') ? 'active' : '' }}" data-bs-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu modern-dropdown mega-dropdown m-0 shadow-lg">
                                <a href="{{ url('tabungan') }}" class="rich-dropdown-item {{ request()->is('tabungan') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-wallet2"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Tabungan</div>
                                        <div class="item-desc">Simpanan syariah berkah &amp; fleksibel</div>
                                    </div>
                                </a>
                                <a href="{{ url('main-deposito') }}" class="rich-dropdown-item {{ request()->is('main-deposito*') || request()->is('deposito') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-cash-coin"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Deposito</div>
                                        <div class="item-desc">Investasi bagi hasil kompetitif &amp; aman LPS</div>
                                    </div>
                                </a>
                                <a href="{{ url('pembiayaan') }}" class="rich-dropdown-item {{ request()->is('pembiayaan') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Pembiayaan</div>
                                        <div class="item-desc">Solusi modal usaha UMKM &amp; kepemilikan aset</div>
                                    </div>
                                </a>
                                <a href="{{ url('https://riplay.bprshikmciyk.co.id/') }}" class="rich-dropdown-item" target="_blank" rel="noopener noreferrer">
                                    <div class="item-icon"><i class="bi bi-info-circle"></i></div>
                                    <div class="item-text">
                                        <div class="item-title d-flex align-items-center gap-1">
                                            RIPLAY
                                            <i class="bi bi-box-arrow-up-right" style="font-size: 0.7rem; color: #94a3b8;"></i>
                                        </div>
                                        <div class="item-desc">Ringkasan Informasi Produk &amp; Layanan</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="{{ url('berita') }}" class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                        <a href="{{ url('karir') }}" class="nav-item nav-link {{ request()->is('karir') ? 'active' : '' }}">Karir</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('asset') || request()->is('edukasi') || request()->is('ebook*') ? 'active' : '' }}" data-bs-toggle="dropdown">Layanan Lainnya</a>
                            <div class="dropdown-menu modern-dropdown mega-dropdown m-0 shadow-lg">
                                <a href="{{ url('asset') }}" class="rich-dropdown-item {{ request()->is('asset') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-houses-fill"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">E-Asset</div>
                                        <div class="item-desc">Agunan lelang &amp; properti syariah</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider my-2 opacity-50"></div>
                                <div class="px-3 py-1 text-uppercase text-muted fw-bold" style="font-size: 0.68rem; letter-spacing: 0.08em;">Media Informasi</div>
                                <a href="{{ url('edukasi') }}" class="rich-dropdown-item {{ request()->is('edukasi') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">Edukasi</div>
                                        <div class="item-desc">Literasi perbankan syariah</div>
                                    </div>
                                </a>
                                <a href="{{ route('ebook.index') }}" class="rich-dropdown-item {{ request()->is('ebook*') ? 'active' : '' }}">
                                    <div class="item-icon"><i class="bi bi-book-half"></i></div>
                                    <div class="item-text">
                                        <div class="item-title">E-Book</div>
                                        <div class="item-desc">Publikasi digital &amp; panduan keuangan</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="nav-item ms-lg-3 mt-3 mt-lg-0">
                            <a href="https://wa.me/6281222770657" target="_blank" class="btn btn-nav-cta" aria-label="Buka Rekening via WhatsApp">
                                <i class="fab fa-whatsapp me-1"></i> Buka Rekening
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fixed Header End -->

    <script>
      // Navbar scroll effect
      window.addEventListener('scroll', () => {
        const header = document.querySelector('header.fixed-top');
        if (header) header.classList.toggle('scrolled', window.scrollY > 20);
      });

      // Immediate Spinner Dismissal (Zero-hang: does NOT wait for slow external assets)
      (function() {
        let dismissed = false;
        function dismissSpinner() {
          if (dismissed) return;
          dismissed = true;
          document.body.classList.add('loaded');
          const spinner = document.getElementById('spinner');
          if (spinner) {
            spinner.classList.remove('show');
            spinner.style.opacity = '0';
            spinner.style.visibility = 'hidden';
            spinner.style.pointerEvents = 'none';
            setTimeout(() => {
              spinner.style.display = 'none';
            }, 100);
          }
        }

        // Run as fast as possible on DOM ready or immediate timeout
        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', dismissSpinner);
        } else {
          dismissSpinner();
        }
        // Safety timeout: max 150ms guaranteed dismiss
        setTimeout(dismissSpinner, 150);
      })();
    </script>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="transition: opacity 0.25s ease-out; z-index: 99999;">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem" role="status">
            <span class="visually-hidden sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->