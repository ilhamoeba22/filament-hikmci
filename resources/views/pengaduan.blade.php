@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Layanan Pengaduan</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            Layanan Pengaduan
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Mekanisme resmi penyampaian dan penanganan pengaduan nasabah PT BPRS HIK MCI yang transparan, adil, dan responsif.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">

        <!-- Penjelasan & Regulasi Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <span class="feature-pill-badge">
                    <i class="bi bi-shield-check"></i> Regulasi POJK No. 22/2023
                </span>
                <span class="text-muted small d-inline-flex align-items-center gap-1">
                    <i class="bi bi-patch-check-fill text-success"></i> Perlindungan Konsumen Terverifikasi
                </span>
            </div>

            <h2 class="subpage-section-title mb-3">
                Mekanisme Pengaduan Nasabah
            </h2>

            <div class="text-secondary lh-lg mb-4" style="font-size: 1.025rem;">
                <p class="mb-3 justify-text">
                    Berdasarkan POJK nomor 22 tahun 2023 tentang Perlindungan Konsumen dan Masyarakat di Sektor Jasa Keuangan dimana didalamnya mengatur terkait pengaduan nasabah serta komitmen BPRS HIK MCI dalam memberikan kenyamanan dan rasa aman dalam setiap transaksi yang dilakukan oleh nasabah, maka BPRS HIK MCI menyediakan Mekanisme Pengaduan Nasabah untuk menyalurkan pengaduan terkait masalah saat bertransaksi.
                </p>
                <p class="mb-3 justify-text">
                    Pengaduan nasabah dapat disampaikan ke BPRS HIK MCI secara tertulis melalui surat, fax, email, maupun website resmi BPRS HIK MCI serta secara lisan melalui line telepon ataupun datang langsung ke kantor BPRS HIK MCI terdekat beserta dengan persyaratan pengaduan yang diperlukan.
                </p>
                <p class="mb-0 justify-text">
                    Adapun persyaratan pengaduan yang diperlukan antara lain yang tertera dibawah ini:
                </p>
            </div>
        </div>

        <!-- Tabel Persyaratan Pengaduan Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="bento-icon-box">
                    <i class="bi bi-card-checklist"></i>
                </div>
                <div>
                    <h3 class="h4 fw-bold mb-1 text-dark">Tabel Persyaratan Pengaduan</h3>
                    <p class="text-muted small mb-0">Persyaratan lengkap pengaduan tertulis dan lisan</p>
                </div>
            </div>

            <div class="table-responsive rounded-4 border">
                <table class="table modern-fintech-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2" class="align-middle text-dark fw-bold" style="width: 22%;">Pemohon</th>
                            <th scope="col" class="text-center text-dark fw-bold bg-light" style="width: 39%;">Persyaratan Pengaduan Tertulis</th>
                            <th scope="col" colspan="2" class="text-center text-dark fw-bold bg-light" style="width: 39%;">Persyaratan Pengaduan Lisan</th>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center small text-muted bg-light border-top-0">Format Surat / Dokumen Fisik</th>
                            <th scope="col" class="text-center small text-muted bg-light border-top-0" style="width: 19.5%;">Tanpa Tatap Muka</th>
                            <th scope="col" class="text-center small text-muted bg-light border-top-0" style="width: 19.5%;">Dengan Tatap Muka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" rowspan="2" class="bg-light fw-bold text-dark align-middle">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-person-fill text-success fs-5"></i>
                                    <span>Nasabah</span>
                                </div>
                            </th>
                            <td class="align-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Dokumen Pendukung Pengaduan</span>
                                    </li>
                                </ul>
                            </td>
                            <td rowspan="2" class="align-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Wajib diajukan oleh nasabah yang bersangkutan</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Nasabah harus menjawab pertanyaan verifikasi data diri dan rekening yang diajukan oleh pihak bank</span>
                                    </li>
                                </ul>
                            </td>
                            <td rowspan="2" class="align-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Dokumen Pendukung Pengaduan</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <th scope="row" rowspan="2" class="bg-light fw-bold text-dark align-middle">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-people-fill text-primary fs-5"></i>
                                    <span>Perwakilan Nasabah</span>
                                </div>
                            </th>
                            <td class="align-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas perwakilan nasabah (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Surat Kuasa dari nasabah kepada perwakilan yang menyatakan bahwa nasabah memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang bertindak mewakili nasabah</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Dokumen Pendukung Pengaduan</span>
                                    </li>
                                </ul>
                            </td>
                            <td rowspan="2" class="align-middle text-center bg-light">
                                <span class="badge badge-soft-danger px-3 py-2 rounded-pill fw-semibold">
                                    <i class="bi bi-x-circle me-1"></i> Tidak Diperkenankan
                                </span>
                            </td>
                            <td rowspan="2" class="align-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas perwakilan nasabah (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Surat Kuasa dari nasabah kepada perwakilan yang menyatakan bahwa nasabah memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang bertindak mewakili nasabah</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success mt-1 small"></i>
                                        <span>Dokumen Pendukung Pengaduan</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Section: Alur Pengaduan -->
        <div class="mb-5">
            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <span class="subpage-section-tag">
                    <i class="bi bi-diagram-3"></i> Prosedur & Tata Kelola
                </span>
                <h2 class="subpage-section-title">
                    Alur Lengkap Mekanisme Pengaduan
                </h2>
                <p class="text-muted small">Tahapan dan panduan terperinci penyelesaian pengaduan di BPRS HIK MCI</p>
            </div>

            <!-- ALUR 1: Lisan Tatap Muka -->
            <div class="modern-sub-card p-4 p-lg-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bento-icon-box">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-1 small fw-semibold">Alur 1</span>
                        <h3 class="h5 fw-bold mb-0 text-dark">
                            Alur Pengaduan Nasabah secara Lisan dengan Tatap Muka di Kantor BPRS HIK MCI
                        </h3>
                    </div>
                </div>

                <!-- Visual Step Track -->
                <div class="bg-light rounded-4 p-3 p-md-4 mb-4 border">
                    <div class="flow-step-grid">
                        <div class="flow-step-card">
                            <span class="flow-step-num">1</span>
                            <p>Nasabah<br>mendatangi Bank<br>dan menyampaikan<br>pengaduan</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">2</span>
                            <p>Verifikasi data<br>nasabah &amp;<br>pemberitahuan<br>waktu penyelesaian</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">3</span>
                            <p>Register<br>pengaduan &amp;<br>konfirmasi<br>penerimaan</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">4</span>
                            <p>Tanggapan<br>BPRS</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card badge-soft-success" style="border: 1.5px solid #0d6824 !important;">
                            <span class="flow-step-num" style="background: #0d6824 !important; color: #ffffff !important;">5</span>
                            <p class="fw-bold" style="color: #065f46 !important;">Penyelesaian<br>Pengaduan<br>Nasabah</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 p-md-4 rounded-4 border">
                    <h5 class="fw-bold text-dark mb-3 small text-uppercase letter-spacing-1">
                        <i class="bi bi-card-text text-success me-1"></i> Rincian Prosedur:
                    </h5>
                    <ol class="mb-0 lh-lg text-secondary ps-3 justify-text">
                        <li class="mb-2">Nasabah mendatangi Bank dan menyampaikan pengaduan.</li>
                        <li class="mb-2">Data Nasabah akan diverifikasi oleh Customer Service (CS) dan CS memberitahukan kepada Nasabah waktu penyelesaian pengaduan maksimal 5 (lima) hari kerja sejak tanggal pengaduan diterima.</li>
                        <li class="mb-2">CS meneruskan pengaduan tersebut kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                        <li class="mb-2">UKPPK mencatat dan memberikan konfirmasi penerimaan Pengaduan dengan memberikan nomor registrasi pengaduan dan tanggal penerimaan pengaduan.</li>
                        <li class="mb-2">UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan Nasabah tersebut.</li>
                        <li class="mb-2">UKPPK menyampaikan Tanggapan secara lisan dan/atau tertulis kepada Nasabah terkait dengan solusi yang diberikan.</li>
                        <li class="mb-2">Apabila Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dinyatakan selesai.</li>
                        <li class="mb-2">Apabila Nasabah menolak solusi yang diberikan oleh Bank, maka diarahkan untuk mengajukan pengaduan secara tertulis kepada Bank.</li>
                        <li class="mb-0">Dalam hal Bank membutuhkan dokumen pendukung dan jangka waktu penyelesaian tidak dapat dipenuhi, Bank meminta kepada Nasabah untuk menyampaikan pengaduan secara tertulis.</li>
                    </ol>
                </div>
            </div>

            <!-- ALUR 2: Lisan Tanpa Tatap Muka -->
            <div class="modern-sub-card p-4 p-lg-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bento-icon-box">
                        <i class="bi bi-telephone-inbound"></i>
                    </div>
                    <div>
                        <span class="badge badge-soft-primary rounded-pill px-3 py-1 mb-1 small fw-semibold">Alur 2</span>
                        <h3 class="h5 fw-bold mb-0 text-dark">
                            Alur Pengaduan Nasabah secara Lisan Tanpa Tatap Muka di Kantor BPRS HIK MCI
                        </h3>
                    </div>
                </div>

                <!-- Visual Step Track -->
                <div class="bg-light rounded-4 p-3 p-md-4 mb-4 border">
                    <div class="flow-step-grid">
                        <div class="flow-step-card">
                            <span class="flow-step-num">1</span>
                            <p>Nasabah<br>menghubungi<br>Nomor Telepon<br>Bank</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">2</span>
                            <p>Verifikasi data<br>nasabah &amp;<br>pemberitahuan<br>waktu penyelesaian</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">3</span>
                            <p>Register<br>pengaduan &amp;<br>konfirmasi<br>penerimaan</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">4</span>
                            <p>Tanggapan<br>BPRS</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card badge-soft-success" style="border: 1.5px solid #0d6824 !important;">
                            <span class="flow-step-num" style="background: #0d6824 !important; color: #ffffff !important;">5</span>
                            <p class="fw-bold" style="color: #065f46 !important;">Penyelesaian<br>Pengaduan<br>Nasabah</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 p-md-4 rounded-4 border">
                    <h5 class="fw-bold text-dark mb-3 small text-uppercase letter-spacing-1">
                        <i class="bi bi-card-text text-primary me-1"></i> Rincian Prosedur:
                    </h5>
                    <ol class="mb-0 lh-lg text-secondary ps-3 justify-text">
                        <li class="mb-2">Nasabah menghubungi Nomor Telepon Bank dan menyampaikan Pengaduannya.</li>
                        <li class="mb-2">Data Nasabah akan diverifikasi oleh Customer Service (CS) dan CS memberitahukan kepada Nasabah waktu penyelesaian pengaduan maksimal 5 (lima) hari kerja sejak tanggal pengaduan diterima.</li>
                        <li class="mb-2">CS meneruskan pengaduan Nasabah tersebut kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                        <li class="mb-2">UKPPK mencatat dan memberikan konfirmasi penerimaan Pengaduan dengan memberikan nomor registrasi pengaduan dan tanggal penerimaan pengaduan.</li>
                        <li class="mb-2">UKPPK menghubungi Nasabah kembali melalui pesan singkat atau aplikasi chat kepada Nasabah untuk memastikan pengaduan tersebut.</li>
                        <li class="mb-2">UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan Nasabah tersebut.</li>
                        <li class="mb-2">UKPPK menyampaikan Tanggapan secara lisan dan/atau tertulis kepada Nasabah terkait solusi yang diberikan.</li>
                        <li class="mb-2">Apabila Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dinyatakan selesai.</li>
                        <li class="mb-2">Apabila Nasabah menolak solusi yang diberikan oleh Bank, maka diarahkan untuk mengajukan pengaduan secara tertulis kepada Bank.</li>
                        <li class="mb-0">Dalam hal Bank membutuhkan dokumen pendukung dan jangka waktu penyelesaian tidak dapat dipenuhi, Bank meminta kepada Nasabah untuk menyampaikan secara tertulis.</li>
                    </ol>
                </div>
            </div>

            <!-- ALUR 3: Tertulis Tatap Muka -->
            <div class="modern-sub-card p-4 p-lg-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bento-icon-box">
                        <i class="bi bi-file-earmark-person"></i>
                    </div>
                    <div>
                        <span class="badge badge-soft-warning rounded-pill px-3 py-1 mb-1 small fw-semibold">Alur 3</span>
                        <h3 class="h5 fw-bold mb-0 text-dark">
                            Alur Pengaduan Nasabah secara Tertulis dengan Tatap Muka di Kantor BPRS HIK MCI
                        </h3>
                    </div>
                </div>

                <!-- Visual Step Track -->
                <div class="bg-light rounded-4 p-3 p-md-4 mb-4 border">
                    <div class="flow-step-grid">
                        <div class="flow-step-card">
                            <span class="flow-step-num">1</span>
                            <p>Nasabah<br>menyampaikan<br>Pengaduan Tertulis<br>ke kantor</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">2</span>
                            <p>Verifikasi &amp;<br>pengisian formulir<br>pengaduan</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">3</span>
                            <p>Pengumpulan<br>bukti /<br>dokumen</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">4</span>
                            <p>Tanggapan<br>BPRS</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card badge-soft-success" style="border: 1.5px solid #0d6824 !important;">
                            <span class="flow-step-num" style="background: #0d6824 !important; color: #ffffff !important;">5</span>
                            <p class="fw-bold" style="color: #065f46 !important;">Penyelesaian<br>Pengaduan<br>Nasabah</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 p-md-4 rounded-4 border">
                    <h5 class="fw-bold text-dark mb-3 small text-uppercase letter-spacing-1">
                        <i class="bi bi-card-text text-warning me-1"></i> Rincian Prosedur:
                    </h5>
                    <ol class="mb-0 lh-lg text-secondary ps-3 justify-text">
                        <li class="mb-2">Nasabah dan/atau perwakilan Nasabah menyampaikan pengaduan tertulis datang langsung ke kantor dengan membawa identitas dan dokumen pendukung yang diperlukan.</li>
                        <li class="mb-2">Customer Service (CS) menanyakan keperluan Nasabah dan/atau perwakilan Nasabah dan meneruskan pengaduan kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                        <li class="mb-2">UKPPK memberitahukan kepada Nasabah dan/atau perwakilan Nasabah waktu penyelesaian pengaduan maksimal 10 (sepuluh) hari kerja sejak tanggal pengaduan diterima.</li>
                        <li class="mb-2">UKPPK menerima informasi pengaduan dan meminta Nasabah dan/atau perwakilan Nasabah mengisi formulir informasi keluhan pada lembar pengaduan Nasabah.</li>
                        <li class="mb-2">UKPPK melakukan verifikasi dan identifikasi terhadap bukti identitas dan kelengkapan dokumen pendukung yang dibutuhkan.</li>
                        <li class="mb-2">Dalam hal Nasabah dan/atau perwakilan Nasabah belum memenuhi dokumen, Bank mengkonfirmasi dan meminta kekurangan dokumen dimaksud dalam jangka waktu 10 (sepuluh) hari kerja. Dalam hal kondisi tertentu, Bank dapat memperpanjang jangka waktu dalam 10 (sepuluh) hari kerja.</li>
                        <li class="mb-2">UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan tersebut.</li>
                        <li class="mb-2">UKPPK menyampaikan tanggapan Pengaduan secara tertulis kepada Nasabah dan/atau perwakilan Nasabah dengan solusi yang diberikan.</li>
                        <li class="mb-2">Apabila Nasabah dan/atau perwakilan Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dan/atau perwakilan Nasabah dinyatakan selesai.</li>
                        <li class="mb-0">Dalam hal tidak terdapat kesepakatan terhadap hasil penanganan Pengaduan, maka Nasabah dan/atau perwakilan Nasabah dapat menyampaikan pengaduan kepada OJK, pengadilan atau di luar Pengadilan.</li>
                    </ol>
                </div>
            </div>

            <!-- ALUR 4: Tertulis via Email/Surat -->
            <div class="modern-sub-card p-4 p-lg-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bento-icon-box">
                        <i class="bi bi-envelope-paper"></i>
                    </div>
                    <div>
                        <span class="badge badge-soft-info rounded-pill px-3 py-1 mb-1 small fw-semibold">Alur 4</span>
                        <h3 class="h5 fw-bold mb-0 text-dark">
                            Alur Pengaduan Nasabah secara Tertulis Melalui Email atau Surat
                        </h3>
                    </div>
                </div>

                <!-- Visual Step Track -->
                <div class="bg-light rounded-4 p-3 p-md-4 mb-4 border">
                    <div class="flow-step-grid">
                        <div class="flow-step-card">
                            <span class="flow-step-num">1</span>
                            <p>Nasabah<br>mengirimkan<br>Pengaduan Tertulis<br>via Email / Surat</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">2</span>
                            <p>Verifikasi &amp;<br>pencatatan<br>pengaduan</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">3</span>
                            <p>Pengumpulan<br>bukti /<br>dokumen</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card">
                            <span class="flow-step-num">4</span>
                            <p>Tanggapan<br>BPRS</p>
                        </div>
                        <div class="flow-step-arrow"><i class="bi bi-arrow-right"></i></div>
                        <div class="flow-step-card badge-soft-success" style="border: 1.5px solid #0d6824 !important;">
                            <span class="flow-step-num" style="background: #0d6824 !important; color: #ffffff !important;">5</span>
                            <p class="fw-bold" style="color: #065f46 !important;">Penyelesaian<br>Pengaduan<br>Nasabah</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 p-md-4 rounded-4 border">
                    <h5 class="fw-bold text-dark mb-3 small text-uppercase letter-spacing-1">
                        <i class="bi bi-card-text text-info me-1"></i> Rincian Prosedur:
                    </h5>
                    <ol class="mb-0 lh-lg text-secondary ps-3 justify-text">
                        <li class="mb-2">Nasabah dan/atau perwakilan Nasabah mengirimkan pengaduan tertulis melalui Email atau Surat dengan melengkapi identitas dan dokumen pendukung yang diperlukan.</li>
                        <li class="mb-2">Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK) menerima, memeriksa, dan mencatat pengaduan serta dokumen pendukung yang diperlukan maksimal 10 (sepuluh) hari kerja sejak tanggal pengaduan diterima.</li>
                        <li class="mb-2">UKPPK melakukan verifikasi dan identifikasi terhadap bukti identitas dan kelengkapan dokumen pendukung yang dibutuhkan.</li>
                        <li class="mb-2">Dalam hal Nasabah dan/atau perwakilan Nasabah belum memenuhi dokumen, Bank mengkonfirmasi dan meminta kekurangan dokumen dimaksud dalam jangka waktu 10 (sepuluh) hari kerja. Dalam hal kondisi tertentu, Bank dapat memperpanjang jangka waktu dalam 10 (sepuluh) hari kerja.</li>
                        <li class="mb-2">UKPPK berkoordinasi dengan UKL untuk mencari solusi terkait dengan pengaduan tersebut.</li>
                        <li class="mb-2">UKPPK mengirimkan kembali tanggapan Pengaduan secara tertulis kepada Nasabah dan/atau perwakilan Nasabah terkait dengan solusi yang diberikan.</li>
                        <li class="mb-2">Apabila Nasabah dan/atau perwakilan Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dan/atau perwakilan Nasabah dinyatakan selesai.</li>
                        <li class="mb-0">Dalam hal tidak terdapat kesepakatan terhadap hasil penanganan Pengaduan, maka Nasabah dan/atau perwakilan Nasabah dapat menyampaikan pengaduan kepada OJK, pengadilan atau di luar Pengadilan.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Section: Jangka Waktu & Media Layanan Pengaduan (Side-by-side Bento Grid) -->
        <div class="row g-4 mb-5">
            <!-- Jangka Waktu Penanganan Pengaduan -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="modern-sub-card p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bento-icon-box">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div>
                            <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-1 small fw-semibold">SLA Pelayanan</span>
                            <h3 class="h5 fw-bold mb-0 text-dark">
                                Jangka Waktu Penanganan Pengaduan
                            </h3>
                        </div>
                    </div>

                    <div class="table-responsive rounded-4 border">
                        <table class="table modern-fintech-table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="bg-light text-dark fw-bold" style="width: 35%;">Jenis Pengaduan</th>
                                    <th scope="col" class="bg-light text-dark fw-bold">Jangka Waktu Penanganan Pengaduan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-semibold text-dark">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge badge-soft-primary rounded-pill px-2 py-1 small">Lisan</span>
                                        </div>
                                    </td>
                                    <td>
                                        Maks 5 (lima) hari kerja terhitung sejak pengaduan diterima secara lengkap oleh petugas penerima pengaduan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-dark">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge badge-soft-success rounded-pill px-2 py-1 small">Tertulis</span>
                                        </div>
                                    </td>
                                    <td>
                                        Maks 10 (sepuluh) hari kerja terhitung sejak dokumen terkait pengaduan diterima secara lengkap oleh petugas penerima pengaduan
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Media Layanan Pengaduan -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="modern-sub-card p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bento-icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <span class="badge badge-soft-primary rounded-pill px-3 py-1 mb-1 small fw-semibold">Kanal Resmi</span>
                            <h3 class="h5 fw-bold mb-0 text-dark">
                                Media Layanan Pengaduan
                            </h3>
                        </div>
                    </div>

                    <div class="table-responsive rounded-4 border">
                        <table class="table modern-fintech-table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center bg-light text-dark fw-bold" style="width: 15%;">No.</th>
                                    <th scope="col" class="bg-light text-dark fw-bold">Media</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center fw-bold text-success">1</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-building text-success"></i>
                                            <span class="fw-medium text-dark">Kantor Bank</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold text-success">2</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-telephone text-primary"></i>
                                            <span class="fw-medium text-dark">Telepon Bank (0274) 881159</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold text-success">3</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-envelope text-warning"></i>
                                            <span class="fw-medium text-dark">Email resmi Bank (corsec@bprshikmci.co.id)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold text-success">4</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-shield-check text-info"></i>
                                            <span class="fw-medium text-dark">Aplikasi Portal Pelindungan Konsumen (APPK)</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Main Content Wrapper End -->

@include('footer')
