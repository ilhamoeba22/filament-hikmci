@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Asset</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Asset</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Pembiayaan Start -->
<div class="container-fluid team py-1">
    <div class="container py-2">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="display-5 text-capitalize mb-3">Asset Kami</h1>
        </div>
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="row">
                    @foreach ($assets as $asset)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ Storage::url($asset->gambar) }}" class="card-img-top" alt="{{ $asset->judul }}">
                            <div class="card-body text-left">
                                <p class="card-text">Pemilik: {{ $asset->pemilik }}</p>
                                <p class="card-text">Lokasi: {{ $asset->lokasi }}</p>
                                <p class="card-text">Harga: {{ $asset->harga }}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ Storage::url($asset->pdf) }}" class="btn btn-secondary text-center" target="_blank">Lihat Detail PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>