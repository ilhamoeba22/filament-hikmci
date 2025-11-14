@include('header')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-5 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            E-Book
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layanan Lainnya</a></li>
            <li class="breadcrumb-item"><a href="#">Media</a></li>
            <li class="breadcrumb-item active text-primary">E-Book</li>
        </ol>
    </div>
</div>
<div class="container-fluid background-index py-5">
    <div class="container pb-5">

        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-capitalize mb-3">
                Semua E-Book
            </h1>
        </div>

        <div class="row justify-content-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-10">
                <div class="input-group input-group-lg shadow-sm">
                    <span class="input-group-text" style="border-radius: 0.5rem 0 0 0.5rem;"><i class="fa fa-search"></i></span>
                    <input type="search"
                        id="ebook-live-search" class="form-control"
                        style="border-radius: 0 0.5rem 0.5rem 0;"
                        placeholder="Ketik untuk memfilter E-Book...">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.4s" id="ebook-list-container">

                @forelse($ebooks as $ebook)
                <div class="card ebook-card-modern shadow-sm mb-2 ebook-item-filterable">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">

                            <div class="text-center text-md-start flex-shrink-0">
                                <img src="{{ asset('storage/edukasi/' . $ebook->gambar) }}"
                                    class="ebook-cover-new"
                                    alt="{{ $ebook->judul }}">
                            </div>

                            <div class="ebook-info-new mx-md-2 text-center text-md-start my-3 my-md-0">
                                <h4 class="ebook-title-new">{{ $ebook->judul }}</h4>
                                <small class="ebook-date-new text-muted">
                                    <i class="fa fa-calendar-alt me-1"></i>
                                    Modified: {{ $ebook->created_at->format('F d, Y') }}
                                </small>
                            </div>

                            <div class="ebook-action-new ms-md-auto flex-shrink-0 d-flex flex-column align-items-center">

                                <a href="{{ asset('storage/edukasi/' . $ebook->file_pdf) }}"
                                    class="btn btn-primary btn-pill"
                                    target="_blank">
                                    <i class="fa fa-eye me-sm-2"></i>
                                    <span class="d-none d-sm-inline">Lihat</span>
                                </a>

                                <a href="{{ asset('storage/edukasi/' . $ebook->file_pdf) }}"
                                    class="btn btn-secondary btn-pill mt-2" target="_blank"
                                    download>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline">Unduh</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="card shadow-sm text-center p-5" id="ebook-not-found">
                    <p class="mb-0 fs-5">Belum ada E-Book yang tersedia saat ini.</p>
                </div>

                @endforelse <div class="card shadow-sm text-center p-5" id="ebook-js-not-found" style="display: none;">
                    <p class="mb-0 fs-5">E-Book yang Anda cari tidak ditemukan.</p>
                </div>

            </div>
        </div>
    </div>
</div>

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