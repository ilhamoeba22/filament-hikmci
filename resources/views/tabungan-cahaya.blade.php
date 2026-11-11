@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <a href="{{ url('tabungan') }}">Tabungan</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">Tabungan Cahaya</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Tabungan Cahaya</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Tabungan berjangka syariah eksklusif dengan hadiah langsung tanpa diundi sesuai pilihan Anda</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Tabungan Detail Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/produk/MCI_Produk_Cahaya.png') }}" class="product-top-banner-img" alt="Produk Tabungan Cahaya">
        </div>

        <!-- Product Overview Intro -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <span class="feature-pill-badge mb-3">
                <i class="fas fa-gift"></i> Hadiah Langsung Tanpa Diundi
            </span>
            <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                Tabungan Cahaya BPRS HIK MCI
            </h2>
            <p class="text-muted mb-4" style="line-height: 1.8;">
                Simpanan berjangka prestisius dengan akad Mudharabah Mutlaqah yang memberikan kebebasan memilih hadiah langsung berupa barang atau jasa di awal periode, tanpa perlu menunggu undian.
            </p>
            <div class="d-flex flex-wrap gap-3">
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Hadiah Barang / Jasa</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Pengadaan Cepat</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Gratis Biaya Admin</span>
                </div>
            </div>
        </div>

        <!-- Fitur Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-star"></i> Fitur Produk</span>
                <h2>Fitur</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-bag-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Menggunakan Akad Mudharabah Mutlaqah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-calendar-week"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Minimal Setora Awal Rp. 10.000.000,-</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Keunggulan Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-gem"></i> Nilai Lebih</span>
                <h2>Keunggulan</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-gift-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Mendapatkan hadiah langsung tanpa diundi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-box-seam-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Pilihan hadiah berupa Barang / Jasa</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-alarm-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Proses pengadaan hadiah cepat (Max 21 hari kerja)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-wallet-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Gratis Biaya Administrasi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Syarat Perorangan Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-user-check"></i> Nasabah Individu</span>
                <h2>Syarat Perorangan</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-person-badge"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Usia minimal 17 tahun</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-credit-card-2-front"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Memiliki KTP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-file-text"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">NPWP (opsional)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Syarat Badan Usaha Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-building"></i> Nasabah Perusahaan</span>
                <h2>Syarat Badan Usaha</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-file-earmark-text"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Akta Pendirian dan Akta Perubahan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-building"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">NIB Badan Hukum</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-file-text"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">NPWP Pengurus</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-person-vcard"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">KTP Pengurus</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Box WhatsApp -->
        <div class="subpage-cta-card text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="position-relative" style="z-index: 2; max-width: 720px; margin: 0 auto;">
                <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-bold mb-3" style="font-size: 0.8rem;">
                    <i class="fab fa-whatsapp me-1"></i> Layanan Cepat & Praktis
                </span>
                <h3 class="text-white fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">
                    Pilih Hadiah Impian Anda Bersama Tabungan Cahaya
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Konsultasikan nominal simpanan dan hadiah impian Anda dengan petugas kami. Proses pengadaan transparan, terpercaya, dan sesuai syariat.
                </p>
                <div class="d-inline-block">
                    <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa">
                        <i class="fab fa-whatsapp fs-5 me-2"></i> Buka Rekening
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabungan Detail Content End -->

@include('footer')
