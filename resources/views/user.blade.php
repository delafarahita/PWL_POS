{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="{{ route('/user/tambah') }}">+ Tambah User</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
                {{-- <th>Jumlah Pengguna</th> --}}
{{-- </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level->level_kode }}</td>
                <td>{{ $d->level->level_nama }}</td>
                <td>
                    <a href={{ route('/user/ubah', $d->user_id) }}>Ubah</a>
                    <a href={{ route('/user/hapus', $d->user_id) }}>Hapus</a>
                </td>

                {{-- <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td> --}}

{{-- <td>{{ $data }}</td> --}}
{{-- </tr>
            @endforeach
        </table>
    </body>
</html>   --}}

@extends('adminlte::page')
@section('title', 'Data User')
@section('content_header')
    <h1>Data User</h1>
@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <input type="button" class="btn btn-primary"
                                    onclick="window.location='{{ route('/user/tambah') }}'" value="Tambah User">

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>ID Level Pengguna</th>
                                    <th>Kode Level</th>
                                    <th>Nama Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->user_id }}</td>
                                        <td>{{ $d->username }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->level_id }}</td>
                                        <td>{{ $d->level->level_kode }}</td>
                                        <td>{{ $d->level->level_nama }}</td>
                                        <td>
                                            <input type="button" class="btn btn-warning" onclick="window.location='{{ route('/user/ubah', $d->user_id) }}'" value="Ubah">
                                            <input type="button" class="btn btn-danger" onclick="window.location='{{ route('/user/hapus', $d->user_id) }}'" value="Hapus">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
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
