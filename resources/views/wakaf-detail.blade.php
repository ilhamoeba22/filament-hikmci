@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <a href="{{ route('wakaf.index') }}">Wakaf</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">{{ Str::limit($wakaf->judul, 30) }}</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">{{ $wakaf->judul }}</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Detail Informasi Program Cash Waqf Linked Deposit (CWLD)</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Wakaf Detail Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Main Content Column -->
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
                <article class="modern-sub-card p-4 p-lg-5">
                    <!-- Detail Image -->
                    <div class="mb-4 overflow-hidden rounded-3 text-center bg-light">
                        <img src="{{ asset('storage/' . $wakaf->gambar_detail) }}" class="img-fluid w-100 rounded-3 shadow-sm" alt="{{ $wakaf->judul }}" style="max-height: 460px; object-fit: cover;">
                    </div>

                    <!-- Meta Header -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 pb-3 mb-4 border-bottom">
                        <span class="text-muted small d-inline-flex align-items-center">
                            <i class="far fa-calendar-alt text-success me-2"></i> {{ $wakaf->created_at->format('l, d F Y') }}
                        </span>
                        <div>
                            @if($wakaf->status == 'Terpenuhi')
                            <span class="badge bg-success text-white px-3 py-2 rounded-pill small fw-semibold">
                                <i class="fa fa-check-circle me-1"></i> Terpenuhi
                            </span>
                            @else
                            <span class="badge bg-primary text-white px-3 py-2 rounded-pill small fw-semibold">
                                <i class="fa fa-clock me-1"></i> Belum Terpenuhi
                            </span>
                            @endif
                        </div>
                    </div>

                    <h2 class="subpage-title text-dark mb-4" style="font-size: clamp(1.5rem, 2.3vw, 2rem);">
                        {{ $wakaf->judul }}
                    </h2>

                    <!-- Full Description -->
                    <div class="text-muted mb-5" style="line-height: 1.85; font-size: 1.05rem; text-align: justify;">
                        {!! nl2br(e($wakaf->deskripsi)) !!}
                    </div>

                    <!-- Program Specifications Grid -->
                    <div class="p-4 rounded-3 mb-5" style="background: #f8fafc; border: 1px solid rgba(13, 104, 36, 0.15);">
                        <h5 class="text-dark fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="fas fa-info-circle text-success"></i> Informasi Program Wakaf
                        </h5>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="bg-white p-3 rounded-2 border">
                                    <small class="text-muted d-block mb-1">Lokasi Program</small>
                                    <h6 class="text-dark fw-bold mb-0">
                                        <i class="fa fa-map-marker-alt text-danger me-1"></i> {{ $wakaf->lokasi }}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-white p-3 rounded-2 border">
                                    <small class="text-muted d-block mb-1">Mitra Nazhir</small>
                                    <h6 class="text-dark fw-bold mb-0">
                                        <i class="fa fa-user text-primary me-1"></i> {{ $wakaf->nahzir }}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-white p-3 rounded-2 border">
                                    <small class="text-muted d-block mb-1">Target Penyaluran</small>
                                    <h6 class="text-dark fw-bold mb-0">
                                        <i class="fa fa-bullseye text-warning me-1"></i> {{ $wakaf->target }}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-white p-3 rounded-2 border">
                                    <small class="text-muted d-block mb-1">Status Kebutuhan</small>
                                    <h6 class="mb-0 fw-bold">
                                        @if($wakaf->status == 'Terpenuhi')
                                        <span class="text-success"><i class="fa fa-check-circle me-1"></i> Terpenuhi</span>
                                        @else
                                        <span class="text-muted"><i class="fa fa-circle me-1 small"></i> Belum Terpenuhi</span>
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Strip -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top">
                        <a href="{{ route('wakaf.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                            <i class="fas fa-arrow-left"></i>
                            <span>Kembali</span>
                        </a>
                        <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa">
                            <i class="fab fa-whatsapp fs-5 me-2"></i> Salurkan Wakaf via CS
                        </a>
                    </div>
                </article>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-sticky" style="top: 110px;">
                    <!-- Program Wakaf Lainnya Card -->
                    <div class="modern-sub-card p-4 mb-4">
                        <h4 class="text-dark fw-bold mb-3 pb-2 border-bottom" style="font-family: 'Outfit', sans-serif; font-size: 1.25rem;">
                            Program Wakaf Lainnya
                        </h4>
                        <div class="d-flex flex-column gap-3">
                            @foreach($wakafLainnya as $wakaf)
                            <div class="d-flex align-items-center gap-3 p-2 rounded-2 hover-bg-light transition-all" style="border: 1px solid rgba(0,0,0,0.04);">
                                <img src="{{ asset('storage/' . $wakaf->gambar_cover) }}" class="rounded-2 flex-shrink-0" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $wakaf->judul }}">
                                <div class="flex-grow-1 overflow-hidden">
                                    <a class="text-dark fw-bold d-block text-truncate mb-1" href="{{ route('wakaf.show', $wakaf->id) }}" style="font-size: 0.95rem;">
                                        {{ $wakaf->judul }}
                                    </a>
                                    <span class="text-muted small d-block">
                                        <i class="far fa-calendar-alt me-1"></i> {{ $wakaf->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar Support Card -->
                    <div class="p-4 rounded-3 text-center text-white" style="background: linear-gradient(135deg, #022c22, #0d6824); border-radius: 20px;">
                        <span class="bento-icon-box mx-auto mb-3" style="width: 52px; height: 52px; background: rgba(255,255,255,0.15); color: #ffffff; border: 1px solid rgba(255,255,255,0.2);">
                            <i class="fas fa-hand-holding-heart fs-4"></i>
                        </span>
                        <h5 class="fw-bold text-white mb-2" style="font-family: 'Outfit', sans-serif;">Konsultasi CWLD</h5>
                        <p class="text-white-75 small mb-3">
                            Ingin mengetahui lebih dalam mengenai alur dan mekanisme penempatan Deposito Wakaf BPRS HIK MCI?
                        </p>
                        <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-light rounded-pill px-4 py-2 fw-bold text-success w-100">
                            <i class="fab fa-whatsapp me-1"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wakaf Detail End -->

@include('footer')
