@include('header')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            Edukasi
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Edukasi</li>
        </ol>
    </div>
</div>

<!-- Semua Edukasi Start -->
<div class="container-fluid blog background-index py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-capitalize mb-3">
                Semua Konten Edukasi
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($edukasis as $edukasi)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/edukasi/' . $edukasi->gambar) }}" class="img-fluid rounded-top w-100" alt="{{ $edukasi->judul }}" />
                        <div class="blog-date px-4 py-2">
                            <i class="fa fa-calendar-alt me-1"></i> {{ $edukasi->created_at->format('d M Y') }}
                        </div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="{{ route('edukasi.show', $edukasi->id) }}" class="nunito d-inline-block mb-3">{{ $edukasi->judul }}</a>
                        <p>
                            {{ Str::limit($edukasi->isi, 100) }}
                        </p>
                        <a href="{{ route('edukasi.show', $edukasi->id) }}" class="fw-bold text-secondary">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center pt-5">
            {{ $edukasis->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Semua Edukasi End -->

@include('footer')