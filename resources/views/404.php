@include('header')
<!-- 404 Start -->
<div class="container-fluid py-5">
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Halaman Dalam Perbaikan</h1>
                <p class="mb-4">InsyaAllah halaman ini akan segera diperbaiki. Mohon maaf atas ketidaknyamanannya dan terima kasih atas kesabaran Anda.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url('/') }}">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->
@include('footer')