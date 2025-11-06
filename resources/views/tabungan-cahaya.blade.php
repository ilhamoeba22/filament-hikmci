@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Tabungan Cahaya</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('tabungan') }}">Tabungan</a></li>
                <li class="breadcrumb-item active text-primary">Tabungan Cahaya</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Tabungan Cahaya Start -->
<div class="container-fluid tabungan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="tabungan-item">
                    <div class="row g-5 mb-3">
                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <img src="{{asset('frontend/img/produk/MCI_Produk_Cahaya.png')}}" class="img-fluid-produk" alt="Responsive image">
                        </div>
                    </div>
                    <h1 class="pt-1">
                        Fitur
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-bag-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Menggunakan Akad Mudharabah Mutlaqah</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-calendar-week me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Minimal Setora Awal Rp. 10.000.000,-</h5>
                        </div>
                    </div>
                    <h1 class="pt-1">
                        Keunggulan
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-gift-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Mendapatkan hadiah langsung tanpa diundi</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-box-seam-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Pilihan hadiah berupa Barang / Jasa</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-alarm-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Proses pengadaan hadiah cepat (Max 21 hari kerja)</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-wallet-fill me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Gratis Biaya Administrasi</h5>
                        </div>
                    </div>
                    <!-- syarat -->
                    <h1 class="pt-1">
                        Syarat Perorangan
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-person-badge me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Usia minimal 17 tahun</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-credit-card-2-front me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Memiliki KTP</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">NPWP (opsional)</h5>
                        </div>
                    </div>

                    <h1 class="pt-1">
                        Syarat Badan Usaha
                    </h1>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-file-earmark-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">Akta Pendirian dan Akta Perubahan</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-building me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">NIB Badan Hukum</h5>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">NPWP Pengurus</h5>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mb-1">
                            <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                            <h5 class="mb-0">KTP Pengurus</h5>
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