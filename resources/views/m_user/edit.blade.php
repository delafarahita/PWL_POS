{{-- @extends('m_user/template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit User</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Error <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('m_user.update', $useri->user_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User_id:</strong>
                    <input type="text" name="userid" value="{{ $useri->user_id }}" class="form-control"
                        placeholder="Masukkan user id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Level_id:</strong>
                    <input type="text" name="levelid" value="{{ $useri->level_id }}" class="form-control"
                        placeholder="Masukkan level">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" value= "{{ $useri->username }}" class="form-control" name="username"
                        placeholder="Masukkan Nomor username">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama:</strong>
                    <input type="text" value= "{{ $useri->nama }}"name="nama" class="form-control"
                        placeholder="Masukkan nama"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" value= "{{ $useri->password }}"name="password" class="form-control"
                        placeholder="Masukkan password"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection --}}

@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" action="{{ route('m_user.update', $useri->user_id) }}">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Ops!</strong> Error <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <input type="button" class="btn btn-warning" onclick="window.location='{{ route('m_user.index') }}'"
                        value="Kembali">
                </div>
                <br><br>
                <label>User ID</label>
                <input type="text" name="userid" value="{{ $useri->user_id }}" class="form-control"
                    placeholder="Masukkan user id">
                <br><br>
                <label>Level ID</label>
                <input type="text" name="levelid" value="{{ $useri->level_id }}" class="form-control"
                    placeholder="Masukkan level">
                <br><br>
                <label>Username</label>
                <input type="text" value= "{{ $useri->username }}" class="form-control" name="username"
                    placeholder="Masukkan username">
                <br><br>
                <label>Nama</label>
                <input type="text" value= "{{ $useri->nama }}"name="nama" class="form-control"
                    placeholder="Masukkan nama">
                <br><br>
                <label>Password</label>
                <input type="password" value= "{{ $useri->password }}"name="password" class="form-control"
                    placeholder="Masukkan password">
                <br><br>
                <input type="submit" class="btn btn-info" name="btn btn-success" value="Update">
            </form>
        </div>
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
