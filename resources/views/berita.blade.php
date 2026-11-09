@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="{{ route('berita-all') }}">Berita</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Kabar Berita</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Kabar &amp; Berita Terkini
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Informasi terkini, liputan kegiatan, dan kabar perkembangan PT BPRS HIK MCI.
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
                @if($berita)
                <div class="modern-sub-card p-4 p-lg-5">
                    <!-- Title -->
                    <h1 class="h2 fw-bold text-dark mb-3 lh-sm" style="font-family: 'Outfit', sans-serif;">
                        {{ $berita->judul }}
                    </h1>

                    <!-- Meta Badges -->
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-4 pb-3 border-bottom">
                        <span class="badge bg-light text-muted border px-3 py-2 small">
                            <i class="bi bi-calendar3 me-1 text-success"></i> {{ $berita->created_at?->format('l, d F Y') }}
                        </span>
                        <span class="badge badge-soft-success px-3 py-2 small">
                            <i class="bi bi-person-fill me-1"></i> Author: {{ $berita->user?->name ?? 'Admin BPRS HIK MCI' }}
                        </span>
                        @if(!empty($berita->lokasi))
                        <span class="badge bg-light text-secondary border px-3 py-2 small">
                            <i class="bi bi-geo-alt-fill me-1 text-danger"></i> {{ $berita->lokasi }}
                        </span>
                        @endif
                    </div>

                    <!-- Featured Image -->
                    @if($berita->gambar)
                    <div class="mb-4 overflow-hidden rounded-4 border bg-light shadow-sm">
                        <img src="{{ $berita->image_url }}" class="w-100 object-fit-cover" style="max-height: 480px;" alt="{{ $berita->judul }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                    </div>
                    @endif

                    <!-- Article Body Content -->
                    <div class="article-content-body lh-lg text-secondary mb-4" style="font-size: 1.05rem; text-align: justify;">
                        @if(!empty($berita->lokasi))
                        <p class="mb-3"><span class="fw-bold text-dark">{{ $berita->lokasi }} &ndash;</span></p>
                        @endif
                        @if(strip_tags($berita->isi) !== $berita->isi)
                            {!! $berita->isi !!}
                        @else
                            {!! nl2br(e($berita->isi)) !!}
                        @endif
                    </div>

                    <!-- Share Section Box -->
                    @include('partials.share-box', [
                        'title' => $berita->judul,
                        'url' => $berita->share_url,
                        'type' => 'Berita',
                    ])

                    <!-- Back Navigation -->
                    <div class="pt-4 border-top">
                        <a href="{{ route('berita-all') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                            <i class="bi bi-arrow-left me-2"></i> Kembali ke Semua Berita
                        </a>
                    </div>
                </div>
                @else
                <div class="modern-sub-card p-5 text-center">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.75rem;">
                        <i class="bi bi-newspaper text-muted"></i>
                    </div>
                    <h3 class="h4 fw-bold text-dark mb-2">Belum Ada Berita</h3>
                    <p class="text-muted mb-4">Belum ada publikasi berita yang tersedia saat ini.</p>
                    <a href="{{ url('/') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                        <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                    </a>
                </div>
                @endif
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="modern-sub-card p-4 sticky-lg-top" style="top: 100px; z-index: 10;">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                        <h3 class="h5 fw-bold text-dark mb-0">
                            <i class="bi bi-newspaper text-success me-2"></i>Berita Lainnya
                        </h3>
                        <span class="badge badge-soft-success rounded-pill px-2 py-1 small">Update</span>
                    </div>

                    <div class="d-flex flex-column gap-3 mb-4">
                        @forelse($beritaTerkini as $bItem)
                        <div class="d-flex align-items-center gap-3 p-2 rounded-3 hover-bg-light transition" style="border: 1px solid rgba(0,0,0,0.05);">
                            <img src="{{ $bItem->image_url }}" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 76px; height: 76px;" alt="{{ $bItem->judul }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                            <div class="flex-grow-1 min-w-0">
                                <a class="text-dark fw-bold small text-decoration-none d-block text-truncate-2 mb-1" href="{{ route('berita.show', $bItem) }}">
                                    {{ $bItem->judul }}
                                </a>
                                <span class="text-muted small" style="font-size: 0.75rem;">
                                    <i class="bi bi-calendar-event me-1"></i> {{ $bItem->created_at?->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted small text-center mb-0">Tidak ada berita terkini lainnya.</p>
                        @endforelse
                    </div>

                    <div>
                        <a href="{{ route('berita-all') }}" class="btn btn-success rounded-pill w-100 py-2 text-white">
                            Lihat Semua Berita <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
