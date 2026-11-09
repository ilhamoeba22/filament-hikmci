@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Edukasi</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Edukasi &amp; Literasi Keuangan
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Tingkatkan pemahaman mengenai prinsip perbankan syariah, tips perencanaan finansial, dan muamalah berkeadilan.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="subpage-section-tag">
                <i class="bi bi-lightbulb"></i> Literasi Syariah
            </span>
            <h2 class="subpage-section-title">
                Semua Konten Edukasi
            </h2>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse($edukasis as $edukasi)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="article-modern-card">
                    <!-- Thumbnail with 16:10 Ratio -->
                    <div class="article-thumb-wrapper">
                        <img src="{{ $edukasi->image_url }}" alt="{{ $edukasi->judul }}" loading="lazy" style="{{ empty($edukasi->gambar) ? 'object-fit: contain; padding: 24px;' : '' }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}'; this.style.objectFit='contain'; this.style.padding='24px';" />
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge text-white rounded-pill px-3 py-2 small shadow-sm" style="background-color: #0d6824 !important;">
                                <i class="bi bi-calendar-event me-1"></i> {{ $edukasi->created_at?->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <a href="{{ route('edukasi.show', $edukasi->id) }}" class="h5 fw-bold text-dark text-decoration-none d-block mb-2 text-truncate-2">
                                {{ $edukasi->judul }}
                            </a>
                            <p class="text-secondary small mb-3">
                                {{ Str::limit($edukasi->isi, 100) }}
                            </p>
                        </div>
                        <div class="pt-2 border-top">
                            <a href="{{ route('edukasi.show', $edukasi->id) }}" class="fw-bold text-success text-decoration-none small d-inline-flex align-items-center gap-1">
                                Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="modern-sub-card p-5 text-center mx-auto" style="max-width: 600px;">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.75rem;">
                        <i class="bi bi-lightbulb text-muted"></i>
                    </div>
                    <h4 class="h5 fw-bold text-dark mt-2">Belum Ada Artikel Edukasi</h4>
                    <p class="text-muted small mb-0">Artikel literasi keuangan syariah akan segera kami hadirkan.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center pt-5">
            {{ $edukasis->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
