@php
    $shareTitle = $title ?? config('app.name');
    $shareUrl = $url ?? url()->current();
    $shareCategory = $type ?? 'Konten';
    $waText = rawurlencode("*{$shareTitle}*\n\nBaca selengkapnya di BPRS HIK MCI:\n{$shareUrl}");
    $fbUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($shareUrl);
    $tgUrl = 'https://t.me/share/url?url=' . urlencode($shareUrl) . '&text=' . urlencode($shareTitle);
    $twUrl = 'https://twitter.com/intent/tweet?text=' . urlencode($shareTitle) . '&url=' . urlencode($shareUrl);
    $inUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($shareUrl);
@endphp

<div class="share-box-modern p-4 rounded-4 bg-light border my-4">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge rounded-pill px-2 py-1 small fw-semibold text-white" style="background-color: #0d6824;">
                    <i class="bi bi-share-fill me-1"></i> Bagikan
                </span>
                <span class="text-secondary small fw-medium">Informasi Resmi BPRS HIK MCI</span>
            </div>
            <h6 class="fw-bold text-dark mb-0">Bagikan {{ $shareCategory }} Ini</h6>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-2">
            <!-- Tombol WhatsApp Resmi -->
            <a href="https://api.whatsapp.com/send?text={{ $waText }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-success rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2 shadow-sm text-white fw-semibold"
               style="background-color: #25D366; border-color: #25D366;"
               title="Bagikan ke WhatsApp">
                <i class="bi bi-whatsapp fs-6"></i> <span>WhatsApp</span>
            </a>

            <!-- Tombol Salin Link -->
            <button type="button" 
                    class="btn btn-outline-dark rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2 bg-white fw-semibold"
                    onclick="copyShareLink('{{ $shareUrl }}', this)"
                    title="Salin Tautan">
                <i class="bi bi-link-45deg fs-6"></i> <span>Salin Link</span>
            </button>

            <!-- Telegram -->
            <a href="{{ $tgUrl }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center p-0 bg-white" 
               style="width: 36px; height: 36px;" 
               title="Bagikan ke Telegram">
                <i class="bi bi-telegram"></i>
            </a>

            <!-- Facebook -->
            <a href="{{ $fbUrl }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center p-0 bg-white" 
               style="width: 36px; height: 36px;" 
               title="Bagikan ke Facebook">
                <i class="bi bi-facebook"></i>
            </a>

            <!-- Twitter / X -->
            <a href="{{ $twUrl }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-secondary rounded-circle d-inline-flex align-items-center justify-content-center p-0 bg-white" 
               style="width: 36px; height: 36px;" 
               title="Bagikan ke X (Twitter)">
                <i class="bi bi-twitter-x"></i>
            </a>

            <!-- LinkedIn -->
            <a href="{{ $inUrl }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center p-0 bg-white" 
               style="width: 36px; height: 36px;" 
               title="Bagikan ke LinkedIn">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>
    </div>
</div>

