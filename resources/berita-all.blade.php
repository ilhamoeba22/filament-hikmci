@include('header')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-3" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            Berita
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/berita') }}">Berita</a></li>
            <li class="breadcrumb-item active text-primary">Semua Berita</li>
        </ol>
    </div>
</div>

<!-- Semua Berita Start -->
<div class="container-fluid blog background-index py-3">
    <div class="container pb-3">
        <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="text-capitalize">Semua Berita</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($beritas as $berita)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="img-fluid rounded-top w-100" alt="{{ $berita->judul }}" />
                        <div class="blog-date px-4 py-2">
                            <i class="fa fa-calendar-alt me-1"></i> {{ $berita->created_at->format('d M Y') }}
                        </div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="{{ route('berita.show', $berita->id) }}" class="nunito mb-3">{{ Str::limit($berita->judul, 50) }}</a>
                        <p>
                            {{ Str::limit($berita->isi, 100) }}
                        </p>
                        <a href="{{ route('berita.show', $berita->id) }}" class="fw-bold text-secondary">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center pt-5">
            {{ $beritas->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Semua Berita End -->

@include('footer')