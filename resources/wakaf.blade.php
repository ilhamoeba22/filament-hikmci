@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Pembiayaan Property</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Wakaf</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Wakaf Start -->
<div class="container-fluid tabungan">
    <div class="container tabungan-item">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="row g-5 mb-3">
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <img src="{{asset('frontend/img/wakaf/MCI_Produk_Wakaf.png')}}" class="img-fluid-produk" alt="Responsive image">
                    </div>
                </div>
                <!-- Program Wakaf Saat Ini Start -->
                <div class="row g-5">
                    <div class="container-fluid wakaf py-4">
                        <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                            <h1 class="text-capitalize mb-3">Program Wakaf Terkini</h1>
                        </div>
                        <div class="row g-4 justify-content-center">
                            @foreach($wakafs as $wakaf)
                            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="wakaf-item">
                                    <div class="wakaf-img">
                                        <img src="{{ asset('storage/' . $wakaf->gambar_cover) }}" class="img-fluid rounded-top w-100" alt="{{ $wakaf->judul }}">
                                        <div class="wakaf-date bg-primary text-white px-3 py-1 position-absolute top-0 start-0">
                                            {{ $wakaf->created_at->format('d M Y') }}
                                        </div>
                                    </div>
                                    <div class="wakaf-content rounded-bottom p-4">
                                        <a href="{{ route('wakaf.show', $wakaf->id) }}" class="nunito d-inline-block mb-3">{{ $wakaf->judul }}</a>
                                        <p>{{ Str::limit($wakaf->deskripsi, 100) }}</p>
                                        <p class="text-dark"><strong><i class="fa fa-map-marker-alt me-1"></i> Lokasi:</strong> {{ $wakaf->lokasi }}</p>
                                        <p class="text-dark"><strong><i class="fa fa-user me-1"></i> Nahzir:</strong> {{ $wakaf->nahzir }}</p>
                                        <p class="text-dark"><strong><i class="fa fa-bullseye me-1"></i> Target:</strong> {{ $wakaf->target }}</p>
                                        <p>
                                            @if($wakaf->status == 'Terpenuhi')
                                            <i class="fa fa-check-circle text-success"></i>
                                            <span class="text-dark">Terpenuhi</span>
                                            @else
                                            <i class="fa fa-check-circle text-muted"></i>
                                            Belum Terpenuhi
                                            @endif
                                        </p>
                                        <a href="{{ route('wakaf.show', $wakaf->id) }}" class="fw-bold text-secondary">Selengkapnya <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Program Wakaf Saat Ini End -->

                <div class="row g-5">
                    <h1 class="pt-1">
                        Pengajuan Cash Waqf Linked Deposit (CWLD)
                    </h1>

                    <h4 class="lh-base justify-text py-2">
                        Merupakan pemanfaatan bagi hasil deposito yang ditempatkan oleh nasabah di
                        BPRS HIK MCI sebagai dana wakaf. Deposito ditempatkan dalam jangka waktu satu
                        tahun dan bisa ditarik kembali setelah jatuh tempo. Wakif selaku pemilik dana
                        deposito dapat memilih program wakaf dan nadzir yang bekerjasama dengan
                        BPRS HIK MCI.
                    </h4>
                </div>
                <!-- Alur Proses Wakaf Start -->
                <div class="row g-3 justify-content-center text-center">
                    <h1 class="pt-1">
                        Alur Proses Wakaf BPRS HIK MCI
                    </h1>

                    <div class="col-md-2 col-6">
                        <i class="bi bi-pencil-square fs-1 icon-wakaf"></i>
                        <p>Wakif mengisi form keikutsertaan wakaf</p>
                    </div>
                    <div class="col-md-1 col-6 d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-right fs-1 icon-wakaf"></i>
                    </div>
                    <div class="col-md-2 col-6">
                        <i class="bi bi-file-earmark-text fs-1 icon-wakaf"></i>
                        <p>Memberikan kuasa blokir dan pembukaan blokir senilai komitmen wakaf</p>
                    </div>
                    <div class="col-md-1 col-6 d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-right fs-1 icon-wakaf"></i>
                    </div>
                    <div class="col-md-2 col-6">
                        <i class="bi bi-gear-wide-connected fs-1 icon-wakaf"></i>
                        <p>Memberikan Standing Instruction pembukaan deposito kepada bank</p>
                    </div>
                    <div class="col-md-1 col-6 d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-right fs-1 icon-wakaf"></i>
                    </div>
                    <div class="col-md-2 col-6">
                        <i class="bi bi-file-earmark-pdf fs-1 icon-wakaf"></i>
                        <p>Wakif menerima Akta Ikrar Wakaf</p>
                    </div>
                </div>
                <div class="row pb-4 align-items-center text-center">
                    <div class="col-md-12 ">
                        <a href="https://wa.me/yourphonenumber" class="btn btn-primary btn-lg">
                            Buka Rekening
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Wakaf End -->

@include('footer')