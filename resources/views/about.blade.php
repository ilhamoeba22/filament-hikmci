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
<div class="container-fluid about py-3">
  <div class="container py-2">
    <h4 class="text-primary text-uppercase">Tentang Perusahaan</h4>
    <h1 class="text-capitalize text-uppercase">Kenali BPRS HIK MCI</h1>
    <div class="row g-5">
      <div class="col-xl-12 wow fadeInRight py-3" data-wow-delay="0.2s">
        <div class="about-item">
          <p class="mb-4 lh-base justify-text">
            BPRS HIK MCI, yang berpusat di Jalan Kaliurang KM 9, Ngaglik, Sleman,
            Yogyakarta, beroperasi mulai tanggal 11 Januari 2008. Didukung penuh
            oleh Dana Pensiun Syariah Muhammadiyah sebagai Pemegang Saham Pengendali
            dengan kepemilikan mayoritas 53,37%, BPRS HIK MCI mampu memperluas
            permodalan dan jangkauan layanan untuk memenuhi kebutuhan finansial
            syariah masyarakat. Dengan dukungan jaringan yang kuat dan keahlian
            manajemen, kami terus mempersiapkan diri menyambut era digital banking.
          </p>
          <p class="lh-base justify-text">
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
    <div class="row d-flex align-items-center">
      <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="about-img rounded">
          <img
            src="{{ asset('frontend/img/about/MCI_Profile.jpeg') }}"
            class="img-fluid rounded" alt="" />
        </div>
      </div>
      <div class="col-xl-6 company-info">
        <h4 class="text-primary text-uppercase">Informasi Perusahaan</h4>
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td><strong>Nama Perseroan</strong></td>
              <td class="colon">:</td>
              <td class="lh-base justify-text">PT Bank Perekonomian Rakyat Syariah Harta Insan Karimah Mitra Cahaya Indonesia (PT BPRS HIK MCI)</td>
            </tr>
            <tr>
              <td><strong>NPWP</strong></td>
              <td class="colon">:</td>
              <td>02.683.027.3-542.000</td>
            </tr>
            <tr>
              <td><strong>Legalitas</strong></td>
              <td class="colon">:</td>
              <td class="lh-base justify-text">Akta Notaris Nomor 4 Tanggal 5 November 2024 Disetujui SK Menteri Hukum & HAM Nomor AHU-0240358.AH.01.11 Tahun 2024 Tanggal 7 November 2024</td>
            </tr>
            <tr>
              <td><strong>Tanggal Pendirian</strong></td>
              <td class="colon">:</td>
              <td class="lh-base justify-text">Akta Pendirian nomor 17 tanggal 11 Januari 2008. Kemenkumham nomor AHU-0019981.AH.01.09. Tahun 2008 Tanggal 18 Maret 2008</td>
            </tr>
            <tr>
              <td><strong>No Anggota LPS</strong></td>
              <td class="colon">:</td>
              <td>42100010</td>
            </tr>
            <tr>
              <td><strong>Modal Dasar</strong></td>
              <td class="colon">:</td>
              <td>50.000.000.000</td>
            </tr>
            <tr>
              <td><strong>Modal Disetor</strong></td>
              <td class="colon">:</td>
              <td>19.405.000.000</td>
            </tr>
            <tr>
              <td><strong>Alamat</strong></td>
              <td class="colon">:</td>
              <td>Jl. Kaliurang KM 9 Ngaglik Sleman DIY</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Fact Counter -->
<div class="container-fluid counter py-1">
  <div class="row g-5">
    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
      <div class="counter-item d-flex align-items-center">
        <div class="counter-item-icon">
          <i class="fas fa-thumbs-up fa-3x text-white"></i>
        </div>
        <div class="ms-3">
          <h4 class="nunito text-white my-2">Happy Clients</h4>
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
          <h4 class="nunito text-white my-2">Employees</h4>
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
          <h4 class="nunito text-white my-2">Years Experience</h4>
          <div class="counter-counting">
            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">17</span>
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
          <h4 class="nunito text-white my-2">Total Aset</h4>
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

<!-- Visi Misi Start -->
<div class="container-fluid py-3">
  <div class="container py-2">
    <div
      class="text-center mx-auto wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h1 class="text-capitalize mb-1">
        Corporate Value
      </h1>
    </div>
    <div class="row">
      <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="about-img rounded">
          <img
            src="{{ asset('frontend/img/about/PROFILE_MCI_VISI_MISI.png') }}"
            class="img-fluid rounded float-start me-0 mb-3 px-5" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature End -->

<!-- Corporate Value start-->
<div class="container-fluid py-3">
  <div class="container py-2">
    <div
      class="text-center mx-auto wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h1 class="text-capitalize mb-1">
        Corporate Value
      </h1>
    </div>
    <div class="row">
      <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="about-img rounded">
          <img
            src="{{ asset('frontend/img/about/PROFILE_MCI_CORVA.png') }}"
            class="img-fluid rounded float-start me-0 mb-3 px-5" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Corporate Value end-->


@include('footer')