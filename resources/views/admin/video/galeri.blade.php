@extends('admin.layouts.app')

@section('title', 'Galeri')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Berita</h1>
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

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Foto
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="card-body-pad">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <div class="card">
                            @foreach($foto as $satuan)
                            <div class="card-header">
                                <h5 class="m-0">judul</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">{{$satuan->kategori}}</h6>

                                <p class="card-text">{{ $satuan->alamat_foto }}</p>
                                <p class="card-text">
                                    {{\Carbon\Carbon::parse($satuan->updated_at)->locale('id')->format('d M Y')}}</p>
                                <a href="/admin/berita/edit/{{$satuan->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/berita/hapus/{{$satuan->id}}" class="btn btn-danger">Hapus</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body-pad -->
                </div>
                <!-- /.card-outline -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Video
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="card-body-pad">
                        <div class="card">
                            @foreach($video as $satuan)
                            <div class="card-header">
                                <h5 class="m-0">Judul</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$satuan->alamat}}</p>
                                <p class="card-text">
                                    {{\Carbon\Carbon::parse($satuan->updated_at)->locale('id')->format('d M Y')}}</p>
                                <a href="/admin/berita/edit/{{$satuan->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/berita/hapus/{{$satuan->id}}" class="btn btn-danger">Hapus</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body-pad -->
                </div>
                <!-- /.card-outline -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('js')
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
@endpush
