@include('header')

<!-- Modern Hero Banner Start -->
<div class="subpage-hero position-relative">
    <div class="subpage-hero-pattern"></div>
    <div class="container text-center position-relative py-4" style="z-index: 2;">
        <div class="subpage-breadcrumb">
            <a href="{{ url('/') }}"><i class="bi bi-house-door me-1"></i> Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Tentang Kami</span>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Piagam Audit Internal</span>
        </div>
        <h1 class="subpage-title">Piagam Audit Internal</h1>
        <p class="subpage-subtitle">
            Pedoman resmi pelaksanaan fungsi pengawasan independen dan tata kelola perbankan syariah yang sehat, akuntabel, dan transparan.
        </p>
    </div>
</div>
<!-- Modern Hero Banner End -->

<!-- Gallery Start -->
<div class="subpage-content-wrapper">
    <div class="container py-2">
        <!-- Formal Governance Overview Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-2 text-center text-lg-start">
                    <div class="bento-icon-box" style="width: 72px; height: 72px; font-size: 2rem;">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="feature-pill-badge mb-2">
                        <i class="bi bi-shield-check"></i> Tata Kelola &amp; Pengawasan Internal
                    </div>
                    <h2 class="h3 fw-bold text-dark mb-3">Piagam Audit Internal</h2>
                    <p class="text-secondary mb-0 lh-lg" style="text-align: justify; font-size: 1.05rem;">
                        Piagam Audit Internal PT BPRS HIK MCI adalah dokumen formal yang menetapkan tujuan, wewenang, tanggung jawab, dan posisi fungsi audit internal secara independen dalam perusahaan, sebagai pedoman resmi pelaksanaan kegiatan pengawasan guna meningkatkan tata kelola dan kinerja operasional bank.
                    </p>
                </div>
            </div>
        </div>

        <!-- Documents Grid -->
        <div class="row g-4 justify-content-center">
            @forelse($piagams as $piagam)
            <div class="col-lg-4 col-md-6">
                <div class="piagam-doc-card">
                    <div class="p-4 text-center bg-light border-bottom d-flex align-items-center justify-content-center" style="height: 180px;">
                        <div class="d-flex flex-column align-items-center">
                            <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 4.5rem; line-height: 1;"></i>
                            <span class="badge bg-danger text-white mt-2 px-3 py-1 rounded-pill small fw-semibold">
                                Dokumen Resmi PDF
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark mb-2 lh-base">{{ $piagam->judul }}</h5>
                            <span class="text-muted small">Pedoman Kerja Pengawasan Internal</span>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ asset('storage/' . $piagam->file) }}" class="btn btn-emerald-action rounded-pill px-4 py-2 w-100" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-download me-2"></i>Unduh PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="modern-sub-card p-5 d-inline-block" style="max-width: 500px;">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.8rem;">
                        <i class="bi bi-folder2-open"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Belum Ada Dokumen</h5>
                    <p class="text-muted mb-0">Belum ada dokumen piagam audit internal yang diunggah.</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Gallery End -->

@include('footer')
