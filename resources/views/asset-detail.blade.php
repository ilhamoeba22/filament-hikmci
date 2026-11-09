@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="{{ route('asset.index') }}">E-Asset</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Detail Aset</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Detail E-Asset BPRS HIK MCI
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Informasi lengkap agunan dan aset potensial siap jual atau lelang dengan legalitas terjamin.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Asset Main Column -->
            <div class="col-lg-8">
                <div class="modern-sub-card p-4 p-lg-5">
                    <!-- Title & Badges -->
                    <div class="mb-4">
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                            <span class="badge text-white rounded-pill px-3 py-2 small shadow-sm" style="background-color: #0d6824 !important;">
                                <i class="bi bi-shield-check me-1"></i> Aset Resmi BPRS HIK MCI
                            </span>
                            <span class="badge bg-light text-muted border px-3 py-2 small">
                                <i class="bi bi-calendar-event me-1 text-success"></i> {{ $asset->created_at?->format('d M Y') }}
                            </span>
                        </div>
                        <h1 class="h2 fw-bold text-dark lh-sm" style="font-family: 'Outfit', sans-serif;">
                            {{ $asset->judul }}
                        </h1>
                    </div>

                    <!-- Flyer Image with Zoom Preview -->
                    <div class="mb-4 overflow-hidden rounded-4 border bg-light shadow-sm text-center position-relative p-2">
                        <img src="{{ $asset->image_url }}" 
                             class="img-fluid rounded-3" 
                             style="max-height: 75vh; width: auto; object-fit: contain;" 
                             alt="{{ $asset->judul }}"
                             onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                    </div>

                    <!-- Action Buttons: Download & WhatsApp Inquiry -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <a href="{{ $asset->image_url }}" download class="btn btn-outline-success rounded-pill w-100 py-3 fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                                <i class="bi bi-download fs-5"></i>
                                <span>Download Flyer Resmi</span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            @php
                                $waInquiryText = rawurlencode("Halo BPRS HIK MCI, saya tertarik dengan informasi E-Asset: {$asset->judul}. Mohon informasi detail mengenai legalitas dan prosedur pembeliannya.\n\nLink Aset: {$asset->share_url}");
                            @endphp
                            <a href="https://wa.me/6281222770657?text={{ $waInquiryText }}" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill w-100 py-3 fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm text-white" style="background-color: #25D366; border-color: #25D366;">
                                <i class="bi bi-whatsapp fs-5"></i>
                                <span>Tanya Aset via WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Description Note -->
                    <div class="p-3 rounded-3 bg-light border mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-info-circle-fill text-success fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Catatan Penting Penjualan Aset:</h6>
                                <p class="text-secondary small mb-0">
                                    Aset yang ditampilkan merupakan agunan resmi yang telah siap dijual atau dilelang secara sah sesuai ketentuan hukum yang berlaku. Untuk konsultasi harga, jadwal survei lokasi, dan proses administrasi, silakan hubungi tim Customer Care kami.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Share Section Box -->
                    @include('partials.share-box', [
                        'title' => $asset->judul,
                        'url' => $asset->share_url,
                        'type' => 'E-Asset',
                    ])

                    <!-- Back Navigation -->
                    <div class="pt-4 border-top">
                        <a href="{{ route('asset.index') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                            <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar E-Asset
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="modern-sub-card p-4 sticky-lg-top" style="top: 100px; z-index: 10;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                        <h3 class="h5 fw-bold text-dark mb-0">
                            <i class="bi bi-houses text-success me-2"></i>Aset Lainnya
                        </h3>
                        <span class="badge badge-soft-success rounded-pill px-2 py-1 small">Portofolio</span>
                    </div>

                    <div class="d-flex flex-column gap-3 mb-4">
                        @forelse($assetsLainnya as $aItem)
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 hover-bg-light transition" style="border: 1px solid rgba(0,0,0,0.05);">
                            <img src="{{ $aItem->image_url }}" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 76px; height: 76px;" alt="{{ $aItem->judul }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                            <div class="flex-grow-1 min-w-0">
                                <a class="text-dark fw-bold small text-decoration-none d-block text-truncate-2 mb-1" href="{{ route('asset.show', $aItem) }}">
                                    {{ $aItem->judul }}
                                </a>
                                <span class="text-muted small" style="font-size: 0.75rem;">
                                    <i class="bi bi-calendar-event me-1"></i> {{ $aItem->created_at?->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted small text-center mb-0">Tidak ada aset lainnya.</p>
                        @endforelse
                    </div>

                    <div>
                        <a href="{{ route('asset.index') }}" class="btn btn-success rounded-pill w-100 py-2 text-white">
                            Lihat Semua E-Asset <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
