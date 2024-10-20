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

                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr class="guide-header">
                                    <td colspan="3">PANDUAN BAGI PENINJAU/ASESOR</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <ul class="guide-list">
                                            <li>Isilah tabel ini sesuai dengan informasi sesuai pertanyaan/pernyataan dalam table di bawah ini.</li>
                                            <li>Beri tanda centang (√) pada hasil penilaian MUK berdasarkan tinjauan anda dengan jastifikasi profesional anda.</li>
                                            <li>Berikan komentar dengan jastifikasi profesional anda.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HOO1.001.01</td>
                                <td>Melaksanakan prosedur K3 pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO01.002.01</td>
                                <td>Melakukan kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO01.003.01</td>
                                <td>Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.001.01</td>
                                <td>Mempersiapkan Media Tanam Terpilih pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.002.01</td>
                                <td>Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.003.01</td>
                                <td>Mempersiapkan peralatan untuk menanam tanaman anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.004.01</td>
                                <td>Menangani Bibit dalam botol pada budidaya tanaman anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.005.01</td>
                                <td>Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.006.01</td>
                                <td>Menangani Bibit Individu Pot Tunggal Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.007.01</td>
                                <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.007.01</td>
                                <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.008.01</td>
                                <td>Mengoperasikan Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.009.01</td>
                                <td>Memupuk Tanaman Anggrek Sesuai Jadwal</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_1">
                                    </td>
                                    <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_2">
                                    </td>
                                    <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_3">
                                    </td>
                                    <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_4">
                                    </td>
                                    <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_5">
                                    </td>
                                    <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_6">
                                    </td>
                                    <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_7">
                                    </td>
                                    <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_8">
                                    </td>
                                    <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.010.01</td>
                                <td>Melaksanakan Penyiraman Sesuai Jadwal Yang Ditetapkan Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_9">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_9">
                                    </td>
                                    <td><input type="text" name="komentar_9" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_10">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_10">
                                    </td>
                                    <td><input type="text" name="komentar_10" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_11">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_11">
                                    </td>
                                    <td><input type="text" name="komentar_11" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_12">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_12">
                                    </td>
                                    <td><input type="text" name="komentar_12" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_13">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_13">
                                    </td>
                                    <td><input type="text" name="komentar_13" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_14">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_14">
                                    </td>
                                    <td><input type="text" name="komentar_14" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_15">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_15">
                                    </td>
                                    <td><input type="text" name="komentar_15" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_16">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_16">
                                    </td>
                                    <td><input type="text" name="komentar_16" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="2">Unit Kompetensi</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>TAN.HO02.011.01</td>
                                <td>Mengendalikan Hama Penyakit dengan Menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Kegiatan Asesmen</th>
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_17">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_17">
                                    </td>
                                    <td><input type="text" name="komentar_17" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Informasi tertulis dituliskan secara tepat</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_18">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_18">
                                    </td>
                                    <td><input type="text" name="komentar_18" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_19">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_19">
                                    </td>
                                    <td><input type="text" name="komentar_19" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_20">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_20">
                                    </td>
                                    <td><input type="text" name="komentar_20" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_21">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_21">
                                    </td>
                                    <td><input type="text" name="komentar_21" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_22">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_22">
                                    </td>
                                    <td><input type="text" name="komentar_22" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_23">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_23">
                                    </td>
                                    <td><input type="text" name="komentar_23" style="width: 100%;"></td>
                                </tr>
                                <tr>
                                    <td>Tugas asesmen siap digunakan:</td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_24">
                                    </td>
                                    <td class="checkbox">
                                        <input type="checkbox" name="ya_tidak_24">
                                    </td>
                                    <td><input type="text" name="komentar_24" style="width: 100%;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p>Kode Unit: TAN.HO02.012.01</p>
                            <p>Judul Unit: Melakukan Pemberian Zat Pengatur Tubuh (ZPT) pada Budidaya Tanaman Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p>Kode Unit: TAN.HO02.013.01</p>
                            <p>Judul Unit: Mengendalikan Gulma pada Budidaya Tanaman Anggrek sesuai Kondisi Lapangan</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_9"></td>
                                        <td><input type="checkbox" name="ya_tidak_9"></td>
                                        <td><input type="text" name="komentar_9" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_10"></td>
                                        <td><input type="checkbox" name="ya_tidak_10"></td>
                                        <td><input type="text" name="komentar_10" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_11"></td>
                                        <td><input type="checkbox" name="ya_tidak_11"></td>
                                        <td><input type="text" name="komentar_11" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_12"></td>
                                        <td><input type="checkbox" name="ya_tidak_12"></td>
                                        <td><input type="text" name="komentar_12" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_13"></td>
                                        <td><input type="checkbox" name="ya_tidak_13"></td>
                                        <td><input type="text" name="komentar_13" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_14"></td>
                                        <td><input type="checkbox" name="ya_tidak_14"></td>
                                        <td><input type="text" name="komentar_14" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_15"></td>
                                        <td><input type="checkbox" name="ya_tidak_15"></td>
                                        <td><input type="text" name="komentar_15" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_16"></td>
                                        <td><input type="checkbox" name="ya_tidak_16"></td>
                                        <td><input type="text" name="komentar_16" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p>Kode Unit: TAN.HO02.014.01</p>
                            <p>Judul Unit: Melaksanakan Repotting pada Budidaya Tanaman Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_17"></td>
                                        <td><input type="checkbox" name="ya_tidak_17"></td>
                                        <td><input type="text" name="komentar_17" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_18"></td>
                                        <td><input type="checkbox" name="ya_tidak_18"></td>
                                        <td><input type="text" name="komentar_18" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_19"></td>
                                        <td><input type="checkbox" name="ya_tidak_19"></td>
                                        <td><input type="text" name="komentar_19" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_20"></td>
                                        <td><input type="checkbox" name="ya_tidak_20"></td>
                                        <td><input type="text" name="komentar_20" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_21"></td>
                                        <td><input type="checkbox" name="ya_tidak_21"></td>
                                        <td><input type="text" name="komentar_21" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_22"></td>
                                        <td><input type="checkbox" name="ya_tidak_22"></td>
                                        <td><input type="text" name="komentar_22" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_23"></td>
                                        <td><input type="checkbox" name="ya_tidak_23"></td>
                                        <td><input type="text" name="komentar_23" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_24"></td>
                                        <td><input type="checkbox" name="ya_tidak_24"></td>
                                        <td><input type="text" name="komentar_24" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p>Kode Unit: TAN.HO02.015.01</p>
                            <p>Judul Unit: Memasang Penyangga pada Tanaman/ Tangkai Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_25"></td>
                                        <td><input type="checkbox" name="ya_tidak_25"></td>
                                        <td><input type="text" name="komentar_25" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_26"></td>
                                        <td><input type="checkbox" name="ya_tidak_26"></td>
                                        <td><input type="text" name="komentar_26" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_27"></td>
                                        <td><input type="checkbox" name="ya_tidak_27"></td>
                                        <td><input type="text" name="komentar_27" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_28"></td>
                                        <td><input type="checkbox" name="ya_tidak_28"></td>
                                        <td><input type="text" name="komentar_28" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_29"></td>
                                        <td><input type="checkbox" name="ya_tidak_29"></td>
                                        <td><input type="text" name="komentar_29" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_30"></td>
                                        <td><input type="checkbox" name="ya_tidak_30"></td>
                                        <td><input type="text" name="komentar_30" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_31"></td>
                                        <td><input type="checkbox" name="ya_tidak_31"></td>
                                        <td><input type="text" name="komentar_31" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_32"></td>
                                        <td><input type="checkbox" name="ya_tidak_32"></td>
                                        <td><input type="text" name="komentar_32" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.016.01</p>
                            <p><strong>Judul Unit:</strong> Memanen Tanaman Anggrek Potong</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.017.01</p>
                            <p><strong>Judul Unit:</strong> Memanen Tanaman Anggrek Pot</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_9"></td>
                                        <td><input type="checkbox" name="ya_tidak_9"></td>
                                        <td><input type="text" name="komentar_9" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_10"></td>
                                        <td><input type="checkbox" name="ya_tidak_10"></td>
                                        <td><input type="text" name="komentar_10" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_11"></td>
                                        <td><input type="checkbox" name="ya_tidak_11"></td>
                                        <td><input type="text" name="komentar_11" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_12"></td>
                                        <td><input type="checkbox" name="ya_tidak_12"></td>
                                        <td><input type="text" name="komentar_12" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_13"></td>
                                        <td><input type="checkbox" name="ya_tidak_13"></td>
                                        <td><input type="text" name="komentar_13" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_14"></td>
                                        <td><input type="checkbox" name="ya_tidak_14"></td>
                                        <td><input type="text" name="komentar_14" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_15"></td>
                                        <td><input type="checkbox" name="ya_tidak_15"></td>
                                        <td><input type="text" name="komentar_15" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_16"></td>
                                        <td><input type="checkbox" name="ya_tidak_16"></td>
                                        <td><input type="text" name="komentar_16" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.018.01</p>
                            <p><strong>Judul Unit:</strong> Melakukan Sortasi dan Grading Tanaman Anggrek Potong dan Pot</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_17"></td>
                                        <td><input type="checkbox" name="ya_tidak_17"></td>
                                        <td><input type="text" name="komentar_17" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_18"></td>
                                        <td><input type="checkbox" name="ya_tidak_18"></td>
                                        <td><input type="text" name="komentar_18" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_19"></td>
                                        <td><input type="checkbox" name="ya_tidak_19"></td>
                                        <td><input type="text" name="komentar_19" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_20"></td>
                                        <td><input type="checkbox" name="ya_tidak_20"></td>
                                        <td><input type="text" name="komentar_20" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_21"></td>
                                        <td><input type="checkbox" name="ya_tidak_21"></td>
                                        <td><input type="text" name="komentar_21" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_22"></td>
                                        <td><input type="checkbox" name="ya_tidak_22"></td>
                                        <td><input type="text" name="komentar_22" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_23"></td>
                                        <td><input type="checkbox" name="ya_tidak_23"></td>
                                        <td><input type="text" name="komentar_23" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_24"></td>
                                        <td><input type="checkbox" name="ya_tidak_24"></td>
                                        <td><input type="text" name="komentar_24" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.019.01</p>
                            <p><strong>Judul Unit:</strong> Melakukan Pengemasan Tanaman Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_25"></td>
                                        <td><input type="checkbox" name="ya_tidak_25"></td>
                                        <td><input type="text" name="komentar_25" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_26"></td>
                                        <td><input type="checkbox" name="ya_tidak_26"></td>
                                        <td><input type="text" name="komentar_26" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_27"></td>
                                        <td><input type="checkbox" name="ya_tidak_27"></td>
                                        <td><input type="text" name="komentar_27" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_28"></td>
                                        <td><input type="checkbox" name="ya_tidak_28"></td>
                                        <td><input type="text" name="komentar_28" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_29"></td>
                                        <td><input type="checkbox" name="ya_tidak_29"></td>
                                        <td><input type="text" name="komentar_29" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_30"></td>
                                        <td><input type="checkbox" name="ya_tidak_30"></td>
                                        <td><input type="text" name="komentar_30" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_31"></td>
                                        <td><input type="checkbox" name="ya_tidak_31"></td>
                                        <td><input type="text" name="komentar_31" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_32"></td>
                                        <td><input type="checkbox" name="ya_tidak_32"></td>
                                        <td><input type="text" name="komentar_32" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.020.01</p>
                            <p><strong>Judul Unit:</strong> Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_33"></td>
                                        <td><input type="checkbox" name="ya_tidak_33"></td>
                                        <td><input type="text" name="komentar_33" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_34"></td>
                                        <td><input type="checkbox" name="ya_tidak_34"></td>
                                        <td><input type="text" name="komentar_34" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_35"></td>
                                        <td><input type="checkbox" name="ya_tidak_35"></td>
                                        <td><input type="text" name="komentar_35" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_36"></td>
                                        <td><input type="checkbox" name="ya_tidak_36"></td>
                                        <td><input type="text" name="komentar_36" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_37"></td>
                                        <td><input type="checkbox" name="ya_tidak_37"></td>
                                        <td><input type="text" name="komentar_37" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_38"></td>
                                        <td><input type="checkbox" name="ya_tidak_38"></td>
                                        <td><input type="text" name="komentar_38" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_39"></td>
                                        <td><input type="checkbox" name="ya_tidak_39"></td>
                                        <td><input type="text" name="komentar_39" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_40"></td>
                                        <td><input type="checkbox" name="ya_tidak_40"></td>
                                        <td><input type="text" name="komentar_40" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="unit-kompetensi">
                            <h2>Unit Kompetensi</h2>
                            <p><strong>Kode Unit:</strong> TAN.HO02.020.01</p>
                            <p><strong>Judul Unit:</strong> Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek</p>
                            <h3>Kegiatan Asesmen</h3>
                            <table border="1" width="100%" cellpadding="10">
                                <thead>
                                    <tr>
                                        <th>Kegiatan Asesmen</th>
                                        <th>Ya</th>
                                        <th>Tidak</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas</td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="checkbox" name="ya_tidak_1"></td>
                                        <td><input type="text" name="komentar_1" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Informasi tertulis dituliskan secara tepat</td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="checkbox" name="ya_tidak_2"></td>
                                        <td><input type="text" name="komentar_2" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases</td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="checkbox" name="ya_tidak_3"></td>
                                        <td><input type="text" name="komentar_3" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.</td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="checkbox" name="ya_tidak_4"></td>
                                        <td><input type="text" name="komentar_4" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.</td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="checkbox" name="ya_tidak_5"></td>
                                        <td><input type="text" name="komentar_5" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Contoh, benchmark dan/atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.</td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="checkbox" name="ya_tidak_6"></td>
                                        <td><input type="text" name="komentar_6" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)</td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="checkbox" name="ya_tidak_7"></td>
                                        <td><input type="text" name="komentar_7" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td>Tugas asesmen siap digunakan:</td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="checkbox" name="ya_tidak_8"></td>
                                        <td><input type="text" name="komentar_8" style="width: 100%;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
<br>
<br>
<table border="1" width="100%" cellpadding="10">
    <td>
        Nama Petinjau
        <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
    </td>
    <td>
        Nama Petinjau
        <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
    </td>
    <td>
        Nama Petinjau
        <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
    </td>
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