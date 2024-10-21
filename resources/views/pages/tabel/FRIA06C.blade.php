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
                        <br><br>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr style="text-align: center;">
                                    <th rowspan="2" style="width: 5%;">No</th>
                                    <th rowspan="2">Jawaban</th>
                                    <th colspan="2">Pencapaian</th>
                                </tr>
                                <tr style="text-align: center;">
                                    <th>Ya</th>
                                    <th>Tidak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1.</td>
                                    <td><input type="text" name="jawaban_1" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_1" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_1" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2.</td>
                                    <td><input type="text" name="jawaban_2" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_2" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_2" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3.</td>
                                    <td><input type="text" name="jawaban_3" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_3" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_3" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4.</td>
                                    <td><input type="text" name="jawaban_4" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_4" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_4" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5.</td>
                                    <td><input type="text" name="jawaban_5" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_5" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_5" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6.</td>
                                    <td><input type="text" name="jawaban_6" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_6" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_6" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7.</td>
                                    <td><input type="text" name="jawaban_7" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_7" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_7" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8.</td>
                                    <td><input type="text" name="jawaban_8" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_8" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_8" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9.</td>
                                    <td><input type="text" name="jawaban_9" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_9" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_9" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">10.</td>
                                    <td><input type="text" name="jawaban_10" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_10" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_10" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">11.</td>
                                    <td><input type="text" name="jawaban_11" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_11" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_11" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">12.</td>
                                    <td><input type="text" name="jawaban_12" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_12" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_12" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">13.</td>
                                    <td><input type="text" name="jawaban_13" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_13" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_13" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">14.</td>
                                    <td><input type="text" name="jawaban_14" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_14" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_14" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">15.</td>
                                    <td><input type="text" name="jawaban_15" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_15" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_15" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">16.</td>
                                    <td><input type="text" name="jawaban_16" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_16" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_16" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">17.</td>
                                    <td><input type="text" name="jawaban_17" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_17" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_17" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">18.</td>
                                    <td><input type="text" name="jawaban_18" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_18" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_18" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">19.</td>
                                    <td><input type="text" name="jawaban_19" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_19" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_19" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">20.</td>
                                    <td><input type="text" name="jawaban_20" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_20" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_20" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">21.</td>
                                    <td><input type="text" name="jawaban_21" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_21" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_21" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">22.</td>
                                    <td><input type="text" name="jawaban_22" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_22" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_22" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">23.</td>
                                    <td><input type="text" name="jawaban_23" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_23" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_23" style="width: 20px; height: 20px;"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">24.</td>
                                    <td><input type="text" name="jawaban_24" class="form-control"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="ya_24" style="width: 20px; height: 20px;"></td>
                                    <td class="checkbox-cell" style="text-align: center;"><input type="checkbox" name="tidak_24" style="width: 20px; height: 20px;"></td>
                                </tr>

                            </tbody>
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
                                <th rowspan="3"> Asesor</th>
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