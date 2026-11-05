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
            <span class="active">Tabungan Rencana</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Tabungan Rencana</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Wujudkan rencana masa depan terencana dengan akad mudharabah dan bagi hasil kompetitif</p>
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
                    <img src="{{ asset('frontend/img/produk/MCI_Produk_Rencana.png') }}" class="img-fluid" alt="Produk Tabungan Rencana">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="p-lg-4">
                    <span class="feature-pill-badge mb-3">
                        <i class="fas fa-chart-line"></i> Mudharabah Mutlaqah
                    </span>
                    <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                        Tabungan Rencana BPRS HIK MCI
                    </h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Solusi simpanan berjangka untuk mewujudkan berbagai impian masa depan seperti ibadah umroh, pendidikan putra-putri, qurban, pernikahan, hingga persiapan pensiun dengan setoran rutin yang terjangkau.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Hadiah Langsung</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Nisbah 30%</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-white px-3 py-2 rounded-pill border">
                            <i class="fas fa-check text-success"></i>
                            <span class="small fw-semibold text-dark">Dijamin LPS</span>
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
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-bag-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Berdasarkan prinsip syariah dengan akad mudharabah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-calendar-week"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Jangka waktu sampai dengan 60 bulan (5 tahun)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-check2-square"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Akad : Mudharabah Mutlaqah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Setoran Awal Minimum : 100.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-arrow-repeat"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Setoran Rutin Minimum : 100.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-calendar-range"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Jangka waktu 6 hingga 120 bulan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-percent"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bagi hasil : Nisbah 30% untuk nasabah setara E.R 4% (menyesuaikan pendapatan bank)</h5>
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
                            <i class="bi bi-cash"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bebas biaya administrasi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dapat dibuka untuk anak sejak usia 10 tahun</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-truck"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Layanan pickup service</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Dijamin oleh LPS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-gift-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Hadiah langsung tanpa diundi sesuai nominal dan jangka waktu tabungan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-graph-up"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Bagi hasil kompetitif</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-calendar2-range"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Jangka waktu fleksibel hingga 10 tahun</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="bento-feature-item">
                        <span class="bento-icon-box">
                            <i class="bi bi-speedometer2"></i>
                        </span>
                        <div>
                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">Proses pembukaan mudah dan cepat</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Syarat dan Ketentuan Section -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-clipboard-check"></i> Persyaratan</span>
                <h2>Syarat dan Ketentuan</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="checklist-card flex-column align-items-start">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="check-pill">
                                <i class="bi bi-file-earmark-fill"></i>
                            </span>
                            <div>
                                <h5 class="mb-0 text-dark fw-bold">Perorangan Usia 10-16 tahun</h5>
                                <small class="text-muted">Kategori Anak / Pelajar</small>
                            </div>
                        </div>
                        <h6 class="mb-2 text-dark fw-semibold">Dokumen yang diperlukan:</h6>
                        <ul class="list-unstyled ps-1 mb-0">
                            <li class="mb-2 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>Kartu Identitas Anak (KIA) / Kartu Pelajar (opsional)</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>Kartu Keluarga (KK)</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>Surat Persetujuan Orang Tua</span>
                            </li>
                            <li class="mb-0 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>KTP orang tua / wali</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist-card flex-column align-items-start">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="check-pill">
                                <i class="bi bi-person-badge"></i>
                            </span>
                            <div>
                                <h5 class="mb-0 text-dark fw-bold">Perorangan Usia &ge; 17 Tahun</h5>
                                <small class="text-muted">Kategori Dewasa / Umum</small>
                            </div>
                        </div>
                        <h6 class="mb-2 text-dark fw-semibold">Dokumen yang diperlukan:</h6>
                        <ul class="list-unstyled ps-1 mb-0">
                            <li class="mb-2 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>KTP</span>
                            </li>
                            <li class="mb-0 d-flex align-items-center gap-2">
                                <i class="fas fa-check-circle text-success small"></i>
                                <span>NPWP (opsional)</span>
                            </li>
                        </ul>
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
                    Rencanakan Masa Depan Gemilang Bersama Tabungan Rencana
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Buka rekening mudah dan nikmati keuntungan bagi hasil kompetitif serta hadiah langsung tanpa diundi. Tim BPRS HIK MCI siap mendampingi perencanaan keuangan syariah Anda.
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
