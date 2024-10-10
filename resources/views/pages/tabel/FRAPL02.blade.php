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
                        <form action="{{ route('frapl02.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.APL.02 - Form Penilaian Sertifikasi</h3>
                    </div>
                    <div class="card-body">
                        <!-- Section for Skema Sertifikasi -->
                        <!-- table-striped -->
                        <table border="1" width="100%" cellpadding="10" class="table-border ">
                            <tr>
                                <td>Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)</td>
                                <td>Judul:</td>
                                <td colspan="2">
                                    <input type="text" name="judul" class="form-control no-border" value="Pelaksana Budidaya Anggrek" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Nomor:</td>
                                <td colspan="2">
                                    <input type="text" name="nomor" class="form-control no-border" value="SKM-2102-01/LSP P1 UPGRIS/2017" required>
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
                        <h4>Unit Kompetensi 1</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border ">
                            <tr>
                                <td>Kode Unit</td>
                                <td><input type="text" name="kode_unit" class="form-control no-border" value="TAN.H001.001.01" required></td>
                                <td>Judul Unit</td>
                                <td><input type="text" name="judul_unit" class="form-control no-border" value="Melaksanakan prosedur K3 pada Budidaya Tanaman Anggrek" required></td>
                            </tr>
                        </table>

                        <br>

                        <h4>Penilaian Kompetensi</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border ">
                            <thead>
                                <tr>
                                    <th>Dapatkah Saya</th>
                                    <th>?</th>
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
                                    <td class="align-middle"></td>
                                    <td class="align-middle"><input type="checkbox" name="k1"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk1"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" rows="3"></textarea>
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
                                    <td class="align-middle"></td>
                                    <td class="align-middle"><input type="checkbox" name="k2"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk2"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" rows="3"></textarea>
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
                                    <td class="align-middle"></td>
                                    <td class="align-middle"><input type="checkbox" name="k3"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk3"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" rows="3"></textarea>
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
                                    <td class="align-middle"></td>
                                    <td class="align-middle"><input type="checkbox" name="k4"></td>
                                    <td class="align-middle"><input type="checkbox" name="bk4"></td>
                                    <td class="align-middle">
                                        <textarea name="bukti4" class="no-border" rows="3"></textarea>
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