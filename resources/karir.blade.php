@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Karir</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Karir</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Laporan Keuangan Start -->
<div class="container-fluid team py-1">
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="display-5 text-capitalize mb-3">Bergabunglah Bersama kami</h1>
        </div>
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                @if(isset($karir))
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $karir->gambar) }}" class="card-img-top" alt="{{ $karir->judul }}">
                    <div class="card-body">
                        <h1 class="card-title">{{ $karir->judul }}</h1>
                        <p class="card-text">{{ $karir->deskripsi }}</p>
                        <a href="{{ route('karir.index') }}" class="btn btn-secondary">kembali</a>
                    </div>
                </div>
                @else
                <div class="row">
                    @foreach ($karirs as $karir)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ asset('storage/' . $karir->gambar) }}" class="card-img-top" alt="{{ $karir->judul }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $karir->judul }}</h5>
                                <p class="card-text">{{ Str::limit($karir->deskripsi, 100) }}</p>
                                <a href="{{ route('karir.show', $karir->id) }}" class="btn btn-primary btn-read-more">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $karirs->links('pagination::bootstrap-4') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('footer')