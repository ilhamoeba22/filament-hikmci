@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="{{ url('/berita') }}">Berita</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Semua Berita</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Kumpulan Berita &amp; Informasi
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Arsip lengkap publikasi kegiatan, siaran pers, dan liputan berita PT BPRS HIK MCI.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
            <span class="subpage-section-tag">
                <i class="bi bi-newspaper"></i> Warta Perbankan Syariah
            </span>
            <h2 class="subpage-section-title">
                Semua Berita
            </h2>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($beritas as $berita)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="article-modern-card">
                    <!-- Thumbnail with 16:10 Frame -->
                    <div class="article-thumb-wrapper">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" loading="lazy" />
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success bg-opacity-90 text-white rounded-pill px-3 py-2 small shadow-sm">
                                <i class="bi bi-calendar-event me-1"></i> {{ $berita->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <a href="{{ route('berita.show', $berita->id) }}" class="h5 fw-bold text-dark text-decoration-none d-block mb-2 text-truncate-2">
                                {{ Str::limit($berita->judul, 50) }}
                            </a>
                            <p class="text-secondary small mb-3">
                                {{ Str::limit($berita->isi, 100) }}
                            </p>
                        </div>
                        <div class="pt-2 border-top">
                            <a href="{{ route('berita.show', $berita->id) }}" class="fw-bold text-success text-decoration-none small d-inline-flex align-items-center gap-1">
                                Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center pt-5">
            {{ $beritas->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
