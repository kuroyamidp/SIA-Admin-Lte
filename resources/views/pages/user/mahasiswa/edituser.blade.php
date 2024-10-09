@extends('adminlte::page')
@section('title', 'User Mahasiswa')
@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">User Mahasiswa</li>
            <li class="breadcrumb-item active">Tambah User Mahasiswa</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@stop
@section('content')
@include('layouts.scripts')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="{{route('user-mahasiswa.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('user-mahasiswa.update', $mhs['uid'])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-1">
                            <div class="col-lg-12">
                                <label for="form-control">Mahasiswa</label>
                                <input type="hidden" name="userid" value="{{$mhs['uid']}}">
                                <input type="hidden" name="id" value="{{$mhs['id']}}">
                                <select class="selectpicker" data-live-search="true" id="mhs" name="mahasiswa" onchange="getnamemahasiswa()">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($mahasiswa as $key => $value)
                                    @if($value->user_id == $mhs['id'])
                                    <option value="{{$value}}" selected><b>{{$value->nim}} - {{$value->nama}}</b> </option>
                                    @else
                                    <option value="{{$value}}"><b>{{$value->nim}} - {{$value->nama}}</b> </option>
                                    @endif
                                    @endforeach
                                </select>
                                @if($errors->has('mahasiswa'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('mahasiswa') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <label for="form-control">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{$mhs['name']}}">
                                @if($errors->has('username'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('username') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$mhs['email']}}">
                                @if($errors->has('email'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Password</label>
                                <input type="password" class="form-control" id="username" name="password">
                                <small class="badge badge-info">Kosongkan apabila tidak meperbarui password</small>
                                @if($errors->has('password'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection