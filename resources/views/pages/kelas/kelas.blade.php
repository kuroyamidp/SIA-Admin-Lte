@extends('adminlte::page')
@section('title', 'Kelas')
@section('content_header')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Kelas</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@stop
@section('content')
@include('layouts.scripts')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered datatable">
                        <thead class="thead-light">
                            <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode Kelas</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kelas as $key => $value)
                                    <tr style="text-align: center;">
                                        <td width="1%">{{$key + 1}}</td>
                                        <td>{{$value->kode_kelas}} </td>
                                        <td>Kelas : {{$value->nama}}</td>
                                        <td class="text-center" style="display: flex; justify-content: center;">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('kelas.show', $value->uid) }}" class="btn btn-warning mb-1 mr-1" style="border-radius: 4px; padding: 5px 10px;" data-toggle="tooltip" title='Update'>
                                        <i class="fas fa-pencil-alt"></i> <!-- Ikon pensil -->
                                    </a>

                                    <!-- Form Delete -->
                                    <form action="{{ route('kelas.destroy', $value->uid) }}" method="post" class="delete-form" onsubmit="confirmDelete(event)">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger mb-1 mr-1" style="border-radius: 4px; padding: 5px 10px;" data-toggle="tooltip" title='Delete' type="submit">
                                            <i class="fas fa-trash"></i> <!-- Ikon tempat sampah -->
                                        </button>
                                    </form>
                                </td>
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

</div>
@endsection