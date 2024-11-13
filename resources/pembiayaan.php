@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Pembiayaan</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Pembiayaan Start -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h2 class="display-3 text-capitalize mb-3">
                Solusi Keuangan Syariah Terpercaya untuk Masa Depan
            </h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item-cf text-center">
                    <div class="position-relative">
                        <img src="img/deposito_img.png" class="img-fluid w-100 rounded" alt="Image" />
                        <div class="overlay">
                            <div class="title">Micro UMKM</div>
                        </div>
                    </div>
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="pembiayaan-umkm.php" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item-cf text-center">
                    <div class="position-relative">
                        <img src="img/deposito_img.png" class="img-fluid w-100 rounded" alt="Image" />
                        <div class="overlay">
                            <div class="title">Corporate</div>
                        </div>
                    </div>
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="pembiayaan-corporate.php" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item-cf text-center">
                    <div class="position-relative">
                        <img src="img/deposito_img.png" class="img-fluid w-100 rounded" alt="Image" />
                        <div class="overlay">
                            <div class="title">Property</div>
                        </div>
                    </div>
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="pembiayaan-property.php" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item-cf text-center">
                    <div class="position-relative">
                        <img src="img/deposito_img.png" class="img-fluid w-100 rounded" alt="Image" />
                        <div class="overlay">
                            <div class="title">Consumer Finance</div>
                        </div>
                    </div>
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="pembiayaan-consumer-finance.php" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pembiayaan End -->

@include('footer')