@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Consumer Finance</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('pembiayaan')}}">Pembiayaan</a></li>
                <li class="breadcrumb-item active text-primary">Consumer Finance</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->
<!-- Pill Tabs Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <ul class="nav flex-column nav-tabs-custom">
                    <li class="nav-item mb-2">
                        <a class="nav-link active" id="v-pills-migran-tab" data-bs-toggle="pill" href="#v-pills-migran" role="tab" aria-controls="v-pills-migran" aria-selected="true">Calon Pekerja Migran</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="v-pills-sertifikasi-tab" data-bs-toggle="pill" href="#v-pills-sertifikasi" role="tab" aria-controls="v-pills-sertifikasi" aria-selected="false">Sertifikasi Tenaga Pendidik</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="v-pills-kolektif-tab" data-bs-toggle="pill" href="#v-pills-kolektif" role="tab" aria-controls="v-pills-kolektif" aria-selected="false">Kolektif Karyawan</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="v-pills-umroh-tab" data-bs-toggle="pill" href="#v-pills-umroh" role="tab" aria-controls="v-pills-umroh" aria-selected="false">Pembiayaan Umroh</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="tabungan-item tab-content border rounded p-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-migran" role="tabpanel" aria-labelledby="v-pills-migran-tab">
                        <div class="row g-5 mb-3">
                            <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                <img src="{{asset('frontend/img/produk/MCI_Produk_PMI.png')}}" class="img-fluid-produk" alt="Responsive image">
                            </div>
                        </div>

                        <!-- Keunggulan -->
                        <h3>Keunggulan</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Plafond hingga Rp 45.000.000,-</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Jangka waktu sampai 36 bulan</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Layanan pickup service angsuran</h5>
                            </div>
                        </div>

                        <!-- Syarat -->

                        <h3>Syarat</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">KTP suami & istri</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-earmark-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan KK dan Akta nikah</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Surat keterangan kerja dari instansi / Perusahaan / yayasan tempat kerja</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan surat keputusan pegawai tetap / tidak tetap</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan slip gaji terbaru</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Syarat lain yang diperlukan Bank</h5>
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
                    <div class="tab-pane fade" id="v-pills-sertifikasi" role="tabpanel" aria-labelledby="v-pills-sertifikasi-tab">
                        <div class="row g-5 mb-3">
                            <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                <img src="{{asset('frontend/img/produk/MCI_Produk_SERDIK.png')}}" class="img-fluid-produk" alt="Responsive image">
                            </div>
                        </div>

                        <h3>Keunggulan</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Plafond hingga Rp 150.000.000,-</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Jangka waktu sampai 120 bulan</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Layanan pickup service angsuran</h5>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <h3>Syarat</h3>
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
                                <h5 class="mb-0">Salinan Ijazah terakhir</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan Sertifikat Pendidik</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan SK Pengangkatan</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Surat Rekomendasi dari Instansi tempat dimana mengajar</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Syarat lain yang diperlukan Bank</h5>
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
                    <div class="tab-pane fade" id="v-pills-kolektif" role="tabpanel" aria-labelledby="v-pills-kolektif-tab">
                        <div class="row g-5 mb-3">
                            <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                <img src="{{asset('frontend/img/produk/MCI_Produk_KolektifKary.png')}}" class="img-fluid-produk" alt="Responsive image">
                            </div>
                        </div>

                        <h3>Keunggulan</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Plafond hingga Rp 50.000.000,-</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Jangka waktu sampai 120 bulan</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Layanan pickup service angsuran</h5>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <h3>Syarat</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">KTP suami / istri</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-earmark-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan KK dan Akta nikah</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Surat keterangan kerja dari instansi / Perusahaan / yayasan tempat kerja</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Sertifikat Kelayakan (Certificate Of Eligibility)</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan slip gaji terbaru</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Syarat lain yang diperlukan Bank</h5>
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
                    <div class="tab-pane fade" id="v-pills-umroh" role="tabpanel" aria-labelledby="v-pills-umroh-tab">
                        <div class="row g-5 mb-3">
                            <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                <img src="{{asset('frontend/img/produk/MCI_Produk_Umroh.png')}}" class="img-fluid-produk" alt="Responsive image">
                            </div>
                        </div>

                        <h3>Keunggulan</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Dapat membantu nasabah untuk merealisasikan ibadah Umroh</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Jangka waktu sampai 24 bulan</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-truck me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Layanan pickup service angsuran</h5>
                            </div>
                        </div>
                        <h3>Kriteria Umroh Nasabah</h3>

                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-cash me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Berdomisili di DIY atau kabupaten / kota berbatasan
                                    langsung dengan DIY</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-hourglass-split me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Usia maksimal minimal 20 tahun dan maksimal 60 tahun</h5>
                            </div>
                        </div>


                        <!-- Syarat -->
                        <h3>Syarat</h3>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-person-vcard me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Salinan KTP nasabah dan pasangan</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-earmark-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Slip gaji 3 bulan terakhir bagi pegawai
                                    dan 6 bulan terakhir bagi wiraswasta</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Surat izin usaha / surat keterangan (bagi wiraswasta)
                                    & surat karyawan bekerja yang ditanda tangi perusahaan</h5>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-card-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Syarat lain yang diperlukan Bank</h5>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 d-flex align-items-center mb-1">
                                <i class="bi bi-file-text me-3 icon-hover" style="font-size: 2rem;"></i>
                                <h5 class="mb-0">Surat kuasa pendebetan tabungan</h5>
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
</div>
<!-- Pill Tabs End -->
@include('footer')