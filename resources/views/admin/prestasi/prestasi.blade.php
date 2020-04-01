<<<<<<< HEAD
            <div class="col-sm-6">
=======
@extends('admin.layouts.app')

@section('title', 'Contoh Templating')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambahkan Prestasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Prestasi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Bootstrap WYSIHTML5
                        <small>Simple and fast</small>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{route('input-prestasi')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <div class="mb-3">
                            <input type="text" name="nama_kompetisi" id="" placeholder="Nama Kompetisi">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="gelar_juara" id="" placeholder="Gelar Juara">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="lokasi" id="" placeholder="Lokasi Kompetisi">
                        </div>
                        <div class="mb-3">
                            <input type="date" name="tanggal_kompetisi" id="" placeholder="Tanggal Kompetisi">
                        </div>
                        <button type="submit" name="action" value="post">Post</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
@endsection
>>>>>>> 2b96dccda57fedb9ed154f5fa46b7f652815018b
