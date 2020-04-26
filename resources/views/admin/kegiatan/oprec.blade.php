@extends('admin.layouts.app')

@section('title', 'Contoh Templating')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Konfigurasi Oprec</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item">Kegiatan</li>
                    <li class="breadcrumb-item active">Oprec</li>
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
                        <strong>Konfigurasi Open Recruitment</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{route('add-oprec')}}" method="post" enctype="multipart/form-data">
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
                            <label for="batch">Nama Batch</label>
                            <input type="text" name="batch" id="batch" class="form-control" placeholder="ex. Batch 2012" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="batas_pendaftar">Batas Pendaftar</label>
                            <input type="number" name="batas_pendaftar" id="batas_pendaftar" class="form-control" placeholder="Batas Total Pendaftar" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="batas_kandidat">Batas Kandidat</label>
                            <input type="number" name="batas_kandidat" id="batas_kandidat" class="form-control" placeholder="Batas Kandidat" required>
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
                        <strong>Data Konfigurasi Oprec</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Batch</th>
                                <th scope="col">Batas Pendaftar</th>
                                <th scope="col">Batas Kandidat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($oprec as $satuan)
                            <tr>
                                <th scope="row">{{ $satuan->batch }}</th>
                                <td>{{$satuan->batas_pendaftar}}</td>
                                <td>{{$satuan->batas_kandidat}}</td>
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
