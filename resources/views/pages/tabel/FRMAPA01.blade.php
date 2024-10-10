@extends('adminlte::page')

@section('title', 'FR.APL.02')

@section('content_header')
<div class="pagetitle">
    <h1>FR.APL.02 - Asesmen Mandiri</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tambah Table</li>
            <li class="breadcrumb-item active">FR.APL.02</li>
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
                        <form action="{{ route('frapl02.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3 class="card-title">FR.APL.02 - Form Penilaian Sertifikasi</h3>
                    </div>
                    <div class="card-body">
                        <!-- Section for Skema Sertifikasi -->
                        <!-- table-striped -->
                        <table border="1" width="100%" cellpadding="10" class="table-border ">
                            <tr>
                                <td>Skema Sertifikasi <br>(KKNI/Okuapasi/Klaster)</td>
                                <td>Judul:</td>
                                <td colspan="2">
                                    <input type="text" name="judul" class="form-control no-border" value="Pelaksana Budidaya Anggrek" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Nomor:</td>
                                <td colspan="2">
                                    <input type="text" name="nomor" class="form-control no-border" value="SKM-2102-01/LSP P1 UPGRIS/2017" required>
                                </td>
                            </tr>
                        </table>
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