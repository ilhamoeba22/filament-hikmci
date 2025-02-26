@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4">Penghargaan</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Penghargaan</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid penghargaan py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5" style="max-width: 800px">
            <h1 class="display-5 text-capitalize mb-3">Penghargaan BPRS HIK MCI</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_1.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_1.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 1">
                    </div>
                    <div class="p-4 text-center">
                        <h5>Infobank Award 2023 dengan Predikat "Sangat Bagus"</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_6.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_6.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 6">
                    </div>
                    <div class="p-4 text-center">
                        <h5>The Best Performance Thn 2019</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_5.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_5.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 5">
                    </div>
                    <div class="p-4 text-center">
                        <h5>Predikat "Excellent" Atas Kinerja Thn. 2018</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_4.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_4.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 4">
                    </div>
                    <div class="p-4 text-center">
                        <h5>The Most Profitable 2015 - 2017</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_3.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_3.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 3">
                    </div>
                    <div class="p-4 text-center">
                        <h5>Predikat "Sangat Bagus" Atas Kinerja Thn. 2017</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="penghargaan-item border rounded shadow-sm">
                    <div class="penghargaan-img position-relative" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('frontend/img/penghargaan/award_2.jpg') }}">
                        <img src="{{ asset('frontend/img/penghargaan/award_2.jpg') }}" class="img-fluid rounded-top w-100 karir-thumbnail" alt="Penghargaan 2">
                    </div>
                    <div class="p-4 text-center">
                        <h5>Predikat "Sangat Bagus" Atas Kinerja Thn. 2016</h5>
                    </div>
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
            <img id="modalImage" src="" class="img-fluid rounded" alt="" style="width: 100%; height: auto;">
            <button type="button" class="btn-close position-absolute top-0 end-0 p-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
        </div>
    </div>
</div>

@include('footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var imageModal = document.getElementById('imageModal');
        imageModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var image = button.getAttribute('data-image');

            var modalImage = imageModal.querySelector('#modalImage');

            modalImage.src = image;
            modalImage.alt = "Penghargaan";
        });
    });
</script>