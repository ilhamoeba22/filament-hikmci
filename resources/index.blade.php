@include('header')

<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <ol class="carousel-indicators">
            @foreach($carousels as $index => $carousel)
            <li data-bs-target="#carouselId" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($carousels as $index => $carousel)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ Storage::url($carousel->image) }}" class="img-fluid w-100" alt="Image" />
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Products Start -->
<div class="container-fluid background-index py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h3 class="text-uppercase text-primary">Produk Kami</h3>
            <h1 class="display-5 text-capitalize mb-1">
                Wujudkan Keuangan Syariah yang Berkah dan Terpercaya
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="{{ asset('frontend/img/home/MCI_Home_Depo.png') }}" class="img-fluid w-100 rounded-top" alt="Image" />
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="#" class="nunito d-inline-block mb-3">Deposito</a>
                        <br />
                        <a href="{{url('deposito')}}" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="{{ asset('frontend/img/home/MCI_Home_Tabungan.png') }}" class="img-fluid w-100 rounded-top" alt="Image" />
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="#" class="nunito d-inline-block mb-3">Tabungan</a>
                        <br />
                        <a href="{{url('tabungan')}}" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="{{ asset('frontend/img/home/MCI_Home_Pembiayaan.png') }}" class="img-fluid w-100 rounded-top" alt="Image" />
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="#" class="nunito d-inline-block mb-3">Pembiayaan</a>
                        <br />
                        <a href="{{url('pembiayaan')}}" class="btn btn-secondary rounded-pill py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

<!-- Simulasi Perhitungan Start-->
<div class="container-fluid simulasi py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h3 class="text-uppercase text-primary">Simulasi Pembiayaan</h3>
            <h3 class="display-5 text-capitalize mb-3">
                Berapapun Anda Simulasikan, HIK MCI Siap Membantu.
            </h3>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-4 col-md-6 text-center mb-4 mb-lg-0">
                <img src="{{ asset('frontend/img/home/kalkulator.png') }}" class="img-fluid rounded" alt="Kalkulator">
            </div>
            <div class="col-lg-8 col-md-6">
                <form class="row g-3" id="pembiayaanForm">
                    <div class="col-md-4 text-center">
                        <label for="jumlahPembiayaan" class="form-label">Jumlah Pembiayaan</label><br />
                        <input type="text" class="form-control form-control-lg rounded-pill" id="jumlahPembiayaan" placeholder="Jumlah Pembiayaan" />
                    </div>
                    <div class="col-md-4 text-center">
                        <label for="produkPembiayaan" class="form-label">Produk</label><br />
                        <select class="form-select form-select-lg rounded-pill" id="produkPembiayaan">
                            <option value="" disabled selected>Pilih Produk</option>
                            <option value="Micro UMKM">Micro UMKM</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Property">Property</option>
                            <option value="CF Pekerja Migran">CF Pekerja Migran</option>
                            <option value="CF Sertifikasi Pendidik">CF Sertifikasi Pendidik</option>
                            <option value="CF Kolektif Karyawan">CF Kolektif Karyawan</option>
                            <option value="CF Umroh">CF Umroh</option>
                        </select>
                    </div>
                    <div class="col-md-4 text-center">
                        <label for="jangkaWaktuPembiayaan" class="form-label">Jangka Waktu</label><br />
                        <select class="form-select form-select-lg rounded-pill" id="jangkaWaktuPembiayaan">
                            <option value="" disabled selected>Pilih Jangka Waktu</option>
                            <option value="3">3 bulan</option>
                            <option value="6">6 bulan</option>
                            <option value="9">9 bulan</option>
                            <option value="12">12 bulan</option>
                        </select>
                    </div>
                </form>
                <div class="col-12 text-center mt-4">
                    <button type="button" class="btn btn-primary btn-lg rounded-pill" onclick="calculatePembiayaan()">Hitung</button>
                </div>
                <div id="pembiayaanResult" class="result-box text-center mt-4" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Simulasi Perhitungan End -->

<!-- Equivalent Rate Deposito Start -->
<div class="container-fluid simulasi background-index py-5">
    <div class="container py-2">
        <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h3 class="text-uppercase text-primary">Equivalent Rate Deposito</h3>
            <h3 class="text-capitalize">
                Bulan {{ $rateDeposito->first()->bulan ?? 'N/A' }} Tahun {{ $rateDeposito->first()->created_at->format('Y') ?? 'N/A' }}
            </h3>
        </div>
        <div class="row g-5 align-items-center">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="myTable">
                    <thead class="text-dark">
                        <th rowspan="2" class="text-center align-middle">Nominal</th>
                        <th colspan="4" class="text-center">Jangka Waktu</th>
                        <tr class="text-center">
                            <th>1 Bulan </br> (Setara ER {{ $rateDeposito->first()->rate_1_bulan ?? 'N/A' }}%)</th>
                            <th>3 Bulan </br> (Setara ER {{ $rateDeposito->first()->rate_3_bulan ?? 'N/A' }}%)</th>
                            <th>6 Bulan </br> (Setara ER {{ $rateDeposito->first()->rate_6_bulan ?? 'N/A' }}%)</th>
                            <th>12 Bulan </br> (Setara ER {{ $rateDeposito->first()->rate_12_bulan ?? 'N/A' }}%)</th>
                        </tr>
                    </thead>
                    <tbody id="nominals-data" class="text-secondary" style="height: 400px; overflow-y: scroll;">
                        @foreach ($nominals as $nominal)
                        <tr>
                            <td data-label="Nominal">Rp. {{ number_format($nominal->nominal, 2, ',', '.') }}</td>
                            <td data-label="1 Bulan">
                                @if ($rateDeposito->first()->rate_1_bulan)
                                Rp. {{ number_format(($nominal->nominal * $rateDeposito->first()->rate_1_bulan / 100) / 12, 2, ',', '.') }}
                                @else
                                N/A
                                @endif
                            </td>
                            <td data-label="3 Bulan">
                                @if ($rateDeposito->first()->rate_3_bulan)
                                Rp. {{ number_format(($nominal->nominal * $rateDeposito->first()->rate_3_bulan / 100) / 12, 2, ',', '.') }}
                                @else
                                N/A
                                @endif
                            </td>
                            <td data-label="6 Bulan">
                                @if ($rateDeposito->first()->rate_6_bulan)
                                Rp. {{ number_format(($nominal->nominal * $rateDeposito->first()->rate_6_bulan / 100) / 12, 2, ',', '.') }}
                                @else
                                N/A
                                @endif
                            </td>
                            <td data-label="12 Bulan">
                                @if ($rateDeposito->first()->rate_12_bulan)
                                Rp. {{ number_format(($nominal->nominal * $rateDeposito->first()->rate_12_bulan / 100) / 12, 2, ',', '.') }}
                                @else
                                N/A
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Equivalent Rate Deposito End -->

<!-- Berita Terkini Start -->
<div class="container-fluid blog py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
            <h3 class="text-uppercase text-primary">Berita</h3>
            <h1 class="display-5 text-capitalize mb-3">Berita Terkini</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($beritaTerakhir as $berita)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" class="img-fluid rounded-top w-100" alt="{{ $berita->judul }}" />
                        <div class="blog-date px-4 py-2">
                            <i class="fa fa-calendar-alt me-1"></i> {{ $berita->created_at->format('d M Y') }}
                        </div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="{{ route('berita.show', $berita->id) }}" class="nunito d-inline-block mb-3">{{ $berita->judul }}</a>
                        <p>
                            {{ Str::limit($berita->isi, 100) }}
                        </p>
                        <a href="{{ route('berita.show', $berita->id) }}" class="fw-bold text-secondary">Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Berita Terkini End -->

@include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>