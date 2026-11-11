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
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/produk/MCI_Produk_DEPO.png') }}" class="product-top-banner-img" alt="Produk Deposito Karimah">
        </div>

        <!-- Product Overview Intro -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
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
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Mulai Rp 2.500.000,-</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Dijamin LPS Hingga 2 Miliar</span>
                </div>
                <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                    <i class="fas fa-check text-success"></i>
                    <span class="small fw-semibold text-dark">Jaminan Pembiayaan</span>
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

        <!-- Equivalent Rate Deposito Karimah Start (Modern Fintech Table) -->
        <div id="rate-deposito" class="rate-section mb-5 wow fadeInUp" data-wow-delay="0.25s">
            @php
                $rateDeposito = $rateDeposito ?? \Illuminate\Support\Facades\Cache::remember('web:deposito:rates', 86400, function () {
                    return \App\Models\RateDeposito::whereNotNull('bulan')->get();
                });
                $nominals = $nominals ?? \Illuminate\Support\Facades\Cache::remember('web:deposito:nominals', 86400, function () {
                    return \App\Models\Nominal::all();
                });
                $latestRate = $rateDeposito->first();
            @endphp
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4">
                <div>
                    <div class="section-pill-badge mb-2">BAGI HASIL TERBARU</div>
                    <h2 class="subpage-title text-dark mb-1" style="font-size: clamp(1.6rem, 2.5vw, 2.2rem);">
                        Equivalent Rate Deposito Karimah
                    </h2>
                    <p class="section-subheading mb-0 text-muted">
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
                                <th colspan="4" class="text-center bg-emerald-soft text-dark">Jangka Waktu &amp; Imbal Hasil</th>
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
        <!-- Equivalent Rate Deposito Karimah End -->

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
                    <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa" aria-label="Buka Rekening via WhatsApp">
                        <i class="fab fa-whatsapp fs-5 me-2"></i> Buka Rekening
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deposito Detail Content End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

@include('footer')
