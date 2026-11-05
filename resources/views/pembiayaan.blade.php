@include('header')

<!-- Modern Subpage Hero Start -->
<section class="subpage-hero text-center position-relative">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative py-4" style="max-width: 900px; z-index: 2;">
        <div class="d-flex justify-content-center mb-2">
            <nav aria-label="breadcrumb" class="subpage-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Pembiayaan</span>
            </nav>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan</h1>
        <p class="subpage-subtitle wow fadeInDown" data-wow-delay="0.2s">
            Solusi permodalan dan fasilitas keuangan berlandaskan prinsip syariah yang adil, berkah, dan transparan untuk mendukung pertumbuhan usaha serta mewujudkan rencana masa depan Anda.
        </p>
    </div>
</section>
<!-- Modern Subpage Hero End -->

<!-- Pembiayaan Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Overview Heading -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="feature-pill-badge mb-3">
                <i class="bi bi-shield-check"></i> Pembiayaan Syariah
            </span>
            <h2 class="subpage-section-title fw-bold mb-3" style="font-family: 'Outfit', sans-serif; font-size: clamp(1.75rem, 3vw, 2.35rem); color: #0f172a;">
                Solusi Keuangan Syariah Terpercaya untuk Masa Depan
            </h2>
            <p class="text-muted mb-0" style="font-size: 1rem; line-height: 1.65;">
                Pilihan pembiayaan fleksibel dengan proses yang mudah, angsuran terencana, dan tanpa sistem bunga. Temukan produk yang paling sesuai dengan kebutuhan finansial Anda.
            </p>
        </div>

        <!-- Bento Product Cards Grid -->
        <div class="row g-4 justify-content-center">
            @foreach ([
                [
                    "name" => "UMKM Mikro",
                    "image" => "frontend/img/pembiayaan/MCI_Pemb_UKM.png",
                    "link" => route('pembiayaan-umkm'),
                    "badge" => "Paling Diminati",
                    "badge_class" => "",
                    "category" => "Usaha Mikro & Kecil",
                    "desc" => "Pembiayaan produktif untuk pelaku usaha mikro & kecil tanpa agunan dengan proses cepat untuk permodalan dan ekspansi bisnis.",
                    "highlights" => ["Tanpa Agunan", "Plafond s.d Rp 300 Juta", "Pickup Service"]
                ],
                [
                    "name" => "UMKM Korporat",
                    "image" => "frontend/img/pembiayaan/MCI_Pemb_Corporate.png",
                    "link" => route('pembiayaan-corporate'),
                    "badge" => "Skala Bisnis",
                    "badge_class" => "tag-cyan",
                    "category" => "Ekspansi Usaha",
                    "desc" => "Fasilitas pembiayaan modal kerja dan investasi skala korporasi dengan plafon mulai dari Rp 300 Juta.",
                    "highlights" => ["Mulai Rp 300 Juta", "Tenor s.d 60 Bulan", "Pickup Service"]
                ],
                [
                    "name" => "Properti",
                    "image" => "frontend/img/pembiayaan/MCI_Pemb_Properti.png",
                    "link" => route('pembiayaan-property'),
                    "badge" => "Kepemilikan Aset",
                    "badge_class" => "tag-gold",
                    "category" => "Hunian & Komersial",
                    "desc" => "Wujudkan hunian idaman atau aset komersial impian dengan skema syariah murni dan angsuran tetap.",
                    "highlights" => ["Angsuran Tetap", "Tenor Fleksibel", "Akad Syariah Adil"]
                ],
                [
                    "name" => "Consumer Finance",
                    "image" => "frontend/img/pembiayaan/MCI_Pemb_CustFinance.png",
                    "link" => route('pembiayaan-consumer-finance'),
                    "badge" => "Solusi Personal",
                    "badge_class" => "",
                    "category" => "Kebutuhan Konsumtif",
                    "desc" => "Pembiayaan multiguna untuk Tenaga Pendidik, Pekerja Migran (PMI), hingga Kolektif Karyawan.",
                    "highlights" => ["Tenor s.d 120 Bulan", "Syarat Mudah", "Proses Cepat"]
                ],
            ] as $index => $product)
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ 0.15 + ($index * 0.1) }}s">
                <div class="modern-product-card card-3d h-100 d-flex flex-column">
                    <div class="product-card-img-wrap">
                        <img src="{{ asset($product['image']) }}" class="img-fluid w-100" alt="{{ $product['name'] }}" loading="lazy">
                        <span class="product-floating-tag {{ $product['badge_class'] }}">{{ $product['badge'] }}</span>
                    </div>
                    <div class="product-card-body p-4 d-flex flex-column flex-grow-1">
                        <div class="product-category mb-2">{{ $product['category'] }}</div>
                        <h4 class="product-card-title mb-2" style="font-size: 1.25rem;">{{ $product['name'] }}</h4>
                        <p class="product-card-desc mb-3 flex-grow-1" style="font-size: 0.9rem; line-height: 1.55;">
                            {{ $product['desc'] }}
                        </p>
                        <div class="product-features-list mb-4">
                            @foreach($product['highlights'] as $highlight)
                            <div class="feature-item">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>{{ $highlight }}</span>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-auto">
                            <a href="{{ $product['link'] }}" class="btn btn-product-action w-100">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Consultation WhatsApp Banner Start -->
        <div class="mt-5 pt-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden">
                <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                    <div class="col-lg-8">
                        <div class="feature-pill-badge mb-3 text-white" style="background: rgba(255,255,255,0.18); border-color: rgba(255,255,255,0.3); color: #ffffff;">
                            <i class="bi bi-chat-dots-fill"></i> Konsultasi Pembiayaan Syariah
                        </div>
                        <h3 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">
                            Butuh Konsultasi Pembiayaan yang Tepat?
                        </h3>
                        <p class="text-white mb-0" style="opacity: 0.92; font-size: 1rem;">
                            Tim BPRS HIK MCI siap memberikan simulasi dan rekomendasi skema pembiayaan terbaik yang sesuai dengan profil usaha dan kebutuhan Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 text-md-end text-center">
                        <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa">
                            <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                            <span>Hubungi Pembiayaan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Consultation WhatsApp Banner End -->
    </div>
</div>
<!-- Pembiayaan Content End -->

@include('footer')
