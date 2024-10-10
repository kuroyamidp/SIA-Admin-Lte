@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.IA.05A</li>
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
                        <form action="{{ route('fria05a.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.IA.05A. DPT - PERTANYAAN TERTULIS PILIHAN GANDA</h3>
                    </div>
                    <div class="card-body">
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="2">Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)</td>
                                    <td>Judul:</td>
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
                                <tr>
                                    <td>Waktu</td>
                                    <td colspan="2">
                                        <input type="time" name="waktu" class="form-control" required>
                                    </td>
                                </tr>
                            </thead>
                        </table>

                        <!-- Jawab Pertanyaan Section -->
                        <h4>Jawab semua pertanyaan berikut:</h4>
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                                <td>
                                    1. Soal pertanyaan  <br>
                                    <div style="padding-left: 20px;">
                                        a. <br>
                                        b. <br>
                                        c. <br>
                                        d. 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2. Soal pertanyaan 
                                    <div style="padding-left: 20px;">
                                        a. <br>
                                        b. <br>
                                        c. <br>
                                        d. 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3. Soal pertanyaan  <br>
                                    <div style="padding-left: 20px;">
                                        a. <br>
                                        b. <br>
                                        c. <br>
                                        d. 
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <!-- Penyusun dan Validator Section -->
                        <br>
                        <h4>Penyusun dan Validator</h4>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nomor MET</th>
                                    <th>Tanda Tangan dan Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penyusun</td>
                                    <td>1</td>
                                    <td><input type="text" name="penyusun_1_nama" class="form-control" required></td>
                                    <td><input type="text" name="penyusun_1_met" class="form-control" required></td>
                                    <td><input type="text" name="penyusun_1_ttd" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td><input type="text" name="penyusun_2_nama" class="form-control"></td>
                                    <td><input type="text" name="penyusun_2_met" class="form-control"></td>
                                    <td><input type="text" name="penyusun_2_ttd" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Validator</td>
                                    <td>1</td>
                                    <td><input type="text" name="validator_1_nama" class="form-control" required></td>
                                    <td><input type="text" name="validator_1_met" class="form-control" required></td>
                                    <td><input type="text" name="validator_1_ttd" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td><input type="text" name="validator_2_nama" class="form-control"></td>
                                    <td><input type="text" name="validator_2_met" class="form-control"></td>
                                    <td><input type="text" name="validator_2_ttd" class="form-control"></td>
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
    // Additional JS if necessary
</script>
@stop