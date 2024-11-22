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

<!-- Karir Start -->
<div class="container-fluid karir background-index py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="display-5 text-capitalize mb-3">Bergabunglah Bersama Kami</h1>
        </div>
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                @if(isset($karir))
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $karir->gambar) }}" class="img-fluid rounded karir-img-detail" alt="{{ $karir->judul }}">
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-4 mb-3">{{ $karir->judul }}</h1>
                        <h5 class="mb-3">Deskripsi:</h5>
                        <p>{{ $karir->deskripsi }}</p>
                        <a href="{{ route('karir.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
                @else
                <div class="row">
                    @foreach ($karirs as $karir)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="karir-item">
                            <div class="karir-img">
                                <img src="{{ asset('storage/' . $karir->gambar) }}" class="img-fluid rounded-top w-100" alt="{{ $karir->judul }}">
                                <div class="karir-date px-4 py-2">
                                    <i class="fa fa-calendar-alt me-1"></i> {{ $karir->created_at->format('d M Y') }}
                                </div>
                            </div>
                            <div class="karir-content rounded-bottom p-4">
                                <a href="{{ route('karir.show', $karir->id) }}" class="h4 d-inline-block mb-3">{{ $karir->judul }}</a>
                                <p>
                                    {{ Str::limit($karir->deskripsi, 100) }}
                                </p>
                                <a href="{{ route('karir.show', $karir->id) }}" class="fw-bold text-secondary">Selengkapnya <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center pt-5">
                    {{ $karirs->links('pagination::bootstrap-4') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Karir End -->

@include('footer')