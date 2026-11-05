@include('header')

<!-- Main Hero Section Start (Full-Bleed 3D WebGL Islamic Digital Banking) -->
<section id="hero" class="hero-section position-relative overflow-hidden">
    <!-- Full-Bleed 3D WebGL Canvas & Floating Labels (Desktop Only >= 992px) -->
    <div id="stage" class="d-none d-lg-block" aria-hidden="true"></div>
    <div id="labels" class="d-none d-lg-block" aria-hidden="true"></div>

    <div class="container hero-container position-relative" style="position: relative; z-index: 30 !important; pointer-events: auto !important;">
        <div class="row align-items-center g-4 g-lg-5 min-vh-hero">
            <!-- Left Column: Copy & CTAs -->
            <div class="col-lg-6 col-12 text-start">
                <!-- Trust Pill Badge -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill hero-badge mb-4">
                    <span class="pulse-dot"></span>
                    <span class="hero-badge-text">Berizin & Diawasi OJK • Peserta Penjaminan LPS (s.d Rp 2 Miliar)</span>
                </div>

                <!-- Stadium Headline -->
                <h1 class="hero-title mb-4">
                    Keuangan Syariah <br class="d-none d-sm-inline" />
                    <span class="hero-gradient-text">Berkah, Amanah &amp; Modern</span>
                </h1>

                <!-- Subtitle / Value Proposition -->
                <p class="hero-description mb-4">
                    Solusi perbankan syariah terpercaya di Yogyakarta sejak 2008. Dukung kemajuan usaha Anda melalui pembiayaan produktif, investasi deposito, dan tabungan syariah.
                </p>

                <!-- Action Button Group -->
                <div class="d-flex flex-wrap align-items-center gap-3 mb-5">
                    <a href="#simulasi-section" class="btn btn-modern-primary">
                        <span>Simulasi Pembiayaan</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="#produk-unggulan" class="btn btn-modern-ghost">
                        <i class="fas fa-th-large me-2"></i>
                        <span>Jelajahi Produk</span>
                    </a>
                    <a href="https://wa.me/6281222770657" target="_blank" class="btn btn-modern-wa">
                        <i class="fab fa-whatsapp me-2"></i>
                        <span>WhatsApp CS</span>
                    </a>
                </div>

                <!-- Trust Strip / Key Metrics (pixel-io split highlights) -->
                <div class="hero-highlights-strip p-2 p-md-3 rounded-2xl d-flex flex-wrap align-items-center justify-content-start gap-3 gap-md-4">
                    <div class="d-flex align-items-center gap-3 highlight-item">
                        <div class="highlight-icon-box bg-emerald-soft">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <div class="highlight-title">LPS Terjamin</div>
                            <div class="highlight-sub">Simpanan aman s.d Rp 2 Miliar</div>
                        </div>
                    </div>
                    <div class="highlight-divider d-none d-md-block"></div>
                    <div class="d-flex align-items-center gap-3 highlight-item">
                        <div class="highlight-icon-box bg-cyan-soft">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div>
                            <div class="highlight-title">100% Prinsip Syariah</div>
                            <div class="highlight-sub">Akad murni, adil &amp; tanpa riba</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Stage & Floating Badges (Desktop Only >= 992px) -->
            <div class="col-lg-6 text-center position-relative d-none d-lg-block">
                <div class="hero-badges-stage position-relative mx-auto" id="heroFintechStage">
                    <!-- Ambient Glow Behind Badges -->
                    <div class="card-ambient-glow" aria-hidden="true"></div>

                    <!-- Floating Glass Tag 1: Top Right (Institutional Experience Badge) -->
                    <div class="floating-glass-badge badge-top-right animate-float layer-parallax-high">
                        <div class="d-flex align-items-center gap-2">
                            <div class="badge-icon-award"><i class="fas fa-award text-warning"></i></div>
                            <div class="text-start">
                                <div class="badge-bold">16+ Tahun Mengabdi</div>
                                <div class="badge-caption">Sejak 11 Januari 2008</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Glass Tag 2: Bottom Left (Head Office Location) -->
                    <div class="floating-glass-badge badge-bottom-left animate-float-delayed layer-parallax-high">
                        <div class="d-flex align-items-center gap-2">
                            <span class="pulse-dot"></span>
                            <div class="text-start">
                                <div class="badge-bold">Kantor Pusat Sleman</div>
                                <div class="badge-caption">Jl. Kaliurang KM 09, Yogyakarta</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Glass Tag 3: Bottom Right (Sharia Compliance & Trust) -->
                    <div class="floating-glass-badge badge-bottom-right animate-float layer-parallax-high">
                        <div class="d-flex align-items-center gap-2">
                            <div class="badge-icon-trend"><i class="fas fa-shield-alt text-success"></i></div>
                            <div class="text-start">
                                <div class="badge-bold">Murni Syariah &amp; Terpercaya</div>
                                <div class="badge-caption">Diawasi OJK &amp; Dijamin LPS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Hero Section End -->

<!-- Logo / Trust Marquee Strip Start (pixel-io style) -->
<section class="marquee-section border-top border-bottom py-3">
    <div class="marquee-wrapper overflow-hidden">
        <div class="animate-marquee d-inline-flex align-items-center gap-5">
            <div class="marquee-item"><i class="fas fa-shield-alt text-success me-2"></i>Berizin & Diawasi OJK</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-university text-info me-2"></i>Dijamin Lembaga Penjamin Simpanan (LPS)</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-mosque text-success me-2"></i>100% Akad Sesuai Syariah Islam</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-award text-warning me-2"></i>16+ Tahun Melayani Yogyakarta</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-handshake text-info me-2"></i>Mitra Pertumbuhan UMKM & Bisnis</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-map-marker-alt text-danger me-2"></i>Sleman, Daerah Istimewa Yogyakarta</div>
            <div class="marquee-dot">•</div>
            <!-- Duplicate for seamless infinite loop -->
            <div class="marquee-item"><i class="fas fa-shield-alt text-success me-2"></i>Berizin & Diawasi OJK</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-university text-info me-2"></i>Dijamin Lembaga Penjamin Simpanan (LPS)</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-mosque text-success me-2"></i>100% Akad Sesuai Syariah Islam</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-award text-warning me-2"></i>16+ Tahun Melayani Yogyakarta</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-handshake text-info me-2"></i>Mitra Pertumbuhan UMKM & Bisnis</div>
            <div class="marquee-dot">•</div>
            <div class="marquee-item"><i class="fas fa-map-marker-alt text-danger me-2"></i>Sleman, Daerah Istimewa Yogyakarta</div>
        </div>
    </div>
</section>
<!-- Logo / Trust Marquee Strip End -->

<!-- Core Products Section Start (pixel-io Bento Grid style) -->
<section id="produk-unggulan" class="products-section py-4 position-relative">
    <div class="container py-2">
        <!-- Section Title (Title.tsx style) -->
        <div class="text-center max-w-700 mx-auto mb-5">
            <div class="section-pill-badge mb-3">PRODUK & LAYANAN UNGGULAN</div>
            <h2 class="section-heading mb-3">Solusi Finansial Syariah Lengkap & Fleksibel</h2>
            <p class="section-subheading">
                Didesain dengan transparansi akad syariah untuk mendukung setiap tahap kehidupan finansial, usaha, dan masa depan Anda.
            </p>
        </div>

        <!-- 3-Column Bento Cards -->
        <div class="row g-4 justify-content-center">
            <!-- Card 1: Deposito Karimah -->
            <div class="col-lg-4 col-md-6">
                <div class="modern-product-card card-3d h-100 d-flex flex-column">
                    <div class="card-shine"></div>
                    <div class="product-card-img-wrap">
                        <img src="{{ asset('frontend/img/home/MCI_Home_Depo.webp') }}" class="img-fluid w-100" alt="Deposito Karimah BPRS HIK MCI" loading="lazy" />
                        <span class="product-floating-tag">Investasi Berkah</span>
                    </div>
                    <div class="product-card-body p-4 d-flex flex-column flex-grow-1">
                        <div class="product-category mb-2">Simpanan Berjangka</div>
                        <h4 class="product-card-title mb-3">Deposito Karimah</h4>
                        <p class="product-card-desc mb-4 flex-grow-1">
                            Investasi syariah dengan nisbah bagi hasil kompetitif. Dana aman dijamin LPS hingga Rp 2 Miliar dengan pilihan jangka waktu 1, 3, 6, hingga 12 bulan.
                        </p>
                        <div class="product-features-list mb-4">
                            <div class="feature-item"><span class="feature-icon"><i class="fas fa-check"></i></span><span>Bagi Hasil Kompetitif &amp; Adil</span></div>
                            <div class="feature-item"><span class="feature-icon"><i class="fas fa-check"></i></span><span>Dijamin Penuh oleh LPS s.d Rp 2 Miliar</span></div>
                            <div class="feature-item"><span class="feature-icon"><i class="fas fa-check"></i></span><span>Dapat Digunakan Sebagai Jaminan</span></div>
                        </div>
                        <a href="{{ url('main-deposito') }}" class="btn btn-product-action w-100">
                            <span>Pelajari Deposito</span>
                            <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tabungan Syariah -->
            <div class="col-lg-4 col-md-6">
                <div class="modern-product-card card-3d h-100 d-flex flex-column">
                    <div class="card-shine"></div>
                    <div class="product-card-img-wrap">
                        <img src="{{ asset('frontend/img/home/MCI_Home_Tabungan.webp') }}" class="img-fluid w-100" alt="Tabungan Syariah BPRS HIK MCI" loading="lazy" />
                        <span class="product-floating-tag tag-cyan">Rencana Masa Depan</span>
                    </div>
                    <div class="product-card-body p-4 d-flex flex-column flex-grow-1">
                        <div class="product-category mb-2">Simpanan Fleksibel</div>
                        <h4 class="product-card-title mb-3">Tabungan Syariah</h4>
                        <p class="product-card-desc mb-4 flex-grow-1">
                            Kelola keuangan harian dan wujudkan impian dengan ragam tabungan syariah: Tabungan Ukhuwah, Karimah, Rencana, dan Cerdas tanpa potongan riba.
                        </p>
                        <div class="product-features-list mb-4">
                            <div class="feature-item"><span class="feature-icon icon-cyan"><i class="fas fa-check"></i></span><span>Akad Wadiah &amp; Mudharabah</span></div>
                            <div class="feature-item"><span class="feature-icon icon-cyan"><i class="fas fa-check"></i></span><span>Setoran Awal Sangat Ringan</span></div>
                            <div class="feature-item"><span class="feature-icon icon-cyan"><i class="fas fa-check"></i></span><span>Fasilitas Buku Tabungan Lengkap</span></div>
                        </div>
                        <a href="{{ url('tabungan') }}" class="btn btn-product-action w-100">
                            <span>Pelajari Tabungan</span>
                            <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Pembiayaan Syariah -->
            <div class="col-lg-4 col-md-6">
                <div class="modern-product-card card-3d h-100 d-flex flex-column">
                    <div class="card-shine"></div>
                    <div class="product-card-img-wrap">
                        <img src="{{ asset('frontend/img/home/MCI_Home_Pembiayaan.webp') }}" class="img-fluid w-100" alt="Pembiayaan Syariah BPRS HIK MCI" loading="lazy" />
                        <span class="product-floating-tag tag-gold">Solusi Permodalan</span>
                    </div>
                    <div class="product-card-body p-4 d-flex flex-column flex-grow-1">
                        <div class="product-category mb-2">Mitra Bisnis & Properti</div>
                        <h4 class="product-card-title mb-3">Pembiayaan Syariah</h4>
                        <p class="product-card-desc mb-4 flex-grow-1">
                            Bantuan modal kerja usaha UMKM, kepemilikan properti/rumah impian, hingga kebutuhan konsumtif dengan proses cepat, angsuran tetap, dan akad Murabahah.
                        </p>
                        <div class="product-features-list mb-4">
                            <div class="feature-item"><span class="feature-icon icon-gold"><i class="fas fa-check"></i></span><span>Angsuran Tetap Hingga Lunas</span></div>
                            <div class="feature-item"><span class="feature-icon icon-gold"><i class="fas fa-check"></i></span><span>Proses Cepat &amp; Persyaratan Mudah</span></div>
                            <div class="feature-item"><span class="feature-icon icon-gold"><i class="fas fa-check"></i></span><span>Konsultasi Ramah &amp; Berpengalaman</span></div>
                        </div>
                        <a href="{{ url('pembiayaan') }}" class="btn btn-product-action w-100">
                            <span>Pelajari Pembiayaan</span>
                            <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Core Products Section End -->

<!-- RELOCATED CAROUSEL SECTION: Promo, Kegiatan & Informasi Terkini (Clean Modern Frame) -->
<section id="promo-carousel-section" class="carousel-modern-section py-4">
    <div class="container py-2">
        <!-- Section Title -->
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4">
            <div>
                <div class="section-pill-badge mb-2">UPDATE & PENGUMUMAN</div>
                <h2 class="section-heading mb-1">Informasi, Promo & Kegiatan Terkini</h2>
                <p class="section-subheading mb-0">Ikuti perkembangan program dan penawaran spesial BPRS HIK MCI</p>
            </div>
            <!-- Custom Carousel Navigation Buttons -->
            <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
                <button class="btn btn-carousel-arrow" type="button" data-bs-target="#carouselId" data-bs-slide="prev" aria-label="Slide sebelumnya">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn btn-carousel-arrow" type="button" data-bs-target="#carouselId" data-bs-slide="next" aria-label="Slide berikutnya">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Modern Framed Carousel -->
        <div class="modern-carousel-frame rounded-3xl overflow-hidden position-relative shadow-lg border">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <ol class="carousel-indicators modern-indicators">
                    @foreach($carousels as $index => $carousel)
                    <li data-bs-target="#carouselId" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @forelse($carousels as $index => $carousel)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ Storage::url($carousel->image) }}" class="d-block w-100 carousel-banner-img" alt="Banner BPRS HIK MCI {{ $index + 1 }}" loading="lazy" />
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center p-5 text-center text-white" style="min-height: 260px; background: linear-gradient(135deg, #07170c 0%, #0d6824 100%);">
                            <div>
                                <h4 class="text-white mb-2">BPRS HIK MCI</h4>
                                <p class="text-white-50 mb-0">Wujudkan Keuangan Syariah yang Berkah dan Terpercaya</p>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Relocated Carousel Section End -->

<!-- Interactive Financing Simulator Start (pixel-io modern fintech tool) -->
<section id="simulasi-section" class="simulator-section py-4 position-relative">
    <div class="container py-2">
        <div class="text-center max-w-700 mx-auto mb-5">
            <div class="section-pill-badge mb-3">KALKULATOR SYARIAH</div>
            <h2 class="section-heading mb-3">Simulasi Pembiayaan Fleksibel</h2>
            <p class="section-subheading">
                Berapapun rencana pembiayaan Anda, hitung estimasi angsuran bulanan secara transparan sebelum mengajukan permohonan.
            </p>
        </div>

        <div class="row g-4 align-items-center justify-content-center">
            <!-- Left Info Card -->
            <div class="col-lg-4">
                <div class="simulator-info-card p-4 rounded-3xl h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="info-card-icon">
                            <i class="fas fa-calculator text-success fs-3"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 text-dark fw-bold">Hitung Cepat</h5>
                            <small class="text-muted">Estimasi margin transparan</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4">
                        Simulasi ini menggunakan estimasi margin flat syariah sebagai acuan awal. Tim pembiayaan kami siap membantu perhitungan spesifik sesuai kebutuhan usaha Anda.
                    </p>
                    <div class="p-3 rounded-2xl bg-white border mb-4">
                        <div class="d-flex justify-content-between mb-2 small">
                            <span class="text-muted">Plafon Pembiayaan:</span>
                            <span class="fw-bold text-dark">s.d Rp 2 Miliar</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 small">
                            <span class="text-muted">Akad Utama:</span>
                            <span class="fw-bold text-success">Murabahah / Ijarah</span>
                        </div>
                        <div class="d-flex justify-content-between small">
                            <span class="text-muted">Keputusan:</span>
                            <span class="fw-bold text-info">Cepat & Amanah</span>
                        </div>
                    </div>
                    <a href="https://wa.me/6281222770657?text=Halo%20BPRS%20HIK%20MCI,%20saya%20ingin%20konsultasi%20pembiayaan." target="_blank" class="btn btn-outline-success w-100 rounded-pill py-2">
                        <i class="fab fa-whatsapp me-2"></i>Konsultasi Tim Pembiayaan
                    </a>
                </div>
            </div>

            <!-- Right Calculator Form -->
            <div class="col-lg-8">
                <div class="simulator-form-card p-4 p-md-5 rounded-3xl border shadow-sm bg-white">
                    <form class="row g-4" id="pembiayaanForm">
                        <!-- Quick Amount Presets -->
                        <div class="col-12">
                            <label class="form-label text-dark fw-semibold mb-2">Pilih Cepat Nominal:</label>
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <button type="button" class="btn btn-sm btn-preset-amount" onclick="setPresetAmount(10000000, this)">Rp 10 Juta</button>
                                <button type="button" class="btn btn-sm btn-preset-amount" onclick="setPresetAmount(25000000, this)">Rp 25 Juta</button>
                                <button type="button" class="btn btn-sm btn-preset-amount" onclick="setPresetAmount(50000000, this)">Rp 50 Juta</button>
                                <button type="button" class="btn btn-sm btn-preset-amount" onclick="setPresetAmount(100000000, this)">Rp 100 Juta</button>
                                <button type="button" class="btn btn-sm btn-preset-amount" onclick="setPresetAmount(250000000, this)">Rp 250 Juta</button>
                            </div>
                        </div>

                        <!-- Jumlah Pembiayaan Input -->
                        <div class="col-md-6">
                            <label for="jumlahPembiayaan" class="form-label text-dark fw-semibold">Jumlah Pembiayaan (Rp)</label>
                            <div class="input-group input-group-modern">
                                <span class="input-group-text bg-transparent border-end-0 text-muted fw-bold">Rp</span>
                                <input type="text" class="form-control border-start-0" id="jumlahPembiayaan" placeholder="Contoh: 50.000.000" />
                            </div>
                            <small class="text-muted">Ketik angka atau klik tombol nominal cepat di atas</small>
                        </div>

                        <!-- Jangka Waktu Dropdown -->
                        <div class="col-md-6">
                            <label for="jangkaWaktuPembiayaan" class="form-label text-dark fw-semibold">Jangka Waktu (Tenor)</label>
                            <select class="form-select form-select-modern" id="jangkaWaktuPembiayaan">
                                <option value="" disabled selected>Pilih Jangka Waktu</option>
                                <option value="3">3 Bulan (Jangka Pendek)</option>
                                <option value="6">6 Bulan (Setengah Tahun)</option>
                                <option value="9">9 Bulan</option>
                                <option value="12">12 Bulan (1 Tahun)</option>
                            </select>
                            <small class="text-muted">Tenor fleksibel sesuai siklus perputaran usaha</small>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-center pt-2">
                            <button type="button" class="btn btn-modern-primary px-5 py-3 rounded-pill" onclick="calculatePembiayaan()">
                                <i class="fas fa-calculator me-2"></i>Hitung Angsuran Sekarang
                            </button>
                        </div>
                    </form>

                    <!-- Result Container (preserves original ID & styling) -->
                    <div id="pembiayaanResult" class="mt-4 p-4 rounded-2xl bg-light border" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Interactive Financing Simulator End -->

<!-- Equivalent Rate Deposito Start (Modern Fintech Table) -->
<section id="rate-deposito" class="rate-section py-4">
    <div class="container py-2">
        @php
            $latestRate = $rateDeposito->first();
        @endphp
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4">
            <div>
                <div class="section-pill-badge mb-2">BAGI HASIL TERBARU</div>
                <h2 class="section-heading mb-1">
                    Equivalent Rate Deposito Karimah
                </h2>
                <p class="section-subheading mb-0">
                    Bulan <span id="bulan" class="fw-bold text-success">{{ $latestRate?->bulan ?? 'N/A' }}</span> Tahun <span id="tahun" class="fw-bold text-success">{{ $latestRate?->created_at?->format('Y') ?? 'N/A' }}</span>
                </p>
            </div>
            <div class="mt-3 mt-md-0">
                <button id="download-pdf" class="btn btn-outline-success rounded-pill px-4 py-2">
                    <i class="fas fa-file-pdf me-2"></i>Download PDF Resmi
                </button>
            </div>
        </div>

        <div class="modern-table-container rounded-3xl border shadow-sm bg-white overflow-hidden p-2 p-md-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="myTable">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center align-middle bg-emerald-soft text-dark">Nominal Penempatan</th>
                            <th colspan="4" class="text-center bg-emerald-soft text-dark">Jangka Waktu & Imbal Hasil</th>
                        </tr>
                        <tr class="text-center table-subhead-row">
                            <th class="py-3">1 Bulan <br><span class="badge-er mt-1">ER {{ $latestRate?->rate_1_bulan ?? 'N/A' }}%</span></th>
                            <th class="py-3">3 Bulan <br><span class="badge-er mt-1">ER {{ $latestRate?->rate_3_bulan ?? 'N/A' }}%</span></th>
                            <th class="py-3">6 Bulan <br><span class="badge-er mt-1">ER {{ $latestRate?->rate_6_bulan ?? 'N/A' }}%</span></th>
                            <th class="py-3">12 Bulan <br><span class="badge-er mt-1">ER {{ $latestRate?->rate_12_bulan ?? 'N/A' }}%</span></th>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        @forelse ($nominals as $nominal)
                        <tr>
                            <td data-label="Nominal" class="fw-bold text-dark ps-3">Rp. {{ number_format($nominal->nominal, 2, ',', '.') }}</td>
                            <td data-label="1 Bulan" class="text-center">
                                @if ($latestRate && $latestRate->rate_1_bulan)
                                <span class="fw-semibold text-success">Rp. {{ number_format(($nominal->nominal * $latestRate->rate_1_bulan / 100) / 12, 2, ',', '.') }}</span>
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td data-label="3 Bulan" class="text-center">
                                @if ($latestRate && $latestRate->rate_3_bulan)
                                <span class="fw-semibold text-success">Rp. {{ number_format(($nominal->nominal * $latestRate->rate_3_bulan / 100) / 12, 2, ',', '.') }}</span>
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td data-label="6 Bulan" class="text-center">
                                @if ($latestRate && $latestRate->rate_6_bulan)
                                <span class="fw-semibold text-success">Rp. {{ number_format(($nominal->nominal * $latestRate->rate_6_bulan / 100) / 12, 2, ',', '.') }}</span>
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td data-label="12 Bulan" class="text-center">
                                @if ($latestRate && $latestRate->rate_12_bulan)
                                <span class="fw-semibold text-success">Rp. {{ number_format(($nominal->nominal * $latestRate->rate_12_bulan / 100) / 12, 2, ',', '.') }}</span>
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                Data nominal belum tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Client-Side Modern Pagination Controls (5 or 10 rows toggle, instant response) -->
            <div id="deposito-pagination-container" class="deposito-pagination-bar d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 pt-3 pb-2 px-2 border-top mt-2">
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <span id="deposito-pagination-info" class="pagination-info text-muted small">
                        Menampilkan 1 - 5 dari {{ count($nominals) }} nominal
                    </span>
                    <div class="d-flex align-items-center gap-2">
                        <label for="deposito-per-page" class="small text-muted mb-0">Baris:</label>
                        <select id="deposito-per-page" class="form-select form-select-sm per-page-select" aria-label="Jumlah nominal per halaman">
                            <option value="5" selected>5</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <nav aria-label="Navigasi Halaman Deposito">
                    <ul id="deposito-pagination-pages" class="pagination pagination-modern mb-0">
                        <!-- Populated dynamically by client-side script with zero reload -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Equivalent Rate Deposito End -->

<!-- Berita Terkini Start (Modern News Cards) -->
<section id="berita-section" class="news-section py-4">
    <div class="container py-2">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4">
            <div>
                <div class="section-pill-badge mb-2">ARTIKEL & PUBLIKASI</div>
                <h2 class="section-heading mb-1">Berita & Informasi Terbaru</h2>
                <p class="section-subheading mb-0">Wawasan perbankan syariah, literasi keuangan, dan agenda BPRS HIK MCI</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="{{ url('berita') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                    Lihat Semua Berita <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse($beritaTerakhir as $berita)
            <div class="col-lg-4 col-md-6">
                <article class="modern-news-card card-3d h-100 d-flex flex-column rounded-3xl overflow-hidden border shadow-sm bg-white">
                    <div class="card-shine"></div>
                    <div class="news-thumb-wrapper position-relative overflow-hidden">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="img-fluid w-100 news-thumb-img" alt="{{ $berita->judul }}" loading="lazy" />
                        <span class="news-date-badge">
                            <i class="far fa-calendar-alt me-1"></i> {{ $berita->created_at?->format('d M Y') }}
                        </span>
                    </div>
                    <div class="news-body p-4 d-flex flex-column flex-grow-1">
                        <h5 class="news-title mb-3">
                            <a href="{{ route('berita.show', $berita->id) }}" class="text-decoration-none text-dark hover-green">
                                {{ Str::limit($berita->judul, 60) }}
                            </a>
                        </h5>
                        <p class="news-excerpt text-muted small mb-4 flex-grow-1">
                            {{ Str::limit(strip_tags($berita->isi), 110) }}
                        </p>
                        <a href="{{ route('berita.show', $berita->id) }}" class="news-read-more d-inline-flex align-items-center text-success fw-semibold text-decoration-none">
                            <span>Baca Selengkapnya</span>
                            <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                        </a>
                    </div>
                </article>
            </div>
            @empty
            <div class="col-12 text-center py-4 text-muted">
                <p class="mb-0">Belum ada berita terbaru saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- Berita Terkini End -->

<!-- Call To Action Banner Start (pixel-io CTA component inspired) -->
<section class="cta-section py-4">
    <div class="container">
        <div class="cta-banner-wrapper p-4 p-md-5 rounded-3xl position-relative overflow-hidden text-center text-md-start">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-md-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill cta-pill-badge text-white fw-semibold mb-3">
                        <i class="fas fa-hands-helping text-warning"></i> <span>Layanan Konsultasi Bebas Biaya</span>
                    </div>
                    <h2 class="cta-title text-white fw-bold mb-3">Siap Menjalin Kerjasama Syariah Bersama Kami?</h2>
                    <p class="cta-subtitle text-white mb-0">
                        Kunjungi kantor kami di Sleman atau hubungi layanan WhatsApp resmi untuk pembukaan rekening, simulasi pembiayaan, dan kemitraan usaha.
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="https://wa.me/6281222770657" target="_blank" class="btn btn-cta-wa me-md-2 mb-2 mb-md-0">
                        <i class="fab fa-whatsapp me-2 fs-5 text-success"></i><span>Hubungi WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Banner End -->

@include('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

<script>
// Helper to set preset amounts in simulation input
function setPresetAmount(amount, btnElement) {
    const input = document.getElementById('jumlahPembiayaan');
    if (input) {
        input.value = amount.toLocaleString('id-ID');
        input.focus();
    }
    document.querySelectorAll('.btn-preset-amount').forEach(btn => btn.classList.remove('active'));
    if (btnElement) {
        btnElement.classList.add('active');
    }
}

// Auto-format currency typing in #jumlahPembiayaan
document.addEventListener('DOMContentLoaded', function() {
    const amountInput = document.getElementById('jumlahPembiayaan');
    if (amountInput) {
        amountInput.addEventListener('input', function(e) {
            let val = this.value.replace(/\D/g, '');
            if (val) {
                this.value = parseInt(val, 10).toLocaleString('id-ID');
            }
        });
    }
});
</script>
