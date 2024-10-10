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
<style>
    .btn-optimize {
        background-color: #28a745;
        color: white;
        border: none;
    }

    .btn-optimize:hover {
        background-color: #218838;
        color: white;
    }
</style>

<div class="layout-px-spacing">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-2">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <!-- Tombol Tambah -->
                            <a href="{{ route('daftar-kelas.create') }}" class="btn btn-primary btn-sm">Tambah</a>

                            <!-- Form Pencarian -->
                            <form id="configform" action="{{ route('search-kelas-matkul') }}" method="get" class="form-inline">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="daftar_kelas" class="mr-2">Kode Jadwal</label>
                                    <input type="text" class="form-control" name="daftar_kelas" id="daftar_kelas" placeholder="Cari Jadwal" onkeyup="searchData()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Table Content -->
                    <div class="table-responsive">
                        <table class="table table-hover" id="kelas-table">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kode kelas</th>
                                    <th>Mapel</th>
                                    <th>Jurusan</th>
                                    <th>Ruang</th>
                                    <th>Guru</th>
                                    <th>Waktu</th>
                                    <th>Hari</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="data-table-body">
                                @php $nomor = 1; @endphp
                                @foreach($kelas as $key => $value)
                                <tr>
                                    <td width="1%">{{ $nomor++ }}</td>
                                    <td>{{ $value->kode_kelas }}</td>
                                    <td>{{ $value->matkul }}</td>
                                    <td>{{ $value->progdi }}</td>
                                    <td>{{ $value->ruang }}</td>
                                    <td>{{ $value->dosen }}</td>
                                    <td>{{ $value->start }}</td>
                                    <td>{{ $value->hari }}</td>
                                    <td><b>KELAS </b>{{ $value->kelas }}</td>
                                    <td class="text-center" style="display: flex; justify-content: center;">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('daftar-kelas.show', $value->uid) }}" class="btn btn-warning mb-1 mr-1" style="border-radius: 4px; padding: 5px 10px;" data-toggle="tooltip" title="Update">
                                            <i class="fas fa-pencil-alt"></i> <!-- Ikon pensil -->
                                        </a>

                                        <!-- Tombol Optimize -->
                                        <button onclick="window.location.href='{{ route('optimize-schedule', ['id' => $value->id]) }}'" class="btn btn-success mb-1 mr-1" style="border-radius: 4px; padding: 5px 10px;" data-toggle="tooltip" title="Optimize">
                                            <i class="fas fa-cog"></i> <!-- Ikon gear/cog -->
                                        </button>

                                        <!-- Form Delete -->
                                        <form action="{{ route('daftar-kelas.destroy', $value->uid) }}" method="post" class="delete-form" onsubmit="confirmDelete(event)">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger mb-1 mr-1" style="border-radius: 4px; padding: 5px 10px;" data-toggle="tooltip" title="Delete" type="submit">
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
            </div> <!-- End Card -->
        </div>
    </div> <!-- End Row -->
</div>

<script>
    function searchData() {
        var search = $('#daftar_kelas').val();
        $.ajax({
            url: '{{ route("search-kelas-matkul") }}',
            type: 'GET',
            data: {
                search: search
            },
            success: function(response) {
                $('#data-table-body').empty();
                var nomor = 1;
                $.each(response, function(index, value) {
                    var row = '<tr style="text-align: center;">' +
                        '<td>' + nomor++ + '</td>' +
                        '<td>' + value.kode_kelas + '</td>' +
                        '<td>' + value.matkul + '</td>' +
                        '<td>' + value.progdi + '</td>' +
                        '<td>' + value.ruang + '</td>' +
                        '<td>' + value.dosen + '</td>' +
                        '<td>' + value.start + '</td>' +
                        '<td>' + value.hari + '</td>' +
                        '<td>' + value.kelas + '</td>' +
                        '<td class="text-center" style="display: flex; justify-content: center;">' +
                        '<a href="{{ route('daftar-kelas.show', '') }}/' + value.uid + '" class="btn btn-warning mb-1 mr-1 rounded-circle" data-toggle="tooltip" title="Update"><i class="bx bx-edit bx-sm"></i></a>' +
                        '<button onclick="window.location.href=\'{{ route('optimize-schedule', '') }}/' + value.uid + '\'" class="btn btn-success mb-1 mr-1 rounded-circle btn-optimize" data-toggle="tooltip" title="Optimize"><i class="bx bx-cog bx-sm"></i></button>' +
                        '<form action="{{ route('daftar-kelas.destroy', '') }}/' + value.uid + '" method="post" style="display:inline;">' +
                        '@method("DELETE")' +
                        '@csrf' +
                        '<button class="btn btn-danger mb-1 mr-1 rounded-circle show_confirm" data-toggle="tooltip" title="Delete" type="submit"><i class="bx bx-trash bx-sm"></i></button>' +
                        '</form>' +
                        '</td>' +
                        '</tr>';
                    $('#data-table-body').append(row);
                });
            }
        });
    }
</script>

@endsection
