@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-3" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4">Karir</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Karir</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Karir Start -->
<div class="container-fluid karir py-3">
    <div class="container">
        <div class="text-center mx-auto pb-3" style="max-width: 800px">
            <h1 class="text-capitalize mb-3">Informasi Lowongan Kerja BPRS HIK MCI</h1>
        </div>
        @if(count($karirs) > 0)
        <div class="row g-4">
            @foreach ($karirs as $karir)
            <div class="col-lg-4 col-md-6">
                <div class="karir-item border rounded shadow-sm">
                    <div class="karir-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal{{ $karir->id }}">
                        <img src="{{ asset('storage/' . $karir->gambar) }}"
                            class="img-fluid rounded-top w-100 karir-thumbnail"
                            alt="{{ $karir->judul }}">
                        <div class="karir-date bg-primary text-white px-3 py-1 position-absolute top-0 start-0">
                            {{ $karir->created_at->format('d M Y') }}
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h4>{{ $karir->judul }}</h4>
                        <a href="mailto:hr_dept@bprshikmci.co.id" class="btn btn-primary btn-sm mt-3" target="_blank">Lamar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="imageModal{{ $karir->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $karir->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content bg-transparent border-0">
                        <img src="{{ asset('storage/' . $karir->gambar) }}" class="img-fluid rounded" alt="{{ $karir->judul }}">
                        <button type="button" class="btn-close position-absolute top-0 end-0 p-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-info-circle text-primary mb-3" style="font-size: 4rem;"></i>
            <h3 class="mb-3">Mohon Maaf, Saat Ini Belum Ada Lowongan Pekerjaan</h3>
            <p class="text-muted fs-4">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
            <p class="fs-3">Insya Allah akan kami informasikan segera ketika tersedia lowongan baru</p>
            <p class="fs-5 text-muted">Silakan cek kembali di lain waktu</p>
        </div>
        @endif
    </div>
</div>
<!-- Karir End -->

@include('footer')