@extends('adminlte::page')

@section('title', 'FR.MAPA.01')

@section('content_header')
<div class="pagetitle">
    <h1>Data Table</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.MAPA.01</li>
        </ol>
    </nav>
</div>
@stop

@section('content')
@include('layouts.scripts')
<style>
    .canvas-container {
        border: 1px solid black;
        width: 400px;
        height: 100px;
        margin-top: 10px;
    }

    button {
        margin-top: 10px;
    }

    /* Ensure the input field grows according to the height of its parent */
    .align-middle {
        vertical-align: middle;
    }

    .table-border {
        border: 0.5px solid #000;
    }

    .form-control no-border {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    .table-border td {
        vertical-align: middle;
    }

    .no-border {
        border: none;
        box-shadow: none;
    }

    .no-border:focus {
        outline: none;
        box-shadow: none;
    }

    .kriteria-margin {
        margin-left: 20px;
    }
</style>

<div class="layout-px-spacing">
    <!-- Form Section -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
                    <div class="card-header">
                        <form action="{{ route('frmapa01.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.MAPA.01- Merencanakan Aktivitas Dan Proses Asesmen</h3>
                    </div>
                    <div class="card-body">
                        <!-- Section for Skema Sertifikasi -->
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <td rowspan="2">Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)
                                    <td>Judul:</td>
                                    </td>
                                    <td>
                                        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor:</td>
                                    <td>
                                        <input type="text" name="nomor" class="form-control" placeholder="Masukkan Nomor" required>
                                    </td>
                                </tr>
                            </thead>
                        </table>

                        <!-- New Section: Menentukan Pendekatan Asesmen -->
                        <h4>Menentukan Pendekatan Asesmen</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td colspan="5"><b>1. Menentukan Pendekatan Asesmen</b></td> <!-- Merged across all columns -->
                            </tr>
                            <tr>
                                <td rowspan="10" style="width: 5%;">1.1</td> <!-- Merged for all rows under 1.1 -->
                                <td style="width: 20%;">Asesi</td>
                                <td colspan="3">
                                    <input type="checkbox" name="asesi[]" value="hasil_pendidikan"> Hasil pelatihan dan/atau pendidikan, dimana kurikulum dan fasilitas<br>
                                    <input type="checkbox" name="asesi[]" value="hasil_pelatihan"> Hasil pelatihan dan/atau pendidikan, dimana kurikulum berbasis kompetensi<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_berpengalaman"> Pekerja berpengalaman, industri/tempat kerja yang telah sesuai<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_belum_berkompetensi"> Pekerja berpengalaman, industri/tempat kerja yang belum sesuai<br>
                                    <input type="checkbox" name="asesi[]" value="otodidak"> Pelatihan/belajar mandiri atau otodidak
                                </td>
                            </tr>
                            <tr>
                                <td>Tujuan Asesmen</td>
                                <td colspan="3">
                                    <input type="checkbox" name="tujuan_asesmen[]" value="sertifikasi"> Sertifikasi<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="pkt"> Pengakuan Kompetensi Terkini (PKT)<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="rpl"> Rekognisi Pembelajaran Lampau (RPL)<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="lainnya"> Lainnya
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4" style="width: 19.2%;">Konteks Asesmen:</td> <!-- Merged for 4 rows -->
                                <td colspan="2">Lingkungan</td>
                                <td>
                                    <input type="checkbox" name="lingkungan[]" value="tempat_kerja_nyata"> Tempat kerja nyata <br>
                                    <input type="checkbox" name="lingkungan[]" value="tempat_kerja_simulasi"> Tempat kerja simulasi
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Peluang untuk mengumpulkan bukti dalam sejumlah situasi</td>
                                <td>
                                    <input type="checkbox" name="peluang[]" value="tersedia"> Tersedia <br>
                                    <input type="checkbox" name="peluang[]" value="terbatas"> Terbatas
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Hubungan antara standar kompetensi dan:</td>
                                <td>
                                    <input type="checkbox" name="bukti[]" value="bukti_dukung_asesmen"> Bukti untuk mendukung asesmen<br>
                                    <input type="checkbox" name="bukti[]" value="aktivitas_kerja"> Aktivitas kerja di tempat kerja Asesi<br>
                                    <input type="checkbox" name="bukti[]" value="kegiatan_pembelajaran"> Kegiatan Pembelajaran
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Siapa yang melakukan asesmen / RPL</td>
                                <td>
                                    <input type="checkbox" name="asesor[]" value="lembaga_sertifikasi"> Lembaga Sertifikasi<br>
                                    <input type="checkbox" name="asesor[]" value="organisasi_pelatihan"> Organisasi Pelatihan<br>
                                    <input type="checkbox" name="asesor[]" value="asesor_perusahaan"> Asesor Perusahaan
                                </td>
                            </tr>
                            <tr>
                                <td>Konfirmasi dengan orang yang relevan</td>
                                <td colspan="3">
                                    <input type="checkbox" name="asesi[]" value="hasil_pendidikan"> Manajer sertifikasi LSP<br>
                                    <input type="checkbox" name="asesi[]" value="hasil_pelatihan"> Master Asesor / Master Trainer / Lead Asesor Kompetensi<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_berpengalaman"> Manajer Pelatihan Lembaga Training terakreditasi / Lembaga Training terdaftar<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_belum_berkompetensi"> Manajer atau supervisor ditempat kerja
                                </td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="5" style="width: 5%;">1.2</td> <!-- Penanda 1.2 -->
                                <td rowspan="5" style="width: 20%;">Standar Industri atau Tempat Kerja</td> <!-- Merged cells -->
                                <td><input type="checkbox" name="standar_kompetensi"> Standar Kompetensi</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="kriteria_asesmen"> Kriteria asesmen dari kurikulum pelatihan</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="spesifikasi_kinerja"> Spesifikasi kinerja suatu perusahaan atau industri</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="spesifikasi_produk"> Spesifikasi Produk</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="pedoman_khusus"> Pedoman khusus</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td colspan="5"><b>2. Mempersiapkan Rencana Asesmen</b></td> <!-- Merged across all columns -->
                            </tr>
                            <tr>
                                <td rowspan="5" style="width: 20%;">Kelompok Pekerjaan 1: Prosedur dan SOP Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO01.001.01</td>
                                <td>Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO01.002.01</td>
                                <td>Melakukan Kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO01.003.01</td>
                                <td>Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TAN.HO02.001.01</td>
                                <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Rows -->
                            <tr>
                                <td rowspan="2" style="width: 15%;">Unit Kompetensi</td>
                                <td rowspan="2" style="text-align: center; width: 25% ;">Bukti-Bukti <br>(Kinerja, Produk, Portofolio, dan/atau Pengetahuan) dilidentifikasi berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen</td>
                                <td colspan="3" style="text-align: center;">Jenis Bukti</td>
                                <td colspan="7" style="text-align: center;">Metode dan Perangkat Asesmen
                                    CL (Ceklis Observasi), DIT (Daftar Instruksi Terstruktur), DPL (Daftar Pertanyaan Lisan), DPT (Daftar Pertanyaan Tertulis), VPK (Verifikasi Pihak Ketiga), CVP (Ceklis Verifikasi Portofolio), CRP (Ceklis Reviu Produk), PW (Pertanyaan Wawancara)

                                </td>
                            </tr>
                            <tr>
                                <!-- Jenis Bukti Columns -->
                                <td style="width: 5%; text-align: center;">L</td>
                                <td style="width: 5%; text-align: center;">TL</td>
                                <td style="width: 5%; text-align: center;">T</td>

                                <!-- Metode dan Perangkat Asesmen Columns -->
                                <td style="width: 10%; text-align: center;"><strong> Obsevasi langsung </strong><br>(kerja nyata/aktivitas waktu nyata di tempat kerja di kingkungan tempat kerja yang disimulasikan)
                                </td>
                                <td style="width: 10%; text-align: center;"><strong> Kegiatan Terstruktur</strong><br> (latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)
                                </td>
                                <td style="width: 10%; text-align: center;"><strong>Tanya Jawab </strong><br>(pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)
                                </td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Portfolio </strong><br>(sampel pekerjaaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal atau buku catatan, informasi tentang pengalaman hidup)
                                </td>
                                <td style="width: 10%; text-align: center;"><strong> Reviu Produk</strong><br>Produk hasil proyek, ciontoh hasil kerja/produk

                                </td>
                                <td style="width: 10%; text-align: center;"><strong> Verifikasi Pihak Ketiga</strong><br>(testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara dengan atasan, atau rekan kerja)
                                </td>

                            </tr>

                            <!-- Data Row -->
                            <tr>
                                <td>1. Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab tentang prosedur K3 Tanaman Budidaya Anggrek</td>

                                <!-- Jenis Bukti -->
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>

                                <!-- Metode dan Perangkat Asesmen -->
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2. Melakukan Kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab tentang bentuk kerjasama dengan teman kerja</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 3 -->
                            <tr>
                                <td>3. Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab tentang cara mengoperasikan peralatan manual budidaya anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 4 -->
                            <tr>
                                <td>4. Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab tentang cara mempersiapkan media tanam Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Row -->
                            <tr>
                                <td rowspan="5" style="width: 20%;">Kelompok Pekerjaan 2: Perlakuan Media Tanam pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.001.01</td>
                                <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.002.01</td>
                                <td>Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO.03.001.01</td>
                                <td>Melakukan Pencacahan Media</td>
                            </tr>
                        </table>

                        <br><br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Rows -->
                            <tr>
                                <td rowspan="2" style="width: 15%;">Unit Kompetensi</td>
                                <td rowspan="2" style="text-align: center; width: 25%;">Bukti-Bukti <br>(Kinerja, Produk, Portofolio, dan/atau Pengetahuan) diidentifikasi berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen</td>
                                <td colspan="3" style="text-align: center;">Jenis Bukti</td>
                                <td colspan="7" style="text-align: center;">Metode dan Perangkat Asesmen</td>
                            </tr>
                            <tr>
                                <!-- Jenis Bukti Columns -->
                                <td style="width: 5%; text-align: center;">L</td>
                                <td style="width: 5%; text-align: center;">TL</td>
                                <td style="width: 5%; text-align: center;">T</td>

                                <!-- Metode dan Perangkat Asesmen Columns -->
                                <td style="width: 10%; text-align: center;"><strong> Observasi langsung </strong><br>(kerja nyata/aktivitas waktu nyata di tempat kerja di lingkungan tempat kerja yang disimulasikan)</td>
                                <td style="width: 10%; text-align: center;"><strong> Kegiatan Terstruktur</strong><br> (latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)</td>
                                <td style="width: 10%; text-align: center;"><strong>Tanya Jawab </strong><br>(pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Portfolio</strong><br>(sampel pekerjaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal atau buku catatan, informasi tentang pengalaman hidup)</td>
                                <td style="width: 10%; text-align: center;"><strong>Reviu Produk</strong><br>Produk hasil proyek, contoh hasil kerja/produk</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Pihak Ketiga</strong><br>(testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara dengan atasan, atau rekan kerja)</td>
                            </tr>

                            <!-- Data Row 1 -->
                            <tr>
                                <td>1. Mempersiapkan Media Tanam Terpilih pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab mempersiapkan media tanam terpilih pada Tanaman Budidaya Anggrek</td>

                                <!-- Jenis Bukti -->
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>

                                <!-- Metode dan Perangkat Asesmen -->
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 2 -->
                            <tr>
                                <td>2. Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab memberikan perlakuan untuk media khusus pada Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 3 -->
                            <tr>
                                <td>3. Melakukan Pencacahan Media</td>
                                <td>Hasil observasi langsung dan tanya jawab melakukan pencacahan media pada Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Row -->
                            <tr>
                                <td rowspan="5" style="width: 20%;">Kelompok Pekerjaan 3: Perlakuan Bibit pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.004.01</td>
                                <td>Menangani Bibit dalam Botol pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.005.01</td>
                                <td>Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.006.01</td>
                                <td>Menangani Bibit Individu Pot Tunggal pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>

                        <br><br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Rows -->
                            <tr>
                                <td rowspan="2" style="width: 15%;">Unit Kompetensi</td>
                                <td rowspan="2" style="text-align: center; width: 25%;">Bukti-Bukti <br>(Kinerja, Produk, Portofolio, dan/atau Pengetahuan) diidentifikasi berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen</td>
                                <td colspan="3" style="text-align: center;">Jenis Bukti</td>
                                <td colspan="7" style="text-align: center;">Metode dan Perangkat Asesmen</td>
                            </tr>
                            <tr>
                                <!-- Jenis Bukti Columns -->
                                <td style="width: 5%; text-align: center;">L</td>
                                <td style="width: 5%; text-align: center;">TL</td>
                                <td style="width: 5%; text-align: center;">T</td>

                                <!-- Metode dan Perangkat Asesmen Columns -->
                                <td style="width: 10%; text-align: center;"><strong> Observasi langsung </strong><br>(kerja nyata/aktivitas waktu nyata di tempat kerja di lingkungan tempat kerja yang disimulasikan)</td>
                                <td style="width: 10%; text-align: center;"><strong> Kegiatan Terstruktur</strong><br>(latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)</td>
                                <td style="width: 10%; text-align: center;"><strong>Tanya Jawab </strong><br>(pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Portfolio</strong><br>(sampel pekerjaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal atau buku catatan, informasi tentang pengalaman hidup)</td>
                                <td style="width: 10%; text-align: center;"><strong>Reviu Produk</strong><br>Produk hasil proyek, contoh hasil kerja/produk</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Pihak Ketiga</strong><br>(testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara dengan atasan, atau rekan kerja)</td>
                            </tr>

                            <!-- Data Row 1 -->
                            <tr>
                                <td>1. Menangani Bibit dalam Botol pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab menangani bibit dalam botol Tanaman Budidaya Anggrek</td>

                                <!-- Jenis Bukti -->
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>

                                <!-- Metode dan Perangkat Asesmen -->
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 2 -->
                            <tr>
                                <td>2. Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab menangani bibit dalam pot Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <!-- Data Row 3 -->
                            <tr>
                                <td>3. Menangani Bibit Individu Pot Tunggal pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab menangani bibit individu pot tunggal Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Row -->
                            <tr>
                                <td rowspan="17" style="width: 20%;">Kelompok Pekerjaan 4: Perawatan Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.007.01</td>
                                <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.008.01</td>
                                <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.009.01</td>
                                <td>Memupuk Tanaman Anggrek Sesuai Jadwal</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TAN.HO02.010.01</td>
                                <td>Melaksanakan Penyiraman Sesuai Jadwal Yang Ditetapkan Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>TAN.HO02.011.01</td>
                                <td>Mengendalikan Hama Penyakit dengan Menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>TAN.HO02.012.01</td>
                                <td>Melakukan Pemberian Zat Pengatur Tubuh (ZPT) pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>TAN.HO02.013.01</td>
                                <td>Mengendalikan Gulma pada Budidaya Tanaman Anggrek sesuai Kondisi Lapangan</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>TAN.HO02.014.01</td>
                                <td>Melaksanakan Repotting pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>TAN.HO02.015.01</td>
                                <td>Memasang Penyangga pada Tanaman/ Tangkai Anggrek</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>TAN.HO02.018.01</td>
                                <td>Melakukan Sortasi dan Grading Tanaman Anggrek Potong dan Pot</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>TAN.HO02.020.01</td>
                                <td>Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek</td>
                            </tr>
                        </table>

                        <br><br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Rows -->
                            <tr>
                                <td rowspan="2" style="width: 15%;">Unit Kompetensi</td>
                                <td rowspan="2" style="text-align: center; width: 25%;">Bukti-Bukti <br>(Kinerja, Produk, Portofolio, dan/atau Pengetahuan) diidentifikasi berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen</td>
                                <td colspan="3" style="text-align: center;">Jenis Bukti</td>
                                <td colspan="7" style="text-align: center;">Metode dan Perangkat Asesmen</td>
                            </tr>
                            <tr>
                                <!-- Jenis Bukti Columns -->
                                <td style="width: 5%; text-align: center;">L</td>
                                <td style="width: 5%; text-align: center;">TL</td>
                                <td style="width: 5%; text-align: center;">T</td>

                                <!-- Metode dan Perangkat Asesmen Columns -->
                                <td style="width: 10%; text-align: center;"><strong> Observasi langsung </strong><br>(kerja nyata/aktivitas waktu nyata di tempat kerja di lingkungan tempat kerja yang disimulasikan)</td>
                                <td style="width: 10%; text-align: center;"><strong> Kegiatan Terstruktur</strong><br>(latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)</td>
                                <td style="width: 10%; text-align: center;"><strong>Tanya Jawab </strong><br>(pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Portfolio</strong><br>(sampel pekerjaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal atau buku catatan, informasi tentang pengalaman hidup)</td>
                                <td style="width: 10%; text-align: center;"><strong>Reviu Produk</strong><br>Produk hasil proyek, contoh hasil kerja/produk</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Pihak Ketiga</strong><br>(testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara dengan atasan, atau rekan kerja)</td>
                            </tr>

                            <!-- Data Row Example -->
                            <tr>
                                <td>1. Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab tentang memasang jaringan irigasi pada Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- Add rows 2 through 12 similarly -->
                        </table>
                        <br>
                        <br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Row -->
                            <tr>
                                <td rowspan="5" style="width: 20%;">Kelompok Pekerjaan 5: Pemanenan dan Pengemasan Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.016.01</td>
                                <td>Melakukan Pemanenan Tanaman Budidaya Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.017.01</td>
                                <td>Mengemas Anggrek Potong</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.019.01</td>
                                <td>Mengemas Anggrek Pot</td>
                            </tr>
                        </table>

                        <br><br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <!-- Header Rows -->
                            <tr>
                                <td rowspan="2" style="width: 15%;">Unit Kompetensi</td>
                                <td rowspan="2" style="text-align: center; width: 25%;">Bukti-Bukti <br>(Kinerja, Produk, Portofolio, dan/atau Pengetahuan) diidentifikasi berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen</td>
                                <td colspan="3" style="text-align: center;">Jenis Bukti</td>
                                <td colspan="7" style="text-align: center;">Metode dan Perangkat Asesmen</td>
                            </tr>
                            <tr>
                                <!-- Jenis Bukti Columns -->
                                <td style="width: 5%; text-align: center;">L</td>
                                <td style="width: 5%; text-align: center;">TL</td>
                                <td style="width: 5%; text-align: center;">T</td>

                                <!-- Metode dan Perangkat Asesmen Columns -->
                                <td style="width: 10%; text-align: center;"><strong> Observasi langsung </strong><br>(kerja nyata/aktivitas waktu nyata di tempat kerja di lingkungan tempat kerja yang disimulasikan)</td>
                                <td style="width: 10%; text-align: center;"><strong> Kegiatan Terstruktur</strong><br>(latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)</td>
                                <td style="width: 10%; text-align: center;"><strong>Tanya Jawab </strong><br>(pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Portfolio</strong><br>(sampel pekerjaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal atau buku catatan, informasi tentang pengalaman hidup)</td>
                                <td style="width: 10%; text-align: center;"><strong>Reviu Produk</strong><br>Produk hasil proyek, contoh hasil kerja/produk</td>
                                <td style="width: 10%; text-align: center;"><strong>Verifikasi Pihak Ketiga</strong><br>(testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara dengan atasan, atau rekan kerja)</td>
                            </tr>

                            <!-- Data Row 1 -->
                            <tr>
                                <td>1. Melakukan Pemanenan Tanaman Budidaya Anggrek</td>
                                <td>Hasil observasi langsung dan tanya jawab pemanenan Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2. Mengemas Anggrek potong</td>
                                <td>Hasil observasi langsung dan tanya jawab pemanenan Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3. Mengemas Anggrek POT</td>
                                <td>Hasil observasi langsung dan tanya jawab pemanenan Tanaman Budidaya Anggrek</td>
                                <td style="text-align: center;">√</td>
                                <td></td>
                                <td style="text-align: center;">√</td>
                                <td style="text-align: center;">CL</td>
                                <td></td>
                                <td style="text-align: center;">DPT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <br>

                        <table border="0" width="100%" cellpadding="10" class="no-border">
                            <!-- Row 3.1 -->
                            <tr>
                                <td style="width: 5%;">3.1.</td>
                                <td style="width: 50%;">a. Karakteristik Kandidat:</td>
                                <td style="width: 45%;">Ada / tidak ada* karakteristik khusus Kandidat<br>
                                    <i>Jika Ada, tuliskan</i>
                                </td>
                            </tr>
                            <!-- Row 3.1.b -->
                            <tr>
                                <td></td>
                                <td>b. Kebutuhan kontekstualisasi terkait tempat kerja:</td>
                                <td>Ada / tidak ada* kebutuhan kontekstualisasi<br>
                                    <i>Jika Ada, tuliskan</i>
                                </td>
                            </tr>

                            <!-- Row 3.2 -->
                            <tr>
                                <td>3.2.</td>
                                <td>Saran yang diberikan oleh paket pelatihan atau pengembang pelatihan</td>
                                <td>Ada / tidak ada* saran<br>
                                    <i>Jika Ada, tuliskan</i>
                                </td>
                            </tr>

                            <!-- Row 3.3 -->
                            <tr>
                                <td>3.3.</td>
                                <td>Penyesuaian perangkat asesmen terkait kebutuhan kontekstualisasi</td>
                                <td>Ada / tidak ada* penyesuaian perangkat<br>
                                    <i>Jika Ada, tuliskan</i>
                                </td>
                            </tr>

                            <!-- Row 3.4 -->
                            <tr>
                                <td>3.4.</td>
                                <td>Peluang untuk kegiatan asesmen terintegrasi dan mencatat setiap perubahan yang diperlukan untuk alat asesmen</td>
                                <td>Ada / tidak ada* peluang<br>
                                    <i>Jika Ada, tuliskan</i>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="2" class="table-border">
                            <thead>
                                <tr>
                                    <th>Orang yang relevan</th>
                                    <th>Nama</th>
                                    <th>Tandatangan dan Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Manajer sertifikasi LSP
                                        <br>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Master Asesor / Master Trainer / Lead Asesor Kompetensi
                                        <br>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Manajer pelatihan Lembaga Training terakreditasi / Lembaga Training terdaftar
                                        <br>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Manajer atau supervisor ditempat kerja
                                        <br>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; "></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <h3>PENYUSUN DAN VALIDATOR</h3>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th style="width: 15%;">STATUS</th>
                                    <th style="width: 5%;">NO</th>
                                    <th style="width: 35%;">NAMA</th>
                                    <th style="width: 20%;">NOMOR MET</th>
                                    <th style="width: 25%;">TANDA TANGAN DAN TANGGAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Penyusun Row -->
                                <tr>
                                    <td rowspan="2" style="text-align: center;">PENYUSUN</td>
                                    <td style="text-align: center;">1</td>
                                    <td>Maria Ulfa</td>
                                    <td>000.006680 2023</td>
                                    <td>
                                        <div class="canvas-container" style="border: 1px solid black; width: 400px; height: 100px;">
                                            <canvas id="canvasAsesor" width="400" height="100"></canvas>
                                        </div>
                                        <button type="button" onclick="clearCanvas('canvasAsesor')">Clear</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <!-- Validator Row -->
                                <tr>
                                    <td rowspan="2" style="text-align: center;">VALIDATOR</td>
                                    <td style="text-align: center;">1</td>
                                    <td>Rivanna Citraning Rachmawati</td>
                                    <td>000.006679 2023</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('css')
{{-- Tambahkan custom CSS jika diperlukan --}}
@stop

@section('js')
<script>
    // Initialize canvas
    const canvas = document.getElementById('canvasAsesor');
    const ctx = canvas.getContext('2d');
    let drawing = false;

    // Start drawing on mousedown
    canvas.addEventListener('mousedown', (e) => {
        drawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    // Draw as the mouse moves
    canvas.addEventListener('mousemove', (e) => {
        if (drawing) {
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }
    });

    // Stop drawing on mouseup or mouseleave
    canvas.addEventListener('mouseup', () => {
        drawing = false;
    });
    canvas.addEventListener('mouseleave', () => {
        drawing = false;
    });

    // Function to clear the canvas
    function clearCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>

@stop