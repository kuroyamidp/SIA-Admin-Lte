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
                                    1. Di bawah ini merupakan bagian dari prosedur dan instruksi kerja untuk pengendalian pekerjaan berbahaya pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Melakukan penyuluhan kepada teman kerja <br>
                                        b. Identifikasi bahaya berdasarkan faktor-faktor bahaya di tempat kerja <br>
                                        c. Melaksanakan penilaian resiko berdasarkan matriks resiko <br>
                                        d. Menentukan pengendalian resiko berdasarkan 5 hierarki pengendalian resiko/ bahaya K3
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2. Berikut ini adalah termasuk konten materi komunikasi secara efektif, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Komponen komunikasi <br>
                                        b. Desain komunikasi <br>
                                        c. Manfaat komunikasi <br>
                                        d. Hambatan komunikasi
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3. Berikut ini adalah kaidah dasar yang diterapkan untuk mengoperasikan peralatan manual sesuai SOP pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Keselamatan kerja <br>
                                        b. Keamanan kerja <br>
                                        c. Kenyamanan kerja <br>
                                        d. Kesehatan kerja
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4. Berikut ini adalah tahapan mempersiapkan proses penanaman tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan keperluan peralatan yang dibutuhkan <br>
                                        b. Menyiapkan zat pengatur tumbuh <br>
                                        c. Menyiapkan tempat kerja <br>
                                        d. Mengatur penempatan peralatan dan pot di dalam green house
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5. Berikut ini adalah kriteria media tanam yang sesuai dengan kebutuhan rencana produksi, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Jenis bahan <br>
                                        b. Karakteristik bahan <br>
                                        c. Besaran potongan bahan <br>
                                        d. Kekuatan bahan
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6. Berikut ini adalah tahapan dari perlakuan khusus dalam mempersiapkan media tanam bagi tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Perendaman media tanam <br>
                                        b. Pemotongan media tanam <br>
                                        c. Fumigasi media tanam <br>
                                        d. Sterilisasi media tanam
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7. Berikut ini adalah hal-hal yang berkaitan dengan kegiatan pencacahan media tanam bagi tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Memahami prinsip kerja peralatan pencacah media tanam <br>
                                        b. Mempersiapkan peralatan manual pencacah media sebagai cadangan <br>
                                        c. Mengoperasikan peralatan pencacah media tanam sesuai petunjuk di buku manual <br>
                                        d. Melakukan perawatan peralatan pencacah media tanam sesuai prosedur yang ada
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    8. Berikut ini adalah tahapan dalam menangani planlet/bibit tanaman anggrek dalam botol, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Melakukan sterilisasi green house <br>
                                        b. Menyiapkan peralatan dan planlet <br>
                                        c. Mengeluarkan bibit tanaman dari botol <br>
                                        d. Memindahkan planlet ke dalam pot
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    9. Berikut ini adalah tahapan dalam menangani bibit pot kelompok, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan penanaman <br>
                                        b. Mengeluarkan bibit tanaman dari botol <br>
                                        c. Memilah bibit tanaman berdasarkan keseragaman ukuran <br>
                                        d. Memberi label pada pot yang sudah terdapat bibit tanaman
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    10. Berikut ini adalah tahapan dalam menangani bibit individu pot tunggal, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan penanaman <br>
                                        b. Memilah bibit individu pot tunggal sesuai keseragaman ukuran <br>
                                        c. Melakukan penyemprotan anti jamur pada bibit <br>
                                        d. Memberi label pada pot yang sudah terdapat tanaman
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    11. Berikut ini adalah hal-hal yang terkait dengan pemasangan jaringan irigasi pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Alat dan bahan dasar jaringan irigasi dipilih sesuai jenis dan fungsi irigasi <br>
                                        b. Saluran irigasi dibuat dengan mempertimbangkan kondisi lahan <br>
                                        c. Saluran irigasi dibuat dengan mempertimbangkan karakteristik tanaman <br>
                                        d. Saluran irigasi dioperasikan secara otomatis oleh komputer
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    12. Berikut ini adalah hal-hal yang terkait dengan pemupukan tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan alat dan bahan pemupukan <br>
                                        b. Melakukan pengecekan peralatan sortasi tanaman anggrek <br>
                                        c. Melakukan pencampuran pupuk sesuai dengan jumlah/ volume yang ditetapkan <br>
                                        d. Melakukan pemupukan sesuai dosis yang telah ditentukan dan sesuai jadwal
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    13. Berikut ini adalah hal-hal yang terkait pelaksanaan penyiraman tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan manual penyiraman tanaman <br>
                                        b. Melakukan pengecekan sumber air dan jaringan irigasi <br>
                                        c. Menentukan luas area pertanaman yang akan disiram <br>
                                        d. Melakukan tindakan penyiraman sesuai prosedur dan SOP
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    14. Berikut ini adalah hal-hal yang terkait dengan pengendalian hama penyakit pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan K3 dan bahan pestisida <br>
                                        b. Melakukan pengadukan larutan pestisida di dalam tangki sprayer sesuai kaidah <br>
                                        c. Melakukan penyemprotan pestisida sesuai dengan teknik dan waktu yang ditentukan <br>
                                        d. Melakukan tindakan penanganan residu pestisida sesuai kaidah akrab lingkungan
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    15. Berikut ini adalah hal-hal yang terkait dengan pemberian Zat Pengatur Tumbuh (ZPT) pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan dan bahan ZPT sesuai dengan kebutuhan <br>
                                        b. Mengenakan pakaian K3 sesuai prosedur standar <br>
                                        c. Melakukan pengadukan larutan ZPT di dalam tangki sprayer sesuai kaidah <br>
                                        d. Mengaplikasikan ZPT ke tanaman anggrek berdasarkan prosedur dan SOP yang berlaku
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    16. Berikut ini adalah hal-hal yang terkait dengan pengendalian gulma pada budidaya tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan dan bahan untuk pengendalian gulma <br>
                                        b. Mengenakan pakaian K3 sesuai prosedur standar <br>
                                        c. Menggunakan herbisida dengan cara, dosis, dan waktu yang dianjurkan <br>
                                        d. Melakukan pemusnahan tanaman anggrek yang terkena gulma
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    17. Berikut ini adalah hal-hal yang terkait dengan kegiatan repotting pada budidaya tanaman anggrek:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan perintah kerja, jadwal, dan SOP repotting tanaman anggrek <br>
                                        b. Mengidentifikasi tanaman yang akan dilakukan repotting sesuai kriteria yang telah ditetapkan <br>
                                        c. Melakukan sortasi sebelum repotting sesuai prosedur yang ada <br>
                                        d. Melakukan repotting tanaman anggrek dari pot kecil ke pot yang lebih besar
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    18. Berikut ini adalah hal-hal yang berkaitan dengan pemasangan penyangga tanaman/tangkai, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Bahan penyangga dipilih sesuai dengan keperluan <br>
                                        b. Mengkondisikan media tanam dalam pot sebelum memasang penyangga <br>
                                        c. Penyangga dipasang ke tanaman anggrek dan diikat mengikuti SOP yang berlaku <br>
                                        d. Pengikat ditambahkan sesuai dengan stadium dan umur tanaman
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    19. Berikut ini adalah hal-hal yang berkaitan dengan kegiatan sortasi dan grading tanaman anggrek potong dan pot, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan alat dan bahan sortasi maupun grading pada bunga tanaman anggrek potong dan pot <br>
                                        b. Melakukan identifikasi pada tanaman anggrek yang sudah memenuhi standar mutu produk/ siap dipasarkan <br>
                                        c. Memisahkan tanaman anggrek yang mengandung penyakit <br>
                                        d. Tanaman yang siap jual diberi label sesuai ketentuan perusahaan
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20. Berikut ini adalah hal-hal yang berkaitan dengan dengan kegiatan sanitasi lingkungan nurseri tanaman anggrek, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan alat dan bahan terkait kegiatan sanitasi lingkungan nurseri <br>
                                        b. Mengenakan perlengkapan K3 sesuai prosedur yang ada <br>
                                        c. Melakukan sterilisasi ruangan agar terbebas dari mikroorganisme patogen berbahaya <br>
                                        d. Limbah hasil kegiatan sanitasi lingkungan nursery diperlakukan dengan benar sesuai SOP
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    21. Berikut ini adalah hal-hal yang berkaitan dengan pemanenan tanaman anggrek potong, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Melakukan penyemprotan air dan pupuk sebelum proses panen <br>
                                        b. Memeriksa kelayakan fungsi peralatan panen sesuai karakteristik produk tanaman yang akan dipanen <br>
                                        c. Melakukan pemanenan tanaman sesuai kriteria, waktu, ukuran yang telah ditentukan oleh perusahaan <br>
                                        d. Penanganan pasca panen dilaksanakan sesuai SOP yang berlaku
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22. Berikut ini adalah hal-hal yang berkaitan dengan pemanenan tanaman anggrek pot, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Memilih tanaman anggrek pot yang siap panen sesuai kriteria waktu panen <br>
                                        b. Menyiapkan peralatan pengemasan bagi tanaman yang sudah siap panen <br>
                                        c. Tanaman anggrek hasil panen dikumpulkan dalam wadah penampung <br>
                                        d. Tanaman anggrek yang sudah berada di wadah penampung dipindahkan dengan troly pengangkut
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    23. Berikut ini adalah hal-hal yang berkaitan dengan pengemasan tanaman anggrek potong dan pot, kecuali:
                                    <div style="padding-left: 20px;">
                                        a. Menyiapkan peralatan dan bahan untuk melakukan pengemasan anggrek <br>
                                        b. Menentukan penggolongan kualitas bunga untuk anggrek potong sesuai ketentuan perusahaan <br>
                                        c. Melakukan pengemasan tanaman anggrek pot bersama dengan potnya <br>
                                        d. Melakukan proses sterilisasi pada kemasan tanaman anggrek potong dan pot
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
        var canvas = document.getElementById(canvasId);
        var ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Inisialisasi canvas untuk asesmen dan asesor
    initCanvas('canvasPenyusun');
    initCanvas('canvasValidator');
    initCanvas('canvasPenyusun2');
    initCanvas('canvasValidator2');
</script>
@stop