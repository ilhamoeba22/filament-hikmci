@include('header')

<!-- Modern Hero Banner Start -->
<div class="subpage-hero position-relative">
    <div class="subpage-hero-pattern"></div>
    <div class="container text-center position-relative py-4" style="z-index: 2;">
        <div class="subpage-breadcrumb">
            <a href="{{ url('/') }}"><i class="bi bi-house-door me-1"></i> Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span>Tentang Kami</span>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Profile Perusahaan</span>
        </div>
        <h1 class="subpage-title">Profile Perusahaan</h1>
        <p class="subpage-subtitle">
            Mengenal lebih dekat PT BPRS HIK MCI, bank perekonomian rakyat syariah terpercaya dengan komitmen integritas, tata kelola unggul, dan keberkahan finansial.
        </p>
    </div>
</div>
<!-- Modern Hero Banner End -->

<!-- About Content Start -->
<div class="subpage-content-wrapper">
    <div class="container py-2">
        <!-- Story Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-12">
                    <div class="feature-pill-badge mb-3">
                        <i class="bi bi-building-check"></i> Tentang Perusahaan
                    </div>
                    <h2 class="display-6 fw-bold text-dark mb-4">Kenali BPRS HIK MCI</h2>
                    <p class="lead text-secondary mb-4" style="line-height: 1.8; text-align: justify;">
                        BPRS HIK MCI, yang berpusat di Jalan Kaliurang KM 9, Ngaglik, Sleman,
                        Yogyakarta, beroperasi mulai tanggal 11 Januari 2008. Didukung penuh
                        oleh Dana Pensiun Syariah Muhammadiyah sebagai Pemegang Saham Pengendali
                        dengan kepemilikan mayoritas 53,37%, BPRS HIK MCI mampu memperluas
                        permodalan dan jangkauan layanan untuk memenuhi kebutuhan finansial
                        syariah masyarakat. Dengan dukungan jaringan yang kuat dan keahlian
                        manajemen, kami terus mempersiapkan diri menyambut era digital banking.
                    </p>
                    <p class="text-secondary mb-0" style="line-height: 1.8; text-align: justify;">
                        BPRS HIK MCI juga telah meraih berbagai penghargaan bergengsi,
                        termasuk predikat "Sangat Bagus" dari Infobank selama empat tahun
                        berturut-turut, “The Most Profitable Sharia Rural Banks” (2015-2017),
                        dan “The Best Performance Sharia Rural Bank” (2019). Kami kembali meraih
                        Infobank Award tahun 2024 dengan predikat The Best Bank Perekonomian
                        Rakyat Syariah dengan aset di atas 250 Milyar. Berlandaskan visi untuk
                        menghadirkan layanan perbankan syariah yang optimal dan amanah,
                        BPRS HIK MCI siap menjadi mitra keuangan terpercaya di Yogyakarta
                        dan sekitarnya.
                    </p>
                </div>
            </div>
        </div>

        <!-- Company Image & Spec Sheet Section -->
        <div class="row g-4 mb-5 align-items-stretch">
            <div class="col-xl-5">
                <div class="modern-sub-card p-3 h-100 d-flex flex-column overflow-hidden">
                    <div class="position-relative overflow-hidden rounded-4 mb-3 flex-grow-1" style="min-height: 380px;">
                        <img src="{{ asset('frontend/img/about/MCI_Profile.jpeg') }}" class="w-100 h-100 position-absolute top-0 start-0 rounded-4 shadow-sm" alt="Kantor BPRS HIK MCI" style="object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(2, 26, 20, 0.85) 0%, transparent 100%);">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold shadow-sm">
                                <i class="bi bi-geo-alt-fill me-1"></i> Kantor Pusat Sleman, DIY
                            </span>
                        </div>
                    </div>
                    <div class="p-2 pt-1">
                        <h5 class="fw-bold text-dark mb-1">Gedung Kantor Pusat</h5>
                        <p class="text-muted small mb-0">Pusat operasional dan layanan perbankan syariah BPRS HIK MCI di Sleman, Yogyakarta.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="modern-sub-card p-4 p-lg-5 h-100">
                    <div class="feature-pill-badge mb-3">
                        <i class="bi bi-shield-lock-fill"></i> Legalitas &amp; Identitas
                    </div>
                    <h3 class="fw-bold text-dark mb-4">Informasi Perusahaan</h3>

                    <div class="d-flex flex-column gap-3">
                        <div class="company-spec-item">
                            <div class="company-spec-icon"><i class="bi bi-building"></i></div>
                            <div class="flex-grow-1">
                                <div class="text-muted small fw-semibold">Nama Perseroan</div>
                                <div class="fw-bold text-dark">PT Bank Perekonomian Rakyat Syariah Harta Insan Karimah Mitra Cahaya Indonesia (PT BPRS HIK MCI)</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="company-spec-item h-100">
                                    <div class="company-spec-icon"><i class="bi bi-file-earmark-text"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="text-muted small fw-semibold">NPWP</div>
                                        <div class="fw-bold text-dark font-monospace">02.683.027.3-542.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="company-spec-item h-100">
                                    <div class="company-spec-icon"><i class="bi bi-shield-check"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="text-muted small fw-semibold">No Anggota LPS</div>
                                        <div class="fw-bold text-dark font-monospace">42100010</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="company-spec-item">
                            <div class="company-spec-icon"><i class="bi bi-patch-check"></i></div>
                            <div class="flex-grow-1">
                                <div class="text-muted small fw-semibold">Legalitas</div>
                                <div class="text-dark small lh-base" style="text-align: justify;">Akta Notaris Nomor 4 Tanggal 5 November 2024 Disetujui SK Menteri Hukum &amp; HAM Nomor AHU-0240358.AH.01.11 Tahun 2024 Tanggal 7 November 2024</div>
                            </div>
                        </div>

                        <div class="company-spec-item">
                            <div class="company-spec-icon"><i class="bi bi-calendar3"></i></div>
                            <div class="flex-grow-1">
                                <div class="text-muted small fw-semibold">Tanggal Pendirian</div>
                                <div class="text-dark small lh-base" style="text-align: justify;">Akta Pendirian nomor 17 tanggal 11 Januari 2008. Kemenkumham nomor AHU-0019981.AH.01.09. Tahun 2008 Tanggal 18 Maret 2008</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="company-spec-item h-100">
                                    <div class="company-spec-icon"><i class="bi bi-cash-stack"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="text-muted small fw-semibold">Modal Dasar</div>
                                        <div class="fw-bold text-success font-monospace">50.000.000.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="company-spec-item h-100">
                                    <div class="company-spec-icon"><i class="bi bi-wallet2"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="text-muted small fw-semibold">Modal Disetor</div>
                                        <div class="fw-bold text-success font-monospace">19.405.000.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="company-spec-item">
                            <div class="company-spec-icon"><i class="bi bi-geo-alt"></i></div>
                            <div class="flex-grow-1">
                                <div class="text-muted small fw-semibold">Alamat</div>
                                <div class="fw-semibold text-dark">Jl. Kaliurang KM 9 Ngaglik Sleman DIY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fact Counter: 4 Sleek Bento Cards -->
        <div class="row g-4 mb-5">
            <div class="col-sm-6 col-lg-3">
                <div class="bento-counter-card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bento-counter-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center text-dark my-1">
                        <span class="display-6 fw-bold" data-toggle="counter-up">3000</span>
                        <span class="display-6 fw-bold text-success ms-1">+</span>
                    </div>
                    <div class="fw-bold text-muted text-uppercase small" style="letter-spacing: 0.05em;">Happy Clients</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="bento-counter-card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bento-counter-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center text-dark my-1">
                        <span class="display-6 fw-bold" data-toggle="counter-up">50</span>
                        <span class="display-6 fw-bold text-success ms-1">+</span>
                    </div>
                    <div class="fw-bold text-muted text-uppercase small" style="letter-spacing: 0.05em;">Employees</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="bento-counter-card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bento-counter-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center text-dark my-1">
                        <span class="display-6 fw-bold" data-toggle="counter-up">17</span>
                        <span class="display-6 fw-bold text-success ms-1">+</span>
                    </div>
                    <div class="fw-bold text-muted text-uppercase small" style="letter-spacing: 0.05em;">Years Experience</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="bento-counter-card text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bento-counter-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center text-dark my-1">
                        <span class="display-6 fw-bold" data-toggle="counter-up">270</span>
                        <span class="display-6 fw-bold text-dark ms-1">M</span>
                        <span class="display-6 fw-bold text-success ms-1">+</span>
                    </div>
                    <div class="fw-bold text-muted text-uppercase small" style="letter-spacing: 0.05em;">Total Aset</div>
                </div>
            </div>
        </div>

        <!-- Visi Misi & Corporate Value: Modern Framed Presentation Cards -->
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="modern-sub-card p-4 p-lg-5 h-100 d-flex flex-column">
                    <div class="feature-pill-badge mb-3">
                        <i class="bi bi-compass"></i> Arah &amp; Komitmen
                    </div>
                    <h3 class="fw-bold text-dark mb-4">Visi &amp; Misi</h3>
                    <div class="mt-auto bg-light p-3 rounded-4 border text-center">
                        <img src="{{ asset('frontend/img/about/PROFILE_MCI_VISI_MISI.png') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Visi Misi BPRS HIK MCI" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="modern-sub-card p-4 p-lg-5 h-100 d-flex flex-column">
                    <div class="feature-pill-badge mb-3">
                        <i class="bi bi-stars"></i> Nilai-Nilai Utama
                    </div>
                    <h3 class="fw-bold text-dark mb-4">Corporate Value</h3>
                    <div class="mt-auto bg-light p-3 rounded-4 border text-center">
                        <img src="{{ asset('frontend/img/about/PROFILE_MCI_CORVA.png') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Corporate Value BPRS HIK MCI" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Content End -->

@include('footer')
