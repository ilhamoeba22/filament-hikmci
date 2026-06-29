@include('header')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
        <h4
            class="text-white display-5 mb-3 wow fadeInDown"
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
                    <h1 class="text-capitalize text-uppercase mb-3">
                        Mekanisme Pengaduan Nasabah
                    </h1>
                    <p class="mb-3 lh-base justify-text">
                        Berdasarkan POJK nomor 22 tahun 2023 tentang Perlindungan
                        Konsumen dan Masyarakat di Sektor Jasa Keuangan dimana
                        didalamnya mengatur terkait pengaduan nasabah serta
                        komitmen BPRS HIK MCI dalam memberikan kenyamanan dan
                        rasa aman dalam setiap transaksi yang dilakukan oleh
                        nasabah, maka BPRS HIK MCI menyediakan Mekanisme
                        Pengaduan Nasabah untuk menyalurkan pengaduan terkait
                        masalah saat bertransaksi.
                    </p>
                    <p class="mb-3 lh-base justify-text">
                        Pengaduan nasabah dapat disampaikan ke BPRS HIK MCI
                        secara tertulis melalui surat, fax, email, maupun website
                        resmi BPRS HIK MCI serta secara lisan melalui line telepon
                        ataupun datang langsung ke kantor BPRS HIK MCI terdekat
                        beserta dengan persyaratan pengaduan yang diperlukan.
                    </p>
                    <p class="mb-3 lh-base justify-text">
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
<div class="container-fluid pengaduan py-3">
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
                                <th scope="col" class="text-center">Tanpa Tatap Muka</th>
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

<!-- Flow Diagram Start -->
<div class="container-fluid pengaduan py-3">
    <div class="container">
        <div class="row g-5">

            {{-- ALUR 1: Lisan Tatap Muka --}}
            <div class="col-12 wow shadow-box fadeInRight mb-3" data-wow-delay="0.2s">
                <div class="container my-3">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Alur Pengaduan Nasabah secara Lisan dengan Tatap Muka di Kantor BPRS HIK MCI
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>mendatangi Bank<br>dan menyampaikan<br>pengaduan</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Verifikasi data<br>nasabah &amp;<br>pemberitahuan<br>waktu penyelesaian</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Register<br>pengaduan &amp;<br>konfirmasi<br>penerimaan</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan<br>BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-3 lh-base justify-text">
                    <li>Nasabah mendatangi Bank dan menyampaikan pengaduan.</li>
                    <li>Data Nasabah akan diverifikasi oleh Customer Service (CS) dan CS memberitahukan kepada Nasabah waktu penyelesaian pengaduan maksimal 5 (lima) hari kerja sejak tanggal pengaduan diterima.</li>
                    <li>CS meneruskan pengaduan tersebut kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                    <li>UKPPK mencatat dan memberikan konfirmasi penerimaan Pengaduan dengan memberikan nomor registrasi pengaduan dan tanggal penerimaan pengaduan.</li>
                    <li>UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan Nasabah tersebut.</li>
                    <li>UKPPK menyampaikan Tanggapan secara lisan dan/atau tertulis kepada Nasabah terkait dengan solusi yang diberikan.</li>
                    <li>Apabila Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dinyatakan selesai.</li>
                    <li>Apabila Nasabah menolak solusi yang diberikan oleh Bank, maka diarahkan untuk mengajukan pengaduan secara tertulis kepada Bank.</li>
                    <li>Dalam hal Bank membutuhkan dokumen pendukung dan jangka waktu penyelesaian tidak dapat dipenuhi, Bank meminta kepada Nasabah untuk menyampaikan pengaduan secara tertulis.</li>
                </ol>
            </div>

            {{-- ALUR 2: Lisan Tanpa Tatap Muka --}}
            <div class="col-12 wow fadeInRight shadow-box mb-3" data-wow-delay="0.2s">
                <div class="container my-3">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Alur Pengaduan Nasabah secara Lisan Tanpa Tatap Muka di Kantor BPRS HIK MCI
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>menghubungi<br>Nomor Telepon<br>Bank</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Verifikasi data<br>nasabah &amp;<br>pemberitahuan<br>waktu penyelesaian</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Register<br>pengaduan &amp;<br>konfirmasi<br>penerimaan</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan<br>BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-3 lh-base justify-text">
                    <li>Nasabah menghubungi Nomor Telepon Bank dan menyampaikan Pengaduannya.</li>
                    <li>Data Nasabah akan diverifikasi oleh Customer Service (CS) dan CS memberitahukan kepada Nasabah waktu penyelesaian pengaduan maksimal 5 (lima) hari kerja sejak tanggal pengaduan diterima.</li>
                    <li>CS meneruskan pengaduan Nasabah tersebut kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                    <li>UKPPK mencatat dan memberikan konfirmasi penerimaan Pengaduan dengan memberikan nomor registrasi pengaduan dan tanggal penerimaan pengaduan.</li>
                    <li>UKPPK menghubungi Nasabah kembali melalui pesan singkat atau aplikasi chat kepada Nasabah untuk memastikan pengaduan tersebut.</li>
                    <li>UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan Nasabah tersebut.</li>
                    <li>UKPPK menyampaikan Tanggapan secara lisan dan/atau tertulis kepada Nasabah terkait solusi yang diberikan.</li>
                    <li>Apabila Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dinyatakan selesai.</li>
                    <li>Apabila Nasabah menolak solusi yang diberikan oleh Bank, maka diarahkan untuk mengajukan pengaduan secara tertulis kepada Bank.</li>
                    <li>Dalam hal Bank membutuhkan dokumen pendukung dan jangka waktu penyelesaian tidak dapat dipenuhi, Bank meminta kepada Nasabah untuk menyampaikan secara tertulis.</li>
                </ol>
            </div>

            {{-- ALUR 3: Tertulis Tatap Muka --}}
            <div class="col-12 wow fadeInRight shadow-box mb-3" data-wow-delay="0.2s">
                <div class="container my-3">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Alur Pengaduan Nasabah secara Tertulis dengan Tatap Muka di Kantor BPRS HIK MCI
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>menyampaikan<br>Pengaduan Tertulis<br>ke kantor</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Verifikasi &amp;<br>pengisian formulir<br>pengaduan</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Pengumpulan<br>bukti /<br>dokumen</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan<br>BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-3 lh-base justify-text">
                    <li>Nasabah dan/atau perwakilan Nasabah menyampaikan pengaduan tertulis datang langsung ke kantor dengan membawa identitas dan dokumen pendukung yang diperlukan.</li>
                    <li>Customer Service (CS) menanyakan keperluan Nasabah dan/atau perwakilan Nasabah dan meneruskan pengaduan kepada Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK).</li>
                    <li>UKPPK memberitahukan kepada Nasabah dan/atau perwakilan Nasabah waktu penyelesaian pengaduan maksimal 10 (sepuluh) hari kerja sejak tanggal pengaduan diterima.</li>
                    <li>UKPPK menerima informasi pengaduan dan meminta Nasabah dan/atau perwakilan Nasabah mengisi formulir informasi keluhan pada lembar pengaduan Nasabah.</li>
                    <li>UKPPK melakukan verifikasi dan identifikasi terhadap bukti identitas dan kelengkapan dokumen pendukung yang dibutuhkan.</li>
                    <li>Dalam hal Nasabah dan/atau perwakilan Nasabah belum memenuhi dokumen, Bank mengkonfirmasi dan meminta kekurangan dokumen dimaksud dalam jangka waktu 10 (sepuluh) hari kerja. Dalam hal kondisi tertentu, Bank dapat memperpanjang jangka waktu dalam 10 (sepuluh) hari kerja.</li>
                    <li>UKPPK berkoordinasi dengan Unit Kerja Lain (UKL) untuk mencari solusi terkait pengaduan tersebut.</li>
                    <li>UKPPK menyampaikan tanggapan Pengaduan secara tertulis kepada Nasabah dan/atau perwakilan Nasabah dengan solusi yang diberikan.</li>
                    <li>Apabila Nasabah dan/atau perwakilan Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dan/atau perwakilan Nasabah dinyatakan selesai.</li>
                    <li>Dalam hal tidak terdapat kesepakatan terhadap hasil penanganan Pengaduan, maka Nasabah dan/atau perwakilan Nasabah dapat menyampaikan pengaduan kepada OJK, pengadilan atau di luar Pengadilan.</li>
                </ol>
            </div>

            {{-- ALUR 4: Tertulis via Email/Surat --}}
            <div class="col-12 wow fadeInRight shadow-box" data-wow-delay="0.2s">
                <div class="container my-3">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Alur Pengaduan Nasabah secara Tertulis Melalui Email atau Surat
                    </h3>
                    <div class="d-flex flex-wrap justify-content-center align-items-center flow-diagram">
                        <div class="box m-2">Nasabah<br>mengirimkan<br>Pengaduan Tertulis<br>via Email / Surat</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Verifikasi &amp;<br>pencatatan<br>pengaduan</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Pengumpulan<br>bukti /<br>dokumen</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Tanggapan<br>BPRS</div>
                        <div class="arrow m-2">&rarr;</div>
                        <div class="box m-2">Penyelesaian<br>Pengaduan<br>Nasabah</div>
                    </div>
                </div>
                <ol class="mb-3 lh-base justify-text">
                    <li>Nasabah dan/atau perwakilan Nasabah mengirimkan pengaduan tertulis melalui Email atau Surat dengan melengkapi identitas dan dokumen pendukung yang diperlukan.</li>
                    <li>Unit Kerja Pelayanan dan Pengaduan Konsumen (UKPPK) menerima, memeriksa, dan mencatat pengaduan serta dokumen pendukung yang diperlukan maksimal 10 (sepuluh) hari kerja sejak tanggal pengaduan diterima.</li>
                    <li>UKPPK melakukan verifikasi dan identifikasi terhadap bukti identitas dan kelengkapan dokumen pendukung yang dibutuhkan.</li>
                    <li>Dalam hal Nasabah dan/atau perwakilan Nasabah belum memenuhi dokumen, Bank mengkonfirmasi dan meminta kekurangan dokumen dimaksud dalam jangka waktu 10 (sepuluh) hari kerja. Dalam hal kondisi tertentu, Bank dapat memperpanjang jangka waktu dalam 10 (sepuluh) hari kerja.</li>
                    <li>UKPPK berkoordinasi dengan UKL untuk mencari solusi terkait dengan pengaduan tersebut.</li>
                    <li>UKPPK mengirimkan kembali tanggapan Pengaduan secara tertulis kepada Nasabah dan/atau perwakilan Nasabah terkait dengan solusi yang diberikan.</li>
                    <li>Apabila Nasabah dan/atau perwakilan Nasabah menerima solusi yang diberikan oleh Bank, maka pengaduan Nasabah dan/atau perwakilan Nasabah dinyatakan selesai.</li>
                    <li>Dalam hal tidak terdapat kesepakatan terhadap hasil penanganan Pengaduan, maka Nasabah dan/atau perwakilan Nasabah dapat menyampaikan pengaduan kepada OJK, pengadilan atau di luar Pengadilan.</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- Flow Diagram End -->

<!-- tabel waktu pengaduan -->
<div class="container-fluid pengaduan py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Jangka Waktu Penanganan Pengaduan
                    </h3>
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
                                <td>Maks 5 (lima) hari kerja terhitung sejak pengaduan diterima secara lengkap oleh petugas penerima pengaduan</td>
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

<!-- Media Layanan Pengaduan -->
<div class="container-fluid pengaduan py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <h3 class="text-capitalize text-uppercase text-center mb-3">
                        Media Layanan Pengaduan
                    </h3>
                    <table class="table table-bordered w-auto mx-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Kantor Bank</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Telepon Bank (0274) 881159</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Email resmi Bank (info@bprshikmci.co.id)</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Aplikasi Portal Pelindungan Konsumen (APPK)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Media Layanan Pengaduan end -->

@include('footer')
