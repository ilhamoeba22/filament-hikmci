<!-- Footer Start (Fintech Corporate Luxury Redesign) -->
<footer class="footer-modern position-relative overflow-hidden">
    <!-- Top Glowing Accent Line -->
    <div class="footer-top-accent" aria-hidden="true"></div>

    <div class="container position-relative pt-5 pb-4">
        <!-- 1. Header Footer Brand Strip -->
        <div class="footer-brand-strip pb-4 mb-5 border-bottom border-white-10">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3">
                        <a href="{{ url('/') }}" aria-label="Beranda PT BPRS HIK MCI">
                            <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" alt="Logo PT BPRS HIK MCI" class="img-fluid" style="max-height: 56px; width: auto;" />
                        </a>
                        <div class="footer-brand-divider d-none d-sm-block"></div>
                        <div>
                            <span class="footer-brand-name d-block text-white fw-bold">PT BPRS HIK MCI</span>
                            <p class="footer-tagline mb-0 text-white-75">
                                Wujudkan Keuangan Syariah yang Berkah dan Terpercaya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Clean 4-Column Grid -->
        <div class="row g-4 g-lg-5 mb-5 footer-main-grid">
            <!-- Kolom 1: Profil & Kantor Pusat -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-col-widget">
                    <h5 class="footer-col-title">
                        <span>Kantor Pusat</span>
                    </h5>
                    <div class="footer-address-block mb-3">
                        <div class="d-flex align-items-start gap-2 text-white-75 mb-2">
                            <i class="fas fa-map-marker-alt text-info mt-1 flex-shrink-0"></i>
                            <span class="lh-base">
                                Jl. Kaliurang KM 09, Sardonoharjo, Ngaglik, Sleman, D.I. Yogyakarta 55581
                            </span>
                        </div>
                        <a href="https://maps.app.goo.gl/QypJrDjHsZMNwof48" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-footer-map mt-1">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i>Petunjuk Arah Google Maps
                        </a>
                    </div>
                    <ul class="footer-contact-list list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="tel:+62274881159" class="text-white-75 text-decoration-none d-inline-flex align-items-center">
                                <i class="fas fa-phone-alt text-info me-2"></i>(0274) 881159
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:corsec@bprshikmci.co.id" class="text-white-75 text-decoration-none d-inline-flex align-items-center">
                                <i class="fas fa-envelope text-info me-2"></i>corsec@bprshikmci.co.id
                            </a>
                        </li>
                        <li class="text-white-50 small mt-2">
                            <i class="far fa-clock text-warning me-2"></i>Jam Layanan: Senin - Jumat, 08.00 - 15.00 WIB
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Kolom 2: Produk Unggulan -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-col-widget">
                    <h5 class="footer-col-title">
                        <span>Produk Unggulan</span>
                    </h5>
                    <ul class="footer-links-list list-unstyled mb-0">
                        <li><a href="{{ url('pembiayaan/pembiayaan-umkm') }}"><i class="fas fa-chevron-right me-2"></i>Pembiayaan UMKM Mikro</a></li>
                        <li><a href="{{ url('pembiayaan/pembiayaan-property') }}"><i class="fas fa-chevron-right me-2"></i>Pembiayaan Properti</a></li>
                        <li><a href="{{ url('pembiayaan/pembiayaan-corporate') }}"><i class="fas fa-chevron-right me-2"></i>Pembiayaan Corporate</a></li>
                        <li><a href="{{ url('pembiayaan/pembiayaan-consumer-finance') }}"><i class="fas fa-chevron-right me-2"></i>Consumer Finance</a></li>
                        <li><a href="{{ url('main-deposito/deposito') }}"><i class="fas fa-chevron-right me-2"></i>Deposito Karimah</a></li>
                        <li><a href="{{ url('tabungan/tabungan-ukhuwah') }}"><i class="fas fa-chevron-right me-2"></i>Tabungan Ukhuwah</a></li>
                        <li><a href="{{ url('tabungan/tabungan-karimah') }}"><i class="fas fa-chevron-right me-2"></i>Tabungan Karimah</a></li>
                        <li><a href="{{ url('main-deposito/wakaf') }}"><i class="fas fa-chevron-right me-2"></i>CWLD Wakaf</a></li>
                    </ul>
                </div>
            </div>

            <!-- Kolom 3: Layanan & Kepatuhan -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-col-widget">
                    <h5 class="footer-col-title">
                        <span>Layanan & Kepatuhan</span>
                    </h5>
                    <ul class="footer-links-list list-unstyled mb-0">
                        <li><a href="{{ url('about') }}"><i class="fas fa-chevron-right me-2"></i>Tentang Kami</a></li>
                        <li><a href="{{ url('about') }}#pengurus"><i class="fas fa-chevron-right me-2"></i>Profil Pengurus</a></li>
                        <li><a href="{{ url('lapkeu') }}"><i class="fas fa-chevron-right me-2"></i>Laporan Keuangan Publikasi</a></li>
                        <li><a href="{{ url('pengaduan') }}"><i class="fas fa-chevron-right me-2"></i>Layanan Pengaduan Konsumen</a></li>
                        <li><a href="{{ url('karir') }}"><i class="fas fa-chevron-right me-2"></i>Karir</a></li>
                        <li><a href="{{ url('edukasi') }}"><i class="fas fa-chevron-right me-2"></i>Edukasi Syariah</a></li>
                        <li><a href="{{ url('edukasi') }}"><i class="fas fa-chevron-right me-2"></i>E-Book</a></li>
                        <li><a href="{{ url('asset') }}"><i class="fas fa-chevron-right me-2"></i>E-Asset</a></li>
                        <li><a href="http://wbs.bprshikmci.co.id/" target="_blank" rel="noopener noreferrer"><i class="fas fa-chevron-right me-2"></i>Whistleblowing System (WBS)</a></li>
                    </ul>
                </div>
            </div>

            <!-- Kolom 4: Hubungi & Media Sosial -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-col-widget">
                    <h5 class="footer-col-title">
                        <span>Hubungi & Media Sosial</span>
                    </h5>
                    <!-- WhatsApp Official Card -->
                    <div class="footer-wa-card p-3 mb-3 rounded-2xl">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="footer-wa-pulse"></span>
                            <span class="footer-wa-label">WhatsApp Customer Care</span>
                        </div>
                        <p class="footer-wa-sub text-white-75 small mb-3">
                            Konsultasi pembiayaan & simpanan syariah responsif bersama tim kami.
                        </p>
                        <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-wa-official w-100">
                            <i class="fab fa-whatsapp me-2"></i>Chat WhatsApp Resmi
                        </a>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-3">
                        <span class="footer-social-caption text-white-50 small d-block mb-2">Media Sosial Resmi:</span>
                        <div class="d-flex align-items-center gap-2">
                            <a href="https://www.instagram.com/bprshikmci/" target="_blank" rel="noopener noreferrer" class="social-circle-link ig-glow" title="Instagram Resmi @bprshikmci" aria-label="Instagram Resmi @bprshikmci">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/people/Bank-Syariah-HIK-MCI/61554427015454/" target="_blank" rel="noopener noreferrer" class="social-circle-link fb-glow" title="Facebook Resmi BPRS HIK MCI" aria-label="Facebook Resmi BPRS HIK MCI">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://maps.app.goo.gl/QypJrDjHsZMNwof48" target="_blank" rel="noopener noreferrer" class="social-circle-link maps-glow" title="Titik Lokasi Kantor Pusat di Google Maps" aria-label="Titik Lokasi Kantor Pusat di Google Maps">
                                <i class="bi bi-geo-alt-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Bottom Bar Legal & Regulatory Compliance -->
        <div class="footer-bottom-bar pt-4 border-top border-white-10">
            <div class="row align-items-center g-4">
                <div class="col-lg-8 col-md-12">
                    <p class="footer-compliance-text mb-2 text-white-75 small">
                        PT BPRS Harta Insan Karimah Mitra Cahaya Indonesia berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta merupakan peserta penjaminan Lembaga Penjamin Simpanan (LPS) dengan penjaminan simpanan hingga Rp 2 Miliar per nasabah.
                    </p>
                    <p class="footer-copyright-text mb-0 text-white-50 small">
                        &copy; 2024 PT BPRS HIK MCI. Seluruh hak cipta dilindungi undang-undang.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="d-flex flex-wrap justify-content-lg-end align-items-center gap-4">
                        <img src="{{ asset('frontend/img/logo/ib_logo.png') }}" alt="Bank Syariah" class="img-fluid" style="height: 48px; width: auto; object-fit: contain;" />
                        <img src="{{ asset('frontend/img/logo/bprs_logo.png') }}" alt="BPR Syariah" class="img-fluid" style="height: 48px; width: auto; object-fit: contain;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Floating Action Buttons (Strict 1:1 Aspect-Ratio Circles) -->
<div class="fixed-buttons">
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top" style="display: none;" title="Kembali ke atas" aria-label="Kembali ke atas">
        <i class="fa fa-arrow-up"></i>
    </a>
    <a href="https://wa.me/6281320750415" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg-square rounded-circle" title="Konsultasi via WhatsApp" aria-label="Konsultasi via WhatsApp">
        <i class="fab fa-whatsapp" style="font-size: 26px;"></i>
    </a>
</div>

<style>
.card-shine {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  pointer-events: none;
  z-index: 2;
  transition: background 0.1s ease;
}
.card { position: relative; }
.card-body { position: relative; z-index: 2; }
</style>

<!-- JavaScript Libraries (Deferred) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="{{ asset('frontend/lib/wow/wow.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}" defer></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" defer></script>
@if(request()->is('/'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
  if (typeof THREE === 'undefined') {
    document.write('<script src="{{ asset("frontend/js/three.min.js") }}"><\/script>');
  }
</script>
<script src="{{ asset('frontend/js/hero-3d-scene.js') }}" defer></script>
@endif
<script src="{{ asset('frontend/js/main.js') }}" defer></script>

<script>
// Interactive 3D Parallax & Hardware Accelerated Tilt System
(function() {
  const supportsHover = window.matchMedia('(hover: hover)').matches;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Hero 3D Parallax Showcase Handler
  function initHero3DParallax() {
    if (!supportsHover || prefersReducedMotion) return;

    const stage = document.getElementById('heroFintechStage');
    if (!stage) return;

    const visual = document.getElementById('fintechHeroVisual');
    const shine = visual ? visual.querySelector('.card-shine') : null;
    const badges = stage.querySelectorAll('.layer-parallax-high');
    let rafId = null;

    stage.addEventListener('mousemove', e => {
      if (rafId) cancelAnimationFrame(rafId);
      rafId = requestAnimationFrame(() => {
        const rect = stage.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;

        // Multi-axis 3D rotation if frame present
        if (visual) {
          visual.style.transform = `perspective(1200px) rotateY(${x * 7}deg) rotateX(${-y * 7}deg) translateZ(6px)`;
          if (shine) {
            const vRect = visual.getBoundingClientRect();
            shine.style.background = `radial-gradient(circle at ${e.clientX - vRect.left}px ${e.clientY - vRect.top}px, rgba(255,255,255,0.24), transparent 60%)`;
          }
        }

        // True physical parallax displacement for surrounding badges
        badges.forEach(b => {
          b.style.transform = `translate3d(${-x * 24}px, ${-y * 18}px, 0)`;
        });
      });
    });

    stage.addEventListener('mouseleave', () => {
      if (rafId) cancelAnimationFrame(rafId);
      if (visual) {
        visual.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
        visual.style.transform = 'perspective(1200px) rotateY(0deg) rotateX(0deg) translateZ(0px)';
        if (shine) shine.style.background = 'transparent';
      }

      badges.forEach(b => {
        b.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
        b.style.transform = 'translate3d(0, 0, 0)';
      });

      setTimeout(() => {
        if (visual) visual.style.transition = '';
        badges.forEach(b => b.style.transition = '');
      }, 400);
    });

    stage.addEventListener('mouseenter', () => {
      if (visual) visual.style.transition = 'none';
      badges.forEach(b => b.style.transition = 'none');
    });
  }

  // 2. Standard 3D Tilt for regular cards
  function init3DCards() {
    if (!supportsHover || prefersReducedMotion) return;

    document.querySelectorAll('.card-3d:not(#fintechHeroVisual)').forEach(card => {
      const shine = card.querySelector('.card-shine');
      card.style.transformStyle = 'preserve-3d';
      card.style.willChange = 'transform';
      
      let rafId = null;

      card.addEventListener('mousemove', e => {
        if (rafId) cancelAnimationFrame(rafId);
        rafId = requestAnimationFrame(() => {
          const rect = card.getBoundingClientRect();
          const x = (e.clientX - rect.left) / rect.width - 0.5;
          const y = (e.clientY - rect.top) / rect.height - 0.5;
          card.style.transform = `perspective(800px) rotateY(${x * 14}deg) rotateX(${-y * 14}deg) translateZ(6px)`;
          if (shine) {
            shine.style.background = `radial-gradient(circle at ${e.clientX - rect.left}px ${e.clientY - rect.top}px, rgba(255,255,255,0.18), transparent 60%)`;
          }
        });
      });
      
      card.addEventListener('mouseleave', () => {
        if (rafId) cancelAnimationFrame(rafId);
        card.style.transition = 'transform 0.24s cubic-bezier(0.16, 1, 0.3, 1)';
        card.style.transform = 'perspective(800px) rotateY(0deg) rotateX(0deg) translateZ(0px)';
        if (shine) shine.style.background = 'transparent';
        setTimeout(() => card.style.transition = '', 240);
      });
      
      card.addEventListener('mouseenter', () => {
        card.style.transition = 'none';
      });
    });
  }
  
  // 3. Content Reveal Safety
  function initScrollReveal() {
    document.querySelectorAll('.modern-product-card, .modern-news-card, .simulator-form-card, .cta-banner-wrapper').forEach(el => {
      el.style.opacity = '1';
      el.style.visibility = 'visible';
    });

    if (prefersReducedMotion || !('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('is-revealed');
          observer.unobserve(e.target);
        }
      });
    }, { threshold: 0.05, rootMargin: '0px 0px 50px 0px' });
    
    document.querySelectorAll('.modern-product-card, .modern-news-card, .simulator-form-card, .cta-banner-wrapper').forEach(el => {
      observer.observe(el);
    });
  }
  
  function init() {
    initHero3DParallax();
    init3DCards();
    initScrollReveal();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

// Global Share Helper: Salin Tautan dengan Feedback Toast
function copyShareLink(url, btn) {
    const targetUrl = url || window.location.href;
    
    function showCopiedFeedback() {
        if (btn) {
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check2 text-success"></i> <span class="text-success fw-bold">Tersalin!</span>';
            btn.classList.add('border-success');
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.classList.remove('border-success');
            }, 2200);
        }

        let toast = document.getElementById('globalShareToast');
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'globalShareToast';
            toast.style.cssText = 'position:fixed;bottom:28px;right:28px;z-index:99999;background:#0d6824;color:#fff;padding:12px 22px;border-radius:50px;box-shadow:0 10px 30px rgba(13,104,36,0.35);font-size:0.92rem;font-weight:600;display:flex;align-items:center;gap:10px;transition:opacity 0.3s ease,transform 0.3s ease;opacity:0;transform:translateY(20px);pointer-events:none;';
            toast.innerHTML = '<i class="bi bi-check-circle-fill fs-5"></i><span>Tautan berhasil disalin ke clipboard!</span>';
            document.body.appendChild(toast);
        }
        toast.style.opacity = '1';
        toast.style.transform = 'translateY(0)';
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(20px)';
        }, 2200);
    }

    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(targetUrl).then(showCopiedFeedback).catch(fallbackCopy);
    } else {
        fallbackCopy();
    }

    function fallbackCopy() {
        const ta = document.createElement('textarea');
        ta.value = targetUrl;
        ta.style.position = 'fixed';
        ta.style.opacity = '0';
        document.body.appendChild(ta);
        ta.focus();
        ta.select();
        try {
            document.execCommand('copy');
            showCopiedFeedback();
        } catch (err) {
            prompt('Salin tautan ini:', targetUrl);
        }
        document.body.removeChild(ta);
    }
}
</script>

@stack('scripts')
</body>

</html>
