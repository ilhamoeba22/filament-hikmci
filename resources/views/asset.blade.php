@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-3" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">E-Asset</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Asset</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<style>
.asset-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.08);
}
.asset-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15) !important;
}
.asset-flyer-box {
    width: 100%;
    aspect-ratio: 3 / 4;
    position: relative;
    overflow: hidden;
    background-color: #f1f3f5;
    cursor: pointer;
}
.asset-flyer-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.asset-flyer-box:hover img {
    transform: scale(1.04);
}
.asset-flyer-overlay {
    background: rgba(0, 0, 0, 0.45);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.asset-flyer-box:hover .asset-flyer-overlay {
    opacity: 1;
}
</style>

<!-- Asset Start -->
<div class="container-fluid asset background-index py-5">
    <div class="container pb-4">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h1 class="text-capitalize mb-2">Asset Dijual</h1>
            <p class="text-muted">Klik flyer untuk memperbesar detail informasi aset resmi dari PT BPRS HIK MCI.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse ($assets as $asset)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="asset-card card rounded-4 overflow-hidden h-100 bg-white">
                    <!-- Flyer Container (3:4 Portrait Ratio) -->
                    <div class="asset-flyer-box position-relative" 
                         role="button"
                         data-bs-toggle="modal" 
                         data-bs-target="#flyerModal" 
                         data-img="{{ Storage::url($asset->gambar) }}" 
                         data-title="{{ $asset->judul }}">
                        <img src="{{ Storage::url($asset->gambar) }}" 
                             alt="{{ $asset->judul }}" 
                             loading="lazy">
                        <div class="asset-flyer-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center text-white">
                            <i class="fas fa-search-plus fa-2x mb-2 text-white"></i>
                            <span class="badge bg-dark bg-opacity-75 rounded-pill px-3 py-2 fw-normal">Klik untuk Memperbesar</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="card-body p-4 d-flex flex-column justify-content-between text-center">
                        <h5 class="card-title text-dark fw-bold mb-3" title="{{ $asset->judul }}">
                            {{ $asset->judul }}
                        </h5>
                        <div class="d-flex gap-2 justify-content-center mt-auto pt-2">
                            <button type="button" 
                                    class="btn btn-outline-primary rounded-pill px-3 py-2 btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#flyerModal" 
                                    data-img="{{ Storage::url($asset->gambar) }}" 
                                    data-title="{{ $asset->judul }}">
                                <i class="fas fa-search-plus me-1"></i> Preview
                            </button>
                            <a href="{{ Storage::url($asset->gambar) }}" 
                               download 
                               class="btn btn-primary rounded-pill px-3 py-2 btn-sm text-white">
                                <i class="fas fa-download me-1"></i> Download Flyer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-file-earmark-image display-1 text-muted"></i>
                <h4 class="mt-3 text-muted">Belum ada flyer E-Asset yang tersedia</h4>
            </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center pt-4">
            {{ $assets->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Asset End -->

<!-- Modal Pop Up Zoom Flyer -->
<div class="modal fade" id="flyerModal" tabindex="-1" aria-labelledby="flyerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white bg-white p-2 rounded-circle shadow" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-2">
                <div class="bg-white p-3 rounded-4 shadow-lg d-inline-block position-relative" style="max-width: 100%;">
                    <img id="modalFlyerImg" src="" class="img-fluid rounded-3" style="max-height: 75vh; width: auto; object-fit: contain;" alt="Flyer Detail">
                    <div class="p-3 text-center border-top mt-3">
                        <h5 id="modalFlyerTitle" class="fw-bold text-dark mb-3"></h5>
                        <a id="modalFlyerDownload" href="" download class="btn btn-primary rounded-pill px-4 py-2 text-white">
                            <i class="fas fa-download me-2"></i>Download Flyer
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