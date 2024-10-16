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
                                        <strong style="color: blue; ">Prosedur dan SOP Budidaya Tanaman Anggrek</strong>
                                    </td>

                                    <td>
                                        <strong>TAN.HO01.001.01</strong><br>
                                        Melaksanakan Prosedur K3 pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong style="color: blue;">TAN.HO01.002.01</strong><br>
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
                                        Mempersiapkan Peralatan untuk Menanam Tanaman Anggrek
                                    </td>
                                </tr>
                        </table>
                        <br>
                        <br>
                        <h4>
                            <strong>A. Petunjuk</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek</h5>
                            <h5>2. Klarifikasi kepada Asesor apabila ada hal-hal yang belum jelas </h5>
                            <h5>3. Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan </h5>
                            <h5>4. Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan </h5>
                        </div>
                        <br>
                        <h4>
                            <strong>B. Skenario</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>Anda sebagai seorang calon Pelaksana Budidaya Anggrek, pada saat ini anda diminta untuk melaksanakan prosedur dan SOP Budidaya Tanaman Anggrek.</h5>
                        </div>
                        <h4>
                            <strong>C. Langkah Kerja (Elemen dan IK)</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Mengikuti prosedur K3 dan melaksanakan prosedur darurat di tempat pembudidayaan tanaman anggrek</h5>
                            <h5>2. Melakukan komunikasi, memproses dan melaporkan hasil komunikasi dengan rekan sekerja </h5>
                            <h5>3. Menyiapkan, menggunakan, merawat dan melaporkan hasil penggunaan peralatan manual</h5>
                            <h5>4. Menyiapkan dan mengatur alat dan bahan untuk menanam anggrek ditempat penanaman</h5>
                        </div>
                        <br>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="4">
                                        <strong style="color: blue; ">Perlakuan Media Tanam pada Budidaya Tanaman Anggrek</strong>
                                    </td>

                                    <td>
                                        <strong>TAN.HO02.001.01</strong><br>
                                        Mempersiapkan Media Tanam Terpilih Pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong style="color: blue;">TAN.HO02.002.01</strong><br>
                                        Memberikan Perlakuan untuk Media Khusus pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN. HO03.001.01</strong><br>
                                        Melakukan Pencacahan Media
                                    </td>
                                </tr>

                        </table>
                        <br>
                        <br>
                        <h4>
                            <strong>A. Petunjuk</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek.</h5>
                            <h5>2. Klarifikasi kepada Asesor apabila ada hal-hal yang belum jelas.</h5>
                            <h5>3. Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan.</h5>
                            <h5>4. Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan.</h5>
                        </div>
                        <br>
                        <h4>
                            <strong>B. Skenario</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>Anda sebagai seorang calon Pelaksana Budidaya Anggrek, pada saat ini anda diminta untuk memberikan perlakuan media tanam terpilih pada budidaya tanaman Anggrek.</h5>
                        </div>
                        <h4>
                            <strong>C. Langkah Kerja (Elemen dan IK)</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Menyiapkan alat dan bahan media tanam dan menempatkan media di tempat penampungan media.</h5>
                            <h5>2. Melakukan perendaman dan mensterilkan media tanam.</h5>
                            <h5>3. Melakukan pencacahan media tanam dengan peralatan pencacah media.</h5>
                        </div>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="4">
                                        <strong style="color: blue;">Perlakuan Bibit pada Budidaya Tanaman Anggrek</strong>
                                    </td>
                                    <td>
                                        <strong>TAN.HO02.004.01</strong><br>
                                        Menangani Bibit dalam botol pada budidaya tanaman anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong style="color: blue;">TAN.HO02.005.01</strong><br>
                                        Menangani Bibit Pot Kelompok pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.006.01</strong><br>
                                        Menangani Bibit Individu Pot Tunggal pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <br>
                        <h4>
                            <strong>A. Petunjuk</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek.</h5>
                            <h5>2. Klarifikasi kepada Asesor apabila ada hal-hal yang belum jelas.</h5>
                            <h5>3. Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan.</h5>
                            <h5>4. Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan.</h5>
                        </div>
                        <br>
                        <h4>
                            <strong>B. Skenario</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>Anda sebagai seorang calon Pelaksana Budidaya Anggrek, pada saat ini anda diminta untuk menangani bibit dalam botol pada budidaya tanaman Anggrek.</h5>
                        </div>
                        <h4>
                            <strong>C. Langkah Kerja (Elemen dan IK)</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Mengeluarkan, menanam planlet dari botol, memberi pelabelan pada setiap pot tanam dan melaporkan hasil penanganan bibit dalam botol.</h5>
                            <h5>2. Mengeluarkan, menanam bibit pot kelompok, memberi pelabelan pada setiap pot tanam, dan menempatkan bibit dalam tray di lokasi yang sudah ditetapkan.</h5>
                            <h5>3. Memilah, menanam bibit pot tunggal, memberi pelabelan pada setiap pot tanam dan menempatkan bibit dalam tray.</h5>
                        </div>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="10">
                                        <strong style="color: blue;">Perawatan Budidaya Tanaman Anggrek</strong>
                                    </td>
                                    <td>
                                        <strong>TAN.HO02.007.01</strong><br>
                                        Memasang Jaringan Irigasi pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.008.01</strong><br>
                                        Mengoperasikan jaringan irigasi pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.009.01</strong><br>
                                        Memupuk Tanaman Anggrek sesuai Jadwal
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.010.01</strong><br>
                                        Melaksanakan penyiraman sesuai jadwal yang ditetapkan pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.011.01</strong><br>
                                        Mengendalikan Hama Penyakit dengan menggunakan Pestisida pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.012.01</strong><br>
                                        Melakukan Pemberian Zat pengatur Tumbuh (ZPT) pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.013.01</strong><br>
                                        Mengendalikan Gulma pada Budidaya Tanaman Anggrek sesuai Kondisi Lapangan
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.014.01</strong><br>
                                        Melakukan Repotting pada Budidaya Tanaman Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.015.01</strong><br>
                                        Memasang Penyangga pada Tanaman/Tangkai Anggrek
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.020.01</strong><br>
                                        Melakukan Kegiatan Sanitasi Lingkungan Nurseri Tanaman Anggrek
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <br>
                        <h4>
                            <strong>A. Petunjuk</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek.</h5>
                            <h5>2. Klarifikasi kepada Asesor apabila ada hal-hal yang belum jelas.</h5>
                            <h5>3. Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan.</h5>
                            <h5>4. Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan.</h5>
                        </div>
                        <br>
                        <h4>
                            <strong>B. Skenario</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>Anda sebagai seorang calon Pelaksana Budidaya Anggrek, pada saat ini anda diminta untuk memasang jaringan irigasi pada budidaya tanaman Anggrek.</h5>
                        </div>
                        <h4>
                            <strong>C. Langkah Kerja (Elemen dan IK)</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Menyiapkan dan memasang bahan dan alat irigasi yang diperlukan pada budidaya anggrek.</h5>
                            <h5>2. Memeriksa ulang kondisi dan mengoperasikan instalasi irigasi.</h5>
                            <h5>3. Melakukan kegiatan pemupukan tanaman anggrek.</h5>
                            <h5>4. Mengecek sumber air dan jaringan irigasi serta melakukan penyiraman ke tanaman anggrek.</h5>
                            <h5>5. Menyemprot tanaman dengan larutan pestisida dan melakukan tindakan pasca penyemprotan pestisida.</h5>
                            <h5>6. Membuat larutan ZPT dan mengaplikasikan ZPT ke tanaman.</h5>
                            <h5>7. Melakukan kegiatan pengendalian gulma.</h5>
                            <h5>8. Menyiapkan tanaman yang akan di repotting dan melakukan repotting pada anggrek.</h5>
                            <h5>9. Memasang penyangga pada tanaman atau tangkai anggrek.</h5>
                            <h5>10. Melakukan sortasi, grading, pelabelan dan mencatat hasil kegiatan sortasi dan grading.</h5>
                            <h5>11. Melakukan pekerjaan sanitasi lingkungan sesuai standar dan kriteria lingkungan yang ditetapkan.</h5>
                        </div>
                        <br>
                        <br>
                        <table border="1" width="100%" cellpadding="10">
                            <thead>
                                <tr>
                                    <td rowspan="4">
                                        <strong style="color: blue;">Pemanenan dan Pengemasan Tanaman Anggrek</strong>
                                    </td>
                                    <td>
                                        <strong>TAN.HO02.016.01</strong><br>
                                        Memanen Tanaman Anggrek Potong
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.017.01</strong><br>
                                        Memanen Tanaman Anggrek Pot
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TAN.HO02.019.01</strong><br>
                                        Melakukan Pengemasan Tanaman Anggrek
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <br>
                        <h4>
                            <strong>A. Petunjuk</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek.</h5>
                            <h5>2. Klarifikasi kepada Asesor apabila ada hal-hal yang belum jelas.</h5>
                            <h5>3. Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan.</h5>
                            <h5>4. Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan.</h5>
                        </div>
                        <br>
                        <h4>
                            <strong>B. Skenario</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>Anda sebagai seorang calon Pelaksana Budidaya Anggrek, pada saat ini anda diminta untuk memanen tanaman Anggrek potong.</h5>
                        </div>
                        <h4>
                            <strong>C. Langkah Kerja (Elemen dan IK)</strong>
                        </h4>
                        <div style="margin-left: 20px;">
                            <h5>1. Memanen tanaman bunga anggrek potong dan mencatat hasil panen.</h5>
                            <h5>2. Memilih tanaman anggrek potong yang siap panen dan mengangkut tanaman hasil pemilihan panen.</h5>
                            <h5>3. Mengemas anggrek potong dalam pot.</h5>
                        </div>
                        <br>

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