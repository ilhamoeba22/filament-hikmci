@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Karir</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Karir & Peluang Berkembang
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Bergabung bersama insan amanah dan profesional di BPRS HIK MCI untuk bertumbuh dan berkarir membangun perbankan syariah berkeadilan.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
            <span class="subpage-section-tag">
                <i class="bi bi-briefcase"></i> Rekrutmen Terbuka
            </span>
            <h2 class="subpage-section-title">
                Informasi Lowongan Kerja BPRS HIK MCI
            </h2>
        </div>

        @if(count($karirs) > 0)
        <div class="row g-4 justify-content-center">
            @foreach ($karirs as $karir)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-modern-card">
                    <!-- Thumbnail Box with Trigger to Modal -->
                    <div class="career-thumb-box position-relative" role="button" data-bs-toggle="modal" data-bs-target="#imageModal{{ $karir->id }}">
                        <img src="{{ asset('storage/' . $karir->gambar) }}"
                            class="w-100"
                            alt="{{ $karir->judul }}">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge text-white rounded-pill px-3 py-2 small shadow-sm" style="background-color: #0d6824 !important;">
                                <i class="bi bi-calendar-event me-1"></i> {{ $karir->created_at->format('d M Y') }}
                            </span>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-success border border-success border-opacity-25 rounded-pill px-3 py-1 small shadow-sm fw-semibold">
                                <i class="bi bi-circle-fill small me-1"></i> Aktif
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <h4 class="h5 fw-bold text-dark mb-3" role="button" data-bs-toggle="modal" data-bs-target="#imageModal{{ $karir->id }}">{{ $karir->judul }}</h4>
                            <p class="text-muted small mb-4">
                                <i class="bi bi-info-circle me-1 text-success"></i> Klik flyer poster untuk melihat persyaratan dan kualifikasi lengkap.
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <button type="button" class="btn btn-outline-secondary rounded-pill w-100 btn-sm py-2" data-bs-toggle="modal" data-bs-target="#imageModal{{ $karir->id }}">
                                <i class="bi bi-eye me-1"></i> Lihat Flyer Lowongan
                            </button>
                            <a href="mailto:hr_dept@bprshikmci.co.id" class="btn btn-success rounded-pill w-100 btn-sm py-2 text-white" target="_blank">
                                <i class="bi bi-send-fill me-1"></i> Lamar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Zoom Flyer -->
            <div class="modal fade" id="imageModal{{ $karir->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $karir->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-header border-0 pb-0 justify-content-end">
                            <button type="button" class="btn-close btn-close-white bg-white p-2 rounded-circle shadow" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
                        </div>
                        <div class="modal-body text-center p-2">
                            <div class="bg-white p-3 rounded-4 shadow-lg d-inline-block">
                                <img src="{{ asset('storage/' . $karir->gambar) }}" class="img-fluid rounded-3 mb-3" style="max-height: 75vh; width: auto; object-fit: contain;" alt="{{ $karir->judul }}">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 border-top pt-3 px-2">
                                    <h5 class="fw-bold text-dark mb-0">{{ $karir->judul }}</h5>
                                    <a href="mailto:hr_dept@bprshikmci.co.id" class="btn btn-success rounded-pill px-4 py-2 text-white btn-sm" target="_blank">
                                        <i class="bi bi-send-fill me-1"></i> Kirim Lamaran
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="modern-sub-card p-5 text-center mx-auto my-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 720px;">
            <div class="bento-icon-box mx-auto mb-4" style="width: 72px; height: 72px; font-size: 2rem;">
                <i class="bi bi-briefcase text-success"></i>
            </div>
            <h3 class="h4 fw-bold text-dark mb-3">Mohon Maaf, Saat Ini Belum Ada Lowongan Pekerjaan</h3>
            <p class="text-success fs-4 mb-3" style="font-family: 'Amiri', 'Traditional Arabic', serif;">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
            <p class="fs-5 text-secondary mb-2">Insya Allah akan kami informasikan segera ketika tersedia lowongan baru</p>
            <p class="fs-6 text-muted mb-4">Silakan cek kembali di lain waktu</p>
            <div>
                <a href="{{ url('/') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
