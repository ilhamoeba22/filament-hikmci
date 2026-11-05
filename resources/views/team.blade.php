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
            <span class="active">Profile Pengurus</span>
        </div>
        <h1 class="subpage-title">Profile Pengurus</h1>
        <p class="subpage-subtitle">
            Jajaran Dewan Komisaris, Dewan Pengawas Syariah, dan Direksi PT BPRS HIK MCI yang amanah, profesional, dan berintegritas tinggi.
        </p>
    </div>
</div>
<!-- Modern Hero Banner End -->

<!-- Team Section Start -->
<div class="subpage-content-wrapper">
    <div class="container py-2">
        <div class="text-center mx-auto pb-4" style="max-width: 800px">
            <div class="feature-pill-badge mb-2">
                <i class="bi bi-people-fill"></i> Kepemimpinan &amp; Pengawasan
            </div>
            <h2 class="display-6 fw-bold text-dark mb-3">
                Jajaran Pengurus BPRS HIK MCI
            </h2>
            <p class="text-muted mb-0">
                Komitmen kepemimpinan perbankan syariah yang berlandaskan prinsip amanah, profesionalisme, transparansi, dan kepatuhan regulasi.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <!-- 1. Dede Haris Sumarno, SE, MM -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_DEDE.webp') }}" alt="Dede Haris Sumarno, SE, MM">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-shield-check"></i> Komisaris Utama
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Dede Haris Sumarno, SE, MM</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    AKTA RUPS LB No 5 tanggal 6 Februari 2023 di hadapan Notaris Muhammad Hariyanto,
                                    SH Surat Keputusan OJK nomor S-74/KO.031/2023 tanggal 10 Januari 2023
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Prof. Dr. Edy Suandi Hamid, M. Ec. -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_EDI.webp') }}" alt="Prof. Dr. Edy Suandi Hamid, M. Ec.">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-shield-check"></i> Komisaris
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Prof. Dr. Edy Suandi Hamid, M. Ec.</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    Akta No 80 Tanggal 22 September 2016 dihadapan Notaris Moh Djaelani.
                                    Akta No 28 Tanggal 3 September 2021 dihadapan Notaris Moh Djaelani OJK No. S-891/KO.031/2021 tanggal 9 November 2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Dr. Ahim Abdurahim, SE., M.Si.Ak., SAS., CA., ACPA -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_AHIM.webp') }}" alt="Dr. Ahim Abdurahim, SE., M.Si.Ak., SAS., CA., ACPA">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-patch-check"></i> Ketua Dewan Pengawas Syariah
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Dr. Ahim Abdurahim, SE., M.Si.Ak., SAS., CA., ACPA</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    Akta No 28 Tanggal 3 September 2021 OJK No. S891/KO.031/2021 tanggal 9 November 2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Toto Suparwoto, S.Pd. -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_TOTO.webp') }}" alt="Toto Suparwoto, S.Pd.">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-patch-check"></i> Dewan Pengawas Syariah
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Toto Suparwoto, S.Pd.</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    Akta No 7 Tanggal 17 Oktober 2023 OJK No. S864/KO.031/2023 tanggal 6 September 2023
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Kholid S.Pd., M.M -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_KHOLID.webp') }}" alt="Kholid S.Pd., M.M">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-person-badge"></i> Direktur Utama
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Kholid S.Pd., M.M</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    Akta No 28 Tanggal 3 September 2021 OJK No. S-891/KO.031/2021 tanggal 9 November 2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Mushoniful Agustian -->
            <div class="col-lg-6">
                <div class="executive-card p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                        <div class="executive-avatar-frame text-center">
                            <img class="executive-avatar" src="{{ asset('frontend/img/team/MCI_MUSHONIFUL.webp') }}" alt="Mushoniful Agustian">
                        </div>
                        <div class="flex-grow-1 text-center text-sm-start w-100">
                            <span class="executive-role-pill mb-2">
                                <i class="bi bi-person-badge"></i> Direktur Operasional dan Kepatuhan
                            </span>
                            <h4 class="fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Mushoniful Agustian</h4>
                            <div class="legal-decree-box text-start">
                                <div class="d-flex align-items-center gap-1 text-muted small fw-bold mb-1">
                                    <i class="bi bi-file-earmark-text text-success"></i> Dasar Hukum Pengangkatan:
                                </div>
                                <p class="mb-0 text-secondary" style="font-size: 0.825rem; line-height: 1.55;">
                                    Akta No 7 Tanggal 17 Oktober 2023 OJK No. S-864/KO.031/2023 tanggal 6 September 2023
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->

@include('footer')
