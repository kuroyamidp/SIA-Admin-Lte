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
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 6</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.003.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Mempersiapkan Peralatan untuk Menanam Tanaman Anggrek</td>
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
                                        1. Elemen: Mendata keperluan alat-alat yang dibutuhkan pada penanaman anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1. Seluruh peralatan yang dibutuhkan untuk menanam anggrek didata</span><br>
                                            <span>1.2. Kebutuhan alat, pot, dan bahan penyumbat/penghalang lubang pot diperiksa</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Menyiapkan peralatan untuk menanam anggrek di tempat penanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1. Jumlah tanaman yang akan ditanam diketahui</span><br>
                                            <span>2.2. Seluruh peralatan dan pot sejumlah yang dibutuhkan untuk penanaman anggrek diletakkan di tempat penanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Mengatur penempatan pot dan peralatan penanaman di dalam rumah lindung<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1. Kesiapan area penanaman anggrek di dalam rumah lindung diperiksa</span><br>
                                            <span>3.2. Pot yang akan diisi media beserta peralatan lainnya diatur dengan rapi di area penanaman yang telah disiapkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 7</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.004.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Menangani Bibit dalam Botol pada Budidaya Tanaman Anggrek</td>
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
                                        1. Elemen: Menyiapkan alat penanaman dan bibit dalam botol<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Daftar kebutuhan alat, bibit dan pot yang telah berisi media diperiksa, agar kebutuhan tersebut dapat disiapkan</span><br>
                                            <span>1.2 Alat, bibit dan pot berisi media disiapkan pada area kerja yang telah ditetapkan. Jika pot telah disiapkan di dalam rumah lindung, maka alat dan benih disiapkan di dekat area pot</span><br>
                                            <span>1.3 Kondisi bibit diperiksa dalam kondisi baik, dan media dalam pot pada keadaan lembab</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Mengeluarkan planlet dari botol<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Planlet dikeluarkan dari botol sesuai SOP</span><br>
                                            <span>2.2 Planlet yang sudah dikeluarkan dari botol, dicuci sesuai SOP</span><br>
                                            <span>2.3 Planlet yang sudah dicuci, dibilas sesuai SOP</span><br>
                                            <span>2.4 Planlet ditiriskan pada wadah</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Menanam planlet ke dalam pot<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Planlet ditanam dalam keadaan segar</span><br>
                                            <span>3.2 Pot tanaman diatur dengan rapi pada tempat yang telah ditetapkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Memberi pelabelan pada setiap pot tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Bahan untuk label disiapkan</span><br>
                                            <span>4.2 Nomor/ kode ditulis pada Label</span><br>
                                            <span>4.3 Label dipasang pada pot</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        5. Elemen: Melaporkan hasil penanganan bibit dalam botol<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>5.1 Kegiatan penanaman dicatat</span><br>
                                            <span>5.2 Kegiatan penanaman dilaporkan pada atasan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k5"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk5"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti5" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 8</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.005.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
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
                                        1. Elemen: Menyiapkan alat penanaman dan bibit pot kelompok<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Daftar kebutuhan alat, bahan tanaman (bibit) dan pot yang telah berisi media diperiksa, agar kebutuhan tersebut dapat disiapkan</span><br>
                                            <span>1.2 Alat, bahan tanaman (bibit) dan pot berisi media disiapkan pada area kerja yang telah ditetapkan</span><br>
                                            <span>1.3 Kondisi bibit diperiksa dalam kondisi baik</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Mengeluarkan bibit pot kelompok<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Cara penanganan bahan tanaman serta cara penanamannya dilakukan sesuai SOP</span><br>
                                            <span>2.2 Bibit dipilah berdasarkan keseragaman ukuran</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Menanam bibit pot kelompok<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Tanaman yang ditanam dalam keadaan segar dan tegak (kokoh)</span><br>
                                            <span>3.2 Pot tanaman diatur dengan rapi pada tempat yang telah ditetapkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Memberi pelabelan pada setiap pot tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Bahan untuk label disiapkan</span><br>
                                            <span>4.2 Nomor/ kode ditulis pada Label</span><br>
                                            <span>4.3 Label dipasang pada pot</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        5. Elemen: Menempatkan bibit dalam tray di lokasi yang sudah ditetapkan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>5.1 Bibit disimpan dalam tray yang telah ditetapkan</span><br>
                                            <span>5.2 Bibit dalam tray dibawa ke tempat yang telah ditentukan</span><br>
                                            <span>5.3 Bibit dalam tray disimpan pada bedengan yang telah ditentukan sesuai label</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k5"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk5"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti5" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 9</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.006.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Menangani Bibit Individu Pot Tunggal Pada Budidaya Tanaman Anggrek</td>
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
                                        1. Elemen: Menyiapkan alat penanaman dan bibit pot tunggal<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Daftar kebutuhan alat, bahan tanaman (bibit) dan pot yang telah berisi media disusun</span><br>
                                            <span>1.2 Alat, bahan tanaman (bibit) dan pot berisi media disiapkan pada area kerja yang telah ditetapkan</span><br>
                                            <span>1.3 Kondisi bibit dan media diperiksa dalam kondisi sehat, dan media dalam pot dalam keadaan lembab</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Memilah bibit pot tunggal<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Bibit pot kelompok dipilah berdasarkan keseragaman ukuran</span><br>
                                            <span>2.2 Bibit yang berukuran besar dipilah dan dikumpulkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Menanam bibit pot tunggal<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Pot yang lebih besar disiapkan</span><br>
                                            <span>3.2 Tanaman dikeluarkan dari wadah tanam</span><br>
                                            <span>3.3 Bibit ditanam dalam pot berisi media</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        4. Elemen: Memberi pelabelan pada setiap pot tanam<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Bahan untuk label disiapkan</span><br>
                                            <span>4.2 Nomor/ kode ditulis pada Label</span><br>
                                            <span>4.3 Label dipasang pada pot</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        5. Elemen: Menempatkan bibit dalam tray di lokasi yang sudah ditetapkan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>5.1 Bibit disimpan dalam tray yang telah ditetapkan</span><br>
                                            <span>5.2 Bibit dalam tray dibawa ke tempat yang telah ditentukan</span><br>
                                            <span>5.3 Bibit dalam tray disimpan pada bedengan yang telah ditentukan sesuai label</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k5"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk5"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti5" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 10</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.007.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
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
                                        1. Elemen: Menyiapkan bahan dan alat yang diperlukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Bahan dan alat untuk pemasangan jaringan irigasi diperiksa dan dipilih sesuai jenis dan fungsi</span><br>
                                            <span>1.2 Peralatan untuk pemasangan jaringan irigasi dihitung sesuai kebutuhan</span><br>
                                            <span>1.3 Peralatan dibawa ke lapangan sesuai kebutuhan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Membuat jaringan irigasi<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Saluran irigasi diletakkan berdasarkan rancangan yang telah dibuat</span><br>
                                            <span>2.2 Panjang saluran irigasi dibuat dengan mempertimbangkan kondisi lahan dan karakteristik tanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Memasang peralatan irigasi<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Peralatan irigasi ditempatkan pada saluran yang sesuai dengan rancangan yang dibuat</span><br>
                                            <span>3.2 Peralatan irigasi dipasang dalam saluran sesuai SOP</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 11</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.008.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
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
                                        1. Elemen: Memeriksa ulang kondisi instalasi irigasi<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Instalasi irigasi diperiksa secara teliti dengan cara menghidupkan keran</span><br>
                                            <span>1.2 Operasi kerja instalasi irigasi diamati secara periodik. Bila terjadi kerusakan ringan, harus diperbaiki seketika</span><br>
                                            <span>1.3 Kondisi instalasi irigasi dicatat dan dilaporkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Debit air diatur sesuai kebutuhan tanaman</span><br>
                                            <span>2.2 Kinerja distribusi air di semua blok dikendalikan dari panel pusat</span><br>
                                            <span>2.3 Distribusi air dihentikan dengan memutar keran pengendali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th rowspan="2">Unit Kompetensi 12</th>
                                    <td>Kode Unit :</td>
                                    <td>TAN.HO02.009.01</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit :</td>
                                    <td>Memupuk Tanaman Anggrek Sesuai Jadwal</td>
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
                                        1. Elemen: Menyiapkan alat dan bahan untuk pemupukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Kebutuhan alat/kesiapan instalasi pemupukan diperiksa</span><br>
                                            <span>1.2 Campuran pupuk disiapkan sesuai volume yang ditetapkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        2. Elemen: Melakukan kegiatan pemupukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Pemupukan dilakukan sesuai dosis yang ditentukan</span><br>
                                            <span>2.2 Teknik pemupukan dilakukan sesuai petunjuk</span><br>
                                            <span>2.3 Pemupukan dilakukan sesuai jadwal yang ditetapkan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        3. Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Setelah selesai pemupukan, peralatan dibersihkan</span><br>
                                            <span>3.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 13</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.010.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melaksanakan Penyiraman Sesuai Jadwal Yang Ditetapkan Pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mengecek sumber air dan jaringan irigasi<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Ketersediaan air dan jaringan irigasi diperiksa dengan cermat</span><br>
                                            <span>1.2 Koneksi antar sektor jaringan air diuji coba</span><br>
                                            <span>1.3 Air dan jaringan air dipastikan dapat digunakan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menentukan luas area pertanaman yang disiram<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Luas area yang akan disiram diidentifikasikan dengan benar</span><br>
                                            <span>2.2 Jumlah air yang diperlukan disesuaikan dengan kebutuhan tanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan penyiraman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Tanaman disiram dengan memanfaatkan jaringan irigasi yang tersedia</span><br>
                                            <span>3.2 Tindakan penyiraman dilakukan sesuai anjuran SOP</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 14</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.011.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Mengendalikan Hama Penyakit dengan Menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan bahan dan alat yang diperlukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Bahan dan peralatan disiapkan sesuai kebutuhan</span><br>
                                            <span>1.2 Bahan dan alat dibawa ke lapangan</span><br>
                                            <span>1.3 Pakaian K3, masker, sarung tangan dan sepatu dikenakan sesuai prosedur standar K3</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyemprot tanaman dengan larutan pestisida<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Larutan pestisida dibuat sesuai dosis anjuran</span><br>
                                            <span>2.2 Larutan pestisida diaduk hingga merata</span><br>
                                            <span>2.3 Larutan pestisida dimasukkan ke dalam tangki sprayer</span><br>
                                            <span>2.4 Penyemprotan larutan pestisida dilakukan sesuai dengan teknik dan waktu yang dianjurkan</span><br>
                                            <span>2.5 Petak yang sudah disemprot diberi label</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan tindakan pasca penyemprotan pestisida<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Pestisida disimpan kembali ke tempat semula sesuai instruksi kerja K3</span><br>
                                            <span>3.2 Pakaian K3 dibersihkan dan disimpan sesuai instruksi kerja K3</span><br>
                                            <span>3.3 Tubuh dibersihkan dengan sabun sesuai prosedur baku</span><br>
                                            <span>3.4 Peralatan dibersihkan</span><br>
                                            <span>3.5 Peralatan disimpan ke tempat semula</span><br>
                                            <span>3.6 Residu pestisida ditangani sesuai kaidah akrab lingkungan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 15</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.012.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melakukan Pemberian Zat Pengatur Tubuh (ZPT) pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan ZPT dan alat yang diperlukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Bahan dan alat disiapkan sesuai kebutuhan</span><br>
                                            <span>1.2 ZPT dan alat dibawa ke lokasi</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Memberikan ZPT pada tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 ZPT diberikan pada tanaman dengan dosis yang tepat</span><br>
                                            <span>2.2 Pemberian ZPT dilakukan sesuai teknik yang dianjurkan</span><br>
                                            <span>2.3 Teknik penyemprotan atau perendaman dilakukan sesuai kebutuhan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan tindakan pasca pemberian ZPT<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Peralatan dibersihkan sesuai petunjuk</span><br>
                                            <span>3.2 ZPT disimpan kembali sesuai instruksi kerja</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 16</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.013.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melaksanakan Pemeliharaan Setelah Tanam pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan peralatan dan bahan pemeliharaan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Peralatan dan bahan pemeliharaan disiapkan sesuai dengan kebutuhan</span><br>
                                            <span>1.2 Pakaian K3 dikenakan sesuai prosedur</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan pemeliharaan tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Penyiraman dilakukan sesuai dengan kebutuhan tanaman</span><br>
                                            <span>2.2 Penyiangan dilakukan untuk menghindari hama dan penyakit</span><br>
                                            <span>2.3 Pemupukan dilakukan sesuai kebutuhan tanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan evaluasi kondisi tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Kondisi tanaman dievaluasi secara berkala</span><br>
                                            <span>3.2 Tindakan perbaikan dilakukan jika diperlukan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 17</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.014.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melaksanakan Repotting pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan tanaman yang akan di repotting<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Perintah kerja, jadwal dan SOP repotting tanaman anggrek dipelajari</span><br>
                                            <span>1.2 Tanaman yang harus di repotting diidentifikasi sesuai kriteria yang telah ditetapkan</span><br>
                                            <span>1.3 Tanaman yang harus di repotting diletakkan pada satu area, kemudian dihitung</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan alat dan bahan untuk melakukan repotting<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Peralatan dan bahan media tanam serta pot yang diperlukan untuk melakukan repotting disiapkan</span><br>
                                            <span>2.2 Perlengkapan K3 dikenakan sesuai prosedur standar</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan repotting pada anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Tanaman pada pot yang sudah waktunya di repotting, dikeluarkan dari potnya</span><br>
                                            <span>3.2 Tanaman kembali ditanam pada pot yang lebih besar yang sudah diisi dengan media tanam yang baru</span><br>
                                            <span>3.3 Tanaman dan media disiram dan ditempatkan pada area khusus yang teduh</span><br>
                                            <span>3.4 Hasil repotting dilaporkan ke pengawas lapangan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 18</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.015.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Memasang Penyangga pada Tanaman/ Tangkai Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan bahan dan alat yang diperlukan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Bahan dan alat untuk pemasangan penyangga tanaman/ tangkai dipilih sesuai keperluan</span><br>
                                            <span>1.2 Penyangga disiapkan sesuai kebutuhan</span><br>
                                            <span>1.3 Bahan dan peralatan dibawa ke lokasi penanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Memasang penyangga<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Penyangga dipasang</span><br>
                                            <span>2.2 Penyangga diikat mengikuti SOP</span><br>
                                            <span>2.3 Pengikat ditambahkan sesuai dengan stadia dan umur tanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Peralatan dibersihkan</span><br>
                                            <span>3.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 19</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.016.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Memanen Tanaman Anggrek Potong</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan alat dan bahan untuk memanen<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Alat untuk memanen disiapkan sesuai kebutuhan</span><br>
                                            <span>1.2 Alat dibersihkan dan disimpan dengan baik</span><br>
                                            <span>1.3 K3 diikuti dengan menggunakan pelindung sesuai dengan SOP</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Memanen tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Memanen dilakukan sesuai SOP</span><br>
                                            <span>2.2 Hasil panen disimpan dengan baik</span><br>
                                            <span>2.3 Catatan panen dilaporkan kepada pengawas lapangan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Peralatan dibersihkan</span><br>
                                            <span>3.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 20</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.017.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Menjaga Kualitas Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mengidentifikasi kondisi tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Tanaman yang sehat dan tidak sehat diidentifikasi</span><br>
                                            <span>1.2 Tanda-tanda serangan hama dan penyakit dikenali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mengelola pemeliharaan tanaman<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Prosedur pemeliharaan sesuai dengan SOP dilaksanakan</span><br>
                                            <span>2.2 Hasil pemeliharaan dilaporkan ke pengawas lapangan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Peralatan dibersihkan</span><br>
                                            <span>3.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 21</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.018.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melakukan Sortasi dan Grading Tanaman Anggrek Potong dan Pot</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan alat dan bahan sortasi, dan grading pada bunga anggrek potong dan tanaman pot<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Alat sortasi dan grading ditentukan sesuai kebutuhan</span><br>
                                            <span>1.2 Tanaman yang akan disortasi dan grading ditentukan sesuai ketentuan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan sortasi, grading, dan pelabelan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Ketentuan standar mutu produk yang berlaku di tempat usaha dipelajari</span><br>
                                            <span>2.2 Tanaman yang sudah memenuhi standar mutu produk (siap dipasarkan) diidentifikasi</span><br>
                                            <span>2.3 Tanaman yang sudah diidentifikasi dikelompokkan berdasarkan kelompok jenis/ varietas dan kelas mutu</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mencatat hasil kegiatan sortasi dan grading<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Tanaman yang telah dikelompokkan dan diberi label, dicatat mencakup jenis/ varietas, nomor silangan, kelas mutu dan jumlah pot per kelompok</span><br>
                                            <span>3.2 Catatan hasil sortasi dan grading dilaporkan kepada pengawas</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 22</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.019.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melakukan Pengemasan Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan alat dan bahan untuk melakukan pengemasan anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Peralatan dan bahan untuk melakukan pengemasan anggrek disiapkan</span><br>
                                            <span>1.2 Bahan kemasan dibentuk sesuai dengan bentuk kemasan yang telah ditentukan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mengemas anggrek potong<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Spesifikasi jumlah bunga per satuan kemasan ditentukan sesuai ketentuan perusahaan</span><br>
                                            <span>2.2 Penggolongan kualitas bunga di dalam tiap kemasan ditentukan sesuai ketentuan perusahaan</span><br>
                                            <span>2.3 Bunga anggrek potong dibungkus dengan kemasan yang telah disiapkan</span><br>
                                            <span>2.4 Kemasan produk diberi label nama dan nomor silangan sesuai ketentuan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Mengemas produk dalam pot<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Tanaman anggrek dikemas bersama pot nya</span><br>
                                            <span>3.2 Kemasan produk diberi label nama dan nomor silangan sesuai ketentuan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 23</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.020.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melakukan Distribusi dan Pemasaran Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan dokumen pendukung distribusi dan pemasaran<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Dokumen pendukung distribusi dan pemasaran yang diperlukan disiapkan</span><br>
                                            <span>1.2 Dokumen disusun sesuai ketentuan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan distribusi produk anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Prosedur distribusi produk anggrek mengikuti ketentuan perusahaan</span><br>
                                            <span>2.2 Kualitas produk anggrek dipastikan sebelum proses distribusi</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan pemasaran produk anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Strategi pemasaran sesuai dengan ketentuan perusahaan</span><br>
                                            <span>3.2 Hasil pemasaran dilaporkan kepada atasan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th colspan="4">Unit Kompetensi 24</th>
                                </tr>
                                <tr>
                                    <td>Kode Unit:</td>
                                    <td>TAN.HO02.021.01</td>
                                    <td>Judul Unit:</td>
                                    <td>Melakukan Perawatan Tanaman Anggrek</td>
                                </tr>
                            </thead>
                        </table>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya?</th>
                                    <th>K</th>
                                    <th>BK</th>
                                    <th>Bukti yang Relevan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Menyiapkan alat dan bahan perawatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>1.1 Alat dan bahan perawatan disiapkan</span><br>
                                            <span>1.2 Alat dan bahan perawatan yang digunakan sesuai dengan kebutuhan perawatan tanaman</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melakukan perawatan tanaman anggrek<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>2.1 Prosedur perawatan tanaman mengikuti ketentuan perusahaan</span><br>
                                            <span>2.2 Kualitas tanaman dipastikan sebelum proses perawatan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti2" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Melaporkan hasil perawatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>3.1 Hasil perawatan dilaporkan kepada atasan</span><br>
                                            <span>3.2 Dokumen laporan disusun sesuai ketentuan perusahaan</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti3" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        Elemen: Merapihkan peralatan<br>
                                        <b>Kriteria Unjuk Kerja:</b><br>
                                        <div class="kriteria-margin">
                                            <span>4.1 Peralatan dibersihkan</span><br>
                                            <span>4.2 Peralatan disimpan sehingga siap digunakan kembali</span>
                                        </div>
                                    </td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" style="width: 100%; height: 100px;"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="3">Asesmen dapat / tidak dapat dilanjutkan</td>
                                <td>Asesi:</td>
                                <td>
                                    Nama: <input type="text" name="asesi_nama" class="form-control" required>
                                    <br>
                                    Tanda tangan/Tanggal:
                                    <div class="canvas-container">
                                        <canvas id="canvasAsesi" width="400" height="100"></canvas>
                                    </div>
                                    <button type="button" onclick="clearCanvas('canvasAsesi')">Clear</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ditinjau Oleh Asesor:</td>
                                <td>
                                    Nama: <input type="text" name="asesor_nama" class="form-control" required>
                                    <br>
                                    No. Reg: <input type="text" name="asesor_reg" class="form-control" required>
                                    <br>
                                    Tanda tangan/Tanggal:
                                    <div class="canvas-container">
                                        <canvas id="canvasAsesor" width="400" height="100"></canvas>
                                    </div>
                                    <button type="button" onclick="clearCanvas('canvasAsesor')">Clear</button>
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
@stop

@section('js')
<script>
    function initCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        let drawing = false;

        canvas.addEventListener('mousedown', (e) => {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });

        canvas.addEventListener('mousemove', (e) => {
            if (drawing) {
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
            }
        });

        canvas.addEventListener('mouseup', () => {
            drawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            drawing = false;
        });
    }

    function clearCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Inisialisasi canvas untuk asesmen dan asesor
    initCanvas('canvasAsesi');
    initCanvas('canvasAsesor');
</script>
@stop