@extends('admin.layouts.app')

@section('title', 'Contoh Templating')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambahkan Kegiatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Kegiatan</li>
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
                        <strong>Form Tambah Kegiatan</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{route('add-kegiatan')}}" method="post" enctype="multipart/form-data">
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
                        <div class="form-group col-5">
                            <label for="nama_kegiatan">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="jenis">Jenis Kegiatan</label>
                            <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis Kegiatan" required>
                        </div>
                        <div class="col-5 text-right">
                            <button type="submit" name="action" value="post" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-outline -->

            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <strong>Data Kegiatan</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden>{{ $i=1 }}</div>
                            @foreach($kegiatan as $satuan)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$satuan->nama}}</td>
                                <td>{{$satuan->jenis}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ./card-outline -->
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
@endsection
