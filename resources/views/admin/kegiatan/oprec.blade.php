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
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{ route('add-oprec') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group col-5">
                            <label for="batch">Nama Batch</label>
                            <input type="text" name="batch" id="batch" class="form-control" placeholder="ex. Batch 2012"
                                required>
                        </div>
                        <div class="form-group col-5">
                            <label for="batas_pendaftar">Batas Pendaftar</label>
                            <input type="number" name="batas_pendaftar" id="batas_pendaftar" class="form-control"
                                placeholder="Batas Total Pendaftar" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="batas_kandidat">Batas Kandidat</label>
                            <input type="number" name="batas_kandidat" id="batas_kandidat" class="form-control"
                                placeholder="Batas Kandidat" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="status">Status Pendaftaran</label>
                            <select class="form-control" name="status" id="">
                                <option value="buka">Buka</option>
                                <option value="tutup">Tutup</option>
                            </select>
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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($oprec as $satuan)
                            <tr>
                                <th scope="row">{{ $satuan->batch }}</th>
                                <td>{{$satuan->batas_pendaftar}}</td>
                                <td>{{$satuan->batas_kandidat}}</td>
                                <td>
                                    @if($satuan->status == 'buka')
                                        <a href="/admin/oprec/close/{{$satuan->id}}" class="btn btn-success">Buka</a>
                                    @else
                                        <a href="/admin/oprec/open/{{$satuan->id}}" class="btn btn-warning">Tutup</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ./card-outline -->

            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <strong>Jadwal Audisi</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{route('add-jadwal')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group col-5">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Senin, 17 Agustus 2020"
                                required>
                        </div>
                        <div class="form-group col-5">
                            <label for="kuota">Kuota</label>
                            <input type="number" name="kuota" id="kuota" class="form-control"
                                placeholder="Batas Total Pendaftar" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="link_grup">Link Grup</label>
                            <input type="text" name="link_grup" id="link_grup" class="form-control"
                                placeholder="Batas Kandidat" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="selectBatch">Batch</label>
                            <select class="form-control" name="batch" id="selectBatch">
                                <option disabled selected>Pilih Batch</option>
                                @foreach($oprec as $satuan)
                                <option value="{{$satuan->batch}}">{{$satuan->batch}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 text-right">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-outline -->

            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <strong>Data Jadwal Audisi</strong>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Batch</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kuota</th>
                                <th scope="col">Total Pendaftar</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwal as $satuan)
                            <tr>
                                <th scope="row">{{ $satuan->batch }}</th>
                                <td>{{$satuan->tanggal}}</td>
                                <td>{{$satuan->kuota}}</td>
                                <td>{{$satuan->jumlah_pendaftar}}</td>
                                <td>{{$satuan->link_grup}}</td>
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
