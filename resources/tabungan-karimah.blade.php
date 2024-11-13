@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk tabungan Karimah</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('tabungan') }}">Tabungan</a></li>
                <li class="breadcrumb-item active text-primary">Tabungan Karimah</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- tabungan Start -->
<div class="container-fluid tabungan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="tabungan-item">
                    <h1 class="display-3 text-capitalize mb-3 mt-3">Tabungan Karimah</h1>
                    <div class="row g-5 mb-3">

                        <div class="col-md-6 text-center d-flex justify-content-start align-items-start">
                            <img src="{{asset ('frontend/img/t_karimah.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="lh-base justify-text py-2">
                                Tabungan dalam mata uang Rupiah yang ditujukan untuk kebutuhan
                                transaksional nasabah dan dapat diambil sewaktu - waktu sebagai
                                rekening penampungan gaji (payroll), penampungan bagi hasil deposito,
                                autodebet atau setoran angsuran pembiayaan, autodebet tabungan rencana
                            </h5>
                            <h1 class="py-4">
                                Fitur
                            </h1>

                            <div class="row g-5">
                                <div class="col-md-6 d-flex align-items-center mb-4">
                                    <i class="bi bi-bag-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                                    <h5 class="mb-0">Berdasarkan prinsip syariah dengan akad wadiah</h5>
                                </div>
                                <div class="col-md-6 d-flex align-items-center mb-4">
                                    <i class="bi bi-gift-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                                    <h5 class="mb-0">Dapat diambil oleh nasabah sewaktu - waktu</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="pt-3">
                        Keunggulan
                    </h1>

                    <div class="row g-3 py-3">
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bebas biaya administrasi</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dapat diambil sewaktu - waktu</h5>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Layanan pickup service</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-lock-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dijamin oleh LPS</h5>
                        </div>
                    </div>

                    <div class="row g-3 py-3">
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-cash-stack me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Setoran awal ringan</h5>
                        </div>
                    </div>
                    <!-- syarat -->
                    <h1 class="pt-3">
                        Syarat
                    </h1>
                    <div class="row g-3 py-3">
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-file-earmark-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Form pembukaan tabungan</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-3">
                            <i class="bi bi-credit-card-2-front me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Kartu identitas</h5>
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