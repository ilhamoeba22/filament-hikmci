@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Edukasi</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('edukasi.index') }}">Edukasi</a></li>
            <li class="breadcrumb-item active text-primary">{{ $edukasi->judul }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Edukasi Detail Start -->
<div class="container-fluid team py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        </div>
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="edukasi-detail">
                    <div class="row justify-content-center">
                        <h1 class="text-center my-3">{{ $edukasi->judul }}</h1>
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('storage/edukasi/' . $edukasi->gambar) }}" class="img-fluid mb-3 w-100 border rounded" alt="{{ $edukasi->judul }}">
                            <p style="text-align: justify;">
                                {!! nl2br(e($edukasi->isi)) !!}
                            </p>
                            <a href="{{ route('edukasi.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="list-edukasi-lainnya">
                    <h2 class="my-3 text-center">Edukasi Lainnya</h2>
                    <ul class="list-group">
                        @foreach($edukasiLainnya as $edukasi)
                        <li class="list-group-item d-flex align-items-center">
                            <img src="{{ asset('storage/edukasi/' . $edukasi->gambar) }}" class="me-3 rounded" style="width: 90px; height: 90px; object-fit: cover;" alt="{{ $edukasi->judul }}">
                            <div>
                                <a class="text-dark fw-bold" href="{{ route('edukasi.show', $edukasi->id) }}">{{ $edukasi->judul }}</a>
                                <p class="mb-0 text-muted">{{ $edukasi->created_at->format('d M Y') }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edukasi Detail End -->
@include('footer')