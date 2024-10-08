@extends('adminlte::page')
@section('title', 'Kelas')
@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Kelas</li>
            <li class="breadcrumb-item active">Tambah Kelas</li>
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
                    <a href="{{route('kelas.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('kelas.store')}}" method="post">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <label for="form-control">Kelas</label>
                                <input type="text" class="form-control" name="kode">
                                @if($errors->has('kode'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kode') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label for="form-control">Nama Kelas</label>
                                <input type="text" class="form-control" name="kelas">
                                @if($errors->has('kelas'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kelas') }}
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