{{-- @extends('m_user/template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input
                    User</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">User id</th>
            <th width="70px" class="text-center">Level id</th>
            <th width="70px"class="text-center">Username</th>
            <th width="70px"class="text-center">Nama</th>
            <th width="200px"class="text-center">Password</th>
            <th width="200px"class="text-center">Action</th>
        </tr>
        @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }}</td>
                <td>{{ $m_user->level_id }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td class="text-center">
                    <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="returnconfirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection --}}

@extends('adminlte::page')
@section('title', 'CRUD User')
@section('content_header')
    <h1>CRUD User</h1>
@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">CRUD User</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <a class="btn btn-success" href="{{ route('m_user.create') }}">Tambah User</a>
                        </div>

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
                                    <th width="20px" class="text-center">User id</th>
                                    <th width="70px" class="text-center">Level id</th>
                                    <th width="70px"class="text-center">Username</th>
                                    <th width="70px"class="text-center">Nama</th>
                                    <th width="200px"class="text-center">Password</th>
                                    <th width="200px"class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($useri as $m_user)
                                    <tr>
                                        <td>{{ $m_user->user_id }}</td>
                                        <td>{{ $m_user->level_id }}</td>
                                        <td>{{ $m_user->username }}</td>
                                        <td>{{ $m_user->nama }}</td>
                                        <td>{{ $m_user->password }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="returnconfirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
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
