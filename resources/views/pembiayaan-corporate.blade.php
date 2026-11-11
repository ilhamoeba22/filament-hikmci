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
                <span class="active">Pembiayaan Corporate</span>
            </nav>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan Corporate</h1>
        <p class="subpage-subtitle wow fadeInDown" data-wow-delay="0.2s">
            Fasilitas pembiayaan institusional dan korporasi berskala besar berlandaskan akad syariah yang adil untuk mendukung investasi strategis dan ekspansi bisnis berkelanjutan.
        </p>
    </div>
</section>
<!-- Modern Subpage Hero End -->

<!-- Pembiayaan Corporate Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/produk/MCI_Produk_PembCorporate.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan Corporate">
        </div>

        <!-- Section Keunggulan -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="bento-icon-box">
                    <i class="bi bi-award-fill"></i>
                </div>
                <div>
                    <span class="text-uppercase fw-bold text-success" style="font-size: 0.8rem; letter-spacing: 0.06em;">Kelebihan Produk</span>
                    <h2 class="h3 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Keunggulan</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-cash"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Pembiayaan Mulai dari 300 Juta Rupiah</h3>
                        <p class="text-muted small mb-0">Kapasitas pembiayaan yang tinggi dirancang untuk mendukung kebutuhan modal kerja korporasi dan pengadaan aset operasional besar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-hourglass-split"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Jangka waktu sampai 60 bulan</h3>
                        <p class="text-muted small mb-0">Pilihan tenor fleksibel hingga 5 tahun yang diselaraskan dengan proyeksi keuangan dan siklus bisnis perusahaan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Layanan pickup service angsuran</h3>
                        <p class="text-muted small mb-0">Efisiensi operasional dengan layanan jemput dokumen dan angsuran langsung oleh tim resmi BPRS HIK MCI ke kantor Anda.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Syarat -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="bento-icon-box" style="background: rgba(0, 150, 199, 0.1); color: #0096c7; border-color: rgba(0, 150, 199, 0.2);">
                    <i class="bi bi-card-checklist"></i>
                </div>
                <div>
                    <span class="text-uppercase fw-bold" style="font-size: 0.8rem; letter-spacing: 0.06em; color: #0096c7;">Dokumen Pengajuan</span>
                    <h2 class="h3 fw-bold mb-0" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Syarat</h2>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-person-vcard"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">KTP suami / istri</h4>
                            <p class="text-muted small mb-0">Identitas resmi pengurus / pemilik perusahaan dan pasangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">FC KK / NPWP / Surat nikah</h4>
                            <p class="text-muted small mb-0">Salinan dokumen legalitas keluarga dan NPWP wajib pajak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Rekening tabungan minimal 6 bulan</h4>
                            <p class="text-muted small mb-0">Rekening koran perusahaan atau pembukuan aktif 6 bulan terakhir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-card-text"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">FC KK / NPWP / Surat nikah</h4>
                            <p class="text-muted small mb-0">Kelengkapan berkas identitas pelengkap yang dipersyaratkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prominent WhatsApp CTA Card -->
        <div class="mt-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="cta-banner-wrapper p-4 p-md-5 text-center text-md-start position-relative overflow-hidden">
                <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                    <div class="col-lg-8">
                        <div class="feature-pill-badge mb-3 text-white" style="background: rgba(255,255,255,0.18); border-color: rgba(255,255,255,0.3); color: #ffffff;">
                            <i class="bi bi-whatsapp"></i> Layanan Korporasi &amp; Kemitraan
                        </div>
                        <h3 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">
                            Ajukan Pembiayaan Corporate Sekarang
                        </h3>
                        <p class="text-white mb-0" style="opacity: 0.92; font-size: 1rem;">
                            Diskusikan skema permodalan korporasi bersama Relationship Manager kami melalui saluran komunikasi resmi WhatsApp.
                        </p>
                    </div>
                    <div class="col-lg-4 text-md-end text-center">
                        <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-cta-wa" aria-label="Buka Rekening via WhatsApp">
                            <i class="bi bi-whatsapp me-2 fs-5 text-success"></i>
                            <span>Buka Rekening</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pembiayaan Corporate Content End -->

@include('footer')
