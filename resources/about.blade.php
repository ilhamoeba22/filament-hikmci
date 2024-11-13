@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px">
    <h4
      class="text-white display-5 mb-4 wow fadeInDown"
      data-wow-delay="0.1s">
      Profile Perusahaan
    </h4>
    <ol
      class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
      data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active text-primary">Profile</li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-xl-6 wow fadeInLeft py-4" data-wow-delay="0.2s">
        <div class="about-img rounded h-100">
          <img
            src="{{ asset('frontend/img/carousel-1.png') }}"
            class="img-fluid rounded h-100 w-100"
            style="object-fit: cover"
            alt="" />
          <div class="about-exp">
            <span>Kantor BPRS HIK MCI</span>
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="about-item">
          <h4 class="text-primary text-uppercase">Tentang Perusahaan</h4>
          <h2 class="display-3 mb-3">Kenali BPRS HIK MCI</h2>
          <p class="mb-4 lh-base justify-text">
            BPRS HIK MCI, yang berpusat di Jalan Kaliurang KM 9, Ngaglik, Sleman,
            Yogyakarta, beroperasi mulai tanggal 11 Januari 2008. Didukung penuh
            oleh Dana Pensiun Syariah Muhammadiyah sebagai Pemegang Saham Pengendali
            dengan kepemilikan mayoritas 53,37%, BPRS HIK MCI mampu memperluas
            permodalan dan jangkauan layanan untuk memenuhi kebutuhan finansial
            syariah masyarakat. Dengan dukungan jaringan yang kuat dan keahlian
            manajemen, kami terus mempersiapkan diri menyambut era digital banking.
          </p>
          <p class="mb-4 lh-base justify-text">
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
  </div>
</div>
<!-- About End -->

<!-- Fact Counter -->
<div class="container-fluid counter py-4">
  <div class="row g-5">
    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
      <div class="counter-item d-flex align-items-center">
        <div class="counter-item-icon">
          <i class="fas fa-thumbs-up fa-3x text-white"></i>
        </div>
        <div class="ms-3">
          <h4 class="text-white my-2">Happy Clients</h4>
          <div class="counter-counting">
            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">3000</span>
            <span class="h1 fw-bold text-white">+</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
      <div class="counter-item d-flex align-items-center">
        <div class="counter-item-icon">
          <i class="fas fa-users fa-3x text-white"></i>
        </div>
        <div class="ms-3">
          <h4 class="text-white my-2">Employees</h4>
          <div class="counter-counting">
            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50</span>
            <span class="h1 fw-bold text-white">+</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
      <div class="counter-item d-flex align-items-center">
        <div class="counter-item-icon">
          <i class="fas fa-heart fa-3x text-white"></i>
        </div>
        <div class="ms-3">
          <h4 class="text-white my-2">Years Experience</h4>
          <div class="counter-counting">
            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">15</span>
            <span class="h1 fw-bold text-white">+</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
      <div class="counter-item d-flex align-items-center">
        <div class="counter-item-icon">
          <i class="fas fa-dollar-sign fa-3x text-white"></i>
        </div>
        <div class="ms-3">
          <h4 class="text-white my-2">Total Aset</h4>
          <div class="counter-counting">
            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">270</span>
            <span class="text-white fs-2 fw-bold">M</span>
            <span class="h2 fw-bold text-white">+</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fact Counter -->

<!-- feature Start -->
<div class="container-fluid feature bg-light py-5">
  <div class="container py-5">
    <div
      class="text-center mx-auto wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h2 class="display-3 text-capitalize mb-3">
        Visi Misi Perusahaan
      </h2>
    </div>
    <div class="row g-4">
      <div
        class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp"
        data-wow-delay="0.2s">
        <div class="feature-item p-4 pb-4">
          <a href="#" class="h3 mb-3 d-block text-center">Visi Perusahaan</a>
          <h5 class="mb-3 mt-3">
            "Terwujudnya Bank Syariah yang unggul dan terpercaya."
          </h5>
        </div>
        <br>
        <div class="feature-item p-4">
          <a href="#" class="h3 mb-3 d-block text-center">Motto</a>
          <h5 class="mb-3 mt-3 text-center  ">
            "Maju Bersama dalam Usaha Sesuai Syariah."
          </h5>
        </div>
      </div>
      <div
        class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp"
        data-wow-delay="0.2s">
        <div class="feature-item p-4">
          <a href="#" class="h3 mb-3 d-block text-center">Misi Perusahaan</a>
          <h5 class="mb-3 justify-text">
            <ol>
              <li>Menjalankan usaha perbankan yang sehat dan amanah</li>
              <li>Memberikan pelayanan yang terbaik dan Islami</li>
              <li>Berperan aktif dalam pengembangan dunia usaha dan peningkatan kesejahteraan masyarakat</li>
              <li>Meningkatkan kemakmuran pemegang saham, pengurus dan karyawan</li>
              <li>Menjalankan misi dakwah yang rahmatan lil alamin</li>
            </ol>
          </h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature End -->

<!-- Corporate Value start-->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div
      class="text-center mx-auto wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h2 class="display-3 text-capitalize mb-3">
        Corporate Value
      </h2>
      <br>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="value-item text-center">
          <img src="{{ asset('frontend/img/s_img.png') }}" class="img-fluid mb-3" alt="Integrity">
          <h5>Smart Work and Healty</h5>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="value-item text-center">
          <img src="{{ asset('frontend/img/m_img.png') }}" class="img-fluid mb-3" alt="Innovation">
          <h5>Modern and Islamic</h5>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="value-item text-center">
          <img src="{{ asset('frontend/img/i_img.png') }}" class="img-fluid mb-3" alt="Customer Focus">
          <h5>Integrity and Professional</h5>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="value-item text-center">
          <img src="{{ asset('frontend/img/l_img.png') }}" class="img-fluid mb-3" alt="Teamwork">
          <h5>Love, Care, and Respect</h5>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="value-item text-center">
          <img src="{{ asset('frontend/img/e_img.png') }}" class="img-fluid mb-3" alt="Excellence">
          <h5>Exellence and Great Achievement</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Corporate Value end-->


@include('footer')