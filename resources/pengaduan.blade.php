@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4
            class="text-white display-5 mb-4 wow fadeInDown"
            data-wow-delay="0.1s">
            Layanan Pengaduan
        </h4>
        <ol
            class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
            data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url ('/')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Pengaduan</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Pengaduan Start -->
<div class="container-fluid pengaduan">
    <div class="container">
        <div class="row g-5">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="pengaduan-item">
                    <h4 class="text-primary text-uppercase pt-5">Layanan Pengaduan</h4>
                    <h1 class="display-3 text-capitalize mb-3">Mekanisme Pengaduan Nasabah</h1>
                    <p class="mb-4 lh-base justify-text">
                        Berdasarkan POJK nomor 22 tahun 2023 tentang Perlindungan
                        Konsumen dan Masyarakat di Sektor Jasa Keuangan dimana
                        didalamnya mengatur terkait pengaduan nasabah serta
                        komitmen BPRS HIK MCI dalam memberikan kenyamanan dan
                        rasa aman dalam setiap transaksi yang dilakukan oleh
                        nasabah, maka BPRS HIK MCI menyediakan Mekanisme
                        Pengaduan Nasabah untuk menyalurkan pengaduan terkait
                        masalah saat bertransaksi.

                    </p>
                    <p class="mb-4 lh-base justify-text">
                        Pengaduan nasabah dapat disampaikan ke BPRS HIK MCI
                        secara tertulis melalui surat, fax, email, maupun website
                        resmi BPRS HIK MCI serta secara lisan melalui line telepon
                        ataupun datang langsung ke kantor BPRS HIK MCI terdekat
                        beserta dengan persyaratan pengaduan yang diperlukan.
                    </p>
                    <p class="mb-4 lh-base justify-text">
                        Adapun persyaratan pengaduan yang diperlukan antara
                        lain yang tertera dibawah ini:
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Pengaduan end -->

<!-- Tabel Pengaduan -->
<div class="container-fluid pengaduan">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" rowspan="2"></th>
                                <th scope="col" class="text-center">Persyaratan Pengaduan Tertulis</th>
                                <th scope="col" colspan="2" class="text-center">Persyaratan Pengaduan Lisan</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center"></th>
                                <th scope="col" class="text-center">Dengan Tatap Muka</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" rowspan="2">Nasabah</th>
                                <td>
                                    <ul>
                                        <li>Bukti Identitas (KTP/Paspor)</li>
                                        <li>Dokumen Pendukung Pengaduan</li>
                                    </ul>
                                </td>
                                <td rowspan="2">
                                    <ul>
                                        <li>Wajib diajukan oleh nasabah yang bersangkutan</li>
                                        <li>Nasabah harus menjawab pertanyaan verifikasi data diri dan rekening yang diajukan oleh pihak bank</li>
                                    </ul>
                                </td>
                                <td rowspan="2">
                                    <ul>
                                        <li>Bukti Identitas (KTP/Paspor)</li>
                                        <li>Dokumen Pendukung Pengaduan</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <th scope="row" rowspan="2">Perwakilan Nasabah</th>
                                <td>
                                    <ul>
                                        <li>Bukti Identitas perwakilan nasabah (KTP/Paspor)</li>
                                        <li>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</li>
                                        <li>Surat Kuasa dari nasabah kepada perwakilan yang menyatakan bahwa nasabah memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang bertindak mewakili nasabah</li>
                                        <li>Dokumen Pendukung Pengaduan</li>
                                    </ul>
                                </td>
                                <td rowspan="2">
                                    <p class="text-center">Tidak Diperkenankan</p>
                                </td>
                                <td rowspan="2">
                                    <ul>
                                        <li>Bukti Identitas perwakilan nasabah (KTP/Paspor)</li>
                                        <li>Bukti Identitas nasabah yang diwakilkan (KTP/Paspor)</li>
                                        <li>Surat Kuasa dari nasabah kepada perwakilan yang menyatakan bahwa nasabah memberikan kewenangan kepada perseorangan, lembaga, atau badan hukum yang bertindak mewakili nasabah</li>
                                        <li>Dokumen Pendukung Pengaduan</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tabel Pengaduan end -->

<!-- Flow Diagram Tatap Muka Start -->
<div class="container-fluid pengaduan py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="container mt-5 mb-5">
                    <h4 class="nunito text-center mb-4">Alur Pengaduan Nasabah secara Lisan dengan Tatap Muka di Kantor BPRS HIK MCI</h4>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>menyampaikan<br>Pengaduan Tertulis</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Register<br>pengaduan<br>nasabah</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Pengumpulan bukti<br>/ dokumen</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-4 lh-base justify-text">
                    <li>Nasabah datang ke kantor BPRS HIK MCI dengan membawa persyaratan yang telah ditentukan</li>
                    <li>Data diri dan dokumen pendukung pengaduan nasabah akan diverifikasi oleh petugas</li>
                    <li>Petugas akan meregister pengaduan nasabah dan menyampaikan nomer registrasi pengaduan nasabah</li>
                    <li>Bila pengaduan dapat langsung terselesaikan, maka petugas akan menginformasikan solusi kepada nasabah dan akan memberikan Bukti Terima Pengaduan yang telah dilengkapi solusi dari pihak bank</li>
                    <li>Apabila terkait solusi yang ditawarkan kepada nasabah tidak bisa diterima oleh nasabah maka nasabah diharap menyampaikan pengaduan tertulis kepada BPRS HIK MCI</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Flow Diagram Tatap Muka End -->

<!-- Flow Diagram Tanpa Tatap Muka Start -->
<div class="container-fluid pengaduan mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="container mt-5 mb-5">
                    <h4 class="nunito text-center mb-4">Alur Pengaduan Nasabah secara Tertulis ataupun Lisan tanpa Tatap Muka di Kantor BPRS HIK MCI</h4>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>menyampaikan<br>Pengaduan Tertulis</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Register<br>pengaduan<br>nasabah</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Pengumpulan bukti<br>/ dokumen</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-4 lh-base justify-text">
                    <li>Nasabah menyampaikan pengaduan secara tertulis beserta dengan persyaratan yang telah ditentukan</li>
                    <li>Petugas akan melakukan verifikasi data diri dan pengaduan nasabah</li>
                    <li>Petugas akan meregister pengaduan nasabah dan menyampaikan nomer registrasi pengaduan nasabah</li>
                    <li>Bila pengaduan dapat langsung terselesaikan, maka petugas akan menginformasikan solusi kepada nasabah. Tetapi jika tidak dapat terselesaikan maka petugas akan menginformasikan lamanya waktu penyelesaian</li>
                    <li>Pengaduan akan ditindaklanjuti oleh unit kerja yang bertugas menangani dan menyelesaikan pengaduan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- tabel waktu pengaduan -->
<div class="container-fluid pengaduan">
    <div class="container mb-5">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <h4 class="nunito text-center mb-4">Jangka Waktu Penanganan Pengaduan</h4>
                    <table class="table table-bordered w-auto mx-auto">
                        <thead>
                            <tr>
                                <th scope="col">Jenis Pengaduan</th>
                                <th scope="col">Jangka Waktu Penanganan Pengaduan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lisan</td>
                                <td>Maks 5 (lima) hari terhitung sejak pengaduan diterima secara lengkap oleh petugas penerima pengaduan</td>
                            </tr>
                            <tr>
                                <td>Tertulis</td>
                                <td>Maks 10 (sepuluh) hari kerja terhitung sejak dokumen terkait pengaduan diterima secara lengkap oleh petugas penerima pengaduan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tabel waktu pengaduan end -->

@include('footer')