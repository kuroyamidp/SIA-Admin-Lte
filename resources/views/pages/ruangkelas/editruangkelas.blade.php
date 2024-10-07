@extends('adminlte::page')
@section('title', 'Ruang Kelas')
@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Ruang Kelas</li>
            <li class="breadcrumb-item active">Edit Ruang Kelas</li>
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
                <div class="card-header">
                    <a href="{{route('ruangkelas.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('ruangkelas.update', $ruang['uid'])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <label for="form-control">Kode ruang kelas</label>
                                <input type="text" class="form-control" name="kode_ruang" value="{{$ruang['kode_ruang']}}">
                                @if($errors->has('kode_ruang'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kode_ruang') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label for="form-control">Nama ruang kelas</label>
                                <input type="text" class="form-control" name="nama_ruang" value="{{$ruang['nama']}}">
                                @if($errors->has('nama_ruang'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('nama_ruang') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection