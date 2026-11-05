@include('header')

<!-- Subpage Hero Start -->
<section class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <a href="{{ url('/main-deposito') }}">Deposito</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span class="active">Wakaf</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">Deposito Wakaf</h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">Cash Waqf Linked Deposit (CWLD) - Paduan investasi syariah dan sedekah jariyah abadi untuk kemaslahatan umat</p>
    </div>
</section>
<!-- Subpage Hero End -->

<!-- Wakaf Content Start -->
<div class="subpage-content-wrapper">
    <div class="container">
        <!-- Product Showcase Top Banner (Full Width) -->
        <div class="product-top-banner wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('frontend/img/wakaf/MCI_Produk_Wakaf.png') }}" class="product-top-banner-img" alt="Deposito Wakaf CWLD">
        </div>

        <!-- Overview Hero Showcase Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <span class="feature-pill-badge mb-3">
                <i class="fas fa-hand-holding-heart text-success"></i> Cash Waqf Linked Deposit (CWLD)
            </span>
            <h2 class="subpage-title text-dark mb-3" style="font-size: clamp(1.5rem, 2.4vw, 2.1rem);">
                Investasi Berkah, Pahala Jariyah Abadi
            </h2>
            <p class="text-muted mb-0 justify-text" style="line-height: 1.85; font-size: 1.05rem;">
                Cash Waqf Linked Deposit (CWLD) adalah produk keuangan syariah yang menggabungkan wakaf uang dengan deposito syariah. Melalui CWLD, dana deposito yang ditempatkan oleh nasabah akan diwakafkan secara sementara, sedangkan keuntungan atau bagi hasilnya digunakan untuk program sosial dan kemaslahatan. Program ini dikelola oleh Lembaga Keuangan Syariah Penerima Wakaf Uang (LKS PWU) dan bekerja sama dengan Nazhir (pihak yang bertanggung jawab menyalurkan dana wakaf kepada penerima manfaat (Mauquf Alaih). Dengan skema ini, nasabah tidak hanya mendapatkan manfaat investasi syariah, tetapi juga berkontribusi dalam keberlanjutan program wakaf produktif yang bermanfaat bagi masyarakat luas.
            </p>
        </div>

        <!-- Dalil Wakaf Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s" style="background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%); border-left: 5px solid #0d6824;">
            <div class="subpage-section-header mb-3">
                <span class="sub-badge"><i class="fas fa-quran"></i> Landasan Syariah</span>
                <h3 class="mb-2">Dalil Wakaf</h3>
            </div>
            <p class="text-muted mb-3" style="font-size: 1.05rem;">
                Dari Abu Hurairah radhiyallahu 'anhu, ia berkata bahwa Rasulullah shallallahu 'alaihi wa sallam bersabda:
            </p>
            <div class="p-4 rounded-3 text-center my-3" style="background: rgba(13, 104, 36, 0.06); border: 1px dashed rgba(13, 104, 36, 0.2);">
                <p class="mb-0 text-dark fw-bold" style="font-size: clamp(1.4rem, 2.5vw, 1.85rem); font-family: 'Traditional Arabic', 'Scheherazade New', serif; line-height: 2;">
                    إِذَا مَاتَ الْإِنْسَانُ انْقَطَعَ عَمَلُهُ إِلَّا مِنْ ثَلَاثَةٍ مِنْ صَدَقَةٍ جَارِيَةٍ وَعِلْمٍ يُنْتَفَعُ بِهِ وَوَلَدٍ صَالِحٍ يَدْعُو لَهُ
                </p>
            </div>
            <blockquote class="blockquote mb-0 mt-3 ps-3 border-start border-3 border-success">
                <p class="text-dark fst-italic mb-0" style="font-size: 1.05rem; line-height: 1.7;">
                    "Jika seseorang meninggal dunia, maka terputuslah amalannya kecuali tiga perkara (yaitu): sedekah jariyah, ilmu yang dimanfaatkan, atau do'a anak yang sholeh" (HR. Muslim no. 1631)
                </p>
            </blockquote>
        </div>

        <!-- LKS PWU Accreditation Card -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="sub-badge mb-2"><i class="fas fa-certificate"></i> Legalitas Resmi</span>
                    <h3 class="mb-3 text-dark fw-bold" style="font-family: 'Outfit', sans-serif;">
                        BPRS HIK MCI Sebagai LKS PWU
                    </h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; line-height: 1.8;">
                        Dapatkan informasi lebih lengkap tentang BPRS HIK MCI sebagai LKS PWU melalui dokumen berikut:
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ asset('storage/wakaf/SK_PENUNJUKAN_MCI.pdf') }}" class="btn btn-outline-success rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm" target="_blank">
                        <i class="bi bi-download fs-5"></i>
                        <span>Download PDF</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tabel Perbandingan Deposito dan CWLD -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-balance-scale"></i> Komparasi Skema</span>
                <h2>Perbandingan Deposito dan CWLD</h2>
            </div>
            <div class="table-responsive table-modern-comparison">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 22%;">Aspek</th>
                            <th scope="col" style="width: 39%;">Deposito Regular</th>
                            <th scope="col" style="width: 39%;">Cash Waqf Linked Deposit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-dark">Pengelola Dana</td>
                            <td>Bank Syariah</td>
                            <td>Bank Syariah sebagai LKSPWU bekerja sama dengan Nazhir</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Skema Investasi</td>
                            <td>Dana diinvestasikan secara tradisional oleh bank syariah.</td>
                            <td>Dana diinvestasikan oleh bank syariah dengan tujuan untuk mencapai keuntungan finansial (menjaga harta) dan juga memberikan manfaat sosial melalui wakaf.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Tujuan Investasi</td>
                            <td>Mencapai keuntungan finansial untuk nasabah.</td>
                            <td>Mencapai keuntungan finansial untuk nasabah sambil juga memberikan manfaat sosial melalui wakaf.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Bagi Hasil</td>
                            <td>Nasabah menerima bagian dari keuntungan investasi sesuai dengan prinsip syariah.</td>
                            <td>Nasabah tidak menerima bagi hasil langsung, tetapi dana bagi hasil dari investasi disalurkan untuk tujuan amal.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Manfaat Sprititual</td>
                            <td>Berlaku sebatas berkesempatan untuk berinvestasi secara syariah, maka terbebas dari riba.</td>
                            <td>Manfaat yang sama dengan deposito syariah biasa ditambah kontribusi pada kebaikan sosial dan pahala spiritual melalui wakaf.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bekerja Sama dengan Nazir -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header text-center mx-auto" style="max-width: 650px;">
                <span class="sub-badge"><i class="fas fa-handshake"></i> Mitra Nazhir Terakreditasi</span>
                <h2>BPRS HIK MCI Bekerja Sama dengan Nazir</h2>
                <p class="text-muted mt-2">Menjalin sinergi erat bersama lembaga pengelola wakaf resmi dan kredibel nasional.</p>
            </div>
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-6 col-md-3">
                    <div class="modern-sub-card p-4 text-center d-flex align-items-center justify-content-center" style="min-height: 120px;">
                        <img src="{{ asset('frontend/img/deposito/mm.png') }}" alt="Nazir 1" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="modern-sub-card p-4 text-center d-flex align-items-center justify-content-center" style="min-height: 120px;">
                        <img src="{{ asset('frontend/img/deposito/bmm.png') }}" alt="Nazir 2" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="modern-sub-card p-4 text-center d-flex align-items-center justify-content-center" style="min-height: 120px;">
                        <img src="{{ asset('frontend/img/deposito/lazismu.png') }}" alt="Nazir 3" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="modern-sub-card p-4 text-center d-flex align-items-center justify-content-center" style="min-height: 120px;">
                        <img src="{{ asset('frontend/img/deposito/dompet-dhuafa.png') }}" alt="Nazir 4" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Wakaf Terkini Start -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-bullhorn"></i> Program Wakaf</span>
                <h2>Program Wakaf Terkini</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($wakafs as $wakaf)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bento-product-card h-100">
                        <div class="bento-product-thumb position-relative" style="aspect-ratio: 16/10;">
                            <img src="{{ asset('storage/' . $wakaf->gambar_cover) }}" alt="{{ $wakaf->judul }}" loading="lazy">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge text-white px-3 py-2 rounded-pill small fw-normal" style="background: rgba(0,0,0,0.75) !important;">
                                    <i class="far fa-calendar-alt me-1"></i> {{ $wakaf->created_at->format('d M Y') }}
                                </span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-3">
                                @if($wakaf->status == 'Terpenuhi')
                                <span class="badge bg-success text-white px-3 py-2 rounded-pill small fw-semibold">
                                    <i class="fa fa-check-circle me-1"></i> Terpenuhi
                                </span>
                                @else
                                <span class="badge bg-primary text-white px-3 py-2 rounded-pill small fw-semibold">
                                    <i class="fa fa-circle me-1 small"></i> Tersedia
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="bento-product-body d-flex flex-column">
                            <a href="{{ route('wakaf.show', $wakaf->id) }}" class="bento-product-title mb-2 text-dark fw-bold">
                                {{ $wakaf->judul }}
                            </a>
                            <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($wakaf->deskripsi, 100) }}
                            </p>
                            <div class="bg-light p-3 rounded-3 mb-3 small">
                                <div class="d-flex align-items-center mb-1 text-dark">
                                    <i class="fa fa-map-marker-alt text-success me-2" style="width: 16px;"></i>
                                    <span><strong>Lokasi:</strong> {{ $wakaf->lokasi }}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1 text-dark">
                                    <i class="fa fa-user text-success me-2" style="width: 16px;"></i>
                                    <span><strong>Nahzir:</strong> {{ $wakaf->nahzir }}</span>
                                </div>
                                <div class="d-flex align-items-center text-dark">
                                    <i class="fa fa-bullseye text-success me-2" style="width: 16px;"></i>
                                    <span><strong>Target:</strong> {{ $wakaf->target }}</span>
                                </div>
                            </div>
                            <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                                <span class="small text-muted">
                                    @if($wakaf->status == 'Terpenuhi')
                                    <span class="text-success fw-semibold"><i class="fa fa-check-circle me-1"></i> Target Terpenuhi</span>
                                    @else
                                    <span class="text-primary fw-semibold"><i class="fa fa-hand-holding-heart me-1"></i> Terbuka untuk Wakif</span>
                                    @endif
                                </span>
                                <a href="{{ route('wakaf.show', $wakaf->id) }}" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 fw-bold d-inline-flex align-items-center gap-1">
                                    <span>Selengkapnya</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Program Wakaf Terkini End -->

        <!-- Pengajuan CWLD Info Box -->
        <div class="modern-sub-card p-4 p-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header">
                <span class="sub-badge"><i class="fas fa-info-circle"></i> Tata Kelola Wakaf</span>
                <h2>Pengajuan Cash Waqf Linked Deposit (CWLD)</h2>
            </div>
            <p class="text-muted mb-0 justify-text" style="font-size: 1.05rem; line-height: 1.85;">
                Merupakan pemanfaatan bagi hasil deposito yang ditempatkan oleh nasabah di
                BPRS HIK MCI sebagai dana wakaf. Deposito ditempatkan dalam jangka waktu satu
                tahun dan bisa ditarik kembali setelah jatuh tempo. Wakif selaku pemilik dana
                deposito dapat memilih program wakaf dan nadzir yang bekerjasama dengan
                BPRS HIK MCI.
            </p>
        </div>

        <!-- Alur Proses Wakaf BPRS HIK MCI -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="subpage-section-header text-center mx-auto" style="max-width: 650px;">
                <span class="sub-badge"><i class="fas fa-route"></i> Alur Tahapan</span>
                <h2>Alur Proses Wakaf BPRS HIK MCI</h2>
                <p class="text-muted mt-2">Empat tahapan mudah dan transparan untuk menyalurkan wakaf uang temporer Anda.</p>
            </div>
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="wakaf-step-box">
                        <span class="wakaf-step-icon">
                            <i class="bi bi-pencil-square"></i>
                        </span>
                        <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-2 fw-bold">Langkah 1</span>
                        <p class="text-dark fw-semibold mb-0" style="font-size: 0.95rem;">
                            Wakif mengisi form keikutsertaan wakaf
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wakaf-step-box">
                        <span class="wakaf-step-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </span>
                        <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-2 fw-bold">Langkah 2</span>
                        <p class="text-dark fw-semibold mb-0" style="font-size: 0.95rem;">
                            Memberikan kuasa blokir dan pembukaan blokir senilai komitmen wakaf
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wakaf-step-box">
                        <span class="wakaf-step-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </span>
                        <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-2 fw-bold">Langkah 3</span>
                        <p class="text-dark fw-semibold mb-0" style="font-size: 0.95rem;">
                            Memberikan Standing Instruction pembukaan deposito kepada bank
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wakaf-step-box">
                        <span class="wakaf-step-icon">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </span>
                        <span class="badge badge-soft-success rounded-pill px-3 py-1 mb-2 fw-bold">Langkah 4</span>
                        <p class="text-dark fw-semibold mb-0" style="font-size: 0.95rem;">
                            Wakif menerima Akta Ikrar Wakaf
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Box WhatsApp -->
        <div class="subpage-cta-card text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="position-relative" style="z-index: 2; max-width: 720px; margin: 0 auto;">
                <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-bold mb-3" style="font-size: 0.8rem;">
                    <i class="fab fa-whatsapp me-1"></i> Layanan Cepat & Praktis
                </span>
                <h3 class="text-white fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">
                    Salurkan Wakaf Uang Melalui Deposito Wakaf (CWLD)
                </h3>
                <p class="text-white-75 mb-4" style="line-height: 1.7;">
                    Konsultasikan penempatan deposito wakaf Anda bersama petugas kami. Dapatkan pahala jariyah berkelanjutan tanpa mengurangi nilai pokok investasi Anda.
                </p>
                <div class="d-inline-block">
                    <a href="https://wa.me/6282137908367" target="_blank" rel="noopener noreferrer" class="btn btn-modern-wa">
                        <i class="fab fa-whatsapp fs-5 me-2"></i> Buka Rekening
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wakaf Content End -->

@include('footer')
