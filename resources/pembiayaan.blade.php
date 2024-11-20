@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Pembiayaan</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Pembiayaan Start -->
<div class="container-fluid product py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Pembiayaan</h4>
            <h2 class="display-5 text-capitalize mb-3">
                Solusi Keuangan Syariah Terpercaya untuk Masa Depan
            </h2>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ([
            ["name" => "Micro UMKM", "image" => "frontend/img/pembiayaan/MCI_Pemb_UKM.png", "link" => route('pembiayaan-umkm')],
            ["name" => "Corporate", "image" => "frontend/img/pembiayaan/MCI_Pemb_Corporate.png", "link" => route('pembiayaan-corporate')],
            ["name" => "Property", "image" => "frontend/img/pembiayaan/MCI_Pemb_Prop.png", "link" => route('pembiayaan-property')],
            ["name" => "Consumer Finance", "image" => "frontend/img/pembiayaan/MCI_Pemb_CustFinance.png", "link" => route('pembiayaan-consumer-finance')],
            ] as $index => $product)
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                <div class="product-item">
                    <img src="{{ asset($product['image']) }}" class="img-fluid w-100 rounded-top" alt="{{ $product['name'] }}">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="{{ $product['link'] }}" class="h4 d-inline-block mb-3">{{ $product['name'] }}</a>
                        <div class="d-block">
                            <a href="{{ $product['link'] }}" class="btn btn-secondary rounded-pill py-2 px-4 mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Pembiayaan End -->

@include('footer')