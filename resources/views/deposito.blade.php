@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <a href="{{ url('/main-deposito') }}">Deposito</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">Deposito Karimah</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Deposito Karimah</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Investasi berjangka syariah amanah dengan imbal hasil kompetitif dan dijamin LPS hingga 2 Miliar</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Deposito Detail Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Banner -->
        <div class="row g-4 mb-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="product-showcase-frame">
                    <img src="{{ asset('frontend/img/produk/MCI_Produk_DEPO.png') }}" class="img-fluid" alt="Produk Deposito Karimah">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="p-lg-4">
                    <span class="feature-pill-badge mb-3">
                        <i class="fas fa-shield-alt"></i> Investasi Syariah Terpercaya
                    </span>
                    <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                        Deposito Karimah BPRS HIK MCI
                    </h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Solusi investasi berjangka syariah yang menguntungkan berdasarkan akad Mudharabah Mutlaqah. Nikmati nisbah bagi hasil kompetitif dengan jangka waktu penempatan yang fleksibel sesuai kebutuhan Anda atau institusi Anda.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Mulai Rp 2.500.000,-</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Dijamin LPS Hingga 2 Miliar</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Jaminan Pembiayaan</span>
                        </div>
                    </div>
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
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Berdasarkan prinsip syariah dengan akad mudharabah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-cash-coin"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bagi hasil yang diberikan kepada nasabah sesuai dengan tingkat pendapatan bank</h5>
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
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-file-earmark-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dapat dibuka atas nama perorangan / non perorangan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-hourglass-split"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Jangka waktu fleksibel (1, 3, 6, 12 bulan)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-truck"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Layanan pickup service</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dijamin LPS hingga 2 milyar</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bagi hasil yang menarik dan kompetitif</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-check-circle"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dapat digunakan sebagai jaminan pembiayaan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-cash-stack"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Deposito mulai dari Rp 2.500.000,-</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Box WhatsApp -->
        <div class="subpage-cta-card text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="position-relative" style="z-index: 2; max-width: 720px; margin: 0 auto;">
                <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-bold mb-3" style="font-size: 0.8rem;">
                    <i class="fab fa-whatsapp me-1"></i> Layanan Konsultasi Cepat
                </span>
                <h3 class="text-white fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">
                    Mulai Berinvestasi Berkah Bersama Deposito Karimah
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Dapatkan simulasi bagi hasil dan kemudahan pembukaan bilyet deposito langsung bersama tim Funding Officer BPRS HIK MCI.
                </p>
                <div class="d-inline-block">
                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa" aria-label="Buka Rekening via WhatsApp">
                        <i class="fab fa-whatsapp fs-5 me-2"></i> Buka Rekening
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deposito Detail Content End -->

@include('footer')
