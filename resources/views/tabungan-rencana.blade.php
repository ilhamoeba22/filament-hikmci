@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Tabungan Rencana</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('tabungan') }}">Tabungan</a></li>
                <li class="breadcrumb-item active text-primary">Tabungan Rencana</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Tabungan rencana Start -->
<div class="container-fluid tabungan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="tabungan-item">
                    <div class="row g-5 mb-3">
                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <img src="{{asset('frontend/img/produk/MCI_Produk_Rencana.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                    </div>
                    <h1 class="pt-1">
                        Fitur
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-bag-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Berdasarkan prinsip syariah
                                dengan akad mudharabah</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-calendar-week me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Jangka waktu sampai dengan 60 bulan (5 tahun)</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-check2-square me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Akad : Mudharabah Mutlaqah</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-wallet2 me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Setoran Awal Minimum : 100.000,-</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-arrow-repeat me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Setoran Rutin Minimum : 100.000,-</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-calendar-range me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Jangka waktu 6 hingga 120 bulan</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-percent me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bagi hasil : Nisbah 30% untuk nasabah setara E.R 4% (menyesuaikan pendapatan bank)</h5>
                        </div>
                    </div>
                    <h1 class="pt-1">
                        Keunggulan
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bebas biaya administrasi</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-people-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dapat dibuka untuk anak sejak usia 10 tahun</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Layanan pickup service</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-lock-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Dijamin oleh LPS</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-gift-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Hadiah langsung tanpa diundi sesuai nominal dan jangka waktu tabungan</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-graph-up me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Bagi hasil kompetitif</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-calendar2-range me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Jangka waktu fleksibel hingga 10 tahun</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-speedometer2 me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Proses pembukaan mudah dan cepat</h5>
                        </div>
                    </div>
                    <!-- syarat -->
                    <h1 class="pt-1">
                        Syarat dan Ketentuan
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-file-earmark-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-2">Perorangan Usia 10–16 tahun</h5>
                                    <h6 class="mb-2">Dokumen yang diperlukan:</h6>
                                    <div class="ps-2">
                                        <h6 class="mb-2">• Kartu Identitas Anak (KIA) / Kartu Pelajar (opsional)</h6>
                                        <h6 class="mb-2">• Kartu Keluarga (KK)</h6>
                                        <h6 class="mb-2">• Surat Persetujuan Orang Tua</h6>
                                        <h6 class="mb-2">• KTP orang tua / wali</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-person-badge me-3 icon-hover" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-2">Perorangan Usia ≥ 17 Tahun</h5>
                                    <h6 class="mb-2">Dokumen yang diperlukan:</h6>
                                    <div class="ps-2">
                                        <h6 class="mb-2">• KTP</h6>
                                        <h6 class="mb-2">• NPWP (opsional)</h6>
                                    </div>
                                </div>
                            </div>
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