@include('header')

<!-- Modern Hero Banner Start -->
<div class="subpage-hero position-relative">
    <div class="subpage-hero-pattern"></div>
    <div class="container text-center position-relative py-4" style="z-index: 2;">
        <div class="subpage-breadcrumb">
            <a href="{{ url('/') }}"><i class="bi bi-house-door me-1"></i> Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Tentang Kami</span>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Penghargaan</span>
        </div>
        <h1 class="subpage-title">Penghargaan</h1>
        <p class="subpage-subtitle">
            Apresiasi dan rekognisi nasional atas komitmen tata kelola unggul, integritas, dan kinerja finansial syariah berkelanjutan BPRS HIK MCI.
        </p>
    </div>
</div>
<!-- Modern Hero Banner End -->

<!-- Gallery Start -->
<div class="subpage-content-wrapper">
    <div class="container py-2">
        <div class="text-center mx-auto pb-4" style="max-width: 800px">
            <div class="feature-pill-badge mb-2">
                <i class="bi bi-trophy-fill text-warning"></i> Prestasi &amp; Rekognisi
            </div>
            <h2 class="display-6 fw-bold text-dark mb-3">
                Penghargaan BPRS HIK MCI
            </h2>
            <p class="text-muted mb-0">
                Bukti dedikasi dan kinerja terpercaya kami dalam menghadirkan perbankan syariah yang sehat, kokoh, dan berdaya saing tinggi.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Award 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_1.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_1.jpg') }}" class="img-fluid w-100" alt="Penghargaan 1">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-trophy-fill me-1"></i> Infobank Award
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">Infobank Award 2023 dengan Predikat "Sangat Bagus"</h5>
                    </div>
                </div>
            </div>

            <!-- Award 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_6.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_6.jpg') }}" class="img-fluid w-100" alt="Penghargaan 6">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-award-fill me-1"></i> Best Performance
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">The Best Performance Thn 2019</h5>
                    </div>
                </div>
            </div>

            <!-- Award 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_5.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_5.jpg') }}" class="img-fluid w-100" alt="Penghargaan 5">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-star-fill me-1"></i> Excellent Rating
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">Predikat "Excellent" Atas Kinerja Thn. 2018</h5>
                    </div>
                </div>
            </div>

            <!-- Award 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_4.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_4.jpg') }}" class="img-fluid w-100" alt="Penghargaan 4">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-graph-up-arrow me-1"></i> Most Profitable
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">The Most Profitable 2015 - 2017</h5>
                    </div>
                </div>
            </div>

            <!-- Award 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_3.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_3.jpg') }}" class="img-fluid w-100" alt="Penghargaan 3">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-trophy-fill me-1"></i> Sangat Bagus
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">Predikat "Sangat Bagus" Atas Kinerja Thn. 2017</h5>
                    </div>
                </div>
            </div>

            <!-- Award 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="luxury-award-card">
                    <div class="award-img-wrapper" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_2.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_2.jpg') }}" class="img-fluid w-100" alt="Penghargaan 2">
                        <div class="award-zoom-overlay">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm fs-sm fw-semibold">
                                <i class="bi bi-zoom-in me-1 text-success"></i> Perbesar Sertifikat
                            </span>
                        </div>
                    </div>
                    <div class="p-4 text-center d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-2">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold small">
                                <i class="bi bi-trophy-fill me-1"></i> Sangat Bagus
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 lh-base">Predikat "Sangat Bagus" Atas Kinerja Thn. 2016</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Modal Preview -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <div class="position-relative text-center">
                <img id="modalImage" src="" class="img-fluid rounded-4 shadow-lg" alt="Penghargaan" style="max-height: 85vh; width: auto; object-fit: contain;">
                <button type="button" class="btn btn-dark btn-sm rounded-circle position-absolute top-0 end-0 m-2 p-2 shadow" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1060; width: 36px; height: 36px;">
                    <i class="bi bi-x-lg text-white"></i>
                </button>
            </div>
        </div>
    </div>
</div>

@include('footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var imageModal = document.getElementById('imageModal');
        if (imageModal) {
            imageModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var image = button.getAttribute('data-image');
                var modalImage = imageModal.querySelector('#modalImage');
                if (modalImage && image) {
                    modalImage.src = image;
                    modalImage.alt = "Penghargaan";
                }
            });
        }
    });
</script>
