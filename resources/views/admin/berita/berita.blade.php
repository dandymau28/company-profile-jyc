@extends('admin.layouts.app')

@section('title', 'Berita')

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
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Berita</span>
                        <span class="info-box-number">
                            {{$totalBerita}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Kategori</span>
                        <span class="info-box-number">{{$totalKategori}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Rekomendasi</span>
                        <span class="info-box-number">{{$rekomendasi}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Draft Berita</span>
                        <span class="info-box-number">{{$totalDraftBerita}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Berita Terpublikasi
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
                            @foreach($berita as $topik)
                            <div class="card-header">
                                <h5 class="m-0">{{$topik->judul}}</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">{{$topik->kategori}}</h6>

                                <p class="card-text">{!! $topik->isi_berita !!}</p>
                                <p class="card-text">
                                    {{\Carbon\Carbon::parse($topik->tgl_publish)->locale('id')->format('d M Y')}}</p>
                                <a href="/admin/berita/edit/{{$topik->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/berita/hapus/{{$topik->id}}" class="btn btn-danger">Hapus</a>
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
                            Berita Draft
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
                            @foreach($beritaDraft as $draft)
                            <div class="card-header">
                                <h5 class="m-0">{{$draft->judul}}</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">{{$draft->kategori}}</h6>

                                <p class="card-text">{!! $draft->isi_berita !!}</p>
                                <p class="card-text">
                                    {{\Carbon\Carbon::parse($draft->tgl_publish)->locale('id')->format('d M Y')}}</p>
                                <a href="/admin/berita/edit/{{$draft->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/berita/hapus/{{$draft->id}}" class="btn btn-danger">Hapus</a>
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
