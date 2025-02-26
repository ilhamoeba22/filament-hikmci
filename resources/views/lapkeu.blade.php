@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            Laporan Keuangan
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Laporan Keuangan</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Laporan Keuangan Start -->
<div class="container-fluid team py-3">
    <div class="container py-2">
        <div
            class="text-center mx-auto pb-3 wow fadeInUp"
            data-wow-delay="0.2s"
            style="max-width: 800px">
            <h1 class="text-capitalize text-uppercase mb-3">
                Laporan Keuangan BPRS HIK MCI
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-md-3">
                <ul class="nav flex-column nav-tabs-custom">
                    <li class="nav-item mb-2">
                        <a class="nav-link active" href="#" onclick="openTab(event, 'AllReports')">Semua Laporan</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#" onclick="openTab(event, 'Publikasi')">Laporan Publikasi</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#" onclick="openTab(event, 'TataKelola')">Laporan Tata Kelola</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#" onclick="openTab(event, 'KeuanganBerkelanjutan')">Laporan Keuangan Berkelanjutan</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-end mb-3">
                    <select id="yearFilter" class="form-select form-select-sm w-auto" onchange="filterByYear()">
                        <option value="">Semua Tahun</option>
                        @php
                        $years = collect()
                        ->merge($laporanPublikasi->pluck('tahun'))
                        ->merge($laporanTataKelola->pluck('tahun'))
                        ->merge($laporanKeuanganBerkelanjutan->pluck('tahun'))
                        ->unique()
                        ->sortDesc();
                        @endphp
                        @foreach($years as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Semua Laporan -->
                <div class="tabcontent" id="AllReports" style="display: block;">
                    <h3>Semua Laporan</h3>
                    <div class="pdf-container">
                        @foreach($laporanPublikasi as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                        @foreach($laporanTataKelola as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                        @foreach($laporanKeuanganBerkelanjutan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Publikasi -->
                <div class="tabcontent" id="Publikasi" style="display: none;">
                    <h3>Laporan Publikasi</h3>
                    <div class="pdf-container">
                        @foreach($laporanPublikasi as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Tata Kelola -->
                <div class="tabcontent" id="TataKelola" style="display: none;">
                    <h3>Laporan Tata Kelola</h3>
                    <div class="pdf-container">
                        @foreach($laporanTataKelola as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Keuangan Berkelanjutan -->
                <div class="tabcontent" id="KeuanganBerkelanjutan" style="display: none;">
                    <h3>Laporan Keuangan Berkelanjutan</h3>
                    <div class="pdf-container">
                        @foreach($laporanKeuanganBerkelanjutan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item" target="_blank" data-year="{{ $laporan->tahun }}">
                            <i class="bi bi-filetype-pdf fa-7x"></i>
                            <p class="text-dark">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Laporan Keuangan End -->

@include('footer')