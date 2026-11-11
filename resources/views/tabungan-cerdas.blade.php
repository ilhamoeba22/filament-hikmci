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
            <span class="active">Tabungan Cerdas</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Tabungan Cerdas</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Simpanan edukasi syariah untuk melatih kemandirian finansial dan kebiasaan gemar menabung sejak dini</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Tabungan Detail Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/produk/MCI_Produk_Cerdas.png') }}" class="product-top-banner-img" alt="Produk Tabungan Cerdas">
        </div>

        <!-- Product Overview Intro -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <span class="feature-pill-badge mb-3">
                <i class="fas fa-graduation-cap"></i> Tabungan Pelajar & Siswa
            </span>
            <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                Tabungan Cerdas BPRS HIK MCI
            </h2>
            <p class="text-muted mb-4" style="line-height: 1.8;">
                Produk simpanan syariah berbasis akad wadiah yang dirancang khusus untuk siswa sekolah dari jenjang PAUD hingga SMA/SMK. Memberikan pengalaman menabung yang aman, terjangkau, dan menyenangkan tanpa potongan biaya administrasi.
            </p>
            <div class="d-flex flex-wrap gap-3">
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Setoran Mulai Rp 10.000,-</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Bebas Biaya Admin</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Dijamin LPS</span>
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
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Berdasarkan prinsip syariah dengan akad wadiah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-cash-coin"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Setoran awal ringan</h5>
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
                            <i class="bi bi-hourglass-split"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dapat diambil sewaktu - waktu</h5>
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
                            <i class="bi bi-cash-stack"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Setoran mulai dari Rp 10.000,-</h5>
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
                            <i class="bi bi-file-earmark-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Tabungan untuk siswa (PAD, TK, SD / MI, SMP / MTs, SMA / SMK / MA)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-backpack"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Usia dibawah 17 tahun dan belum memiliki KTP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-credit-card-2-front"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">KTP orang tua / wali</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card">
                        <span class="check-pill">
                            <i class="bi bi-patch-check"></i>
                        </span>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold" style="font-size: 1.05rem;">Persetujuan yang sudah diverifikasi sekolah</h5>
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
                    Dukung Masa Depan Pelajar dengan Tabungan Cerdas
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Buka rekening tabungan sekolah dengan mudah dan praktis. Tim kami juga melayani kerja sama pembukaan rekening kolektif untuk sekolah dan yayasan pendidikan.
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
