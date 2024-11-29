@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4">Karir</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Karir</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container py-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <h1 class="display-5">Galeri Penghargaan</h1>
        <p class="lead">Berikut adalah beberapa penghargaan yang telah kami terima.</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 1" data-description="Deskripsi Penghargaan 1" data-image="{{ asset('frontend/img/penghargaan/award_1.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_1.jpg') }}" class="img-fluid rounded" alt="Penghargaan 1">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 1</h5>
                    <p>Deskripsi Penghargaan 1</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 2" data-description="Deskripsi Penghargaan 2" data-image="{{ asset('frontend/img/penghargaan/award_2.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_2.jpg') }}" class="img-fluid rounded" alt="Penghargaan 2">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 2</h5>
                    <p>Deskripsi Penghargaan 2</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 3" data-description="Deskripsi Penghargaan 3" data-image="{{ asset('frontend/img/penghargaan/award_3.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_3.jpg') }}" class="img-fluid rounded" alt="Penghargaan 3">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 3</h5>
                    <p>Deskripsi Penghargaan 3</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 4" data-description="Deskripsi Penghargaan 4" data-image="{{ asset('frontend/img/penghargaan/award_4.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_4.jpg') }}" class="img-fluid rounded" alt="Penghargaan 4">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 4</h5>
                    <p>Deskripsi Penghargaan 4</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 5" data-description="Deskripsi Penghargaan 5" data-image="{{ asset('frontend/img/penghargaan/award_5.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_5.jpg') }}" class="img-fluid rounded" alt="Penghargaan 5">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 5</h5>
                    <p>Deskripsi Penghargaan 5</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="gallery-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Penghargaan 6" data-description="Deskripsi Penghargaan 6" data-image="{{ asset('frontend/img/penghargaan/award_6.jpg') }}">
                    <img src="{{ asset('frontend/img/penghargaan/award_6.jpg') }}" class="img-fluid rounded" alt="Penghargaan 6">
                </a>
                <div class="gallery-caption text-center mt-2">
                    <h5>Penghargaan 6</h5>
                    <p>Deskripsi Penghargaan 6</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <img id="modalImage" src="" class="img-fluid rounded" alt="">
            <div class="modal-caption text-center mt-2">
                <h5 id="modalTitle"></h5>
                <p id="modalDescription"></p>
            </div>
            <button type="button" class="btn-close position-absolute top-0 end-0 p-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
        </div>
    </div>
</div>

@include('footer')