@include('header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px">
    <h4
      class="text-white display-5 mb-4 wow fadeInDown"
      data-wow-delay="0.1s">
      Profile Pengurus
    </h4>
    <ol
      class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
      data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active text-primary">Team</li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- Team Start -->
<div class="container-fluid team py-5">
  <div class="container py-2">
    <div
      class="text-center mx-auto pb-5 wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h1 class="display-5 text-capitalize mb-3">
        Jajaran Pengurus BPRS HIK MCI
      </h1>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_DEDE.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Dede Haris Sumarno, SE, MM</h4>
                <h5 class="mb-3 text-primary">Komisaris Utama</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  AKTA RUPS LB No 5 tanggal 6 Februari 2023 di hadapan Notaris Muhammad Hariyanto,
                  SH Surat Keputusan OJK nomor S-74/KO.031/2023 tanggal 10 Januari 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_EDI.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Prof. Dr. Edy Suandi Hamid, M. Ec.</h4>
                <h5 class="mb-3 text-primary">Komisaris</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  Akta No 80 Tanggal 22 September 2016 dihadapan Notaris Moh Djaelani.
                  Akta No 28 Tanggal 3 September 2021 dihadapan Notaris Moh Djaelani OJK No. S-891/KO.031/2021 tanggal 9 November 2021</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_AHIM.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Dr. Ahim Abdurahim, SE., M.Si.Ak., SAS., CA., ACPA</h4>
                <h5 class="mb-3 text-primary">Ketua Dewan Pengawas Syariah</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  Akta No 28 Tanggal 3 September 2021 OJK No. S891/KO.031/2021 tanggal 9 November 2021</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_TOTO.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Toto Suparwoto, S.Pd.</h4>
                <h5 class="mb-3 text-primary">Dewan Pengawas Syariah</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  Akta No 7 Tanggal 17 Oktober 2023 OJK No. S864/KO.031/2023 tanggal 6 September 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_KHOLID.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Kholid S.Pd., M.M</h4>
                <h5 class="mb-3 text-primary">Direktur Utama</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  Akta No 28 Tanggal 3 September 2021 OJK No. S-891/KO.031/2021 tanggal 9 November 2021</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 wow fadeInUp mb-3" data-wow-delay="0.0s">
        <div class="team-item rounded border p-4 shadow">
          <div class="row g-0">
            <div class="col-md-4 text-center">
              <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontend/img/team/MCI_MUSHONIFUL.png') }}" alt="Team Member">
            </div>
            <div class="col-md-8">
              <div class="h-100 d-flex flex-column justify-content-center px-4">
                <h4 class="mb-3">Mushoniful Agustian</h4>
                <h5 class="mb-3 text-primary">Direktur Operasional dan Kepatuhan</h5>
                <p class="mb-0 justify-text">Dasar Hukum Pengangkatan
                  Akta No 7 Tanggal 17 Oktober 2023 OJK No. S-864/KO.031/2023 tanggal 6 September 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


@include('footer')