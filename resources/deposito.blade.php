@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Deposito Karimah</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Deposito</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Deposito Start -->
<div class="container-fluid tabungan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="tabungan-item">
                    <h1 class="display-3 text-capitalize mb-3 mt-3">
                        Deposito Karimah
                    </h1>
                    <div class="row g-5 mb-3">

                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <img src="{{asset('frontend/img/produk/MCI_DEPO.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                    </div>
                    <h1 class="pt-3">
                        Keunggulan
                    </h1>

                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-file-earmark-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dapat dibuka atas nama perorangan / non perorangan</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Jangka waktu fleksibel (1, 3, 6, 12 bulan)</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Layanan pickup service</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-lock-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dijamin oleh LPS</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-cash-stack me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Deposito mulai dari Rp 2.500.000,-</h5>
                        </div>
                    </div>
                    <div class="row pb-4 align-items-center text-center">
                        <div class="col-md-12 ">
                            <a href="https://wa.me/yourphonenumber" class="btn btn-primary btn-lg">
                                Buka Rekening
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products End -->

@include('footer')