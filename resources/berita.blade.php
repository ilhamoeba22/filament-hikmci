@include('header')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            Berita
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Berita</li>
        </ol>
    </div>
</div>
<div class="container-fluid team py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        </div>
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="berita-baru">
                    <h1 class="text-center my-3">{{ $berita->judul }}</h1>
                    <div class="d-flex justify-content-between">
                        <p>{{ $berita->created_at->format('l, d F Y') }}</p>
                        <p>Author - {{ $berita->user->name }}</p>
                    </div>
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="img-fluid mb-3 w-100 border rounded" alt="{{ $berita->judul }}">
                    <p style="text-align: justify;">
                        <span class="text-dark">{{ $berita->lokasi }} - </span>
                        {!! nl2br(e($berita->isi)) !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="list-berita-lama">
                    <h2 class="my-3 text-center">Berita Lainnya</h2>
                    <ul class="list-group">
                        @foreach($beritaTerkini as $berita)
                        <li class="list-group-item d-flex align-items-center">
                            <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="me-3 rounded" style="width: 90px; height: 90px; object-fit: cover;" alt="{{ $berita->judul }}">
                            <div>
                                <a class="text-dark fw-bold" href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a>
                                <p class="mb-0 text-muted">{{ $berita->created_at->format('d M Y') }}</p>
                            </div>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex align-items-center justify-content-center" style="min-height: 80px;">
                            <a href="{{ route('berita-all') }}" class="btn btn-secondary rounded-pill py-2 px-4 text-light">Selengkapnya</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')