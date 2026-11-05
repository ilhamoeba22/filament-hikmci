@include('header')

<!-- Subpage Hero Banner Start -->
<div class="subpage-hero">
    <div class="subpage-hero-pattern"></div>
    <div class="container position-relative z-index-2 text-center">
        <div class="subpage-breadcrumb wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="#">Layanan Lainnya</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="#">Media</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">E-Book</span>
        </div>
        <h1 class="subpage-title wow fadeInDown" data-wow-delay="0.2s">
            E-Book &amp; Publikasi Digital
        </h1>
        <p class="subpage-subtitle wow fadeInUp" data-wow-delay="0.3s">
            Buku panduan digital, majalah literasi syariah, dan referensi finansial yang dapat dibaca dan diunduh secara cuma-cuma.
        </p>
    </div>
</div>
<!-- Subpage Hero Banner End -->

<!-- Main Content Wrapper Start -->
<div class="subpage-content-wrapper">
    <div class="container">

        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="subpage-section-tag">
                <i class="bi bi-journal-bookmark"></i> Pustaka Digital
            </span>
            <h2 class="subpage-section-title">
                Semua E-Book
            </h2>
        </div>

        <!-- Live Search Bar -->
        <div class="row justify-content-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-8">
                <div class="modern-sub-card p-2 shadow-sm">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0 text-muted ps-3">
                            <i class="bi bi-search fs-5"></i>
                        </span>
                        <input type="search"
                            id="ebook-live-search" 
                            class="form-control border-0 shadow-none ps-2 py-3"
                            placeholder="Ketik untuk memfilter E-Book...">
                    </div>
                </div>
            </div>
        </div>

        <!-- E-Book List -->
        <div class="row justify-content-center">
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s" id="ebook-list-container">

                @forelse($ebooks as $ebook)
                <div class="modern-sub-card p-3 p-md-4 mb-3 ebook-item-filterable">
                    <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                        <!-- Cover Image -->
                        <div class="text-center flex-shrink-0">
                            <img src="{{ asset('storage/edukasi/' . $ebook->gambar) }}"
                                class="rounded-3 shadow-sm object-fit-cover"
                                style="width: 100px; height: 135px; border: 1px solid rgba(0,0,0,0.08);"
                                alt="{{ $ebook->judul }}">
                        </div>

                        <!-- Info -->
                        <div class="text-center text-md-start flex-grow-1">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-1 mb-2 small fw-semibold">
                                <i class="bi bi-book me-1"></i> E-Book Resmi
                            </span>
                            <h4 class="h5 fw-bold text-dark mb-2 ebook-title-new">{{ $ebook->judul }}</h4>
                            <p class="text-muted small mb-0">
                                <i class="bi bi-calendar3 me-1 text-success"></i>
                                Modified: {{ $ebook->created_at->format('F d, Y') }}
                            </p>
                        </div>

                        <!-- Actions -->
                        <div class="flex-shrink-0 d-flex flex-row flex-md-column gap-2 w-100 w-md-auto justify-content-center">
                            <a href="{{ asset('storage/edukasi/' . $ebook->file_pdf) }}"
                                class="btn btn-outline-success rounded-pill px-4 py-2 btn-sm flex-fill d-inline-flex align-items-center justify-content-center gap-1"
                                target="_blank">
                                <i class="bi bi-eye"></i>
                                <span>Lihat</span>
                            </a>

                            <a href="{{ asset('storage/edukasi/' . $ebook->file_pdf) }}"
                                class="btn btn-success rounded-pill px-4 py-2 btn-sm text-white flex-fill d-inline-flex align-items-center justify-content-center gap-1" 
                                target="_blank"
                                download>
                                <i class="bi bi-download"></i>
                                <span>Unduh</span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="modern-sub-card text-center p-5 mx-auto" id="ebook-not-found" style="max-width: 600px;">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.75rem;">
                        <i class="bi bi-book text-muted"></i>
                    </div>
                    <p class="mb-0 fs-5 text-secondary">Belum ada E-Book yang tersedia saat ini.</p>
                </div>
                @endforelse

                <!-- Not Found from Javascript filter -->
                <div class="modern-sub-card text-center p-5 mx-auto" id="ebook-js-not-found" style="display: none; max-width: 600px;">
                    <div class="bento-icon-box mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.75rem;">
                        <i class="bi bi-search text-muted"></i>
                    </div>
                    <p class="mb-0 fs-5 text-secondary">E-Book yang Anda cari tidak ditemukan.</p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('ebook-live-search');
        const ebookItems = document.querySelectorAll('.ebook-item-filterable');
        const emptyMessage = document.getElementById('ebook-not-found');
        const jsNotFoundMessage = document.getElementById('ebook-js-not-found');

        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const query = searchInput.value.toLowerCase();
                let visibleCount = 0;

                ebookItems.forEach(function(card) {
                    const titleElement = card.querySelector('.ebook-title-new');
                    const title = titleElement ? titleElement.textContent.toLowerCase() : '';

                    if (title.includes(query)) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (jsNotFoundMessage) {
                    if (visibleCount === 0 && ebookItems.length > 0) {
                        jsNotFoundMessage.style.display = 'block';
                    } else {
                        jsNotFoundMessage.style.display = 'none';
                    }
                }

                if (emptyMessage) {
                    if (query.length > 0) {
                        emptyMessage.style.display = 'none';
                    } else {
                        emptyMessage.style.display = (ebookItems.length === 0) ? 'block' : 'none';
                    }
                }
            });
        }
    });
</script>
@endpush

@include('footer')
