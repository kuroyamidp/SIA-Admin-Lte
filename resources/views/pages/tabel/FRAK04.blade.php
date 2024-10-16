@extends('adminlte::page')

@section('title', 'FR.MAPA.01')

@section('content_header')
<div class="pagetitle">
    <h1>Data Table</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.AK.04</li>
        </ol>
    </nav>
</div>
@stop

@section('content')
@include('layouts.scripts')
<style>
    .canvas-container {
        border: 1px solid black;
        width: 300px;
        height: 100px;
        margin-top: 10px;
    }

    /* button {
        margin-top: 10px;
    } */

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
    <!-- Form Section -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
                    <div class="card-header">
                        <form action="{{ route('frmapa01.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.AK.04. BANDING ASESMEN</h3>
                    </div>
                    <div class="card-body">

                        <!-- New table based on the image -->
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td colspan="2"><strong>Nama Asesi:</strong></td>
                                <td colspan="4"><input type="text" name="nama_asesi" class="form-control no-border"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Nama Asesor:</strong></td>
                                <td colspan="4"><input type="text" name="nama_asesor" class="form-control no-border"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Tanggal Asesmen:</strong></td>
                                <td colspan="4"><input type="date" name="tanggal_asesmen" class="form-control no-border"></td>
                            </tr>
                            <tr>
                                <td colspan="4"><strong>Jawablah dengan Ya atau Tidak pertanyaan-pertanyaan berikut ini:</strong></td>
                                <td style="text-align: center;">Yes</td>
                                <td style="text-align: center;">No</td>
                            </tr>
                            <tr>
                                <td colspan="4">Apakah Proses Banding telah dijelaskan kepada Anda?</td>
                                <td><input type="radio" name="proses_banding" value="ya"></td>
                                <td><input type="radio" name="proses_banding" value="tidak"></td>
                            </tr>
                            <tr>
                                <td colspan="4">Apakah Anda telah mendiskusikan Banding dengan Asesor?</td>
                                <td><input type="radio" name="diskusi_banding" value="ya"></td>
                                <td><input type="radio" name="diskusi_banding" value="tidak"></td>
                            </tr>
                            <tr>
                                <td colspan="4">Apakah Anda mau melibatkan “orang lain” membantu Anda dalam Proses Banding?</td>
                                <td><input type="radio" name="orang_lain" value="ya"></td>
                                <td><input type="radio" name="orang_lain" value="tidak"></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>Banding ini diajukan atas Keputusan Asesmen yang dibuat terhadap Skema Sertifikasi (Kualifikasi/Klaster/Okupasi) berikut:</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2">Skema Sertifikasi:</td>
                                <td colspan="4"><input type="text" name="skema_sertifikasi" class="form-control no-border"></td>
                            </tr>
                            <tr>
                                <td colspan="2">No. Skema Sertifikasi:</td>
                                <td colspan="4"><input type="text" name="no_skema" class="form-control no-border"></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>Banding ini diajukan atas alasan sebagai berikut:</strong></td>
                            </tr>
                            <tr>
                                <td colspan="6"><textarea name="alasan_banding" rows="5" class="form-control no-border"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>Anda mempunyai hak mengajukan banding jika Anda menilai Proses Asesmen tidak sesuai SOP dan tidak memenuhi Prinsip Asesmen.</strong></td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                        <div class="canvas-container" style="border: 1px solid black; width: 300px; height: 100px;">
                                            <canvas id="canvasAsesor" width="200" height="100"></canvas>
                                        </div>
                                        <button type="button" onclick="clearCanvas('canvasAsesor')">Clear</button>
                                    </td>
                                    <td colspan="4">
                                        <input type="date">
                                    </td>
                                </tr>
                        </table>
                        <!-- End of new table -->

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
    // Initialize canvas
    const canvas = document.getElementById('canvasAsesor');
    const ctx = canvas.getContext('2d');
    let drawing = false;

    // Start drawing on mousedown
    canvas.addEventListener('mousedown', (e) => {
        drawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    // Draw as the mouse moves
    canvas.addEventListener('mousemove', (e) => {
        if (drawing) {
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }
    });

    // Stop drawing on mouseup or mouseleave
    canvas.addEventListener('mouseup', () => {
        drawing = false;
    });
    canvas.addEventListener('mouseleave', () => {
        drawing = false;
    });

    // Function to clear the canvas
    function clearCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>

@stop