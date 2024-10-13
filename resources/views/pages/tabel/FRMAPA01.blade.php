@extends('adminlte::page')

@section('title', 'FR.MAPA.01')

@section('content_header')
<div class="pagetitle">
    <h1>FR.APL.02 - Asesmen Mandiri</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.MAPA.01</li>
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
                        <form action="{{ route('frmapa01.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.APL.02 - Form Penilaian Sertifikasi</h3>
                    </div>
                    <div class="card-body">
                        <!-- Section for Skema Sertifikasi -->
                        <table border="1" width="100%" cellpadding="10" class="table-border">
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
                            </thead>
                        </table>

                        <!-- New Section: Menentukan Pendekatan Asesmen -->
                        <h4>Menentukan Pendekatan Asesmen</h4>
                        <table border="1" width="100%" cellpadding="10" class="table-border">
                            <tr>
                                <td>Asesi</td>
                                <td>
                                    <input type="checkbox" name="asesi[]" value="hasil_pendidikan"> Hasil pelatihan dan/atau pendidikan, dimana kurikulum dan fasilitas<br>
                                    <input type="checkbox" name="asesi[]" value="hasil_pelatihan"> Hasil pelatihan dan/atau pendidikan, dimana kurikulum berbasis kompetensi<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_berpengalaman"> Pekerja berpengalaman, industri/tempat kerja yang telah sesuai<br>
                                    <input type="checkbox" name="asesi[]" value="pekerja_belum_berkompetensi"> Pekerja berpengalaman, industri/tempat kerja yang belum sesuai<br>
                                    <input type="checkbox" name="asesi[]" value="otodidak"> Pelatihan/belajar mandiri atau otodidak
                                </td>
                            </tr>
                            <tr>
                                <td>Tujuan Asesmen</td>
                                <td>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="sertifikasi"> Sertifikasi<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="pkt"> Pengakuan Kompetensi Terkini (PKT)<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="rpl"> Rekognisi Pembelajaran Lampau (RPL)<br>
                                    <input type="checkbox" name="tujuan_asesmen[]" value="lainnya"> Lainnya
                                </td>
                            </tr>
                        </table>
                        <!-- style="width: 29.6%;" -->
                        <table border="1" width="100%" cellpadding="10">
                            <tr>
                            <td rowspan="4" style="width: 19.2%;">Konteks Asesmen:</td> <!-- Adjust the width as needed -->
                                <td colspan="2">Lingkungan</td> <!-- Expanded using colspan -->
                                <td>
                                    <input type="checkbox" name="lingkungan[]" value="tempat_kerja_nyata"> Tempat kerja nyata
                                    <input type="checkbox" name="lingkungan[]" value="tempat_kerja_simulasi"> Tempat kerja simulasi
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Peluang untuk mengumpulkan bukti dalam sejumlah situasi</td>
                                <td>
                                    <input type="checkbox" name="peluang[]" value="tersedia"> Tersedia
                                    <input type="checkbox" name="peluang[]" value="terbatas"> Terbatas
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Hubungan antara standar kompetensi dan:</td>
                                <td>
                                    <input type="checkbox" name="bukti[]" value="bukti_dukung_asesmen"> Bukti untuk mendukung asesmen<br>
                                    <input type="checkbox" name="bukti[]" value="aktivitas_kerja"> Aktivitas kerja di tempat kerja Asesi<br>
                                    <input type="checkbox" name="bukti[]" value="kegiatan_pembelajaran"> Kegiatan Pembelajaran
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Siapa yang melakukan asesmen / RPL</td>
                                <td>
                                    <input type="checkbox" name="asesor[]" value="lembaga_sertifikasi"> Lembaga Sertifikasi<br>
                                    <input type="checkbox" name="asesor[]" value="organisasi_pelatihan"> Organisasi Pelatihan<br>
                                    <input type="checkbox" name="asesor[]" value="asesor_perusahaan"> Asesor Perusahaan
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
    // Additional JS if necessary
</script>
@stop