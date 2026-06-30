@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4">Piagam Audit Internal</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Piagam Audit Internal</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid penghargaan py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5" style="max-width: 800px">
            <h1 class="display-5 text-capitalize mb-3">Piagam Audit Internal</h1>
            <p class="mb-0 text-muted fs-5">Piagam Audit Internal PT BPRS HIK MCI adalah dokumen formal yang menetapkan tujuan, wewenang, tanggung jawab, dan posisi fungsi audit internal secara independen dalam perusahaan, sebagai pedoman resmi pelaksanaan kegiatan pengawasan guna meningkatkan tata kelola dan kinerja operasional bank.</p>
        </div>
        <div class="row g-4">
            @forelse($piagams as $piagam)
            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm d-flex flex-column h-100 bg-white">
                    <div class="penghargaan-img position-relative p-5 text-center bg-light rounded-top d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 6rem;"></i>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <h5 class="mb-2 text-dark">{{ $piagam->judul }}</h5>
                            <p class="text-muted mb-3"><i class="far fa-calendar-alt me-2"></i>Tahun {{ $piagam->tahun }}</p>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ asset('storage/' . $piagam->file) }}" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">
                                <i class="fas fa-download me-2"></i>Unduh PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5">Belum ada dokumen piagam audit internal yang diunggah.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Gallery End -->

@include('footer')
