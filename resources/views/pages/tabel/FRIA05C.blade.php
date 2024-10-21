@extends('adminlte::page')

@section('title', 'FR.APL.02')

@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.IA.05.C</li>
        </ol>
    </nav>
</div>
@stop

@section('content')
@include('layouts.scripts')

<style>
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
                            <h3 class="card-title">FR.AI.05C - Form Penilaian Sertifikasi</h3>
                    </div>
                    <div class="card-body">
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td>Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)</td>
                                <td>Judul:</td>
                                <td colspan="2">
                                    <input type="text" name="judul" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Nomor:</td>
                                <td colspan="2">
                                    <input type="text" name="nomor" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td colspan="3">
                                    <input type="radio" name="tuk" value="Sewaktu" required> Sewaktu
                                    <input type="radio" name="tuk" value="Tempat Kerja" required> Tempat Kerja
                                    <input type="radio" name="tuk" value="Mandiri" required> Mandiri
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Asesor</td>
                                <td colspan="3"><input type="text" name="nama_asesor" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Nama Asesi</td>
                                <td colspan="3"><input type="text" name="nama_asesi" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td colspan="3"><input type="date" name="tanggal" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td colspan="3"><input type="text" name="waktu" class="form-control" required></td>
                            </tr>
                        </table>

                        <br>
                        <h4>Lembar Jawaban Pertanyaan Tertulis - Pilihan Ganda</h4>
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                                <th>No.</th>
                                <th>Jawaban</th>
                                <th>Pencapaian</th>
                                <th>No.</th>
                                <th>Jawaban</th>
                                <th>Pencapaian</th>
                            </tr>
                            @for($i = 1; $i <= 12; $i++)
                                <tr>
                                <td>{{ $i }}</td>
                                <td><input type="text" name="jawaban_{{ $i }}" class="form-control"></td>
                                <td><input type="checkbox" name="pencapaian_{{ $i }}" value="Ya"> Ya
                                    <input type="checkbox" name="pencapaian_{{ $i }}" value="Tidak"> Tidak
                                </td>
                                <td>{{ $i + 12 }}</td>
                                <td><input type="text" name="jawaban_{{ $i + 5 }}" class="form-control"></td>
                                <td><input type="checkbox" name="pencapaian_{{ $i + 5 }}" value="Ya"> Ya
                                    <input type="checkbox" name="pencapaian_{{ $i + 5 }}" value="Tidak"> Tidak
                                </td>
                                </tr>
                                @endfor
                        </table>

                        <br>
                        <h4>Umpan Balik untuk Asesi</h4>
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                                <td rowspan="2"> Umpan balik untuk asesi</td>
                                <td>Aspek pengetahuan seluruh unit kompetensi yang diuji (tercapai/belum tercapai)</td>
                                <td><textarea name="umpan_balik" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Tuliskan unit/elemen/KUK jika belum tercapai:</td>
                                <td><textarea name="belum_tercapai" class="form-control"></textarea></td>
                            </tr>
                        </table>

                        <br>
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                                <th rowspan="3" style="padding-left: 21px;"> Asesi</th>
                                <td>Nama</td>
                                <td>
                                <input type="text" name="asesi_nama" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                <input type="date" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Tanda tangan/Tanggal</td>
                                <td>
                                <canvas id="canvasValidator" width="700" height="100" style="border:1px center solid #000;"></canvas>
                                    <br />
                                    <button type="button" onclick="clearCanvas('canvasValidator')">Clear</button>
                                </td>
                            </tr>
                        </table>
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                                <th rowspan="3" > Asesor</th>
                                <td>Nama</td>
                                <td>
                                <input type="text" name="asesi_nama" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                <input type="date" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Tanda tangan/Tanggal</td>
                                <td>
                                <canvas id="canvasPenyusun" width="700" height="100" style="border:1px center solid #000;"></canvas>
                                    <br />
                                    <button type="button" onclick="clearCanvas('canvasPenyusun')">Clear</button>
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
    initCanvas('canvasPenyusun');
    initCanvas('canvasValidator');
</script>

@stop