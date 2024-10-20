@extends('adminlte::page')

@section('title', 'FR.IA.02')

@section('content_header')
<div class="pagetitle">
    <h1>Data Table</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.IA.02</li>
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

    /* button {
        margin-top: 10px;
    } */

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
                        <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="text-align:center; vertical-align:middle; width:25%;" colspan="4">
                                        <strong>Kelompok Pekerjaan 1: Prosedur dan SOP Budidaya Tanaman Anggrek</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <th style="text-align:center; width:5%;">No.</th>
                                    <th style="text-align:center; width:20%;">Kode Unit</th>
                                    <th style="text-align:center; width:50%;">Judul Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">1.</td>
                                    <td style="text-align:center;">TAN.HO01.001.01</td>
                                    <td>Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">2.</td>
                                    <td style="text-align:center;">TAN.HO01.002.01</td>
                                    <td>Melakukan Kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">3.</td>
                                    <td style="text-align:center;">TAN.HO01.003.01</td>
                                    <td>Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">4.</td>
                                    <td style="text-align:center;">TAN.HO02.001.01</td>
                                    <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <h6>Unit Kompetensi 1:</h6>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr>
                                    <td>Kode Unit</td>
                                    <td>Pelaksana Budidaya Anggrek</td>
                                </tr>
                                <tr>
                                    <td>Judul Unit</td>
                                    <td>SKM-2102-01/LSP P1 UPGRIS/2017</td>
                                </tr>
                            </thead>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Mengikuti prosedur K3 di tempat kerja</td>
                                        <td>1.1 Pedoman K3 dipahami sesuai ketentuan yang berlaku</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_1" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_1" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Risiko pekerjaan diidentifikasi dan tindakan antisipasi dilakukan secara cermat untuk menghindari kecelakaan kerja</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_2" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_2" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Semua prosedur dan instruksi kerja untuk pengendalian pekerjaan berbahaya diikuti dengan taat azas</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_3" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_3" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mendeskripsikan jenis pekerjaan dan tempat kerja yang berbahaya, berisiko, dan rawan kecelakaan</td>
                                        <td>2.1 Jenis pekerjaan dan lokasi yang mengandung bahaya, berisiko dan rawan kecelakaan dideskripsikan secara cermat</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_4" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_4" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Melaksanakan prosedur Darurat</td>
                                        <td>3.1 Peralatan untuk penanggulangan darurat diidentifikasi dan digunakan sesuai pedoman K3</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_5" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_5" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Prosedur dan kebijakan tanggap darurat di tempat kerja dilaksanakan secara konsisten</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_6" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_6" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Memelihara K3 lingkungan kerja secara berkelanjutan</td>
                                        <td>4.1 Pemeliharaan K3 di lingkungan kerja diikuti sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_7" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_7" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; vertical-align:middle; width:25%;" colspan="4">
                                            <strong>Kelompok Pekerjaan 2:
                                                Perlakuan Media Tanam pada Budidaya Tanaman Anggrek
                                            </strong>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center; width:5%;">No.</th>
                                        <th style="text-align:center; width:20%;">Kode Unit</th>
                                        <th style="text-align:center; width:50%;">Judul Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;">1.</td>
                                        <td style="text-align:center;">TAN.HO02.001.01</td>
                                        <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya
                                            Tanaman Anggrek
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">2.</td>
                                        <td style="text-align:center;">TAN.HO02.002.01</td>
                                        <td>Memberikan Perlakuan untuk Media Khusus pada
                                            Budidaya tanaman anggrek
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">3.</td>
                                        <td style="text-align:center;">TAN.HO03.001.01</td>
                                        <td>Melakukan Pencacahan Media</td>
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            <h6>Unit Kompetensi 2:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>Pelaksana Budidaya Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>SKM-2102-01/LSP P1 UPGRIS/2017</td>
                                    </tr>
                                </thead>
                            </table>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Melakukan komunikasi dengan rekan sekerja</td>
                                        <td>1.1. Cara dan sarana komunikasi dipilih secara efektif</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_1" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_1" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Memproses hasil komunikasi di nurseri anggrek</td>
                                        <td>2.1. Informasi hasil komunikasi dicatat dan ditangani dengan tepat</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_2" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_2" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Melaporkan hasil komunikasi</td>
                                        <td>3.1. Hasil komunikasi dicatat dalam buku kerja</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_3" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_3" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <br>
                                <td>Umpan Balik Asesi :
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </table>

                            <br><br>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; vertical-align:middle; width:25%;" colspan="4">
                                            <strong>Kelompok Pekerjaan 3: Perlakuan Media Tanam pada Budidaya Tanaman Anggrek</strong>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center; width:5%;">No.</th>
                                        <th style="text-align:center; width:20%;">Kode Unit</th>
                                        <th style="text-align:center; width:50%;">Judul Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;">1.</td>
                                        <td style="text-align:center;">TAN.HO02.001.01</td>
                                        <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">2.</td>
                                        <td style="text-align:center;">TAN.HO02.002.01</td>
                                        <td>Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">3.</td>
                                        <td style="text-align:center;">TAN.HO03.001.01</td>
                                        <td>Melakukan Pencacahan Media</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <h6>Unit Kompetensi 3:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>Pelaksana Budidaya Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>SKM-2102-01/LSP P1 UPGRIS/2017</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan peralatan manual</td>
                                        <td>1.1. Peralatan manual didata kelengkapan dan kesesuaian fungsinya</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_1" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_1" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;"></td>
                                        <td></td>
                                        <td>1.2. Jenis peralatan dipilih sesuai tujuan dan fungsi alat</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_2" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_2" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Menggunakan peralatan manual</td>
                                        <td>2.1. Peralatan manual digunakan sesuai dengan fungsi dan ketentuan penggunaannya</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_3" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_3" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;"></td>
                                        <td></td>
                                        <td>2.2. Peralatan manual digunakan dengan menerapkan kaidah keselamatan, keamanan, dan kesehatan kerja</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_4" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_4" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Merawat peralatan manual</td>
                                        <td>3.1. Peralatan manual yang telah digunakan dibersihkan dan disimpan kembali di tempatnya sesuai dengan SOP</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_5" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_5" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;"></td>
                                        <td></td>
                                        <td>3.2. Peralatan manual yang rusak diperbaiki sesuai petunjuk penanggung jawab peralatan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_6" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_6" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Melaporkan hasil penggunaan dan perawatan</td>
                                        <td>4.1. Jenis, jumlah, dan kondisi peralatan serta tempat penyimpanan dicatat</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_7" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_7" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;"></td>
                                        <td></td>
                                        <td>4.2. Hasil pengoperasian alat dan perawatan peralatan manual dilaporkan ke atasan langsung</td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="ya_8" value="ya">
                                        </td>
                                        <td style="text-align:center;">
                                            <input type="checkbox" name="tidak_8" value="tidak">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <br>
                                <td>Umpan Balik Asesi :
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </table>
                            <br>

                            <h6>Kelompok Pekerjaan 4:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">No.</th>
                                        <th style="text-align:center;">Kode Unit</th>
                                        <th style="text-align:center;">Judul Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;">1.</td>
                                        <td>TAN.HO02.007.01</td>
                                        <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">2.</td>
                                        <td>TAN.HO02.008.01</td>
                                        <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">3.</td>
                                        <td>TAN.HO02.009.01</td>
                                        <td>Memupuk Tanaman Anggrek Sesuai Jadwal</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">4.</td>
                                        <td>TAN.HO02.010.01</td>
                                        <td>Melaksanakan Penyiraman Sesuai Jadwal Yang Ditetapkan Pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">5.</td>
                                        <td>TAN.HO02.011.01</td>
                                        <td>Mengendalikan Hama Penyakit dengan Menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">6.</td>
                                        <td>TAN.HO02.012.01</td>
                                        <td>Melakukan Pemberian Zat Pengatur Tubuh (ZPT) pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">7.</td>
                                        <td>TAN.HO02.013.01</td>
                                        <td>Mengendalikan Gulma pada Budidaya Tanaman Anggrek Sesuai Kondisi Lapangan</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">8.</td>
                                        <td>TAN.HO02.014.01</td>
                                        <td>Melaksanakan Repotting pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">9.</td>
                                        <td>TAN.HO02.015.01</td>
                                        <td>Memasang Penyangga pada Tanaman/ Tangkai Anggrek</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h6>Unit Kompetensi 4:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>Pelaksana Budidaya Anggrek</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>SKM-2102-01/LSP P1 UPGRIS/2017</td>
                                    </tr>
                                </thead>
                            </table>
                            <br>
                            <br>
                            <h6>Unit Kompetensi 5:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.002.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat dan bahan untuk memberi perlakuan pada media tanam</td>
                                        <td>1.1 Kebutuhan alat dan bahan untuk sterilisasi media diperiksa</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat dan bahan campuran media tanam disiapkan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Melakukan perendaman media tanam</td>
                                        <td>2.1 Persiapan perendaman media dilakukan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Media tanam dimasukkan ke dalam wadah khusus</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Media tanam direndam sesuai waktu yang ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mensterilkan media</td>
                                        <td>3.1 Media diletakkan dalam tempat sterilisasi</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Media disterilkan dengan cara pengukusan sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.3 Media dikering-anginkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Merapikan peralatan</td>
                                        <td>4.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Peralatan disimpan ke tempat semula</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <h6>Unit Kompetensi 6:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.003.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Mempersiapkan Peralatan untuk Menanam Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Mendata keperluan alat-alat yang dibutuhkan pada penanaman anggrek</td>
                                        <td>1.1 Seluruh peralatan yang dibutuhkan untuk menanam anggrek didata</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat dan bahan campuran media tanam disiapkan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Kebutuhan alat, pot, dan bahan penyumbat</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.4 Penghalang lubang pot diperiksa</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Menyiapkan peralatan untuk menanam anggrek di tempat penanaman</td>
                                        <td>2.1 Jumlah tanaman yang akan ditanam diketahui</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Seluruh peralatan dan pot sejumlah yang dibutuhkan untuk penanaman anggrek diletakkan di tempat penanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mengatur penempatan pot dan peralatan penanaman di dalam rumah lindung</td>
                                        <td>3.1 Kesiapan area penanaman anggrek di dalam rumah lindung diperiksa</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Pot yang akan diisi media beserta peralatan lainnya diatur dengan rapi di area penanaman yang telah disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 7:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.004.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Menangani Bibit dalam Botol pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat penanaman dan bibit dalam botol</td>
                                        <td>1.1 Daftar kebutuhan alat, bibit dan pot yang telah berisi media diperiksa</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat, bibit dan pot berisi media disiapkan di area kerja yang ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengeluarkan planlet dari botol</td>
                                        <td>2.1 Planlet dikeluarkan dari botol sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Planlet dicuci sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Menanam planlet ke dalam pot</td>
                                        <td>3.1 Planlet ditanam dalam keadaan segar</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Pot tanaman diatur dengan rapi pada tempat yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Memberi pelabelan pada setiap pot tanam</td>
                                        <td>4.1 Bahan untuk label disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Nomor/ kode ditulis pada Label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 8:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.005.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat penanaman dan bibit pot kelompok</td>
                                        <td>1.1 Daftar kebutuhan alat, bibit dan pot kelompok yang telah berisi media diperiksa, agar kebutuhan tersebut dapat disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat, bahan tanaman (bibit) dan pot berisi media disiapkan pada area kerja yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Kondisi bibit diperiksa dalam kondisi baik</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengeluarkan bibit pot kelompok</td>
                                        <td>2.1 Cara penanganan bahan tanaman serta cara penanamannya dilakukan sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Bibit dipilah berdasarkan keseragaman ukuran</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Menanam bibit pot kelompok</td>
                                        <td>3.1 Tanaman yang ditanam dalam keadaan segar dan tegak (kokoh)</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Pot tanaman diatur dengan rapi pada tempat yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Memberi pelabelan pada setiap pot tanam</td>
                                        <td>4.1 Bahan untuk label disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Nomor/ kode ditulis pada Label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.3 Label dipasang pada pot</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 5 -->
                                    <tr>
                                        <td style="text-align:center;">5</td>
                                        <td>Menempatkan bibit dalam tray di lokasi yang sudah ditetapkan</td>
                                        <td>5.1 Bibit disimpan dalam tray yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_11" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_11" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>5.2 Bibit dalam tray dibawa ke tempat yang telah ditentukan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_12" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_12" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>5.3 Bibit dalam tray disimpan pada bedengan yang telah ditentukan sesuai label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_13" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_13" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 9:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.006.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Menangani Bibit Individu Pot Tunggal Pada Budidaya</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat penanaman dan bibit pot tunggal</td>
                                        <td>1.1 Daftar kebutuhan alat, bibit dan pot tunggal yang telah berisi media diperiksa, agar kebutuhan tersebut dapat disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat, bahan tanaman (bibit) dan pot berisi media disiapkan pada area kerja yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Kondisi bibit diperiksa dalam kondisi baik</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Memilah bibit pot tunggal</td>
                                        <td>2.1 Bibit pot kelompok dipilah berdasarkan keseragaman ukuran</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Bibit yang berukuran besar dipilah dan dikumpulkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Menanam bibit pot tunggal</td>
                                        <td>3.1 Pot yang lebih besar disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Tanaman dikeluarkan dari wadah tanam</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.3 Bibit ditanam dalam pot berisi media</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Memberi pelabelan pada setiap pot tanam</td>
                                        <td>4.1 Bahan untuk label disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Nomor/ kode ditulis pada Label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.3 Label dipasang pada pot tanam</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_11" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_11" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 5 -->
                                    <tr>
                                        <td style="text-align:center;">5</td>
                                        <td>Menempatkan bibit dalam tray di lokasi yang sudah ditetapkan</td>
                                        <td>5.1 Bibit disimpan dalam tray yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_12" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_12" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>5.2 Bibit dalam tray dibawa ke tempat yang telah ditentukan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_13" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_13" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>5.3 Bibit dalam tray disimpan pada bedengan yang telah ditentukan sesuai label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_14" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_14" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 10:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.007.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan bahan dan alat yang diperlukan</td>
                                        <td>1.1 Bahan dan alat untuk pemasangan jaringan irigasi diperiksa dan dipilih sesuai jenis dan fungsi</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Peralatan untuk pemasangan jaringan irigasi dihitung sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Peralatan dibawa ke lapangan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Membuat jaringan irigasi</td>
                                        <td>2.1 Saluran irigasi diletakkan berdasarkan rancangan yang telah dibuat</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Panjang saluran irigasi dibuat dengan mempertimbangkan kondisi lahan dan karakteristik tanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Memasang peralatan irigasi</td>
                                        <td>3.1 Peralatan irigasi ditempatkan pada saluran yang sesuai dengan rancangan yang dibuat</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Peralatan irigasi dipasang dalam saluran sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 11:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.008.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Memeriksa ulang kondisi instalasi irigasi</td>
                                        <td>1.1 Instalasi irigasi diperiksa secara teliti dengan cara menghidupkan keran</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Operasi kerja instalasi irigasi diamati secara periodik. Bila terjadi kerusakan ringan pada jaringan tersebut, maka harus diperbaiki seketika</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Kondisi instalasi irigasi dicatat dan dilaporkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                                        <td>2.1 Debit air diatur sesuai kebutuhan tanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Kinerja distribusi air di semua blok pertanaman dikendalikan dari panel pusat</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Distribusi air dihentikan dengan memutar keran pengendali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 12:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.009.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memupuk Tanaman Anggrek Sesuai Jadwal</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat dan bahan untuk pemupukan</td>
                                        <td>1.1 Kebutuhan alat/kesiapan instalasi pemupukan diperiksa apakah tersedia dan berfungsi baik</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Campuran pupuk disiapkan pada wadah aplikasi sesuai jumlah/volume yang ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Melakukan kegiatan pemupukan</td>
                                        <td>2.1 Pemupukan dilakukan sesuai dosis yang telah ditentukan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Teknik pemupukan dilakukan sesuai petunjuk</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Pemupukan dilakukan sesuai jadwal yang ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>3.1 Setelah selesai pemupukan peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 13:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.010.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melaksanakan Penyiraman Sesuai Jadwal Yang Ditetapkan pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Mengecek sumber air dan jaringan irigasi</td>
                                        <td>1.1 Ketersediaan air dan jaringan irigasi diperiksa dengan cermat</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Koneksi antar sektor jaringan air diuji coba</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Air dan jaringan air dipastikan dapat digunakan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Menentukan luas area pertanaman yang disiram</td>
                                        <td>2.1 Luas area yang akan disiram diidentifikasikan dengan benar</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Jumlah air yang diperlukan disesuaikan dengan kebutuhan tanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Melakukan penyiraman</td>
                                        <td>3.1 Tanaman disiram dengan memanfaatkan jaringan irigasi yang tersedia</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Tindakan penyiraman dilakukan sesuai anjuran SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 14:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.011.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Mengendalikan Hama Penyakit dengan Menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan bahan dan alat yang diperlukan</td>
                                        <td>1.1 Bahan dan peralatan disiapkan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Bahan dan alat dibawa ke lapangan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Pakaian K3, masker, sarung tangan dan sepatu dikenakan sesuai prosedur standar K3</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Menyemprot tanaman dengan larutan pestisida</td>
                                        <td>2.1 Larutan pestisida dibuat sesuai dosis anjuran</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Larutan pestisida diaduk hingga merata</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Larutan pestisida dimasukkan ke dalam tangki sprayer</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.4 Penyemprotan larutan pestisida dilakukan sesuai dengan teknik dan waktu yang dianjurkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.5 Petak yang sudah disemprot diberi label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Melakukan tindakan pasca penyemprotan pestisida</td>
                                        <td>3.1 Pestisida disimpan kembali ke tempat semula sesuai instruksi kerja K3</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Pakaian K3 dibersihkan dan disimpan sesuai instruksi kerja K3</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.3 Tubuh dibersihkan dengan sabun sesuai prosedur baku</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_11" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_11" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.4 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_12" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_12" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.5 Peralatan disimpan ke tempat semula</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_13" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_13" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.6 Residu pestisida ditangani sesuai kaidah akrab lingkungan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_14" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_14" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 15:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.012.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melakukan Pemberian Zat Pengatur Tubuh (ZPT) pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan bahan dan alat yang diperlukan</td>
                                        <td>1.1 Bahan dan peralatan yang dibutuhkan untuk mengaplikasikan ZPT disiapkan sesuai dengan kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Bahan ZPT dari jenis tertentu diambil dari tempat penyimpanan dengan mengacu instruksi kerja</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Pakaian K3 dikenakan sesuai prosedur standar</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Membuat larutan ZPT</td>
                                        <td>2.1 Bahan formulasi ZPT ditimbang beratnya atau diukur volumenya sesuai dengan luasan yang akan disemprot</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 ZPT dilarutkan ke dalam air dengan volume sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Larutan ZPT dimasukkan ke dalam aplikator</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.5 Petak yang sudah disemprot diberi label</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mengaplikasikan ZPT ke tanaman</td>
                                        <td>3.1 Waktu aplikasi ditentukan dengan mempertimbangkan aspek teknis</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Cara aplikasi ditentukan dengan mengacu prosedur standar</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.3 Larutan ZPT diaplikasikan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.4 Label diberikan pada petak yang sudah mendapat perlakuan ZPT</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_11" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_11" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h6>Unit Kompetensi 17:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.014.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melaksanakan Repotting pada Budidaya Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan tanaman yang akan di repotting</td>
                                        <td>1.1 Perintah kerja, jadwal, dan SOP repotting dipelajari</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Tanaman anggrek dipelajari untuk mengetahui tanaman yang harus di repotting</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Tanaman yang harus di repotting diidentifikasi sesuai kriteria yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Menyiapkan alat dan bahan untuk melakukan repotting</td>
                                        <td>2.1 Peralatan dan bahan media tanam serta pot yang diperlukan untuk repotting disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Perlengkapan K3 dikenakan sesuai prosedur standar</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Melakukan repotting pada anggrek</td>
                                        <td>3.1 Tanaman yang sudah waktunya di repotting dikeluarkan dari potnya</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Tanaman ditanam pada pot yang lebih besar dan sudah diisi dengan media tanam yang baru</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.3 Tanaman dan media disiram dan ditempatkan pada area khusus yang teduh</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>4.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 18:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.015.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memasang Penyangga pada Tanaman/Tangkai Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan bahan dan alat yang diperlukan</td>
                                        <td>1.1 Bahan dan alat untuk pemasangan penyangga tanaman/tangkai dipilih sesuai keperluan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Penyangga disiapkan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Bahan dan peralatan dibawa ke lokasi penanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Memasang penyangga</td>
                                        <td>2.1 Penyangga dipasang sesuai dengan SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Pengikat ditambahkan sesuai dengan stadia dan umur tanaman</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>3.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 19:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.016.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memanen Tanaman Anggrek Potong</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat panen</td>
                                        <td>1.1 Alat panen diperiksa kelayakan fungsinya sesuai karakteristik produk tanaman yang akan dipanen</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Alat panen yang tidak berfungsi dengan baik diinventarisasi dan diperbaiki sesuai petunjuk penanggung jawab lapangan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Memanen bunga anggrek potong</td>
                                        <td>2.1 Tanaman siap panen didata dan dipilih sesuai klasifikasi panen dan ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Pemanenan tanaman dilakukan sesuai dengan kriteria, waktu, ukuran yang ditentukan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Penanganan pasca panen dilaksanakan sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.4 Hasil panen dicatat dan diberi kode sesuai ketentuan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mencatat hasil panen</td>
                                        <td>3.1 Proses dan hasil panen dicatat dan disimpan secara rapi berdasarkan jumlah, mutu, lokasi</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Hal-hal penting berkaitan dengan proses dan hasil panen dicatat, dianalisis dan dilaporkan kepada penanggung jawab lapangan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>4.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 20:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.017.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Memilih Tanaman Anggrek Pot yang Siap Panen</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Memilih tanaman anggrek pot yang siap panen</td>
                                        <td>1.1 Kriteria panen digunakan untuk penentuan waktu panen</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Tanaman anggrek pot yang siap panen diperiksa sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Tanaman yang telah memenuhi kriteria panen dipisahkan dari kelompok tanaman yang belum siap panen</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengangkut tanaman hasil pemilihan panen</td>
                                        <td>2.1 Tanaman hasil panen dikumpulkan dalam wadah</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Tanaman diangkut ke tempat penampungan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Tanaman disiapkan untuk sortasi, grading, dan pengemasan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 21:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.018.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melakukan Sortasi dan Grading Tanaman Anggrek Potong dan Pot</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat dan bahan sortasi, dan grading pada bunga anggrek potong dan tanaman pot</td>
                                        <td>1.1 Alat sortasi dan grading ditentukan sesuai kebutuhan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Tanaman yang akan disortasi dan grading ditentukan sesuai ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Melakukan sortasi, grading, dan pelabelan</td>
                                        <td>2.1 Ketentuan standar mutu produk yang berlaku di tempat usaha dipelajari</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Tanaman yang sudah memenuhi standar mutu produk (siap dipasarkan) diidentifikasi</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Tanaman yang sudah diidentifikasi dikelompokkan berdasarkan kelompok jenis/varietas dan kelas mutu</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mencatat hasil kegiatan sortasi dan grading</td>
                                        <td>3.1 Tanaman yang telah dikelompokkan dan diberi label dicatat mencakup jenis/varietas, nomor silangan, kelas mutu, dan jumlah pot per kelompok</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Catatan hasil sortasi dan grading dilaporkan kepada pengawas</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>4.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 22:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.019.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melakukan Pengemasan Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat dan bahan untuk melakukan pengemasan anggrek</td>
                                        <td>1.1 Peralatan dan bahan untuk melakukan pengemasan anggrek disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Bahan kemasan dibentuk sesuai dengan bentuk kemasan yang telah ditentukan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengemas anggrek potong</td>
                                        <td>2.1 Spesifikasi jumlah bunga per satuan kemasan ditentukan sesuai ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Penggolongan kualitas bunga di dalam tiap kemasan ditentukan sesuai ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Bunga anggrek potong dibungkus dengan kemasan yang telah disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.4 Kemasan produk diberi label nama dan nomor silangan sesuai ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Mencatat hasil kegiatan sortasi dan grading</td>
                                        <td>3.1 Tanaman yang telah dikelompokkan dan diberi label, dicatat mencakup jenis/varietas, nomor silangan, kelas mutu, dan jumlah pot per kelompok</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Catatan hasil sortasi dan grading dilaporkan kepada pengawas</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 4 -->
                                    <tr>
                                        <td style="text-align:center;">4</td>
                                        <td>Mengemas produk dalam pot</td>
                                        <td>4.1 Tanaman anggrek dikemas bersama potnya</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_9" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_9" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>4.2 Kemasan produk diberi label nama dan nomor silangan sesuai ketentuan perusahaan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_10" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_10" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 5 -->
                                    <tr>
                                        <td style="text-align:center;">5</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>5.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_11" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_11" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>5.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_12" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_12" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>Unit Kompetensi 23:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.020.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Menyiapkan alat dan bahan untuk kegiatan sanitasi lingkungan</td>
                                        <td>1.1 Perintah kerja dan SOP kegiatan sanitasi dipelajari</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Peralatan dan bahan untuk sanitasi lingkungan serta perlengkapan K3 disiapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Perlengkapan K3 dikenakan sesuai prosedur</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Melakukan pekerjaan sanitasi lingkungan sesuai standar dan kriteria lingkungan yang ditetapkan</td>
                                        <td>2.1 Lingkungan pertanaman dan nurseri dibersihkan dan dirapihkan sesuai standar kriteria yang telah ditetapkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Limbah hasil kegiatan sanitasi diperlakukan dengan benar sesuai SOP, agar tidak membahayakan pertanaman, manusia, dan lingkungan serta tidak mengganggu estetika</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.3 Setelah selesai, kegiatan sanitasi lingkungan ini dilaporkan kepada pengawas</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>3.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_8" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_8" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <br>
                                <td>Umpan Balik Asesi :
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </table>
                            <br> <br>
                            <h6>Unit Kompetensi 24:</h6>
                            <table border="1" width="100%" cellpadding="10" class="table-border">
                                <thead>
                                    <tr>
                                        <td>Kode Unit</td>
                                        <td>TAN.HO02.019.01</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Unit</td>
                                        <td>Pemanenan dan Pengemasan Tanaman Anggrek</td>
                                    </tr>
                                </thead>
                            </table>

                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">No.</th>
                                        <th rowspan="2" style="text-align:center;">Elemen</th>
                                        <th rowspan="2" style="text-align:center;">Kriteria Unjuk Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Standar Industri atau Tempat Kerja</th>
                                        <th colspan="2" style="text-align:center;">Pencapaian</th>
                                        <th rowspan="2" style="text-align:center;">Penilaian Lanjut</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Ya</th>
                                        <th style="text-align:center;">Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Elemen 1 -->
                                    <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Memilih tanaman anggrek yang siap panen</td>
                                        <td>1.1 Kriteria panen digunakan untuk penentuan waktu panen diperiksa sesuai SOP</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_1" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_1" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.2 Tanaman anggrek pot yang siap panen dipisahkan dari kelompok tanaman yang belum siap panen</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_2" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_2" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>1.3 Tanaman yang telah memenuhi kriteria panen dipisahkan dari kelompok tanaman yang belum siap panen</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_3" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_3" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 2 -->
                                    <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>Mengangkut tanaman hasil pemilihan panen</td>
                                        <td>2.1 Tanaman hasil panen dikumpulkan dalam wadah</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_4" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_4" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>2.2 Tanaman disiapkan untuk sortasi, grading, dan pengemasan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_5" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_5" value="tidak"></td>
                                        <td></td>
                                    </tr>

                                    <!-- Elemen 3 -->
                                    <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Merapihkan peralatan</td>
                                        <td>3.1 Peralatan dibersihkan</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_6" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_6" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>3.2 Peralatan disimpan sehingga siap digunakan kembali</td>
                                        <td></td>
                                        <td style="text-align:center;"><input type="checkbox" name="ya_7" value="ya"></td>
                                        <td style="text-align:center;"><input type="checkbox" name="tidak_7" value="tidak"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>


                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <br>
                                <td>Umpan Balik Asesi :
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </table>

                            <br>
                            <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td width="50%" valign="top">
                                            <strong>Rekomendasi:</strong><br>
                                            <input type="checkbox" name="kompeten" value="kompeten"> Asesi telah memenuhi pencapaian seluruh kriteria unjuk kerja, direkomendasikan <strong>KOMPETEN</strong><br><br>
                                            <input type="checkbox" name="belum_kompeten" value="belum_kompeten"> Asesi belum memenuhi pencapaian seluruh kriteria unjuk kerja, direkomendasikan <strong>BELUM KOMPETEN</strong><br>
                                            pada:<br>
                                            Kelompok Pekerjaan: ......<br>
                                            Unit: ......<br>
                                            Elemen: ......<br>
                                            KUK: .......
                                        </td>
                                        <td width="50%">
                                            <table border="1" width="100%" cellpadding="5" style="border-collapse: collapse;">
                                                <tr>
                                                    <td><strong>Asesi</strong></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>: ...............................</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanda tangan/ Tanggal</td>
                                                    <td>: ...............................</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <table border="1" width="100%" cellpadding="5" style="border-collapse: collapse;">
                                                <tr>
                                                    <td><strong>Asesor</strong></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>: ...............................</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Reg</td>
                                                    <td>: ...............................</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanda tangan/ Tanggal</td>
                                                    <td>: ...............................</td>
                                                </tr>
                                            </table>
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
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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
    initCanvas('canvasPenyusun');
    initCanvas('canvasValidator');
</script>
@stop