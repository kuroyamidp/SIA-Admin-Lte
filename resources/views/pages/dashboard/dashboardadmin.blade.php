@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
@include('layouts.scripts')
<style>
    .no-border {
        border: none; /* Menghilangkan garis tepi */
        box-shadow: none; /* Menghilangkan bayangan yang mungkin muncul */
    }

    /* Jika ingin menghilangkan border saat fokus */
    .no-border:focus {
        outline: none; /* Menghilangkan outline saat input difokuskan */
        box-shadow: none; /* Menghilangkan bayangan saat fokus */
    }
</style>

<div class="layout-px-spacing">
  <!-- Navbar -->
  <div class="row layout-top-spacing justify-content-center">
    <h2 class="badge badge-success" style="font-size: 1em;">Selamat datang Admin</h2>

    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
      <div class="container">
        <div class="row">
          <!-- Card for Siswa -->
          <div class="col-sm-6">
            <div class="card text-center" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); background-color: #4CAF50; color: white;">
              <div class="card-body">
                <p class="card-text">Data Siswa yang Terdaftar</p>
                <h4>Jumlah: {{ \App\Models\Master\MahasiswaModel::count() }}</h4> <!-- Jumlah siswa -->
                <div class="progress" style="height: 5px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <div class="card-header d-flex justify-content-end" style="background-color: white;">
                  <a href="/mahasiswa" class="btn btn-dark btn-sm">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card for Guru -->
          <div class="col-sm-6">
            <div class="card text-center" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); background-color: #FF9800; color: white;">
              <div class="card-body">
                <p class="card-text">Data Guru yang Terdaftar</p>
                <h4>Jumlah: {{ \App\Models\Master\DosenModel::count() }}</h4> <!-- Jumlah guru -->
                <div class="progress" style="height: 5px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
                <div class="card-header d-flex justify-content-end" style="background-color: white;">
                  <a href="/dosen" class="btn btn-dark btn-sm">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Section for Lembar Kunci Jawaban -->
        <div class="row mt-5">
          <div class="col-sm-12">
            <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
              <div class="card-header">
                <h3 class="card-title">FR.IA.06.B LEMBAR KUNCI JAWABAN PERTANYAAN TERTULIS ESAI</h3>
              </div>
              <div class="card-body">
                <table border="1" width="100%" cellpadding="10">
                  <tr>
                    <td>Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)</td>
                    <td>Judul : </td>
                    <td>Nomor : </td>
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
                    <td colspan="3">
                      <b>Jawaban:</b>
                      <ol>
                        <li><input type="text" name="-" class="form-control mb-2 no-border" placeholder="Jawab" required></li>
                        <li><input type="text" name="-" class="form-control mb-2"  required></li>
                        <li><input type="text" name="-" class="form-control mb-2"  required></li>
                        <li><input type="text" name="-" class="form-control mb-2" required></li>
                        <li><input type="text" name="-" class="form-control mb-2" required></li>
                      </ol>
                    </td>
                  </tr>
                </table>
                <br>
                <b>Penyusun dan Validator</b>
                <table border="1" width="100%" cellpadding="10">
                  <tr>
                    <td>Status</td>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Nomor MET</td>
                    <td>Tanda Tangan dan Tanggal</td>
                  </tr>
                  <tr>
                    <td>PENYUSUN</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>PENYUSUN</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>VALIDATOR</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>VALIDATOR</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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