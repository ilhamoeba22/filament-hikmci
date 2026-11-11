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
    <div class="container news-detail-container">
        <div class="row g-3 g-lg-4 justify-content-center">
            <!-- Article Main Column -->
            <div class="col-12 col-lg-8 news-main-column">
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
                    <div class="mb-4 overflow-hidden rounded-4 border bg-light shadow-sm article-featured-img-frame">
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

            <!-- Sidebar Column: Berita Lainnya Modern Redesign -->
            <div class="col-12 col-lg-4 news-sidebar-column">
                <div class="sidebar-modern-card sticky-lg-top" style="top: 100px; z-index: 10;">
                    <!-- Sidebar Header with Pulse Indicator -->
                    <div class="sidebar-header-box">
                        <h3 class="sidebar-block-title">
                            <i class="bi bi-newspaper text-success"></i> Berita Lainnya
                        </h3>
                        <span class="badge-pulse-emerald">
                            <span class="pulse-dot"></span> Warta Terkini
                        </span>
                    </div>

                    <!-- Article List Cards -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        @forelse($beritaTerkini->take(5) as $idx => $bItem)
                        <a href="{{ route('berita.show', $bItem) }}" class="sidebar-article-item">
                            <div class="sidebar-article-thumb">
                                <span class="sidebar-article-rank">{{ sprintf('%02d', $idx + 1) }}</span>
                                <img src="{{ $bItem->image_url }}" alt="{{ $bItem->judul }}" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                            </div>
                            <div class="sidebar-article-info">
                                <h4 class="sidebar-article-title">
                                    {{ $bItem->judul }}
                                </h4>
                                <div class="sidebar-article-meta">
                                    <span>
                                        <i class="bi bi-calendar3 me-1 text-success"></i> {{ $bItem->created_at?->format('d M Y') }}
                                    </span>
                                    <span class="reading-pill">
                                        <i class="bi bi-clock"></i> {{ max(1, (int) ceil(str_word_count(strip_tags($bItem->isi)) / 180)) }} mnt
                                    </span>
                                </div>
                            </div>
                        </a>
                        @empty
                        <div class="text-center py-4">
                            <i class="bi bi-inbox text-muted fs-3 mb-2 d-block"></i>
                            <p class="text-muted small mb-0">Belum ada warta berita lainnya.</p>
                        </div>
                        @endforelse
                    </div>

                    <div>
                        <a href="{{ route('berita-all') }}" class="btn btn-success rounded-pill w-100 py-2 text-white fw-semibold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                            <span>Lihat Semua Berita</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Sidebar Quick Contact / Info CTA Box -->
                    <div class="sidebar-cta-box">
                        <span class="badge bg-white text-success rounded-pill px-2 py-1 small fw-bold mb-2 d-inline-block">Layanan Nasabah</span>
                        <h4 class="h6 fw-bold mb-1 text-white">Butuh Informasi Perbankan?</h4>
                        <p class="small text-white-50 mb-0" style="font-size: 0.8rem; line-height: 1.4;">
                            Konsultasikan kebutuhan tabungan, deposito, &amp; pembiayaan syariah bersama tim BPRS HIK MCI.
                        </p>
                        <a href="https://wa.me/6281320750415?text=Assalamu%27alaikum%20BPRS%20HIK%20MCI,%20saya%20ingin%20berkonsultasi%20terkait%20layanan%20syariah" target="_blank" rel="noopener noreferrer" class="sidebar-cta-btn">
                            <i class="bi bi-whatsapp"></i> Chat WhatsApp Resmi
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Related Articles Section Start -->
        @if($beritaTerkini->isNotEmpty())
        <div class="related-articles-section">
            <div class="related-section-header">
                <div>
                    <span class="subpage-section-tag mb-1">
                        <i class="bi bi-compass"></i> Warta Pilihan
                    </span>
                    <h3 class="h4 fw-bold text-dark mb-0" style="font-family: 'Outfit', sans-serif;">
                        Rekomendasi Berita Pilihan Lainnya
                    </h3>
                </div>
                <a href="{{ route('berita-all') }}" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 d-none d-md-inline-flex align-items-center gap-1">
                    Semua Berita <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach($beritaTerkini->take(3) as $rItem)
                <div class="col-md-6 col-lg-4">
                    <div class="article-modern-card">
                        <div class="article-thumb-wrapper">
                            <img src="{{ $rItem->image_url }}" alt="{{ $rItem->judul }}" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/logo_mci.png') }}';">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge text-white rounded-pill px-3 py-2 small shadow-sm" style="background-color: #0d6824 !important;">
                                    <i class="bi bi-calendar-event me-1"></i> {{ $rItem->created_at?->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                            <div>
                                <a href="{{ route('berita.show', $rItem) }}" class="h6 fw-bold text-dark text-decoration-none d-block mb-2 text-truncate-2" style="font-family: 'Outfit', sans-serif;">
                                    {{ $rItem->judul }}
                                </a>
                                <p class="text-secondary small mb-3">
                                    {{ Str::limit(strip_tags($rItem->isi), 90) }}
                                </p>
                            </div>
                            <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                                <a href="{{ route('berita.show', $rItem) }}" class="fw-bold text-success text-decoration-none small d-inline-flex align-items-center gap-1">
                                    Baca Berita <i class="bi bi-arrow-right"></i>
                                </a>
                                <span class="reading-pill">
                                    <i class="bi bi-clock"></i> {{ max(1, (int) ceil(str_word_count(strip_tags($rItem->isi)) / 180)) }} mnt
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        <!-- Bottom Related Articles Section End -->
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
