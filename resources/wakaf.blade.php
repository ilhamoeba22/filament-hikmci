@include('header')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">Deposito Wakaf</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url ('/main-deposito')}}">Deposito</a></li>
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
                <div class="row g-5">
                    <p class="lh-base justify-text mb-3" style="font-size: 1.2em;">
                        Cash Waqf Linked Deposit (CWLD) adalah produk keuangan syariah yang menggabungkan wakaf uang dengan deposito syariah.
                        Melalui CWLD, dana deposito yang ditempatkan oleh nasabah akan diwakafkan secara sementara, sedangkan keuntungan atau
                        bagi hasilnya digunakan untuk program sosial dan kemaslahatan. Program ini dikelola oleh Lembaga Keuangan Syariah
                        Penerima Wakaf Uang (LKS PWU) dan bekerja sama dengan Nazhir—pihak yang bertanggung jawab menyalurkan dana wakaf kepada
                        penerima manfaat (Mauquf Alaih). Dengan skema ini, nasabah tidak hanya mendapatkan manfaat investasi syariah, tetapi
                        juga berkontribusi dalam keberlanjutan program wakaf produktif yang bermanfaat bagi masyarakat luas.
                    </p>
                </div>
                <div class="row g-5">
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <h3 class="text-capitalize text-uppercase text-left mb-1">
                            Dalil Wakaf
                        </h3>
                    </div>

                    <p class="lh-base justify-text mb-3" style="font-size: 1.2em;">
                        Dari Abu Hurairah radhiyallahu 'anhu, ia berkata bahwa Rasulullah shallallahu 'alaihi wa sallam bersabda:
                    </p>

                    <p class="text-center mb-4" style="font-size: 1.5em; font-family: 'Traditional Arabic', serif; font-weight: bold; color: #000;">
                        إِذَا مَاتَ الْإِنْسَانُ انْقَطَعَ عَمَلُهُ إِلَّا مِنْ ثَلَاثَةٍ مِنْ صَدَقَةٍ جَارِيَةٍ وَعِلْمٍ يُنْتَفَعُ بِهِ وَوَلَدٍ صَالِحٍ يَدْعُو لَهُ
                    </p>

                    <p class="lh-base justify-text mb-3" style="font-size: 1.2em;">
                        "Jika seseorang meninggal dunia, maka terputuslah amalannya kecuali tiga perkara (yaitu): sedekah jariyah, ilmu yang dimanfaatkan, atau do'a anak yang sholeh" (HR. Muslim no. 1631)
                    </p>
                </div>

                <div class="row g-5">
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <h3 class="text-capitalize text-uppercase text-left mb-1">
                            BPRS HIK MCI Sebagai LKS PWU
                        </h3>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p class="lh-base justify-text mb-3" style="font-size: 1.2em;">
                            Dapatkan informasi lebih lengkap tentang BPRS HIK MCI sebagai LKS PWU melalui dokumen berikut:
                        </p>
                        <a href="{{ asset('storage/wakaf/SK_PENUNJUKAN_MCI.pdf') }}" class="btn btn-primary" target="_blank">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>

                <!-- Tabel Perbandingan Deposito dan CWLD -->
                <div class="row g-5">
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <h3 class="text-capitalize text-uppercase text-left mb-1">
                            Perbandingan Deposito dan CWLD
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">Aspek</th>
                                        <th scope="col">Deposito Regular</th>
                                        <th scope="col">Cash Waqf Linked Deposit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pengelola Dana</td>
                                        <td>Bank Syariah</td>
                                        <td>Bank Syariah sebagai LKSPWU
                                            bekerja sama dengan Nazhir</td>
                                    </tr>
                                    <tr>
                                        <td>Skema Investasi</td>
                                        <td>Dana diinvestasikan secara
                                            tradisional oleh bank syariah.</td>
                                        <td>Dana diinvestasikan oleh bank syariah dengan
                                            tujuan untuk mencapai keuntungan
                                            finansial (menjaga harta) dan juga
                                            memberikan manfaat sosial melalui wakaf.</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan Investasi</td>
                                        <td>Mencapai keuntungan finansial untuk nasabah.</td>
                                        <td>Mencapai keuntungan finansial untuk nasabah
                                            sambil juga memberikan manfaat sosial
                                            melalui wakaf.</td>
                                    </tr>
                                    <tr>
                                        <td>Bagi Hasil</td>
                                        <td>Nasabah menerima bagian dari keuntungan
                                            investasi sesuai dengan prinsip syariah.</td>
                                        <td>Nasabah tidak menerima bagi hasil langsung,
                                            tetapi dana bagi hasil dari investasi
                                            disalurkan untuk tujuan amal.</td>
                                    </tr>
                                    <tr>
                                        <td>Manfaat Sprititual</td>
                                        <td>Berlaku sebatas berkesempatan untuk berinvestasi
                                            secara syariah, maka terbebas dari riba.</td>
                                        <td>Manfaat yang sama dengan deposito syariah
                                            biasa ditambah kontribusi pada kebaikan
                                            sosial dan pahala spiritual melalui wakaf.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-12 mb-3">
                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <h3 class="text-capitalize text-uppercase text-left mb-3">
                                BPRS HIK MCI Bekerja Sama dengan Nazir
                            </h3>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3 text-center">
                                <img src="{{asset('frontend/img/deposito/mm.png')}}" alt="Nazir 1" class="img-fluid" style="max-height: 100px;">
                            </div>
                            <div class="col-md-4 mb-3 text-center">
                                <img src="{{asset('frontend/img/deposito/bmm.png')}}" alt="Nazir 2" class="img-fluid" style="max-height: 100px;">
                            </div>
                            <div class="col-md-4 mb-3 text-center">
                                <img src="{{asset('frontend/img/deposito/lazismu.png')}}" alt="Nazir 3" class="img-fluid" style="max-height: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Program Wakaf Saat Ini Start -->
                <div class="row g-5">
                    <div class="container-fluid wakaf py-4">
                        <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                            <h3 class="text-capitalize text-uppercase text-left mb-3">
                                Program Wakaf Terkini
                            </h3>
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
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <h3 class="text-capitalize text-uppercase text-left mb-3">
                            Pengajuan Cash Waqf Linked Deposit (CWLD)
                        </h3>
                    </div>

                    <p class="lh-base justify-text mb-3" style="font-size: 1.2em;">
                        Merupakan pemanfaatan bagi hasil deposito yang ditempatkan oleh nasabah di
                        BPRS HIK MCI sebagai dana wakaf. Deposito ditempatkan dalam jangka waktu satu
                        tahun dan bisa ditarik kembali setelah jatuh tempo. Wakif selaku pemilik dana
                        deposito dapat memilih program wakaf dan nadzir yang bekerjasama dengan
                        BPRS HIK MCI.
                    </p>
                </div>
                <!-- Alur Proses Wakaf Start -->
                <div class="row g-3 justify-content-center text-center">
                    <div class="col-md-12 text-center d-flex justify-content-start align-items-start">
                        <h3 class="text-capitalize text-uppercase text-left mb-3">
                            Alur Proses Wakaf BPRS HIK MCI
                        </h3>
                    </div>
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
                        <a href="https://wa.me/+6282137908367" class="btn btn-primary btn-lg">
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