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
                        <br>

                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="5" style="width: 20%;">Kelompok Pekerjaan 1: Prosedur dan SOP Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO01.001.01</td>
                                <td>Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO01.002.01</td>
                                <td>Melakukan Kerjasama dengan Teman Kerja pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO01.003.01</td>
                                <td>Mengoperasikan Peralatan Manual pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TAN.HO02.001.01</td>
                                <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah prosedur dan instruksi kerja serta persiapan peralatan untuk pengendalian pekerjaan berbahaya dengan tepat sesuai dengan pedoman K3? (JRES)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimanakah catatan informasi hasil komunikasi yang terdapat di buku kerja? (TS)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">3. Bagaimanakah catatan tentang jenis, jumlah, kondisi, penggunaan peralatan manual dan peralatan serta tempat penyimpanan sesuai dengan SOP? (JRES) </td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">4. Bagaimanakah cara menyiapkan peralatan, pot dan area penanaman anggrek di dalam rumah lindung ? (TS)
                                </td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="4" style="width: 20%;">Perlakuan Media Tanam pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.001.01</td>
                                <td>Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.002.01</td>
                                <td>Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO03.001.01</td>
                                <td>Melakukan Pencacahan Media</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah cara mendapatkan ukuran potongan media tanam yang diinginkan dari hasil pengayakan sesuai kebutuhan rencana produksi? (TS)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimanakah cara meletakkan media ke dalam autoklaf? (TS)</td>
                                <td>
                                    <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">3. Bagaimanakah prinsip kerja peralatan pencacah media? (TRS)</td>
                                <td>
                                    <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>

                        <!-- Perlakuan Bibit pada Budidaya Tanaman Anggrek -->
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="4" style="width: 20%;">Perlakuan Bibit pada Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.004.01</td>
                                <td>Menangani Bibit dalam botol pada budidaya tanaman anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.005.01</td>
                                <td>Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.006.01</td>
                                <td>Menangani Bibit Individu Pot Tunggal pada Budidaya Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah SOP pengeluaran planlet dari botol? (JRES)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimana cara mengkategorikan tanaman yang ditanam dalam keadaan segar dan tegak (kokoh)? (TS)</td>
                                <td>
                                    <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>3. Bagaimanakah cara mengeluarkan dari wadah tanam? (JRES)</td>
                                <td>
                                    <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>

                        <br><br>

                        <!-- Perawatan Budidaya Tanaman Anggrek -->
                        <table border="1" width="100%" cellpadding="12" class="table-border">
                            <tr>
                                <td rowspan="12" style="width: 20%;">Perawatan Budidaya Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.007.01</td>
                                <td>Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.008.01</td>
                                <td>Mengoperasikan jaringan irigasi pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.009.01</td>
                                <td>Memupuk Tanaman Anggrek sesuai Jadwal</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TAN.HO02.010.01</td>
                                <td>Melaksanakan penyiraman sesuai jadwal yang ditetapkan pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>TAN.HO02.011.01</td>
                                <td>Mengendalikan Hama Penyakit dengan menggunakan Pestisida pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>TAN.HO02.012.01</td>
                                <td>Melakukan Pemberian Zat pengatur Tumbuh (ZPT) pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>TAN.HO02.013.01</td>
                                <td>Mengendalikan Gulma pada Budidaya Tanaman Anggrek sesuai Kondisi Lapangan</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>TAN.HO02.014.01</td>
                                <td>Melakukan Repotting pada Budidaya Tanaman Anggrek</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>TAN.HO02.015.01</td>
                                <td>Memasang Penyangga pada Tanaman/Tangkai Anggrek</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>TAN.HO02.018.01</td>
                                <td>Melakukan Sortasi dan Grading Tanaman Anggrek Potong dan Pot</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>TAN.HO02.020.01</td>
                                <td>Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Bagaimanakah peralatan irigasi ditempatkan pada saluran yang sesuai dengan rancangan yang dibuat? (JRES)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimana cara menganalisis kondisi instalasi dan melaporannya? (TMS)</td>
                                <td>
                                    <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>3. Bagaimana cara teknik pemupukan yang sesuai dengan petunjuk? (JRES)</td>
                                <td>
                                    <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>4. Bagaimana tindakan penyiraman sesuai anjuran SOP? (JRES)</td>
                                <td>
                                    <textarea name="bukti4" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>5. Bagaimana cara penyemprotan larutan pestisida sesuai dengan teknik dan waktu yang dianjurkan? (JRES)</td>
                                <td>
                                    <textarea name="bukti5" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>6. Bagaimana cara menggunakan larutan ZPT sesuai kebutuhan? (JRES)</td>
                                <td>
                                    <textarea name="bukti6" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>7. Bagaimana prosedur pengendalian gulma dengan menggunakan herbisida sesuai dengan cara, dosis, dan waktu yang dianjurkan? (JRES)</td>
                                <td>
                                    <textarea name="bukti7" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>8. Apa saja peralatan dan bahan media tanam serta pot yang diperlukan untuk melakukan repotting? (TS)</td>
                                <td>
                                    <textarea name="bukti8" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>9. Bagaimanakah pemasangan penyangga sesuai SOP? (JRES)</td>
                                <td>
                                    <textarea name="bukti9" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>10. Bagaimanakah ketentuan standar mutu produk yang berlaku? (TMS)</td>
                                <td>
                                    <textarea name="bukti10" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>11. Bagaimanakah SOP tentang kegiatan sanitasi lingkungan? (JRES)</td>
                                <td>
                                    <textarea name="bukti11" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>

                        <br><br>

                        <!-- Pemanenan dan Pengemasan Tanaman Anggrek -->
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td rowspan="4" style="width: 20%;">Pemanenan dan Pengemasan Tanaman Anggrek</td> <!-- Merged downwards -->
                                <td>No.</td>
                                <td>Kode Unit</td>
                                <td>Judul Unit</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TAN.HO02.016.01</td>
                                <td>Memanen Tanaman Anggrek Potong</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TAN.HO02.017.01</td>
                                <td>Memanen Tanaman Anggrek Pot</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TAN.HO02.019.01</td>
                                <td>Melakukan Pengemasan Tanaman Anggrek</td>
                            </tr>
                        </table>
                        <br>
                        <h6>Jawab semua pertanyaan di bawah ini:</h6>
                        <br>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td style="width: 50%;">1. Apakah prosedur memanenan tanaman sesuai dengan kriteria, waktu, ukuran yang ditentukan perusahaan? (JRES)</td>
                                <td>
                                    <textarea name="bukti1" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Bagaimanakah syarat tanaman anggrek pot yang siap panen sesuai SOP? (JRES)</td>
                                <td>
                                    <textarea name="bukti2" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>3. Bagaimanakah cara membungkus bunga anggrek potong dengan kemasan? (TS)</td>
                                <td>
                                    <textarea name="bukti3" class="no-border" style="width: 100%;"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br><br>
                        <h6> Pelatih / Asesor harus menggunakan kebijaksanaan (professional justification) saat menentukan apakah jawaban yang diberikan oleh Asesi dapat diterima atau tidak.</h6>
                        <ul>
                            <li>Daftar pertanyaan dapat berisi pertanyaan dari semua dimensi kompetensi. Jika ada pertanyaan yang tidak dijawab, maka dapat dieksplorasi dari menilai melalui pertanyaan verbal.</li>
                            <li>Pertanyaan juga dapat difokuskan pada akurasi dan presisi yang dapat membantu memberikan rekomendasi tindak lanjut untuk menilai.</li>
                            <li>Pertanyaan presisi jika tidak dapat dijawab, penilai disarankan untuk menambahkan lebih banyak latihan / bekerja di bawah pengawasan, sedangkan jika pertanyaan akurasi dilewatkan maka penilai direkomendasikan untuk pelatihan ulang</li>
                        </ul>
                        <br><br>
                        <h6>Penyusun dan Validator:</h6>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <thead>
                                <tr style="background-color: #f4a460;">
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tandatangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                    <td>Penyusun</td>
                                    <td>
                                        <div class="canvas-container">
                                            <canvas id="canvasPenyusun" width="400" height="100"></canvas>
                                        </div>
                                        <button type="button" onclick="clearCanvas('canvasPenyusun')">Clear</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea name="bukti1" class="no-border" style="width: 100%; height: 100px; "></textarea>
                                    </td>
                                    <td>Validator</td>
                                    <td>
                                        <div class="canvas-container">
                                            <canvas id="canvasValidator" width="400" height="100"></canvas>
                                        </div>
                                        <button type="button" onclick="clearCanvas('canvasValidator')">Clear</button>
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