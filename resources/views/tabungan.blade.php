@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">Tabungan</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Produk Tabungan</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Insya Allah Amanah dan Berkah</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Tabungan Products Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px;">
            <span class="feature-pill-badge mb-2">
                <i class="fas fa-shield-alt text-success"></i> Prinsip Murni Syariah
            </span>
            <h2 class="subpage-title text-dark mt-2" style="font-size: clamp(1.6rem, 2.8vw, 2.2rem);">
                Solusi Simpanan Berkah & Terpercaya
            </h2>
            <p class="text-muted mt-2">
                Kelola simpanan masa depan Anda secara aman, nyaman, dan sesuai kaidah syariah bersama BPRS HIK MCI.
            </p>
        </div>

        <!-- Bento Grid Products -->
        <div class="row g-4 justify-content-center">
            @foreach ([
            [
                "name" => "Tabungan Karimah",
                "image" => "frontend/img/tabungan/MCI_Tab_Karimah.png",
                "link" => route('tabungan-karimah'),
                "badge" => "Akad Wadiah",
                "desc" => "Simpanan fleksibel dengan prinsip titipan amanah murni tanpa potongan biaya administrasi bulanan."
            ],
            [
                "name" => "Tabungan Ukhuwah",
                "image" => "frontend/img/tabungan/MCI_Tab_Ukhuwah.png",
                "link" => route('tabungan-ukhuwah'),
                "badge" => "Akad Mudharabah",
                "desc" => "Tabungan investasi bagi hasil kompetitif dengan kesempatan meraih berbagai hadiah menarik."
            ],
            [
                "name" => "Tabungan Cerdas",
                "image" => "frontend/img/tabungan/MCI_Tab_Cerdas.png",
                "link" => route('tabungan-cerdas'),
                "badge" => "Tabungan Pelajar",
                "desc" => "Simpanan edukasi untuk generasi muda dan siswa sekolah dengan setoran awal yang sangat ringan."
            ],
            [
                "name" => "Tabungan Cahaya",
                "image" => "frontend/img/tabungan/MCI_Tab_Cahaya.png",
                "link" => route('tabungan-cahaya'),
                "badge" => "Hadiah Langsung",
                "desc" => "Simpanan eksklusif berjangka dengan benefit hadiah langsung tanpa diundi sesuai pilihan Anda."
            ],
            [
                "name" => "Tabungan Rencana",
                "image" => "frontend/img/tabungan/MCI_Tab_Rencana.png",
                "link" => route('tabungan-rencana'),
                "badge" => "Perencanaan Masa Depan",
                "desc" => "Wujudkan impian masa depan terencana dengan disiplin menabung dan imbal hasil optimal."
            ],
            ] as $index => $product)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.15 + ($index * 0.1) }}s">
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
                        <a href="{{ $product['link'] }}" class="bento-product-title">{{ $product['name'] }}</a>
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ $product['desc'] }}
                        </p>
                        <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                            <span class="text-muted small d-inline-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-1"></i> Dijamin LPS
                            </span>
                            <a href="{{ $product['link'] }}" class="btn btn-sm btn-outline-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-1">
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
                    <h6 class="mb-0 fw-bold text-dark">Simpanan Anda Aman & Terjamin</h6>
                    <small class="text-muted">BPRS HIK MCI berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta merupakan peserta penjaminan LPS.</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabungan Products End -->

@include('footer')
