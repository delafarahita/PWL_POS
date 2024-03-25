{{-- @extends('m_user/template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show User</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_id:</strong>
                {{ $useri->user_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level_id:</strong>
                {{ $useri->level_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                {{ $useri->username }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $useri->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{ $useri->password }}
            </div>
        </div>
    </div>
@endsection --}}

@extends('adminlte::page')
@section('title', 'Show User')
@section('content_header')
    <h1>Show User</h1>
@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Show User</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
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
                    <div class="row mt-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 ml-3 mb-3">
                            <div class="form-group">
                                <strong>User_id:</strong>
                                {{ $useri->user_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 ml-3 mb-3">
                            <div class="form-group">
                                <strong>Level_id:</strong>
                                {{ $useri->level_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 ml-3 mb-3">
                            <div class="form-group">
                                <strong>Username:</strong>
                                {{ $useri->username }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 ml-3 mb-3">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                {{ $useri->nama }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 ml-3 mb-3">
                            <div class="form-group">
                                <strong>Password:</strong>
                                {{ $useri->password }}
                            </div>
                        </div>
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
