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
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="4">
                                        <strong>Prosedur dan SOP Budidaya Tanaman Anggrek</strong>
                                    </td>

                                    <td>
                                        <strong>TAN.HO01.001.01</strong><br>
                                        Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO01.002.01</strong><br>
                                        Melakukan kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO01.003.01</strong><br>
                                        Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.003.01</strong><br>
                                        Mempersiapkan Media Tanam Terpilih Pada Budidaya
                                        Tanaman Anggrek

                                    </td>
                                </tr>
                        </table>
                        <br>
                        <br>
                        <br>
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
</table>

<br>
<table border="1" width="100%" cellpadding="10" class="table-border">
    <thead>
        <tr style="background-color: #f4a460;">
            <th>No.</th>
            <th>Elemen</th>
            <th>Kriteria Unjuk Kerja</th>
            <th>Standar Industri atau Tempat Kerja</th>
            <th colspan="2">Pencapaian</th>
            <th>Penilaian Lanjut</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Mengikuti prosedur K3 di tempat kerja</td>
            <td>1.1 Pedoman K3 dipahami sesuai ketentuan yang berlaku</td>
            <td></td>
            <td colspan="2">
                <table width="100%">
                    <tr>
                        <td>Ya</td>
                        <td>Tidak</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="ya" value="ya"></td>
                        <td><input type="checkbox" name="tidak" value="tidak"></td>
                    </tr>
                </table>
            </td>
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