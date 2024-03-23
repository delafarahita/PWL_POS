{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Ubah Data User</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="{{ route('/user') }}">Kembali</a>
        <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <br>
            <label>Username</label>
            <input type="text" name="username" value="{{ $data->username }}">
            <br><br>
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $data->nama }}">
            <br><br>
            <label>Level ID</label>
            <input type="number" name="level_id" value="{{ $data->level_id }}">
            <br><br>
            <input type="submit" name="btn btn-success" value="Ubah">
        </form>
    </body>
</html> --}}

@extends('adminlte::page')
@section('title', 'Ubah Data User')
@section('content_header')
    <h1>Form Ubah Data User</h1>
@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Ubah Data User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <input type="button" class="btn btn-warning" onclick="window.location='{{ route('/user') }}'" value="Kembali">
                            <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <br><br>
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
                                <br><br>
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                                <br><br>
                                <label>Level ID</label>
                                <input type="number" class="form-control" name="level_id" value="{{ $data->level_id }}">
                                <br><br>
                                <input type="submit" class="btn btn-info" name="btn btn-success" value="Ubah">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">

                    </div>
                @stop
                @section('css')
                    {{-- Add here extra stylesheets --}}
                    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
                @stop
                @section('js')
                    <script>
                        console.log("Hi, I'm using the Laravel-AdminLTE package!");
                    </script>
                @stop
