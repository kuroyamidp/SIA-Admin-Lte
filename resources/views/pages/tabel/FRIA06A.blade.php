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
                        <h4>Jawab Semua Pertanyaan Di Bawah Ini</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border" style="font-size: large;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1.</td>
                                <td>Bagaimanakah prosedur dan instruksi kerja serta persiapan peralatan untuk pengendalian pekerjaan berbahaya dengan tepat sesuai dengan pedoman K3 ? (JRES)</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Bagaimanakah catatan informasi hasil komunikasi yang terdapat di buku kerja? (TS)</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Bagaimanakah catatan tentang jenis, jumlah, kondisi, penggunaan peralatan manual dan peralatan serta tempat penyimpanan sesuai dengan SOP? (JRES)</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Bagaimanakah cara menyiapkan peralatan, pot dan area penanaman anggrek di dalam rumah lindung? (TS)</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Bagaimanakah cara mendapatkan ukuran potongan media tanam yang diinginkan dari hasil pengayakan sesuai kebutuhan rencana produksi? (TS)</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Bagaimanakah cara meletakkan media ke dalam autoklaf? (TS)</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Bagaimanakah prinsip kerja peralatan pencacah media? (TRS)</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Bagaimanakah SOP pengeluaran planlet dari botol? (JRES)</td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Bagaimana cara mengkategorikan tanaman yang ditanam dalam keadaan segar dan tegak (kokoh)? (TS)</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Bagaimanakah cara mengeluarkan tanaman dari wadah tanam? (JRES)</td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Bagaimanakah peralatan irigasi ditempatkan pada saluran yang sesuai dengan rancangan yang dibuat? (JRES)</td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Bagaimana cara menganalisis kondisi instalasi dan melaporannya? (TMS)</td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Bagaimana cara teknik pemupukan yang sesuai dengan petunjuk? (JRES)</td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Bagaimana tindakan penyiraman sesuai anjuran SOP? (JRES)</td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Bagaimana cara penyemprotan larutan pestisida sesuai dengan teknik dan waktu yang dianjurkan? (JRES)</td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Bagaimana cara menggunakan larutan ZPT sesuai kebutuhan? (JRES)</td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Bagaimana prosedur pengendalian gulma dengan menggunakan herbisida sesuai dengan cara, dosis dan waktu yang dianjurkan? (JRES)</td>
                            </tr>
                            <tr>
                                <td>18.</td>
                                <td>Apa saja peralatan dan bahan media tanam serta pot yang diperlukan untuk melakukan repotting? (TS)</td>
                            </tr>
                            <tr>
                                <td>19.</td>
                                <td>Bagaimanakah pemasangan penyangga sesuai SOP? (JRES)</td>
                            </tr>
                            <tr>
                                <td>20.</td>
                                <td>Bagaimanakah ketentuan standar mutu produk yang berlaku? (TMS)</td>
                            </tr>
                            <tr>
                                <td>21.</td>
                                <td>Bagaimanakah SOP tentang kegiatan sanitasi lingkungan? (JRES)</td>
                            </tr>
                            <tr>
                                <td>22.</td>
                                <td>Apakah prosedur memanenan tanaman sesuai dengan kriteria, waktu, ukuran yang ditentukan perusahaan? (JRES)</td>
                            </tr>
                            <tr>
                                <td>23.</td>
                                <td>Bagaimanakah syarat tanaman anggrek pot yang siap panen sesuai SOP? (JRES)</td>
                            </tr>
                            <tr>
                                <td>24.</td>
                                <td>Bagaimanakah cara membungkus bunga anggrek potong dengan kemasan? (TS)</td>
                            </tr>
                        </table>
                        <br><br>
                        <h4>Penyusun dan Validator</h4>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nomor MET</th>
                                    <th>Tanggal</th>
                                    <th>Tanda Tangan dan Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penyusun</td>
                                    <td>1</td>
                                    <td><input type="text" name="penyusun_1_nama" class="form-control" required></td>
                                    <td><input type="text" name="penyusun_1_met" class="form-control" required></td>
                                    <td><input type="date" name="penyusun_1_ttd" class="form-control"></td>
                                    <td>
                                        <canvas id="canvasPenyusun" width="300" height="50" style="border:1px solid #000;"></canvas>
                                        <br />
                                        <button type="button" onclick="clearCanvas('canvasPenyusun')">Clear</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td><input type="text" name="penyusun_2_nama" class="form-control"></td>
                                    <td><input type="text" name="penyusun_2_met" class="form-control"></td>
                                    <td><input type="date" name="penyusun_2_ttd" class="form-control"></td>
                                    <td>
                                        <canvas id="canvasPenyusun2" width="300" height="50" style="border:1px solid #000;"></canvas>
                                        <br />
                                        <button type="button" onclick="clearCanvas('canvasPenyusun2')">Clear</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Validator</td>
                                    <td>1</td>
                                    <td><input type="text" name="validator_1_nama" class="form-control" required></td>
                                    <td><input type="text" name="validator_1_met" class="form-control" required></td>
                                    <td><input type="date" name="validator_1_ttd" class="form-control"></td>
                                    <td>
                                        <canvas id="canvasValidator" width="300" height="50" style="border:1px solid #000;"></canvas>
                                        <br />
                                        <button type="button" onclick="clearCanvas('canvasValidator')">Clear</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td><input type="text" name="validator_2_nama" class="form-control"></td>
                                    <td><input type="text" name="validator_2_met" class="form-control"></td>
                                    <td><input type="date" name="validator_2_ttd" class="form-control"></td>
                                    <td>
                                        <canvas id="canvasValidator2" width="300" height="50" style="border:1px solid #000;"></canvas>
                                        <br />
                                        <button type="button" onclick="clearCanvas('canvasValidator2')">Clear</button>
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
    initCanvas('canvasPenyusun2');
    initCanvas('canvasValidator2');
</script>
@stop