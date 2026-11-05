@include('header')

<!-- Modern Subpage Hero Start -->
<section class="subpage-hero text-center position-relative">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative py-4" style="max-width: 900px; z-index: 2;">
        <div class="d-flex justify-content-center mb-2">
            <nav aria-label="breadcrumb" class="subpage-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="{{ url('pembiayaan') }}">Pembiayaan</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Consumer Finance</span>
            </nav>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.1s">Consumer Finance</h1>
        <p class="subpage-subtitle wow fadeInDown" data-wow-delay="0.2s">
            Solusi pembiayaan multiguna berlandaskan syariah untuk berbagai kebutuhan personal, pengabdian tenaga pendidik, pekerja migran, hingga karyawan institusi.
        </p>
    </div>
</section>
<!-- Modern Subpage Hero End -->

<!-- Pill Tabs Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar Navigation Tabs -->
            <div class="col-lg-3 col-md-4">
                <div class="nav-subpage-pills sticky-top" style="top: 100px; z-index: 10;">
                    <div class="p-2 mb-2">
                        <span class="text-uppercase fw-bold text-success" style="font-size: 0.75rem; letter-spacing: 0.08em;">Pilihan Kategori</span>
                        <h6 class="fw-bold mb-0" style="color: #0f172a; font-family: 'Outfit', sans-serif;">Produk Konsumer</h6>
                    </div>
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item mb-1" role="presentation">
                            <button class="nav-link w-100 active" id="v-pills-migran-tab" data-bs-toggle="pill" data-bs-target="#v-pills-migran" type="button" role="tab" aria-controls="v-pills-migran" aria-selected="true">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-airplane-engines me-2 fs-6"></i>
                                    <span>Calon Pekerja Migran</span>
                                </span>
                                <i class="bi bi-chevron-right pill-arrow small"></i>
                            </button>
                        </li>
                        <li class="nav-item mb-1" role="presentation">
                            <button class="nav-link w-100" id="v-pills-sertifikasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sertifikasi" type="button" role="tab" aria-controls="v-pills-sertifikasi" aria-selected="false">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-mortarboard me-2 fs-6"></i>
                                    <span>Sertifikasi Tenaga Pendidik</span>
                                </span>
                                <i class="bi bi-chevron-right pill-arrow small"></i>
                            </button>
                        </li>
                        <li class="nav-item mb-1" role="presentation">
                            <button class="nav-link w-100" id="v-pills-kolektif-tab" data-bs-toggle="pill" data-bs-target="#v-pills-kolektif" type="button" role="tab" aria-controls="v-pills-kolektif" aria-selected="false">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-people me-2 fs-6"></i>
                                    <span>Kolektif Karyawan</span>
                                </span>
                                <i class="bi bi-chevron-right pill-arrow small"></i>
                            </button>
                        </li>
                        <li class="nav-item mb-1" role="presentation">
                            <button class="nav-link w-100" id="v-pills-umroh-tab" data-bs-toggle="pill" data-bs-target="#v-pills-umroh" type="button" role="tab" aria-controls="v-pills-umroh" aria-selected="false">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-moon-stars me-2 fs-6"></i>
                                    <span>Pembiayaan Umroh</span>
                                </span>
                                <i class="bi bi-chevron-right pill-arrow small"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content Pane -->
            <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Tab 1: Calon Pekerja Migran -->
                    <div class="tab-pane fade show active" id="v-pills-migran" role="tabpanel" aria-labelledby="v-pills-migran-tab">
                        <!-- Product Showcase Top Banner (Full Width) -->
                        <div class="product-top-banner mb-4">
                            <img src="{{ asset('frontend/img/produk/MCI_Produk_PMI.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan Pekerja Migran">
                        </div>

                        <!-- Keunggulan -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Keunggulan</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Plafond hingga Rp 45.000.000,-</h4>
                                        <p class="text-muted small mb-0">Dukungan modal penempatan kerja dan persiapan keberangkatan luar negeri.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Jangka waktu sampai 36 bulan</h4>
                                        <p class="text-muted small mb-0">Tenor fleksibel hingga 3 tahun diselaraskan dengan kontrak masa kerja Anda.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Layanan pickup service angsuran</h4>
                                        <p class="text-muted small mb-0">Kemudahan pembayaran angsuran dengan layanan jemput oleh staf resmi bank.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box" style="background: rgba(0, 150, 199, 0.1); color: #0096c7; border-color: rgba(0, 150, 199, 0.2);">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Syarat</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">KTP suami &amp; istri</h5>
                                            <p class="text-muted small mb-0">Identitas sah e-KTP calon pekerja dan pasangan yang masih berlaku.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan KK dan Akta nikah</h5>
                                            <p class="text-muted small mb-0">Bukti legalitas hubungan keluarga yang terdaftar resmi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Surat keterangan kerja dari instansi / Perusahaan / yayasan tempat kerja</h5>
                                            <p class="text-muted small mb-0">Keterangan resmi asal tempat bekerja atau lembaga penyalur resmi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan surat keputusan pegawai tetap / tidak tetap</h5>
                                            <p class="text-muted small mb-0">Dokumen penetapan status ketenagakerjaan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan slip gaji terbaru</h5>
                                            <p class="text-muted small mb-0">Slip penghasilan resmi periode terbaru.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Syarat lain yang diperlukan Bank</h5>
                                            <p class="text-muted small mb-0">Kelengkapan tambahan yang dipersyaratkan oleh kebijakan perbankan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA WhatsApp Card -->
                        <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden mt-4">
                            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                                <div class="col-lg-8">
                                    <h4 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">Ajukan Pembiayaan Pekerja Migran</h4>
                                    <p class="text-white mb-0" style="opacity: 0.92;">Hubungi petugas BPRS HIK MCI untuk informasi dan pembukaan rekening pembiayaan via WhatsApp.</p>
                                </div>
                                <div class="col-lg-4 text-md-end text-center">
                                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa" aria-label="Buka Rekening via WhatsApp">
                                        <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                                        <span>Buka Rekening</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Sertifikasi Tenaga Pendidik -->
                    <div class="tab-pane fade" id="v-pills-sertifikasi" role="tabpanel" aria-labelledby="v-pills-sertifikasi-tab">
                        <!-- Product Showcase Top Banner (Full Width) -->
                        <div class="product-top-banner mb-4">
                            <img src="{{ asset('frontend/img/produk/MCI_Produk_SERDIK.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan Sertifikasi Tenaga Pendidik">
                        </div>

                        <!-- Keunggulan -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Keunggulan</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Plafond hingga Rp 150.000.000,-</h4>
                                        <p class="text-muted small mb-0">Plafon leluasa untuk kebutuhan keluarga, renovasi, atau peningkatan kualifikasi.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Jangka waktu sampai 120 bulan</h4>
                                        <p class="text-muted small mb-0">Tenor panjang hingga 10 tahun dengan angsuran sangat terjangkau.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Layanan pickup service angsuran</h4>
                                        <p class="text-muted small mb-0">Fasilitas jemput setoran langsung di sekolah atau madrasah tempat bertugas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box" style="background: rgba(0, 150, 199, 0.1); color: #0096c7; border-color: rgba(0, 150, 199, 0.2);">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Syarat</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">KTP suami / istri</h5>
                                            <p class="text-muted small mb-0">Identitas e-KTP guru/dosen pemohon dan pasangan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">FC KK / NPWP / Surat nikah</h5>
                                            <p class="text-muted small mb-0">Salinan dokumen keluarga dan NPWP pribadi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan Ijazah terakhir</h5>
                                            <p class="text-muted small mb-0">Ijazah pendidikan formal terakhir.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan Sertifikat Pendidik</h5>
                                            <p class="text-muted small mb-0">Sertifikasi resmi profesi tenaga pendidik (Serdik).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan SK Pengangkatan</h5>
                                            <p class="text-muted small mb-0">Surat keputusan pengangkatan dari yayasan atau instansi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Surat Rekomendasi dari Instansi tempat dimana mengajar</h5>
                                            <p class="text-muted small mb-0">Rekomendasi resmi pimpinan unit pendidikan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Syarat lain yang diperlukan Bank</h5>
                                            <p class="text-muted small mb-0">Dokumen pendukung kelayakan administratif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA WhatsApp Card -->
                        <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden mt-4">
                            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                                <div class="col-lg-8">
                                    <h4 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">Ajukan Pembiayaan Tenaga Pendidik</h4>
                                    <p class="text-white mb-0" style="opacity: 0.92;">Konsultasikan kemudahan pembiayaan sertifikasi pendidik bersama Account Officer kami via WhatsApp.</p>
                                </div>
                                <div class="col-lg-4 text-md-end text-center">
                                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa" aria-label="Buka Rekening via WhatsApp">
                                        <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                                        <span>Buka Rekening</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Kolektif Karyawan -->
                    <div class="tab-pane fade" id="v-pills-kolektif" role="tabpanel" aria-labelledby="v-pills-kolektif-tab">
                        <!-- Product Showcase Top Banner (Full Width) -->
                        <div class="product-top-banner mb-4">
                            <img src="{{ asset('frontend/img/produk/MCI_Produk_KolektifKary.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan Kolektif Karyawan">
                        </div>

                        <!-- Keunggulan -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Keunggulan</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Plafond hingga Rp 50.000.000,-</h4>
                                        <p class="text-muted small mb-0">Fasilitas kredit syariah untuk kesejahteraan dan kebutuhan beragam karyawan.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Jangka waktu sampai 120 bulan</h4>
                                        <p class="text-muted small mb-0">Tenor panjang hingga 10 tahun dengan skema pemotongan gaji yang praktis.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Layanan pickup service angsuran</h4>
                                        <p class="text-muted small mb-0">Koordinasi administrasi dan pembayaran kolektif langsung di kantor perusahaan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box" style="background: rgba(0, 150, 199, 0.1); color: #0096c7; border-color: rgba(0, 150, 199, 0.2);">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Syarat</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">KTP suami / istri</h5>
                                            <p class="text-muted small mb-0">Salinan kartu identitas resmi pemohon dan pasangan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan KK dan Akta nikah</h5>
                                            <p class="text-muted small mb-0">Salinan Kartu Keluarga dan surat/buku nikah sah.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Surat keterangan kerja dari instansi / Perusahaan / yayasan tempat kerja</h5>
                                            <p class="text-muted small mb-0">Surat aktif bekerja resmi dari HRD/manajemen.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Sertifikat Kelayakan (Certificate Of Eligibility)</h5>
                                            <p class="text-muted small mb-0">Surat sertifikasi kelayakan atau rekomendasi instansi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan slip gaji terbaru</h5>
                                            <p class="text-muted small mb-0">Slip payroll atau rincian penerimaan gaji periode terakhir.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Syarat lain yang diperlukan Bank</h5>
                                            <p class="text-muted small mb-0">Berkas administrasi pelengkap yang ditetapkan perbankan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA WhatsApp Card -->
                        <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden mt-4">
                            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                                <div class="col-lg-8">
                                    <h4 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">Ajukan Pembiayaan Kolektif Karyawan</h4>
                                    <p class="text-white mb-0" style="opacity: 0.92;">Dapatkan kemudahan fasilitas pembiayaan institusional untuk institusi dan karyawan Anda via WhatsApp.</p>
                                </div>
                                <div class="col-lg-4 text-md-end text-center">
                                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa" aria-label="Buka Rekening via WhatsApp">
                                        <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                                        <span>Buka Rekening</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Pembiayaan Umroh -->
                    <div class="tab-pane fade" id="v-pills-umroh" role="tabpanel" aria-labelledby="v-pills-umroh-tab">
                        <!-- Product Showcase Top Banner (Full Width) -->
                        <div class="product-top-banner mb-4">
                            <img src="{{ asset('frontend/img/produk/MCI_Produk_Umroh.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan Umroh">
                        </div>

                        <!-- Keunggulan -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Keunggulan</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Dapat membantu nasabah untuk merealisasikan ibadah Umroh</h4>
                                        <p class="text-muted small mb-0">Solusi terpercaya untuk menunaikan ibadah ke Baitullah tanpa menunggu tabungan penuh.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Jangka waktu sampai 24 bulan</h4>
                                        <p class="text-muted small mb-0">Pilihan tenor berangsur ringan sampai 2 tahun dengan skema syariah transparan.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bento-card">
                                        <div class="bento-icon-box mb-3">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Layanan pickup service angsuran</h4>
                                        <p class="text-muted small mb-0">Kenyamanan jemput dokumen dan angsuran langsung di kediaman Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kriteria Umroh Nasabah -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box" style="background: rgba(217, 119, 6, 0.1); color: #d97706; border-color: rgba(217, 119, 6, 0.25);">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Kriteria Umroh Nasabah</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon" style="background: rgba(217, 119, 6, 0.1); color: #d97706;">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Berdomisili di DIY atau kabupaten / kota berbatasan langsung dengan DIY</h5>
                                            <p class="text-muted small mb-0">Cakupan wilayah domisili nasabah pemohon.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon" style="background: rgba(217, 119, 6, 0.1); color: #d97706;">
                                            <i class="bi bi-hourglass-split"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Usia maksimal minimal 20 tahun dan maksimal 60 tahun</h5>
                                            <p class="text-muted small mb-0">Rentang usia calon jamaah pemohon saat pengajuan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Syarat -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bento-icon-box" style="background: rgba(0, 150, 199, 0.1); color: #0096c7; border-color: rgba(0, 150, 199, 0.2);">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <h3 class="h4 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Syarat</h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Salinan KTP nasabah dan pasangan</h5>
                                            <p class="text-muted small mb-0">e-KTP pemohon dan pasangan yang berlaku.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Slip gaji 3 bulan terakhir bagi pegawai dan 6 bulan terakhir bagi wiraswasta</h5>
                                            <p class="text-muted small mb-0">Bukti penghasilan tetap atau pencatatan perputaran usaha.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Surat izin usaha / surat keterangan (bagi wiraswasta) &amp; surat karyawan bekerja yang ditanda tangi perusahaan</h5>
                                            <p class="text-muted small mb-0">Legalitas izin usaha atau surat verifikasi pekerjaan resmi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Syarat lain yang diperlukan Bank</h5>
                                            <p class="text-muted small mb-0">Dokumen pendukung kelayakan pengajuan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bento-checklist-card">
                                        <div class="bento-check-icon">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div>
                                            <h5 class="h6 fw-bold mb-1" style="color: #0f172a;">Surat kuasa pendebetan tabungan</h5>
                                            <p class="text-muted small mb-0">Persetujuan autodebet angsuran tabungan secara berkala.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA WhatsApp Card -->
                        <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden mt-4">
                            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                                <div class="col-lg-8">
                                    <h4 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">Wujudkan Ibadah Umroh Sekarang</h4>
                                    <p class="text-white mb-0" style="opacity: 0.92;">Rencanakan perjalanan ibadah suci Anda bersama kemudahan pembiayaan syariah BPRS HIK MCI.</p>
                                </div>
                                <div class="col-lg-4 text-md-end text-center">
                                    <a href="https://wa.me/6285771796642" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa" aria-label="Buka Rekening via WhatsApp">
                                        <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                                        <span>Buka Rekening</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pill Tabs Content End -->

@include('footer')
