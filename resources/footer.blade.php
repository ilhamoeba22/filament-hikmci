<!-- Footer Start -->
<div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container pt-4">
        <div class="row g-5">
            <div class="col-md-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" alt="Footer Logo" class="img-fluid mb-3 w-100" />
                        </a>
                        <a href="https://maps.app.goo.gl/ayKc9DFvFkt9aDs87" target="_blank" class="mb-3">
                            Jalan Kaliurang KM 09,<br />
                            Kel Sardonoharjo, Kec Ngaglik, Kab Sleman, DI Yogyakarta,<br />
                            55581 <br />
                        </a>
                        <a href="mailto:corsec@bprshikmci.co.id" class="d-flex align-items-center text-white mt-3">
                            <i class="fas fa-envelope me-2"></i> corsec@bprshikmci.co.id
                        </a>
                        <a href="tel:+0274881159" class="d-flex align-items-center text-white">
                            <i class="fas fa-phone me-2"></i> +0274 881159
                        </a>
                    </div>
                </div>
                <div class="d-flex my-3">
                    <a class="btn btn-secondary btn-lg-square rounded-circle me-3" target="_blank" href="https://maps.app.goo.gl/ayKc9DFvFkt9aDs87"><i class="bi bi-geo-alt-fill" style="font-size: 30px;"></i></a>
                    <a class="btn btn-secondary btn-lg-square rounded-circle me-3" target="_blank" href="https://www.instagram.com/bprshikmci/"><i class="fab fa-instagram" style="font-size: 30px;"></i></a>
                    <a class="btn btn-secondary btn-lg-square rounded-circle me-0" target="_blank" href="https://www.facebook.com/people/Bank-Syariah-HIK-MCI/61554427015454/"><i class="fab fa-facebook-f" style="font-size: 30px;"></i></a>
                </div>
            </div>
            <div class="col-md-6 pt-5">
                <div class="row">
                    <h4 class="text-info mb-4">Produk Kami</h4>
                    <div class="col-md-6">
                        <div class="footer-item d-flex flex-column">
                            <h5 class="text-white my-2">Pembiayaan</h5>
                            <a href="{{ url('pembiayaan-umkm') }}"><i class="fas fa-angle-right me-2"></i> Mikro UMKM</a>
                            <a href="{{ url('pembiayaan-property') }}"><i class="fas fa-angle-right me-2"></i> Properti</a>
                            <a href="{{ url('pembiayaan-corporate') }}"><i class="fas fa-angle-right me-2"></i> Corporate</a>
                            <a href="{{ url('pembiayaan-consumer-finance') }}"><i class="fas fa-angle-right me-2"></i> Consumer Finance</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-item d-flex flex-column">
                            <h5 class="text-white my-2">Tabungan</h5>
                            <a href="{{ url('tabungan-ukhuwah') }}"><i class="fas fa-angle-right me-2"></i> Tabungan Ukhuwah</a>
                            <a href="{{ url('tabungan-karimah') }}"><i class="fas fa-angle-right me-2"></i> Tabungan Karimah</a>
                            <a href="{{ url('tabungan-rencana') }}"><i class="fas fa-angle-right me-2"></i> Tabungan Rencana</a>
                            <a href="{{ url('tabungan-finance') }}"><i class="fas fa-angle-right me-2"></i> Tabungan Finance</a>
                            <h5 class="text-white my-2">Deposito</h5>
                            <a href="{{ url('deposito') }}"><i class="fas fa-angle-right me-2"></i> Deposito Karimah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pt-5">
                <div class="footer-item d-flex flex-column mb-5">
                    <h4 class="text-info mb-4">Informasi</h4>
                    <a href="{{ url('/') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="{{ url('about') }}"><i class="fas fa-angle-right me-2"></i> Tentang kami</a>
                    <a href="{{ url('karir') }}"><i class="fas fa-angle-right me-2"></i> Karir</a>
                    <a href="{{ url('wakaf') }}"><i class="fas fa-angle-right me-2"></i> E-Wakaf</a>
                    <a href="{{ url('asset') }}"><i class="fas fa-angle-right me-2"></i> Asset</a>
                    <a href="{{ url('lapkeu') }}"><i class="fas fa-angle-right me-2"></i> Laporan Keuangan</a>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-end align-items-end mt-0 pt-0">
            <div class="footer-item d-flex flex-column align-items-end mt-0 pt-0">
                <div class="d-flex justify-content-end align-items-center mt-0 pt-0">
                    <img src="{{ asset('frontend/img/logo/ib_logo.png') }}" alt="Bank Syariah" class="img-fluid me-3" style="height: 50px;">
                    <img src="{{ asset('frontend/img/logo/bprs_logo.png') }}" alt="BPR Syariah" class="img-fluid me-3" style="height: 50px;">
                    <img src="{{ asset('frontend/img/logo/lps.png') }}" alt="Lembaga Penjamin Simpanan" class="img-fluid me-3" style="height: 50px;">
                </div>
                <p class="text-white text-end me-3">Terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container text-center">
        <div class="col-md-12 text-body">
            Designed With
            <i class="fas fa-heart text-white"></i>
            By
            <a class="border-bottom text-white" href="#">IT & MIS BPRS HIK MCI</a>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- WhatsApp and Back to Top Buttons Start -->
<div class="fixed-buttons" style="position: fixed; bottom: 90px; right: 32px; display: flex; flex-direction: row; gap: 10px;">
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
    <a href="https://wa.me/yourphonenumber" class="btn btn-success btn-lg-square rounded-circle mb-2">
        <i class="fab fa-whatsapp" style="font-size: 30px;"></i>
    </a>
</div>
<!-- WhatsApp and Back to Top Buttons End -->

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" defer></script>
<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>