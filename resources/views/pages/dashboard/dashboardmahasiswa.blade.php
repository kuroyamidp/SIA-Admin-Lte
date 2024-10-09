@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow-lg" style="border-radius: 20px;">
                <div class="card-body text-center">
                    <div class="profile-image mb-4">
                        @if(Auth::user()->mahasiswa['image'] != null)
                        <img src="/Image/{{ Auth::user()->mahasiswa['image'] }}" alt="{{ Auth::user()->mahasiswa['nama'] }}" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        @else
                        <img src="{{ asset('admin/assets/img/90x90.jpg') }}" alt="avatar" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        @endif
                    </div>
                    <div class="user-info-list d-flex justify-content-center text-center">
                        <div class="text-center">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">{{Auth::user()->mahasiswa['nama']}}</li>
                                <li class="badge badge-info">NIM : {{Auth::user()->mahasiswa['nim']}}</li>
                                @if( Auth::user()->mahasiswa['progdi'] != null)
                                <li class="contacts-block__item">{{Auth::user()->mahasiswa['progdi']}}</li>
                                @else
                                <li class="contacts-block__item">PROGDI BELUM DITENTUKAN</li>
                                @endif
                                <li class="contacts-block__item">Kelas : {{Auth::user()->mahasiswa['kelas']}}</li>
                                <li class="contacts-block__item">{{Auth::user()->email}}</li>
                                <!-- <li class="contacts-block__item">{{Auth::user()->perguruan_tinggi}}</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow-lg" style="border-radius: 20px;">
                <div class="card-header text-center bg-primary text-white" style="border-radius: 20px 20px 0 0;">
                    <h4>Jadwal Sekolah hari {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Mata Kuliah</th>
                                    <th>Jam</th>
                                    <th>Jurusan</th>
                                    <th>Guru</th>
                                    <th>Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jdw as $index => $val)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $val->matkul }}</td>
                                    <td>{{ $val->start }}</td>
                                    <td>{{ $val->progdi }}</td>
                                    <td>{{ $val->dosen }}</td>
                                    <td>{{ $val->ruang }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-image img {
        transition: transform 0.3s ease;
    }

    .profile-image img:hover {
        transform: scale(1.1);
    }

    .card {
        border: none;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .table thead th {
        background-color: #007bff;
        color: white;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>

@stop