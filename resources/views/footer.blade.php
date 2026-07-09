<!-- Footer Start -->
<div class="container-fluid footer pt-3 wow fadeIn" data-wow-delay="0.2s">
    <!-- Konten footer tetap sama -->
    <div class="container pt-4">
        <div class="row g-5 align-items-start">
            <!-- Column 1: Brand & Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-item d-flex flex-column">
                    <a href="{{ url('/') }}" class="mb-3">
                        <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" alt="Footer Logo" class="img-fluid" style="max-height: 80px; object-fit: contain;" />
                    </a>
                    <a href="https://maps.app.goo.gl/ayKc9DFvFkt9aDs87" target="_blank" class="text-white-50 text-decoration-none mb-3 lh-base">
                        <i class="fas fa-map-marker-alt text-info me-2"></i>Jalan Kaliurang KM 09,<br />
                        <span class="ms-3">Kel Sardonoharjo, Kec Ngaglik,</span><br />
                        <span class="ms-3">Kab Sleman, DI Yogyakarta, 55581</span>
                    </a>
                    <a href="mailto:corsec@bprshikmci.co.id" class="text-white-50 text-decoration-none mb-2">
                        <i class="fas fa-envelope text-info me-2"></i>corsec@bprshikmci.co.id
                    </a>
                    <a href="tel:+0274881159" class="text-white-50 text-decoration-none mb-3">
                        <i class="fas fa-phone text-info me-2"></i>+0274 881159
                    </a>
                    <div class="d-flex mt-2 gap-2">
                        <a class="btn btn-secondary btn-sm-square rounded-circle" target="_blank" href="https://maps.app.goo.gl/ayKc9DFvFkt9aDs87"><i class="bi bi-geo-alt-fill"></i></a>
                        <a class="btn btn-secondary btn-sm-square rounded-circle" target="_blank" href="https://www.instagram.com/bprshikmci/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-sm-square rounded-circle" target="_blank" href="https://www.facebook.com/people/Bank-Syariah-HIK-MCI/61554427015454/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Products -->
            <div class="col-lg-6 col-md-6">
                <div class="footer-item">
                    <h4 class="text-info mb-4">Produk Kami</h4>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <h5 class="text-white mb-3 pb-1 border-bottom border-secondary border-1">Pembiayaan</h5>
                            <div class="d-flex flex-column gap-2 mb-4">
                                <a href="{{ url('pembiayaan/pembiayaan-umkm') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>UMKM Mikro</a>
                                <a href="{{ url('pembiayaan/pembiayaan-property') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Properti</a>
                                <a href="{{ url('pembiayaan/pembiayaan-corporate') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Corporate</a>
                                <a href="{{ url('pembiayaan/pembiayaan-consumer-finance') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Consumer Finance</a>
                            </div>
                            <h5 class="text-white mb-3 pb-1 border-bottom border-secondary border-1">Deposito</h5>
                            <div class="d-flex flex-column gap-2">
                                <a href="{{ url('main-deposito/deposito') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Deposito Karimah</a>
                                <a href="{{ url('main-deposito/wakaf') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>CWLD</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-white mb-3 pb-1 border-bottom border-secondary border-1">Tabungan</h5>
                            <div class="d-flex flex-column gap-2">
                                <a href="{{ url('tabungan/tabungan-ukhuwah') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Tabungan Ukhuwah</a>
                                <a href="{{ url('tabungan/tabungan-karimah') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Tabungan Karimah</a>
                                <a href="{{ url('tabungan/tabungan-rencana') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Tabungan Rencana</a>
                                <a href="{{ url('tabungan/tabungan-cerdas') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Tabungan Cerdas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3: Information -->
            <div class="col-lg-3 col-md-12">
                <div class="footer-item">
                    <h4 class="text-info mb-4">Informasi</h4>
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ url('about') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Tentang kami</a>
                        <a href="{{ url('karir') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Karir</a>
                        <a href="{{ url('edukasi') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Edukasi</a>
                        <a href="{{ url('asset') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>E-Asset</a>
                        <a href="{{ url('lapkeu') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Laporan Keuangan</a>
                        <a href="{{ url('penghargaan') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Penghargaan</a>
                        <a href="{{ url('piagam-audit') }}" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Piagam Audit Internal</a>
                        <a href="http://wbs.bprshikmci.co.id/" target="_blank" class="text-white-50 text-decoration-none"><i class="fas fa-angle-right me-2 text-info"></i>Lapor WBS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-between align-items-center mt-0 pt-0">
            <div class="col-md-10">
                <small class="text-white d-block text-end">BPRS HIK MCI merupakan peserta penjaminan LPS</small>
                <small class="text-white d-block mb-1 text-end">BPRS HIK MCI berizin dan diawasi oleh Otoritas Jasa Keuangan</small>
            </div>
            <div class="col-md-2">
                <div class="d-flex justify-content-start">
                    <img src="{{ asset('frontend/img/logo/ib_logo.png') }}" alt="Bank Syariah" class="img-fluid me-3" style="height: 50px;">
                    <img src="{{ asset('frontend/img/logo/bprs_logo.png') }}" alt="BPR Syariah" class="img-fluid me-3" style="height: 50px;">
                    <!-- <img src="{{ asset('frontend/img/logo/lps.png') }}" alt="Lembaga Penjamin Simpanan" class="img-fluid" style="height: 50px;"> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-1">
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
<div class="fixed-buttons" style="position: fixed; bottom: 65px; right: 30px; display: flex; flex-direction: row; gap: 10px;">
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
    <a href="https://wa.me/+6281222770657" target="_blank" class="btn btn-success btn-lg-square rounded-circle mb-2">
        <i class="fab fa-whatsapp" style="font-size: 30px;"></i>
    </a>
</div>
<!-- WhatsApp and Back to Top Buttons End -->

<!-- JavaScript Libraries (Deferred) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" defer></script>
<script src="{{ asset('frontend/js/main.js') }}" defer></script>

@stack('scripts')
</body>

</html>