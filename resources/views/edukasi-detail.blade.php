@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="{{ route('edukasi.index') }}">Edukasi</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Artikel Edukasi</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Literasi &amp; Edukasi Syariah
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Wawasan informatif seputar transaksi, akad, dan keunggulan perbankan syariah bersama BPRS HIK MCI.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Article Main Column -->
            <div class="col-lg-8">
                <div class="modern-sub-card p-4 p-lg-5">
                    <!-- Title -->
                    <h1 class="h2 fw-bold text-dark mb-3 lh-sm" style="font-family: 'Outfit', sans-serif;">
                        {{ $edukasi->judul }}
                    </h1>

                    <!-- Meta Badges -->
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-4 pb-3 border-bottom">
                        <span class="badge bg-light text-muted border px-3 py-2 small">
                            <i class="bi bi-calendar3 me-1 text-success"></i> {{ $edukasi->created_at->format('l, d F Y') }}
                        </span>
                        <span class="badge badge-soft-success px-3 py-2 small">
                            <i class="bi bi-mortarboard-fill me-1"></i> Edukasi Keuangan
                        </span>
                    </div>

                    <!-- Featured Image -->
                    <div class="mb-4 overflow-hidden rounded-4 border bg-light shadow-sm text-center">
                        <img src="{{ $edukasi->image_url }}" class="w-100 object-fit-cover" style="max-height: 480px; {{ empty($edukasi->gambar) ? 'object-fit: contain; max-height: 240px; padding: 40px;' : '' }}" alt="{{ $edukasi->judul }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}'; this.classList.remove('object-fit-cover'); this.style.objectFit='contain'; this.style.maxHeight='240px'; this.style.padding='40px';">
                    </div>

                    <!-- Body Content -->
                    <div class="lh-lg text-secondary mb-4" style="font-size: 1.05rem; text-align: justify;">
                        {!! nl2br(e($edukasi->isi)) !!}
                    </div>

                    <!-- Back Navigation -->
                    <div class="pt-4 border-top">
                        <a href="{{ route('edukasi.index') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                            <i class="bi bi-arrow-left me-2"></i> Kembali ke Edukasi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="modern-sub-card p-4 sticky-lg-top" style="top: 100px; z-index: 10;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                        <h3 class="h5 fw-bold text-dark mb-0">
                            <i class="bi bi-lightbulb text-success me-2"></i>Edukasi Lainnya
                        </h3>
                        <span class="badge badge-soft-success rounded-pill px-2 py-1 small">Artikel</span>
                    </div>

                    <div class="d-flex flex-column gap-3 mb-4">
                        @forelse($edukasiLainnya as $eItem)
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 hover-bg-light transition" style="border: 1px solid rgba(0,0,0,0.05);">
                            <img src="{{ $eItem->image_url }}" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 76px; height: 76px; {{ empty($eItem->gambar) ? 'object-fit: contain; padding: 8px;' : '' }}" alt="{{ $eItem->judul }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}'; this.classList.remove('object-fit-cover'); this.style.objectFit='contain'; this.style.padding='8px';">
                            <div class="flex-grow-1 min-w-0">
                                <a class="text-dark fw-bold small text-decoration-none d-block text-truncate-2 mb-1" href="{{ route('edukasi.show', $eItem->id) }}">
                                    {{ $eItem->judul }}
                                </a>
                                <span class="text-muted small" style="font-size: 0.75rem;">
                                    <i class="bi bi-calendar-event me-1"></i> {{ $eItem->created_at?->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted small text-center mb-0">Tidak ada artikel lainnya.</p>
                        @endforelse
                    </div>

                    <div>
                        <a href="{{ route('edukasi.index') }}" class="btn btn-success rounded-pill w-100 py-2 text-white">
                            Lihat Semua Edukasi <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
