(function ($) {
    "use strict";

    // Spinner with immediate safety dismissal (Zero-hang)
    var spinner = function () {
        var hide = function () {
            var $sp = $('#spinner');
            if ($sp.length > 0) {
                $sp.removeClass('show');
                setTimeout(function () {
                    $sp.css({
                        'display': 'none',
                        'pointer-events': 'none',
                        'opacity': '0',
                        'visibility': 'hidden'
                    });
                }, 100);
            }
        };
        hide();
        setTimeout(hide, 50);
        setTimeout(hide, 150);
        $(document).ready(hide);
    };
    spinner();
    
    // Initiate WOW.js if available and ensure elements are never stuck hidden
    if (typeof WOW === 'function') {
        new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        }).init();
    }
    // Fallback safety: ensure all .wow elements are visible immediately
    $('.wow').css('visibility', 'visible');

    // Floating Navbar elevation on scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 30) {
            $('.modern-header-wrapper').addClass('scrolled');
        } else {
            $('.modern-header-wrapper').removeClass('scrolled');
        }
    });

    // Testimonial carousel
    if ($(".testimonial-carousel").length > 0) {
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1200,
            center: false,
            dots: true,
            loop: true,
            margin: 25,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsiveClass: true,
            responsive: {
                0: { items: 1 },
                576: { items: 1 },
                768: { items: 1 },
                992: { items: 2 },
                1200: { items: 2 }
            }
        });

        $('.testimonial-carousel').on('mouseover', function() {
            $(this).trigger('stop.owl.autoplay');
        }).on('mouseleave', function() {
            $(this).trigger('play.owl.autoplay', [4000]);
        });
    }

    // CounterUp for statistics if available
    if ($.fn.counterUp) {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 1500
        });
    }

    // Back to top button (ensures snappy 200ms fade with inline-flex circular display)
    $(window).scroll(function () {
        if ($(this).scrollTop() > 350) {
            $('.back-to-top').stop(true, true).css('display', 'inline-flex').fadeIn(200);
        } else {
            $('.back-to-top').stop(true, true).fadeOut(200);
        }
    });
    $('.back-to-top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600, 'easeInOutExpo');
        return false;
    });

})(jQuery);

/* ==========================================================================
   SIMULASI PERHITUNGAN PEMBIAYAAN SYARIAH (Enhanced UX & Conversion)
   ========================================================================== */
function calculatePembiayaan() {
    const inputEl = document.getElementById('jumlahPembiayaan');
    const tenorEl = document.getElementById('jangkaWaktuPembiayaan');
    const pembiayaanResult = document.getElementById('pembiayaanResult');

    if (!inputEl || !tenorEl || !pembiayaanResult) return;

    if (inputEl.value.includes('-')) {
        pembiayaanResult.innerHTML = `
            <div class="alert alert-warning border-0 rounded-2xl p-3 d-flex align-items-center gap-3">
                <i class="fas fa-exclamation-triangle fs-4 text-warning"></i>
                <div class="small">Jumlah pembiayaan tidak boleh bernilai negatif. Mohon masukkan angka positif.</div>
            </div>
        `;
        pembiayaanResult.style.display = 'block';
        return;
    }

    const jumlahPembiayaan = parseFloat(inputEl.value.replace(/\D/g, ''));
    const jangkaWaktuPembiayaan = parseInt(tenorEl.value, 10);

    if (isNaN(jumlahPembiayaan) || jumlahPembiayaan <= 0 || isNaN(jangkaWaktuPembiayaan)) {
        pembiayaanResult.innerHTML = `
            <div class="alert alert-warning border-0 rounded-2xl p-3 d-flex align-items-center gap-3">
                <i class="fas fa-exclamation-triangle fs-4 text-warning"></i>
                <div class="small">Mohon masukkan jumlah pembiayaan yang valid dan pilih jangka waktu (tenor).</div>
            </div>
        `;
        pembiayaanResult.style.display = 'block';
        return;
    }

    // Estimasi margin syariah flat 1.5% per bulan
    const marginRate = 1.5 / 100;
    const pokokBulan = Math.floor(jumlahPembiayaan / jangkaWaktuPembiayaan);
    const marginBulan = Math.floor(jumlahPembiayaan * marginRate);
    const angsuranBulan = pokokBulan + marginBulan;
    const totalPengembalian = angsuranBulan * jangkaWaktuPembiayaan;

    const formattedJumlah = 'Rp ' + jumlahPembiayaan.toLocaleString('id-ID');
    const formattedAngsuran = 'Rp ' + angsuranBulan.toLocaleString('id-ID');
    const formattedPokok = 'Rp ' + pokokBulan.toLocaleString('id-ID');
    const formattedMargin = 'Rp ' + marginBulan.toLocaleString('id-ID');
    const formattedTotal = 'Rp ' + totalPengembalian.toLocaleString('id-ID');

    const waText = encodeURIComponent(
        `Halo BPRS HIK MCI, saya ingin konsultasi mengenai simulasi pembiayaan:\n` +
        `• Plafon: ${formattedJumlah}\n` +
        `• Tenor: ${jangkaWaktuPembiayaan} Bulan\n` +
        `• Estimasi Angsuran: ${formattedAngsuran} / bulan\n\n` +
        `Mohon informasi persyaratan dan prosedur pengajuannya. Terima kasih.`
    );

    pembiayaanResult.innerHTML = `
        <div class="calc-result-card p-3 p-md-4 rounded-3xl bg-white border shadow-sm text-start">
            <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom flex-wrap gap-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-emerald-soft text-success p-2 rounded-circle"><i class="fas fa-check"></i></span>
                    <h5 class="mb-0 fw-bold text-dark">Hasil Simulasi Pembiayaan</h5>
                </div>
                <span class="badge bg-light text-muted fw-normal px-3 py-1.5 rounded-pill border">Akad Murabahah</span>
            </div>

            <div class="row g-3 text-center mb-3">
                <div class="col-12 col-md-4">
                    <div class="p-3 rounded-2xl bg-light h-100">
                        <small class="text-muted d-block mb-1">Plafon Pembiayaan</small>
                        <span class="fw-bold fs-6 text-dark">${formattedJumlah}</span>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="p-3 rounded-2xl bg-light h-100">
                        <small class="text-muted d-block mb-1">Jangka Waktu</small>
                        <span class="fw-bold fs-6 text-dark">${jangkaWaktuPembiayaan} Bulan</span>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="p-3 rounded-2xl bg-light h-100">
                        <small class="text-muted d-block mb-1">Total Kewajiban</small>
                        <span class="fw-bold fs-6 text-dark">${formattedTotal}</span>
                    </div>
                </div>
            </div>

            <div class="p-3 p-md-4 rounded-2xl mb-4 text-center" style="background: linear-gradient(135deg, rgba(13,104,36,0.06) 0%, rgba(0,150,199,0.06) 100%); border: 1.5px dashed rgba(13,104,36,0.25);">
                <small class="text-uppercase tracking-wider fw-bold text-success d-block mb-1">Estimasi Angsuran Tetap Bulanan</small>
                <div class="display-6 fw-bold text-success my-1">${formattedAngsuran}</div>
                <small class="text-muted">Pokok: ${formattedPokok} + Margin Syariah: ${formattedMargin} per bulan</small>
            </div>

            <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
                <a href="https://wa.me/6281222770657?text=${waText}" target="_blank" class="btn btn-modern-wa py-2.5 px-4 rounded-pill">
                    <i class="fab fa-whatsapp me-2 fs-5"></i>Ajukan Pembiayaan Ini via WhatsApp
                </a>
                <button type="button" class="btn btn-outline-secondary rounded-pill py-2.5 px-3" onclick="document.getElementById('pembiayaanForm').reset(); document.getElementById('pembiayaanResult').style.display='none';">
                    <i class="fas fa-redo me-1"></i>Hitung Ulang
                </button>
            </div>
        </div>
    `;
    pembiayaanResult.style.display = 'block';
    pembiayaanResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Format input angka ribuan otomatis
function formatNumberInput(input) {
    if (!input) return;
    const value = input.value.replace(/\D/g, '');
    input.value = value ? parseInt(value, 10).toLocaleString('id-ID') : '';
}

document.addEventListener("DOMContentLoaded", function() {
    var jumlahPembiayaanInput = document.getElementById('jumlahPembiayaan');
    if (jumlahPembiayaanInput) {
        jumlahPembiayaanInput.addEventListener('input', function() {
            formatNumberInput(this);
        });
    }
});

// Tab Filter Berdasarkan Tahun (Halaman Laporan Keuangan)
function openTab(evt, tabName) {
    if (evt && typeof evt.preventDefault === 'function') {
        evt.preventDefault();
    }
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    const navlinks = document.getElementsByClassName("nav-link");
    for (let i = 0; i < navlinks.length; i++) {
        navlinks[i].classList.remove("active");
    }

    const targetEl = document.getElementById(tabName);
    if (targetEl) {
        targetEl.style.display = "block";
    }
    if (evt && evt.currentTarget) {
        evt.currentTarget.classList.add("active");
    }

    filterReports();
}

function filterReports() {
    const yearEl = document.getElementById("yearFilter");
    if (!yearEl) return;
    const year = yearEl.value;
    const nameFilter = document.getElementById("nameFilter");
    const nameQuery = nameFilter ? nameFilter.value.toLowerCase() : "";
    const tabs = document.querySelectorAll(".tabcontent");

    tabs.forEach(tab => {
        const pdfItems = tab.querySelectorAll(".pdf-item");
        pdfItems.forEach(item => {
            const itemYear = item.getAttribute("data-year");
            const itemP = item.querySelector("p");
            const itemName = itemP ? itemP.innerText.toLowerCase() : "";
            
            const matchesYear = !year || itemYear === year;
            const matchesName = !nameQuery || itemName.includes(nameQuery);

            if (matchesYear && matchesName) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const activeTab = document.querySelector(".nav-link.active");
    if (activeTab) {
        const tabName = activeTab.getAttribute("onclick");
        if (tabName) {
            const match = tabName.match(/'([^']+)'/);
            if (match) {
                openTab(new Event('click'), match[1]);
            }
        }
    }
    if (document.getElementById("yearFilter")) {
        filterReports(); 
    }
});

// Lazy Load Data Nominal Deposito saat Scroll (Halaman Deposito)
(function ($) {
    "use strict";
    let offset = 10;
    const limit = 10;
    let isLoading = false;

    function loadMoreData(currentOffset, currentLimit) {
        if (isLoading) return;
        isLoading = true;

        $.ajax({
            url: "/get-nominals",
            method: "GET",
            data: { offset: currentOffset, limit: currentLimit },
            success: function(data) {
                if (data && data.trim() !== '') {
                    $('#nominals-data').append(data);
                    offset += currentLimit;
                }
                isLoading = false;
            },
            error: function(xhr, status, error) {
                isLoading = false;
            }
        });
    }

    $('#nominals-data').on('scroll', function() {
        const scrollTop = $(this).scrollTop();
        const scrollHeight = $(this)[0].scrollHeight;
        const windowHeight = $(this).height();

        if (scrollTop + windowHeight >= scrollHeight - 15) {
            loadMoreData(offset, limit);
        }
    });

})(jQuery);

// Export PDF Resmi (dengan safety null check)
document.addEventListener("DOMContentLoaded", function() {
    const downloadBtn = document.getElementById("download-pdf");
    if (!downloadBtn) return;

    downloadBtn.addEventListener("click", function() {
        if (!window.jspdf || !window.jspdf.jsPDF) {
            alert('Pustaka PDF sedang dimuat, silakan coba sesaat lagi.');
            return;
        }

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const bulanEl = document.getElementById("bulan");
        const tahunEl = document.getElementById("tahun");
        const bulan = bulanEl ? bulanEl.innerText.trim() : "";
        const tahun = tahunEl ? tahunEl.innerText.trim() : "";

        const title = `Equivalent Rate Deposito - ${bulan} ${tahun}`;
        const subtitle = "PT BPRS HIK MCI (Mitra Cahaya Indonesia)";
        
        doc.setFontSize(14);
        doc.text(title, 105, 16, null, null, 'center');
        doc.setFontSize(10);
        doc.setTextColor(100);
        doc.text(subtitle, 105, 22, null, null, 'center');

        if (typeof doc.autoTable === 'function') {
            doc.autoTable({
                startY: 28,
                head: [['Nominal Penempatan', '1 Bulan', '3 Bulan', '6 Bulan', '12 Bulan']],
                body: Array.from(document.querySelectorAll("#myTable tbody tr")).map(row => {
                    return Array.from(row.querySelectorAll("td")).map(cell => cell.innerText.trim());
                }),
                theme: 'striped',
                headStyles: { fillColor: [13, 104, 36] }
            });
            doc.save(`ER_Deposito_HIK_MCI_${bulan}_${tahun}.pdf`);
        } else {
            window.print();
        }
    });
});

// Nested dropdown support for Bootstrap 5 (e.g. Layanan Lainnya -> Media)
document.addEventListener("DOMContentLoaded", function () {
    const nestedToggles = document.querySelectorAll('.dropdown-menu .dropend > .dropdown-toggle');
    nestedToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const submenu = this.nextElementSibling;
            if (submenu) {
                const isShown = submenu.classList.contains('show');
                const parentMenu = this.closest('.dropdown-menu');
                if (parentMenu) {
                    parentMenu.querySelectorAll('.dropdown-menu.show').forEach(function(openMenu) {
                        openMenu.classList.remove('show');
                    });
                }
                if (!isShown) {
                    submenu.classList.add('show');
                }
            }
        });
    });
});
