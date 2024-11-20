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
            <div class="col-md-8">
                <div class="berita-baru">
                    <h1 class="text-center mb-3">{{ $berita->judul }}</h1>
                    <div class="d-flex justify-content-between">
                        <p>{{ $berita->created_at->format('l, d F Y') }}</p>
                        <p>Author - {{ $berita->user->name }}</p>
                    </div>
                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid mb-3 w-100 border rounded" alt="{{ $berita->judul }}">
                    <p style="text-align: justify;">
                        <span class="text-dark">{{ $berita->lokasi }} - </span>
                        {!! nl2br(e($berita->isi)) !!}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-berita-lama">
                    <h2 class="mb-4">Berita Lainnya</h2>
                    <ul class="list-group">
                        @foreach($beritaTerkini as $berita)
                        <li class="list-group-item d-flex align-items-center" style="min-height: 80px;">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="me-3" style="width: 70px;" alt="{{ $berita->judul }}">
                            <a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex align-items-center justify-content-center" style="min-height: 80px;">
                            <button href="{{ route('berita-all') }}" class="btn btn-secondary rounded">Selengkapnya</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')