(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

    // Testimonial carousel
$(".testimonial-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000, // Set interval to 4 seconds
    smartSpeed: 1500,
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
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {
            items: 1
        },
        992: {
            items: 2
        },
        1200: {
            items: 2
        }
    }
});

// Ensure the carousel does not pause on hover or focus
$('.testimonial-carousel').on('mouseover', function() {
    $(this).trigger('stop.owl.autoplay');
}).on('mouseleave', function() {
    $(this).trigger('play.owl.autoplay', [4000]);
});

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

})(jQuery);

// Simulasi Perhitungan Pembiayaan

function calculatePembiayaan() {
    const jumlahPembiayaan = parseFloat(document.getElementById('jumlahPembiayaan').value);
    const jangkaWaktuPembiayaan = parseInt(document.getElementById('jangkaWaktuPembiayaan').value);

    if (isNaN(jumlahPembiayaan) || isNaN(jangkaWaktuPembiayaan)) {
        alert('Mohon masukkan jumlah pembiayaan dan jangka waktu yang valid.');
        return;
    }

    const margin = 1.5 / 100; // 1.5%
    const hasil = Math.floor((jumlahPembiayaan / jangkaWaktuPembiayaan) + (jumlahPembiayaan * margin));

    const pembiayaanResult = document.getElementById('pembiayaanResult');
    pembiayaanResult.innerHTML = `
        <h4>Hasil Perhitungan Pembiayaan</h4>
        <table class="table table-bordered">
            <tr>
                <th>Jumlah Pembiayaan</th>
                <td>Rp. ${jumlahPembiayaan.toLocaleString('id-ID')}</td>
            </tr>
            <tr>
                <th>Jangka Waktu</th>
                <td>${jangkaWaktuPembiayaan} bulan</td>
            </tr>
            <tr>
                <th>Angsuran Perbulan</th>
                <td>Rp. ${hasil.toLocaleString('id-ID')}</td>
            </tr>
        </table>
    `;
    pembiayaanResult.style.display = 'block';
}

// Filter Berdasarkan Tahun
function openTab(evt, tabName) {
    evt.preventDefault();
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    const navlinks = document.getElementsByClassName("nav-link");
    for (let i = 0; i < navlinks.length; i++) {
        navlinks[i].classList.remove("active");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");

    filterByYear(); // Apply filter after switching tabs
}

function filterByYear() {
    const year = document.getElementById("yearFilter").value;
    const tabs = document.querySelectorAll(".tabcontent");

    tabs.forEach(tab => {
        const pdfItems = tab.querySelectorAll(".pdf-item");
        pdfItems.forEach(item => {
            const itemYear = item.getAttribute("data-year");
            if (!year || itemYear === year) {
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
        openTab(new Event('click'), activeTab.getAttribute("onclick").match(/'([^']+)'/)[1]);
    }
    filterByYear(); 
});



// Fungsi untuk menentukan halaman aktif Navbar
function isActive($page)
{
    $current_page = basename($_SERVER['PHP_SELF']);
    return $current_page == $page ? 'active' : '';
}

// Navbar
document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.querySelector('.navbar-light');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

// Deposito Scroll

(function ($) {
    "use strict";

    // Variabel untuk menyimpan offset
    let offset = 10; // Posisi awal data, karena 10 data awal sudah dimuat
    const limit = 10; // Jumlah data yang dimuat per permintaan

    // Fungsi untuk memuat data tambahan saat scroll
    function loadMoreData(offset, limit) {
        $.ajax({
            url: "/get-nominals", // URL untuk memuat data lebih banyak
            method: "GET",
            data: { offset: offset, limit: limit },
            beforeSend: function() {
                // Menambahkan indikator loading jika diperlukan
            },
            success: function(data) {
                if (data.trim() === '') {
                    // Jika tidak ada data, kita bisa sembunyikan tombol atau indikator
                } else {
                    $('#nominals-data').append(data); // Tambahkan data ke tabel
                    offset += limit; // Update offset untuk permintaan selanjutnya
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
            }
        });
    }

    // Event listener untuk scroll pada tbody
    $('#nominals-data').on('scroll', function() {
        const scrollTop = $(this).scrollTop();
        const scrollHeight = $(this)[0].scrollHeight;
        const windowHeight = $(this).height();

        // Jika sudah scroll hampir ke bagian bawah
        if (scrollTop + windowHeight >= scrollHeight - 10) {
            loadMoreData(offset, limit); // Memuat data lebih banyak
        }
    });

})(jQuery);
