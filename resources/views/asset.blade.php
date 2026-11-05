@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Asset</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            E-Asset BPRS HIK MCI
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Daftar agunan dan aset potensial siap jual atau lelang dengan legalitas terjamin dan proses kepemilikan transparan.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
            <span class="subpage-section-tag">
                <i class="bi bi-houses"></i> Portofolio Agunan &amp; Properti
            </span>
            <h2 class="subpage-section-title mb-2">
                Asset Dijual
            </h2>
            <p class="text-muted small">Klik flyer untuk memperbesar detail informasi aset resmi dari PT BPRS HIK MCI.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($assets as $asset)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="modern-sub-card overflow-hidden h-100 d-flex flex-column">
                    <!-- Flyer Container (3:4 Ratio with sleek hover) -->
                    <div class="position-relative overflow-hidden bg-light" 
                         style="aspect-ratio: 3 / 4; cursor: pointer;"
                         role="button"
                         data-bs-toggle="modal" 
                         data-bs-target="#flyerModal" 
                         data-img="{{ Storage::url($asset->gambar) }}" 
                         data-title="{{ $asset->judul }}">
                        <img src="{{ Storage::url($asset->gambar) }}" 
                             alt="{{ $asset->judul }}" 
                             class="w-100 h-100 object-fit-cover"
                             style="transition: transform 0.4s ease;"
                             loading="lazy">
                        
                        <!-- Badges Overlay -->
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success bg-opacity-90 text-white rounded-pill px-3 py-2 small shadow-sm">
                                <i class="bi bi-shield-check me-1"></i> Aset Resmi
                            </span>
                        </div>

                        <!-- Hover Overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center text-white"
                             style="background: rgba(2, 26, 20, 0.55); opacity: 0; transition: opacity 0.3s ease;"
                             onmouseover="this.style.opacity='1'" 
                             onmouseout="this.style.opacity='0'">
                            <i class="bi bi-zoom-in fs-1 mb-2"></i>
                            <span class="badge bg-white text-dark rounded-pill px-3 py-2 fw-semibold">Klik untuk Memperbesar</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <h5 class="fw-bold text-dark mb-2" title="{{ $asset->judul }}">
                                {{ $asset->judul }}
                            </h5>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-file-earmark-image me-1 text-success"></i> Flyer resmi aset lelang dan penjualan langsung.
                            </p>
                        </div>
                        <div class="d-flex gap-2 justify-content-center pt-2 border-top">
                            <button type="button" 
                                    class="btn btn-outline-success rounded-pill px-3 py-2 btn-sm flex-fill" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#flyerModal" 
                                    data-img="{{ Storage::url($asset->gambar) }}" 
                                    data-title="{{ $asset->judul }}">
                                <i class="bi bi-eye me-1"></i> Preview
                            </button>
                            <a href="{{ Storage::url($asset->gambar) }}" 
                               download 
                               class="btn btn-success rounded-pill px-3 py-2 btn-sm text-white flex-fill">
                                <i class="bi bi-download me-1"></i> Download Flyer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="modern-sub-card p-5 text-center mx-auto" style="max-width: 600px;">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.75rem;">
                        <i class="bi bi-file-earmark-image text-muted"></i>
                    </div>
                    <h4 class="h5 fw-bold text-dark mt-2">Belum ada flyer E-Asset yang tersedia</h4>
                    <p class="text-muted small mb-0">Informasi aset lelang dan penjualan terbaru akan segera diperbarui secara berkala.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center pt-5">
            {{ $assets->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

<!-- Modal Pop Up Zoom Flyer -->
<div class="modal fade" id="flyerModal" tabindex="-1" aria-labelledby="flyerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white bg-white p-2 rounded-circle shadow" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
            </div>
            <div class="modal-body text-center p-2">
                <div class="bg-white p-3 rounded-4 shadow-lg d-inline-block position-relative" style="max-width: 100%;">
                    <img id="modalFlyerImg" src="" class="img-fluid rounded-3" style="max-height: 75vh; width: auto; object-fit: contain;" alt="Flyer Detail">
                    <div class="p-3 text-center border-top mt-3">
                        <h5 id="modalFlyerTitle" class="fw-bold text-dark mb-3"></h5>
                        <a id="modalFlyerDownload" href="" download class="btn btn-success rounded-pill px-4 py-2 text-white">
                            <i class="bi bi-download me-2"></i>Download Flyer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const flyerModal = document.getElementById('flyerModal');
    if (flyerModal) {
        flyerModal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;
            if (!trigger) return;
            const imgSrc = trigger.getAttribute('data-img');
            const title = trigger.getAttribute('data-title');
            
            const modalImg = document.getElementById('modalFlyerImg');
            const modalTitle = document.getElementById('modalFlyerTitle');
            const modalDownload = document.getElementById('modalFlyerDownload');
            
            if (modalImg) modalImg.src = imgSrc || '';
            if (modalTitle) modalTitle.textContent = title || '';
            if (modalDownload) modalDownload.href = imgSrc || '';
        });
    }
});
</script>
