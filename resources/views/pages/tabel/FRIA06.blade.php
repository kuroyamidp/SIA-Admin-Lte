@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.IA.06.B</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@stop

@section('content')
@include('layouts.scripts')
<style>
    .no-border {
        border: none;
        /* Menghilangkan garis tepi */
        box-shadow: none;
        /* Menghilangkan bayangan yang mungkin muncul */
    }

    /* Jika ingin menghilangkan border saat fokus */
    .no-border:focus {
        outline: none;
        /* Menghilangkan outline saat input difokuskan */
        box-shadow: none;
        /* Menghilangkan bayangan saat fokus */
    }
</style>

<div class="layout-px-spacing">
    <!-- Form Section for Lembar Kunci Jawaban -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
                    <div class="card-header">
                        <form action="{{ route('fria06b.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.IA.06.B LEMBAR KUNCI JAWABAN PERTANYAAN TERTULIS ESAI</h3>
                    </div>
                    <div class="card-body">
                        <table border="1" width="100%" cellpadding="10">
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
                                <!-- Baris berikutnya tetap sama -->
                                <tr>
                                    <td>TUK</td>
                                    <td colspan="2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="f6" id="sewaktu" value="Sewaktu" required>
                                            <label class="form-check-label" for="sewaktu">Sewaktu</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="f6" id="tempat_kerja" value="Tempat Kerja" required>
                                            <label class="form-check-label" for="tempat_kerja">Tempat Kerja</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="f6" id="mandiri" value="Mandiri" required>
                                            <label class="form-check-label" for="mandiri">Mandiri</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Asesor</td>
                                    <td colspan="2">
                                        <input type="text" name="nama_asesor" class="form-control" placeholder="Masukkan Nama Asesor" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Asesi</td>
                                    <td colspan="2">
                                        <input type="text" name="nama_asesi" class="form-control" placeholder="Masukkan Nama Asesi" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td colspan="2">
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </td>
                                </tr>

                            </thead>
                        </table>
                        <br>

                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
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
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah prosedur dan instruksi kerja serta persiapan peralatan untuk pengendalian pekerjaan berbahaya dengan tepat sesuai dengan pedoman K3? (JRES)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimanakah catatan informasi hasil komunikasi yang terdapat di buku kerja? (TS)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">3. Bagaimanakah catatan tentang jenis, jumlah, kondisi, penggunaan peralatan manual dan peralatan serta tempat penyimpanan sesuai dengan SOP? (JRES) </td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">4. Bagaimanakah cara menyiapkan peralatan, pot dan area penanaman anggrek di dalam rumah lindung ? (TS)
                                </td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="4" style="width: 20%;">Perlakuan Media Tanam pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
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
                                <td>TAN.HO03.001.01</td>
                                <td>Melakukan Pencacahan Media</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah cara mendapatkan ukuran potongan media tanam yang diinginkan dari hasil pengayakan sesuai kebutuhan rencana produksi? (TS)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimanakah cara meletakkan media ke dalam autoklaf? (TS)</td>
                                <td>
                                    <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">3. Bagaimanakah prinsip kerja peralatan pencacah media? (TRS)</td>
                                <td>
                                    <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>

<!-- Perlakuan Bibit pada Budidaya Tanaman Anggrek -->
<table border="1" width="100%" cellpadding="10" class="table-border">
    <tr>
        <td rowspan="4" style="width: 20%;">Perlakuan Bibit pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
        <td>No.</td>
        <td>Kode Unit</td>
        <td>Judul Unit</td>
    </tr>
    <tr>
        <td>1</td>
        <td>TAN.HO02.004.01</td>
        <td>Menangani Bibit dalam botol pada budidaya tanaman anggrek</td>
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
<br>
<h6>Jawab semua pertanyaan di bawah ini:</h6>
<br>
<table border="1" width="100%" cellpadding="10" class="table-border">
    <tr>
        <td style="width: 50%;">1. Bagaimanakah SOP pengeluaran planlet dari botol? (JRES)</td>
        <td>
            <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>2. Bagaimana cara mengkategorikan tanaman yang ditanam dalam keadaan segar dan tegak (kokoh)? (TS)</td>
        <td>
            <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>3. Bagaimanakah cara mengeluarkan dari wadah tanam? (JRES)</td>
        <td>
            <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
</table>

<br><br>

<!-- Perawatan Budidaya Tanaman Anggrek -->
<table border="1" width="100%" cellpadding="12" class="table-border">
    <tr>
        <td rowspan="12" style="width: 20%;">Perawatan Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
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
        <td>Mengoperasikan jaringan irigasi pada Budidaya Tanaman Anggrek</td>
    </tr>
    <tr>
        <td>3</td>
        <td>TAN.HO02.009.01</td>
        <td>Memupuk Tanaman Anggrek sesuai Jadwal</td>
    </tr>
    <tr>
        <td>4</td>
        <td>TAN.HO02.010.01</td>
        <td>Melaksanakan penyiraman sesuai jadwal yang ditetapkan pada Budidaya Tanaman Anggrek</td>
    </tr>
    <tr>
        <td>5</td>
        <td>TAN.HO02.011.01</td>
        <td>Mengendalikan Hama Penyakit dengan menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
    </tr>
    <tr>
        <td>6</td>
        <td>TAN.HO02.012.01</td>
        <td>Melakukan Pemberian Zat pengatur Tumbuh (ZPT) pada Budidaya Tanaman Anggrek</td>
    </tr>
    <tr>
        <td>7</td>
        <td>TAN.HO02.013.01</td>
        <td>Mengendalikan Gulma pada Budidaya Tanaman Anggrek sesuai Kondisi Lapangan</td>
    </tr>
    <tr>
        <td>8</td>
        <td>TAN.HO02.014.01</td>
        <td>Melakukan Repotting pada Budidaya Tanaman Anggrek</td>
    </tr>
    <tr>
        <td>9</td>
        <td>TAN.HO02.015.01</td>
        <td>Memasang Penyangga pada Tanaman/Tangkai Anggrek</td>
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
<br>
<h6>Jawab semua pertanyaan di bawah ini:</h6>
<br>
<table border="1" width="100%" cellpadding="10" class="table-border">
    <tr>
        <td style="width: 50%;">1. Bagaimanakah peralatan irigasi ditempatkan pada saluran yang sesuai dengan rancangan yang dibuat? (JRES)</td>
        <td>
            <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>2. Bagaimana cara menganalisis kondisi instalasi dan melaporannya? (TMS)</td>
        <td>
            <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>3. Bagaimana cara teknik pemupukan yang sesuai dengan petunjuk? (JRES)</td>
        <td>
            <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>4. Bagaimana tindakan penyiraman sesuai anjuran SOP? (JRES)</td>
        <td>
            <textarea name="bukti4" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>5. Bagaimana cara penyemprotan larutan pestisida sesuai dengan teknik dan waktu yang dianjurkan? (JRES)</td>
        <td>
            <textarea name="bukti5" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>6. Bagaimana cara menggunakan larutan ZPT sesuai kebutuhan? (JRES)</td>
        <td>
            <textarea name="bukti6" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>7. Bagaimana prosedur pengendalian gulma dengan menggunakan herbisida sesuai dengan cara, dosis, dan waktu yang dianjurkan? (JRES)</td>
        <td>
            <textarea name="bukti7" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>8. Apa saja peralatan dan bahan media tanam serta pot yang diperlukan untuk melakukan repotting? (TS)</td>
        <td>
            <textarea name="bukti8" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>9. Bagaimanakah pemasangan penyangga sesuai SOP? (JRES)</td>
        <td>
            <textarea name="bukti9" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>10. Bagaimanakah ketentuan standar mutu produk yang berlaku? (TMS)</td>
        <td>
            <textarea name="bukti10" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>11. Bagaimanakah SOP tentang kegiatan sanitasi lingkungan? (JRES)</td>
        <td>
            <textarea name="bukti11" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
</table>

<br><br>

<!-- Pemanenan dan Pengemasan Tanaman Anggrek -->
<table border="1" width="100%" cellpadding="10" class="table-border">
    <tr>
        <td rowspan="4" style="width: 20%;">Pemanenan dan Pengemasan Tanaman Anggrek</td> <!-- Merged downwards -->
        <td>No.</td>
        <td>Kode Unit</td>
        <td>Judul Unit</td>
    </tr>
    <tr>
        <td>1</td>
        <td>TAN.HO02.016.01</td>
        <td>Memanen Tanaman Anggrek Potong</td>
    </tr>
    <tr>
        <td>2</td>
        <td>TAN.HO02.017.01</td>
        <td>Memanen Tanaman Anggrek Pot</td>
    </tr>
    <tr>
        <td>3</td>
        <td>TAN.HO02.019.01</td>
        <td>Melakukan Pengemasan Tanaman Anggrek</td>
    </tr>
</table>
<br>
<h6>Jawab semua pertanyaan di bawah ini:</h6>
<br>
<table border="1" width="100%" cellpadding="10" class="table-border">
    <tr>
        <td style="width: 50%;">1. Apakah prosedur memanenan tanaman sesuai dengan kriteria, waktu, ukuran yang ditentukan perusahaan? (JRES)</td>
        <td>
            <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>2. Bagaimanakah syarat tanaman anggrek pot yang siap panen sesuai SOP? (JRES)</td>
        <td>
            <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
    <tr>
        <td>3. Bagaimanakah cara membungkus bunga anggrek potong dengan kemasan? (TS)</td>
        <td>
            <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
        </td>
    </tr>
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
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    // Additional JS if necessary
</script>
@stop