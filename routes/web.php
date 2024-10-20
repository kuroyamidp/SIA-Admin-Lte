<?php

use App\Http\Controllers\AccKrsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarsidangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\DaftarkelasController;
use App\Http\Controllers\Master\DosenController;
use App\Http\Controllers\Master\AbsensiController;
use App\Http\Controllers\DaftarWisudaController;
use App\Http\Controllers\JadwalujianController;
use App\Http\Controllers\Master\JadwalkelasController;
use App\Http\Controllers\Master\LihatJadwalController;
use App\Http\Controllers\Master\MahasiswaController;
use App\Http\Controllers\Master\MatakuliahController;
use App\Http\Controllers\Master\KelasController;
use App\Http\Controllers\master\NilaiUjianController;
use App\Http\Controllers\Master\ProgdiController;
use App\Http\Controllers\Master\WaktuController;
use App\Http\Controllers\LihatJadwalujianController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\Master\RuangkelasController;
use App\Http\Controllers\Master\SemesterIniController;
use App\Http\Controllers\master\UserDosenController;
use App\Http\Controllers\Master\UserMahasiswaController;
use App\Http\Controllers\Public\KrsController;
use App\Http\Controllers\Public\ProfilemhsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FRAK04Controller;
use App\Http\Controllers\FRAPL02Controller;
use App\Http\Controllers\FRIA01Controller;
use App\Http\Controllers\FRIA02Controller;
use App\Http\Controllers\FRIA05AController;
use App\Http\Controllers\FRIA05CController;
use App\Http\Controllers\FRIA06AController;
use App\Http\Controllers\FRIA06BController;
use App\Http\Controllers\FRIA06CController;
use App\Http\Controllers\FRIA06Controller;
use App\Http\Controllers\FRIA11Controller;
use App\Http\Controllers\FRMAPA01Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect('/login');
});

Route::resource('matakuliah', MatakuliahController::class)->middleware(['auth', 'is_admin']);
Route::resource('form', FormController::class)->middleware(['auth', 'is_admin']);
Route::resource('kelas', KelasController::class)->middleware(['auth', 'is_admin']);
Route::resource('ruangkelas', RuangkelasController::class)->middleware(['auth', 'is_admin']);
Route::resource('progdi', ProgdiController::class)->middleware(['auth', 'is_admin']);
Route::resource('waktu', WaktuController::class)->middleware(['auth', 'is_admin']);
Route::resource('dosen', DosenController::class)->middleware(['auth', 'is_admin']);
Route::resource('mahasiswa', MahasiswaController::class)->middleware(['auth', 'is_admin']);
Route::resource('daftar-kelas', DaftarkelasController::class)->middleware(['auth', 'is_admin']);

Route::get('/optimize-schedule/{id}', [DaftarkelasController::class, 'optimizeSchedule'])->name('optimize-schedule');
Route::post('/save-changes', [DaftarKelasController::class, 'saveChanges'])->name('save-changes');
// routes/web.php

Route::post('/home/updateKeterangan/{id}', [App\Http\Controllers\HomeController::class, 'updateKeterangan'])->name('home.updateKeterangan');
Route::get('/export-pdf', [HomeController::class, 'exportPDF'])->name('export.pdf');


Route::resource('absensi', AbsensiController::class);
Route::view('/absen-siswa', 'pages.absen.absensiswa.absensiswa')->name('absen.absensiswa');
Route::resource('jadwal-kelas', JadwalkelasController::class)->middleware(['auth', 'is_admin']);
Route::resource('user-mahasiswa', UserMahasiswaController::class)->middleware(['auth', 'is_admin']);
Route::resource('user-dosen', UserDosenController::class)->middleware(['auth', 'is_admin']);
Route::resource('user-admin', AdminController::class)->middleware(['auth', 'is_admin']);
// Route::resource('accsidang', AccSidangController ::class)->middleware(['auth', 'is_admin']);
Route::resource('jadwalujian', JadwalujianController::class)->middleware(['auth', 'is_admin']);
Route::resource('nilaiujian', NilaiUjianController ::class)->middleware(['auth', 'is_admin']);
Route::post('/importdosen', [DosenController::class, 'importdatadosen'])->name('importdatadosen')->middleware(['auth', 'is_admin']);
Route::post('/importmahasiswa', [MahasiswaController::class, 'importdatamahasiswa'])->name('importdatamahasiswa')->middleware(['auth', 'is_admin']);
Route::post('/importdatamatkul', [MatakuliahController::class, 'importdatamatkul'])->name('importdatamatkul')->middleware(['auth', 'is_admin']);
Route::post('/importkelas', [RuangkelasController::class, 'importkelas'])->name('importkelas')->middleware(['auth', 'is_admin']);
Route::get('/getkelas', [DaftarkelasController::class, 'getkelas'])->name('getkelas')->middleware(['auth', 'is_admin']);

Route::resource('krs', KrsController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('profile', ProfilemhsController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('home', HomeController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('lihatjadwal', LihatJadwalController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('semesterini', SemesterIniController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('daftarwisuda', DaftarWisudaController::class)->middleware(['auth', 'is_mahasiswa']);
Route::resource('khs', KhsController::class)->middleware(['auth', 'is_mahasiswa']);
// Route::resource('lihatjadwaldosen', LihatJadwalDosenController::class)->middleware(['auth', 'is_dosen']);

//cetak krs
Route::get('/cetakkrs', [KrsController::class, 'cetakkrs'])->name('cetakkrs')->middleware(['auth','is_mahasiswa']);
Route::get('/cetaknilaiujian', [KhsController::class, 'cetaknilaiujian'])->name('cetakkrs')->middleware(['auth','is_mahasiswa']);
Route::get('/cetakdaftarwisuda', [DaftarWisudaController::class, 'cetakdaftarwisuda'])->name('cetakkrs')->middleware(['auth','is_mahasiswa']);
Route::get('/cetaklihatjadwal', [LihatJadwalController::class, 'cetaklihatjadwal'])->name('cetakkrs')->middleware(['auth','is_mahasiswa']);
Route::get('/cetakjadwalsemester', [SemesterIniController::class, 'cetakjadwalsemester'])->name('cetakkrs')->middleware(['auth','is_mahasiswa']);

//Pencarian Linier Search
Route::get('/search-kelas-matkul', [DaftarKelasController::class, 'searchByMatkul'])
    ->name('search-kelas-matkul')
    ->middleware(['auth', 'is_admin']);
Route::get('/search-absensi', [AbsensiController::class, 'searchAbsensi'])
    ->name('search-absensi')
    ->middleware(['auth', 'is_admin']);
Route::get('/search-dosen', [DosenController::class, 'searchDosen'])
    ->name('search-dosen')
    ->middleware(['auth', 'is_admin']);
Route::get('/search-mahasiswa', [MahasiswaController::class, 'searchMahasiswa'])
    ->name('search-mahasiswa');

Route::resource('frmapa01', FRMAPA01Controller::class)->middleware(['auth', 'is_adminmahasiswa']);
Route::resource('fria01', FRIA01Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('fria02', FRIA02Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('fria11', FRIA11Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('frak04', FRAK04Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('frapl02', FRAPL02Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('fria06', FRIA06Controller::class)->middleware(['auth', 'is_admin']);
Route::resource('fria06a', FRIA06AController::class)->middleware(['auth', 'is_admin']);
Route::resource('fria06b', FRIA06BController::class)->middleware(['auth', 'is_admin']);
Route::resource('fria06c', FRIA06CController::class)->middleware(['auth', 'is_admin']);
Route::resource('fria05a', FRIA05AController::class)->middleware(['auth', 'is_admin']);
Route::resource('fria05c', FRIA05CController::class)->middleware(['auth', 'is_admin']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);
Auth::routes();