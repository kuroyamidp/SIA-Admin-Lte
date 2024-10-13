@extends('adminlte::page')

@section('title', 'FR.APL.02')

@section('content_header')
<div class="pagetitle">
    <h1>FR.APL.02 - Asesmen Mandiri</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.APL.02</li>
        </ol>
    </nav>
</div>
@stop

@section('content')
@include('layouts.scripts')

<style>
    /* Ensure the input field grows according to the height of its parent */
    .align-middle {
        vertical-align: middle;
    }

    .form-control {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        /* Ensures padding is included in the element's width and height */
    }

    /* Optional: Make the input field stretch to fit the available space */
    .table-border td {
        vertical-align: middle;
    }

    .align-middle {
        vertical-align: top !important;
        /* Ensures that the content is vertically centered */
    }

    .no-border {
        border: none;
        box-shadow: none;
    }

    .no-border:focus {
        outline: none;
        box-shadow: none;
    }

    .table-border {
        border: 1px solid #000;
    }

    .form-control {
        border-radius: 0;
    }

    .kriteria-margin {
        margin-left: 20px;
        /* Adjust this value as needed for the desired margin */
    }
</style>

<div class="layout-px-spacing">
    <!-- Form Section -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
                    <div class="card-header">
                        <form action="{{ route('frapl02.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.APL.02 - Form Penilaian Sertifikasi</h3>
                    </div>
                    <div class="card-body">
                        <!-- Section for Skema Sertifikasi -->
                        <!-- table-striped -->
                        <!-- resize: both; -->
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
                        </table>

                        <br>

                        <!-- Section for Instructions -->
                        <h4>Panduan Asesmen Mandiri</h4>
                        <ul>
                            <li>Baca setiap pertanyaan di kolom sebelah kiri</li>
                            <li>Beri tanda centang (√) pada kotak jika Anda yakin dapat melakukan tugas yang dijelaskan.</li>
                            <li>Isi kolom di sebelah kanan dengan menuliskan bukti yang relevan Anda miliki untuk menunjukkan bahwa Anda telah melakukan pekerjaan.</li>
                        </ul>

                        <br>

                        <!-- Unit Kompetensi -->

                        <br>
                        <h4>Penilaian Kompetensi</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 1</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO01.001.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Melaksanakan prosedur K3 pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        1. Elemen: Mengikuti prosedur K3 di tempat kerja<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Pedoman K3 dipahami sesuai ketentuan yang berlaku</span><br>
                                            <span>1.2 Risiko pekerjaan diidentifikasi dan tindakan antisipasi sudah disiapkan sesuai untuk menghindari kecelakaan kerja</span><br>
                                            <span>1.3 Semua prosedur dan instruksi kerja untuk menjalankan pekerjaan berbahaya dilakukan dengan taat azas</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <!-- <input type="text" class="form-control no-border" style="width: 100%; height: 100px; "> -->
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Mendeskripsikan jenis pekerjaan dan tempat kerja yang berbahaya, berisiko dan rawan kecelakaan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1. Jenis pekerjaan dan lokasi yang mengandung bahaya, berisiko, dan rawan kecelakan dideskripsikan secara cermat</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Melaksanakan prosedur Darurat<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1. Peralatan untuk penanggulangan darurat diidentifikasi dan digunakan sesuai pedoman K3</span><br>
                                            <span>3.2. Prosedur dan kebijakan tanggap darurat di tempat kerja dilaksanakan secara konsisten</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Memelihara K3 lingkungan kerja secara berkelanjutan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1. Pemeliharaan K3 di lingkungan kerja diiikuti sesuai SOP</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 2
                                    <td>Kode Unit :</td>
                                    </th>
                                    <td>
                                        TAN.HO01.002.01
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>
                                        Melakukan Kerjasama dengan Teman Kerja pada
                                        Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">

                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        1. Elemen: Melakukan komunikasi dengan rekan <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>
                                                1.1. Cara dan sarana komunikasi dipilih secara
                                                efektif
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Memproses hasil komunikasi di nurseri anggrek <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1. Informasi hasil komunikasi dicatat dan ditangani dengan tepat</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Melaporkan hasil komunikasi<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1. Hasil komunikasi dicatat dalam buku kerja</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle center">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Memelihara K3 lingkungan kerja secara berkelanjutan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1. Pemeliharaan K3 di lingkungan kerja diiikuti sesuai SOP</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 3
                                    <td>Kode Unit :</td>
                                    </th>
                                    <td>
                                        TAN.HO01.003.01
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>
                                        Mengoperasikan Peralatan Manual pada Budidaya
                                        Tanaman Anggrek

                                    </td>
                                </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        1. Elemen: Menyiapkan peralatan manual <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>
                                                1.1 Peralatan manual didata kelengkapan dan kesesuaian fungsinya
                                            </span><br>
                                            <span>
                                                1.2 Jenis peralatan dipilih sesuai tujuan dan fungsi alat
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Menggunakan peralatan manual <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Peralatan manual digunakan sesuai dengan fungsi dan ketentuan penggunaannya</span> <br>
                                            <span>2.2 Peralatan manual digunakan dengan menerapkan kaidah keselamatan, keamanan dan kesehatan kerja </span> <br>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Merawat peralatan manual<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1. Peralatan manual yang telah digunakan dibersihkan dan disimpan kembali di tempatnya sesuai dengan SOP</span><br>
                                            <span> 3.2 Peralatan manual yang rusak diperbaiki sesuai petunjuk penanggungjawab peralatan perusahaan</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle center">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Melaporkan hasil penggunaan dan <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Jenis, jumlah dan kondisi peralatan serta tempat penyimpanan dicatat</span><br>
                                            <span>4.2 Hasil pengoperasian alat dan perawatan peralatan manual dilaporkan ke atasan langsung</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 4
                                    <td>Kode Unit :</td>
                                    </th>
                                    <td>
                                        TAN.HO02.001.01
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>

                                        Mempersiapkan Media Tanam Terpilih Pada Budidaya
                                        Tanaman Anggrek

                                    </td>
                                </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        1. Elemen: Menyiapkan alat dan bahan media tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>
                                                1.1 Peralatan untuk membuat media tanam disiapkan sesuai jenis, jumlah dan fungsinya
                                            </span><br>
                                            <span>
                                                1.2 Bahan/jenis media tanam disiapkan sesuai kebutuhan rencana produksi
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Menyiapkan media tanam <br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Media dipotong-potong sesuai ukuran
                                                Standar Operasional Prosedur (SOP)
                                            </span> <br>
                                            <span>2.2 Potongan media diayak untuk mendapatkan ukuran yang diinginkan </span> <br>
                                            <span>2.3 Media tanam dikukus dengan waktu sesuai SOP</span> <br>
                                            <span>2.4 Media tanam didinginkan sesuai standar</span> <br>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Menempatkan media di tempat penampungan media<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Media tanam ditampung dalam wadah dan diangkut ke tempat penampungan</span><br>
                                            <span>3.2 Media tanam dalam wadah disimpan secara rapi di tempat penampungan</span><br>
                                            <span>3.3 Catatan hasil penyiapan media tanam dibuat dengan menggunakan format sesuai dengan SOP</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle center">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 5
                                    <td>Kode Unit :</td>
                                    </th>
                                    <td>
                                        TAN.HO02.002.01
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>
                                        Memberikan Perlakuan untuk Media Khusus pada
                                        Budidaya tanaman anggrek

                                    </td>
                                </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        1. Elemen: Menyiapkan alat dan bahan untuk memberi perlakuan pada media tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>
                                                1.1 Kebutuhan alat dan bahan untuk sterilisasi media diperiksa
                                            </span><br>
                                            <span>
                                                1.2 Alat dan bahan campuran media tanam disiapkan sesuai kebutuhan
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Melakukan perendaman media tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Persiapan perendaman media dilakukan
                                            </span> <br>
                                            <span>2.2 Media tanam dimasukkan ke dalam wadah khusus</span> <br>
                                            <span>2.3 Media tanam direndam sesuai waktu yang ditetapkan</span> <br>
                                            <span>2.4 Media dipotong-potong sesuai ukuran yang dikehendaki </span> <br>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Mensterilkan media<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Media diletakkan dalam tempat sterilisasi</span><br>
                                            <span>3.2 Media disterilkan dengan cara pengukusan sesuai SOP</span><br>
                                            <span>3.3 Media dikering-anginkan</span>
                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle center">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Merapikan peralatan br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan ke tempat semula</span><br>

                                        </div>
                                    </td>

                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle center">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
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
    // Additional JS if necessary
</script>
@stop