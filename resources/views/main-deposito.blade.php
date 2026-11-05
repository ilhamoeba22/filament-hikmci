@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">Deposito</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Deposito</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Memperkenalkan Layanan Pengelolaan Dana Syariah Yang Menguntungkan</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Deposito Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="feature-pill-badge mb-2">
                <i class="fas fa-coins text-success"></i> Deposito
            </span>
            <h2 class="subpage-title text-dark mt-2" style="font-size: clamp(1.6rem, 2.8vw, 2.2rem);">
                Optimalisasi Dana Syariah yang Menguntungkan & Berkah
            </h2>
            <p class="text-muted mt-2">
                Pilihan investasi berjangka syariah yang aman dan kompetitif untuk perorangan maupun lembaga, serta terintegrasi dengan kemaslahatan sosial.
            </p>
        </div>

        <!-- Products Bento Grid -->
        <div class="row g-4 justify-content-center">
            @foreach ([
            [
                "name" => "Deposito Karimah",
                "image" => "frontend/img/deposito/DEPO_KARIMAH.png",
                "link" => route('deposito'),
                "badge" => "Investasi Mudharabah",
                "desc" => "Investasi deposito syariah dengan bagi hasil optimal, pilihan jangka waktu fleksibel, dan dijamin penuh oleh LPS hingga 2 Miliar."
            ],
            [
                "name" => "CWLD",
                "image" => "frontend/img/deposito/DEPO_CWLD.png",
                "link" => route('wakaf.index'),
                "badge" => "Cash Waqf Linked Deposit",
                "desc" => "Inovasi investasi syariah bernilai ibadah jariyah, menggabungkan penempatan deposito dengan wakaf uang temporer bersama Nazhir resmi."
            ],
            ] as $index => $product)
            <div class="col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                <div class="bento-product-card">
                    <div class="bento-product-thumb">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" loading="lazy">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-dark shadow-sm px-3 py-2 rounded-pill fw-semibold" style="font-size: 0.78rem; border: 1px solid rgba(0,0,0,0.06);">
                                {{ $product['badge'] }}
                            </span>
                        </div>
                    </div>
                    <div class="bento-product-body">
                        <a href="{{ $product['link'] }}" class="bento-product-title" style="font-size: 1.35rem;">{{ $product['name'] }}</a>
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ $product['desc'] }}
                        </p>
                        <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                            <span class="text-muted small d-inline-flex align-items-center">
                                <i class="fas fa-shield-alt text-success me-1"></i> Aman & Berizin OJK
                            </span>
                            <a href="{{ $product['link'] }}" class="btn btn-sm btn-outline-success rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-1">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-right small"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Trust & Security Banner -->
        <div class="mt-5 p-4 rounded-3 text-center wow fadeInUp" data-wow-delay="0.3s" style="background: #ffffff; border: 1px dashed rgba(13, 104, 36, 0.25);">
            <div class="row align-items-center justify-content-center g-3">
                <div class="col-auto">
                    <span class="bento-icon-box" style="width: 44px; height: 44px;">
                        <i class="fas fa-shield-alt text-success fs-5"></i>
                    </span>
                </div>
                <div class="col-auto text-start">
                    <h6 class="mb-0 fw-bold text-dark">Investasi Dijamin Lembaga Penjamin Simpanan (LPS)</h6>
                    <small class="text-muted">Simpanan deposito Anda di BPRS HIK MCI dijamin oleh LPS hingga Rp 2 Miliar per nasabah sesuai ketentuan yang berlaku.</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deposito Content End -->

@include('footer')
