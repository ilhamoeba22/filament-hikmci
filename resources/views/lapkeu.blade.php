@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Laporan Keuangan</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Laporan Keuangan
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Transparansi dan akuntabilitas kinerja keuangan PT BPRS HIK MCI yang terverifikasi dan memenuhi standar tata kelola perbankan syariah.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
            <span class="subpage-section-tag">
                <i class="bi bi-file-earmark-bar-graph"></i> Portal Informasi Resmi
            </span>
            <h2 class="subpage-section-title">
                Laporan Keuangan BPRS HIK MCI
            </h2>
        </div>

        <div class="row g-4">
            <!-- Sidebar Navigation Tabs -->
            <div class="col-lg-3">
                <div class="modern-sub-card p-3 mb-4 sticky-lg-top" style="top: 100px; z-index: 10;">
                    <div class="small fw-bold text-muted text-uppercase px-2 mb-2">Kategori Laporan</div>
                    <ul class="nav flex-column nav-tabs-custom p-0 m-0 list-unstyled">
                        <li class="nav-item">
                            <a class="doc-tab-btn nav-link active" href="javascript:void(0)" onclick="openTab(event, 'AllReports')">
                                <i class="bi bi-grid-fill"></i>
                                <span>Semua Laporan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="doc-tab-btn nav-link" href="javascript:void(0)" onclick="openTab(event, 'Publikasi')">
                                <i class="bi bi-newspaper"></i>
                                <span>Laporan Publikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="doc-tab-btn nav-link" href="javascript:void(0)" onclick="openTab(event, 'TataKelola')">
                                <i class="bi bi-shield-check"></i>
                                <span>Laporan Tata Kelola</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="doc-tab-btn nav-link" href="javascript:void(0)" onclick="openTab(event, 'KeuanganBerkelanjutan')">
                                <i class="bi bi-leaf"></i>
                                <span>Laporan Keuangan Berkelanjutan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="doc-tab-btn nav-link" href="javascript:void(0)" onclick="openTab(event, 'Tahunan')">
                                <i class="bi bi-calendar3"></i>
                                <span>Laporan Tahunan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-lg-9">
                <!-- Filter Bar -->
                <div class="modern-sub-card p-3 mb-4">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-search"></i></span>
                                <input type="text" id="nameFilter" class="form-control border-start-0 ps-0" placeholder="Cari nama laporan..." onkeyup="filterReports()">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-calendar-event"></i></span>
                                <select id="yearFilter" class="form-select border-start-0" onchange="filterReports()">
                                    <option value="">Semua Tahun</option>
                                    @php
                                    $years = collect()
                                    ->merge($laporanPublikasi->pluck('tahun'))
                                    ->merge($laporanTataKelola->pluck('tahun'))
                                    ->merge($laporanKeuanganBerkelanjutan->pluck('tahun'))
                                    ->merge($laporanTahunan->pluck('tahun'))
                                    ->unique()
                                    ->sortDesc();
                                    @endphp
                                    @foreach($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Semua Laporan -->
                <div class="tabcontent" id="AllReports" style="display: block;">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="h5 fw-bold text-dark mb-0">Semua Laporan</h4>
                        <span class="badge bg-light text-muted border px-3 py-1">Arsip Dokumen</span>
                    </div>
                    <div class="pdf-container">
                        @foreach($laporanPublikasi as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-success">Publikasi</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                        @foreach($laporanTataKelola as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-warning">Tata Kelola</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                        @foreach($laporanKeuanganBerkelanjutan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-info">Keuangan Berkelanjutan</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                        @foreach($laporanTahunan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-primary">Tahunan</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Publikasi -->
                <div class="tabcontent" id="Publikasi" style="display: none;">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="h5 fw-bold text-dark mb-0">Laporan Publikasi</h4>
                        <span class="badge badge-soft-success px-3 py-1">Kategori Publikasi</span>
                    </div>
                    <div class="pdf-container">
                        @foreach($laporanPublikasi as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-success">Publikasi</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Tata Kelola -->
                <div class="tabcontent" id="TataKelola" style="display: none;">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="h5 fw-bold text-dark mb-0">Laporan Tata Kelola</h4>
                        <span class="badge badge-soft-warning px-3 py-1">Good Corporate Governance</span>
                    </div>
                    <div class="pdf-container">
                        @foreach($laporanTataKelola as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-warning">Tata Kelola</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Keuangan Berkelanjutan -->
                <div class="tabcontent" id="KeuanganBerkelanjutan" style="display: none;">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="h5 fw-bold text-dark mb-0">Laporan Keuangan Berkelanjutan</h4>
                        <span class="badge badge-soft-info px-3 py-1">Sustainability Report</span>
                    </div>
                    <div class="pdf-container">
                        @foreach($laporanKeuanganBerkelanjutan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-info">Keuangan Berkelanjutan</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Laporan Tahunan -->
                <div class="tabcontent" id="Tahunan" style="display: none;">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="h5 fw-bold text-dark mb-0">Laporan Tahunan</h4>
                        <span class="badge badge-soft-primary px-3 py-1">Annual Report</span>
                    </div>
                    <div class="pdf-container">
                        @foreach($laporanTahunan as $laporan)
                        <a href="{{ asset('storage/' . $laporan->file) }}" class="pdf-item modern-sub-card p-3 mb-3 d-flex align-items-center justify-content-between gap-3 text-decoration-none" target="_blank" data-year="{{ $laporan->tahun }}">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pdf-icon-badge" style="width: 52px; height: 52px; border-radius: 14px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.12);">
                                    <i class="fas fa-file-pdf"></i>
                                </div>
                                <div>
                                    <p class="text-dark fw-bold mb-1">{{ $laporan->judul }} ({{ $laporan->tahun }})</p>
                                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                                        <span class="badge badge-soft-primary">Tahunan</span>
                                        <span class="badge bg-light text-secondary border">Tahun {{ $laporan->tahun }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-outline-success btn-sm rounded-pill px-3 py-2 flex-shrink-0 d-none d-sm-inline-flex align-items-center gap-1">
                                <i class="bi bi-download"></i> Unduh
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Pagination Container -->
                <div id="lapkeu-pagination" class="lapkeu-pagination-container"></div>
                <div id="lapkeu-pagination-info" class="text-center text-muted small mt-2"></div>

            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

<script>
// Client-side pagination and filter controller
(function() {
    let currentLapkeuPage = 1;
    const lapkeuItemsPerPage = 6;

    function renderLapkeuPagination() {
        // Find visible tab
        const activeTab = document.querySelector('.tabcontent[style*="block"]') || document.getElementById('AllReports');
        if (!activeTab) return;

        const yearEl = document.getElementById("yearFilter");
        const year = yearEl ? yearEl.value : "";
        const nameFilter = document.getElementById("nameFilter");
        const nameQuery = nameFilter ? nameFilter.value.toLowerCase().trim() : "";

        const pdfItems = Array.from(activeTab.querySelectorAll(".pdf-item"));
        const matchingItems = [];

        pdfItems.forEach(item => {
            const itemYear = item.getAttribute("data-year") || "";
            const itemP = item.querySelector("p");
            const itemName = itemP ? itemP.innerText.toLowerCase() : "";

            const matchesYear = !year || itemYear === year;
            const matchesName = !nameQuery || itemName.includes(nameQuery);

            if (matchesYear && matchesName) {
                matchingItems.push(item);
            } else {
                item.style.setProperty('display', 'none', 'important');
            }
        });

        const totalItems = matchingItems.length;
        const totalPages = Math.ceil(totalItems / lapkeuItemsPerPage) || 1;

        if (currentLapkeuPage > totalPages) {
            currentLapkeuPage = 1;
        }

        const startIndex = (currentLapkeuPage - 1) * lapkeuItemsPerPage;
        const endIndex = startIndex + lapkeuItemsPerPage;

        matchingItems.forEach((item, index) => {
            if (index >= startIndex && index < endIndex) {
                item.style.setProperty('display', 'flex', 'important');
            } else {
                item.style.setProperty('display', 'none', 'important');
            }
        });

        const pagContainer = document.getElementById('lapkeu-pagination');
        const infoContainer = document.getElementById('lapkeu-pagination-info');

        if (!pagContainer) return;

        if (totalItems === 0) {
            pagContainer.innerHTML = '<div class="text-center py-4 text-muted"><i class="bi bi-folder-x fs-1 d-block mb-2 text-secondary"></i>Tidak ada dokumen yang sesuai dengan pencarian Anda.</div>';
            if (infoContainer) infoContainer.innerHTML = '';
            return;
        }

        if (totalPages <= 1) {
            pagContainer.innerHTML = '';
            if (infoContainer) infoContainer.innerHTML = `Menampilkan semua ${totalItems} dokumen`;
            return;
        }

        let html = '';
        // Prev button
        html += `<button type="button" class="lapkeu-page-btn ${currentLapkeuPage === 1 ? 'disabled' : ''}" onclick="window.goToLapkeuPage(${currentLapkeuPage - 1})">
            <i class="bi bi-chevron-left me-1"></i> Prev
        </button>`;

        // Page buttons
        for (let p = 1; p <= totalPages; p++) {
            if (p === 1 || p === totalPages || (p >= currentLapkeuPage - 1 && p <= currentLapkeuPage + 1)) {
                html += `<button type="button" class="lapkeu-page-btn ${p === currentLapkeuPage ? 'active' : ''}" onclick="window.goToLapkeuPage(${p})">${p}</button>`;
            } else if (p === currentLapkeuPage - 2 || p === currentLapkeuPage + 2) {
                html += `<span class="px-2 text-muted">...</span>`;
            }
        }

        // Next button
        html += `<button type="button" class="lapkeu-page-btn ${currentLapkeuPage === totalPages ? 'disabled' : ''}" onclick="window.goToLapkeuPage(${currentLapkeuPage + 1})">
            Next <i class="bi bi-chevron-right ms-1"></i>
        </button>`;

        pagContainer.innerHTML = html;

        const displayedEnd = Math.min(endIndex, totalItems);
        if (infoContainer) {
            infoContainer.innerHTML = `Menampilkan ${startIndex + 1} - ${displayedEnd} dari ${totalItems} dokumen (Halaman ${currentLapkeuPage} dari ${totalPages})`;
        }
    }

    window.goToLapkeuPage = function(page) {
        currentLapkeuPage = page;
        renderLapkeuPagination();
        const contentHeader = document.querySelector('.subpage-section-title');
        if (contentHeader) {
            contentHeader.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    window.filterReports = function() {
        currentLapkeuPage = 1;
        renderLapkeuPagination();
    };

    window.openTab = function(evt, tabName) {
        if (evt && typeof evt.preventDefault === 'function') {
            evt.preventDefault();
        }
        const tabcontent = document.getElementsByClassName("tabcontent");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        const navlinks = document.querySelectorAll(".doc-tab-btn");
        navlinks.forEach(btn => btn.classList.remove("active"));

        const targetEl = document.getElementById(tabName);
        if (targetEl) {
            targetEl.style.display = "block";
        }
        if (evt && evt.currentTarget) {
            evt.currentTarget.classList.add("active");
        }

        currentLapkeuPage = 1;
        renderLapkeuPagination();
    };

    document.addEventListener("DOMContentLoaded", () => {
        currentLapkeuPage = 1;
        renderLapkeuPagination();
    });

    // Also call immediately
    setTimeout(() => {
        renderLapkeuPagination();
    }, 100);
})();
</script>

@include('footer')
