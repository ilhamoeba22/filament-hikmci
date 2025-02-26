@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Wakaf</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('wakaf.index') }}">Wakaf</a></li>
            <li class="breadcrumb-item active text-primary">{{ $wakaf->judul }}</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Wakaf Detail Start -->
<div class="container-fluid team py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
        </div>
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="wakaf-baru">
                    <div class="row justify-content-center">
                        <h1 class="text-center my-3">{{ $wakaf->judul }}</h1>
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('storage/' . $wakaf->gambar_detail) }}" class="img-fluid mb-3 w-100 border rounded" alt="{{ $wakaf->judul }}">
                            <!-- </div>
                        <div class="col-md-6"> -->

                            <div class="d-flex justify-content-between">
                                <p>{{ $wakaf->created_at->format('l, d F Y') }}</p>
                            </div>
                            <p style="text-align: justify;">
                                {!! nl2br(e($wakaf->deskripsi)) !!}
                            </p>
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    <h5 class="mb-3">Lokasi:</h5>
                                    <p>{{ $wakaf->lokasi }}</p>
                                    <h5 class="mb-3">Nahzir:</h5>
                                    <p>{{ $wakaf->nahzir }}</p>
                                </div>
                                <div class="col-4">
                                    <h5 class="mb-3">Target:</h5>
                                    <p>{{ $wakaf->target }}</p>
                                    <h5 class="mb-3">Status:</h5>
                                    <p>
                                        @if($wakaf->status == 'Terpenuhi')
                                        <i class="fa fa-check-circle text-success"></i> Terpenuhi
                                        @else
                                        <i class="fa fa-check-circle text-muted"></i> Belum Terpenuhi
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <a href="{{ route('wakaf.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="list-wakaf-lama">
                    <h2 class="my-3 text-center">Program Wakaf Lainnya</h2>
                    <ul class="list-group">
                        @foreach($wakafLainnya as $wakaf)
                        <li class="list-group-item d-flex align-items-center">
                            <img src="{{ asset('storage/' . $wakaf->gambar_cover) }}" class="me-3 rounded" style="width: 90px; height: 90px; object-fit: cover;" alt="{{ $wakaf->judul }}">
                            <div>
                                <a class="text-dark fw-bold" href="{{ route('wakaf.show', $wakaf->id) }}">{{ $wakaf->judul }}</a>
                                <p class="mb-0 text-muted">{{ $wakaf->created_at->format('d M Y') }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wakaf Detail End -->

@include('footer')