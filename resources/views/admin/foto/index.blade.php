@extends('admin.layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Contoh Templating</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
            <form action="{{ route('upload-foto') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card shadow">
                        <div class="card-header bg-success">
                            <h5 class="text-white"> Laravel 6 Multiple Images Upload </h5>
                        </div>
                        <div class="card-body">

                            <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <select class="w-100 custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                                @foreach ($kegiatans as $kegiatan)
                                    <option value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                                @endforeach
                            </select>
                            <label for="images"> Images </label>
                                <div class="form-group">
                                    <input type="file" name="images[]" class="form-control" id="images" multiple/>
                                    {!! $errors->first('images', '<small class="text-danger">:message</small>') !!}
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Upload Images </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection