@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Tabungan Ukhuwah</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url ('tabungan')}}">Tabungan</a></li>
                <li class="breadcrumb-item active text-primary">Tabungan Ukhuwah</li>
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
                    <h1 class="display-3 text-capitalize mb-3 mt-3">Tabungan Ukhuwah</h1>
                    <div class="row g-5 mb-3">
                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <img src="{{asset('frontend/img/produk/MCI_TAB_Ukhuwah.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                    </div>
                    <h4 class="display-5 pt-5">
                        Keunggulan
                    </h4>

                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bebas biaya administrasi</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-cash-stack me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Setoran awal Rp 100.000,- dan setoran selanjutnya Rp 10.000,-</h5>
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
                            <i class="bi bi-graph-up me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bagi hasil yang kompetitif</h5>
                        </div>
                    </div>
                    <!-- syarat -->
                    <h4 class="display-5 pt-5">
                        Syarat
                    </h4>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-building me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Kartu identitas pengurus / badan hukum
                                (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-person-standing me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Berusia minimal 17 tahun (jika mendaftar perorangan)</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">

                            <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Fotocopy NPWP (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Fotocopy KTP / Identitas (jika mendaftar perorangan)</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-4">
                            <i class="bi bi-card-checklist me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Fotocopy SIUP / TDP / OSS (jika mendaftar sebagai Badan Usaha / Perusahaan)</h5>
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