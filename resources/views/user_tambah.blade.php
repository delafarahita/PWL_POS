{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Tambah Data User</title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <a href="{{ route('/user') }}">Kembali</a>
        <form method="post" action="{{ route('/user/tambah_simpan') }}">
            {{ csrf_field() }}
            <br>
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <br><br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama">
            <br><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password">
            <br><br>
            <label>Level ID</label>
            <input type="number" name="level_id">
            <br><br>
            <input type="submit" name="btn btn-success" value="Simpan">
        </form>
    </body>
</html> --}}

@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1>Tambah User</h1>
@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <input type="button" class="btn btn-warning" onclick="window.location='{{ route('/user') }}'" value="Kembali">
                            <form method="post" action="{{ route('/user/tambah_simpan') }}">
                                {{ csrf_field() }}
                                <br><br>
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                <br><br>
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                <br><br>
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                                <br><br>
                                <label>Level ID</label>
                                <input type="number" class="form-control" name="level_id">
                                <br><br>
                                <input type="submit" class="btn btn-info" name="btn btn-success" value="Simpan">
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
