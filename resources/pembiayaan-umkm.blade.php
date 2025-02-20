@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan UMKM</h1>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('pembiayaan')}}">Pembiayaan</a></li>
                <li class="breadcrumb-item active text-primary">Pembiayaan UMKM</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Pembiayaan Start -->
<div class="container-fluid tabungan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="tabungan-item">
                    <div class="row g-5 mb-3">
                        <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                            <img src="{{asset('frontend/img/produk/MCI_Produk_UKM.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                    </div>

                    <h1 class="pt-1">
                        Keunggulan
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Pembiayaan tanpa agunan</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Jangka waktu sampai 60 bulan</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Layanan pickup service</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-lock-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Plafond hingga Rp 300.000.000,-</h5>
                        </div>
                    </div>

                    <!-- Sayarat -->
                    <h1 class="pt-1">
                        Syarat
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">KTP suami / istri</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-file-earmark-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">FC KK / NPWP / Surat nikah</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Rekening tabungan minimal 6 bulan</h5>
                        </div>

                    </div>

                    <div class="row pb-4 align-items-center text-center">
                        <div class="col-md-12 ">
                            <a href="https://wa.me/+6285771796642" class="btn btn-primary btn-lg">
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