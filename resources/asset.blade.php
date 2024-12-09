@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-3" style="max-width: 900px;">
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

<!-- Asset Start -->
<div class="container-fluid asset background-index py-3">
    <div class="container pb-3">
        <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="text-capitalize mb-3">Asset Kami</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($assets as $asset)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="asset-item">
                    <div class="asset-img">
                        <img src="{{ Storage::url($asset->gambar) }}" class="img-fluid rounded-top w-100" alt="{{ $asset->judul }}">
                    </div>
                    <div class="asset-content rounded-bottom p-4">
                        <h4 class="d-inline-block mb-3">{{ $asset->judul }}</h4>
                        <p>Pemilik: {{ $asset->pemilik }}</p>
                        <p>Lokasi: {{ $asset->lokasi }}</p>
                        <p>Harga: {{ $asset->harga }}</p>
                        <a href="{{ Storage::url($asset->pdf) }}" class="btn btn-secondary text-center" target="_blank">Lihat Detail PDF</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center pt-4">
            {{ $assets->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Asset End -->

@include('footer')

<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>