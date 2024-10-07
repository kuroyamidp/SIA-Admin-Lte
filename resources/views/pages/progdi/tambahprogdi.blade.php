@extends('adminlte::page')
@section('title', 'Progdi')
@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Progdi</li>
            <li class="breadcrumb-item active">Tambah Progdi</li>
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
                    <a href="{{route('progdi.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('progdi.store')}}" method="post">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <label for="form-control">Kode progdi</label>
                                <input type="text" class="form-control" name="kode">
                                @if($errors->has('kode'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kode') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Nama studi</label>
                                <input type="text" class="form-control" name="studi">
                                @if($errors->has('studi'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('studi') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Singkatan studi</label>
                                <input type="text" class="form-control" name="singkatan_studi">
                                @if($errors->has('singkatan_studi'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('singkatan_studi') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection