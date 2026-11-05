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
            <span class="active">Tabungan Ukhuwah</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Tabungan Ukhuwah</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Tabungan investasi syariah bersama BPRS se-Indonesia dengan bagi hasil kompetitif dan kesempatan meraih hadiah istimewa</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Tabungan Detail Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Banner -->
        <div class="row g-4 mb-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="product-showcase-frame">
                    <img src="{{ asset('frontend/img/produk/MCI_Produk_Ukhuwah.png') }}" class="img-fluid" alt="Produk Tabungan Ukhuwah">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="p-lg-4">
                    <span class="feature-pill-badge mb-3">
                        <i class="fas fa-gift"></i> Program Tabungan Berhadiah
                    </span>
                    <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                        Tabungan Ukhuwah BPRS HIK MCI
                    </h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Produk simpanan bersama Bank Pembiayaan Rakyat Syariah se-Indonesia dengan prinsip Mudharabah Muthlaqah. Memberikan ketenangan menabung secara syariah dengan nisbah bagi hasil kompetitif serta kesempatan mengikuti penarikan hadiah tahunan secara berkala.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Bebas Biaya Admin</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Dijamin LPS</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Perorangan & Badan Usaha</span>
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
                            <i class="bi bi-gift"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Berkesempatan mendapatkan hadiah</h5>
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
                            <i class="bi bi-cash"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bebas biaya administrasi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-cash-stack"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Setoran awal Rp 100.000,- dan setoran selanjutnya Rp 10.000,-</h5>
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
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dijamin oleh LPS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-graph-up"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bagi hasil yang kompetitif</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Syarat Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-clipboard-check"></i> Persyaratan</span>
                <h2>Syarat</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-building"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Kartu identitas pengurus / badan hukum (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-person-standing"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Berusia minimal 17 tahun (jika mendaftar perorangan)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-file-text"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Fotocopy NPWP (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-person-vcard"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Fotocopy KTP / Identitas (jika mendaftar perorangan)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-card-checklist"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Fotocopy SIUP / TDP / OSS (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
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
                    Buka Tabungan Ukhuwah & Raih Peluang Berhadiah
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Dapatkan manfaat ganda: keberkahan investasi syariah dan kesempatan memenangkan beragam hadiah menarik. Hubungi Customer Care kami sekarang.
                </p>
                <div class="d-inline-block">
                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa">
                        <i class="fab fa-whatsapp fs-5 me-2"></i> Buka Rekening
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabungan Detail Content End -->

@include('footer')
