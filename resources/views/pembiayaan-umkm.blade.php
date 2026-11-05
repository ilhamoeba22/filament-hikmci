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
                <span class="active">Pembiayaan UMKM</span>
            </nav>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan UMKM</h1>
        <p class="subpage-subtitle wow fadeInDown" data-wow-delay="0.2s">
            Solusi pembiayaan produktif untuk permodalan kerja dan ekspansi usaha mikro serta kecil dengan skema syariah yang fleksibel dan menentramkan.
        </p>
    </div>
</section>
<!-- Modern Subpage Hero End -->

<!-- Pembiayaan UMKM Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/produk/MCI_Produk_UKM.png') }}" class="product-top-banner-img" alt="Produk Pembiayaan UMKM">
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
                <div class="col-md-6 col-lg-3">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-cash"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Pembiayaan tanpa agunan</h3>
                        <p class="text-muted small mb-0">Memberikan kemudahan akses permodalan bagi usaha Anda tanpa keharusan jaminan aset fisik.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-hourglass-split"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Jangka waktu sampai 60 bulan</h3>
                        <p class="text-muted small mb-0">Tenor pembiayaan yang fleksibel dan berjangka panjang hingga 5 tahun sesuai arus kas bisnis Anda.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Layanan pickup service</h3>
                        <p class="text-muted small mb-0">Kemudahan transaksi dan setoran angsuran yang dapat dijemput langsung oleh staf resmi kami ke lokasi Anda.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="bento-card">
                        <div class="bento-icon-box mb-3">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2" style="font-family: 'Outfit', sans-serif; color: #0f172a;">Plafond hingga Rp 300.000.000,-</h3>
                        <p class="text-muted small mb-0">Dukungan modal yang substansial hingga Rp 300 Juta untuk menunjang percepatan pertumbuhan usaha Anda.</p>
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
                <div class="col-md-4">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-person-vcard"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">KTP suami / istri</h4>
                            <p class="text-muted small mb-0">Identitas resmi pemohon dan pasangan yang masih berlaku.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">FC KK / NPWP / Surat nikah</h4>
                            <p class="text-muted small mb-0">Salinan dokumen legalitas keluarga dan perpajakan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bento-checklist-card">
                        <div class="bento-check-icon">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1" style="color: #0f172a;">Rekening tabungan minimal 6 bulan</h4>
                            <p class="text-muted small mb-0">Mutasi rekening koran atau buku tabungan 6 bulan terakhir.</p>
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
                            <i class="bi bi-whatsapp"></i> Layanan Permohonan Pembiayaan
                        </div>
                        <h3 class="text-white fw-bold mb-2" style="font-family: 'Outfit', sans-serif;">
                            Ajukan Pembiayaan UMKM Sekarang
                        </h3>
                        <p class="text-white mb-0" style="opacity: 0.92; font-size: 1rem;">
                            Hubungi Account Officer kami untuk konsultasi permodalan dan pengajuan pembukaan pembiayaan usaha Anda.
                        </p>
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
<!-- Pembiayaan UMKM Content End -->

@include('footer')
