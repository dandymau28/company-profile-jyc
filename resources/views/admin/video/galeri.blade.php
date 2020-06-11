@extends('admin.layouts.app')

@section('title', 'Galeri')
@push('styles')
<link rel="stylesheet" href="{{ asset('DataTables-1.10.20') }}/css/jquery.dataTables.css">
@endpush

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Galeri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Galeri</li>
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
                <div class="card-header justify-content-between row">
                    <h3 class="card-title col">
                        Data Foto
                        {{-- <small>Simple and fast</small> --}}
                    </h3>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalFoto"><i class="fas fa-plus-circle pr-2"></i>Tambah Foto</button>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table id="table_prestasi" class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Foto</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header justify-content-between row">
                    <h3 class="card-title col">
                        Data Video
                        {{-- <small>Simple and fast</small> --}}
                    </h3>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalVideo"><i class="fas fa-plus-circle pr-2"></i>Tambah Video</button>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table id="table_video" class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Link Video</th>
                                <th scope="col">Nama Admin</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
  
    
    {{-- Modal Tambah Prestasi --}}
    <div id="modalFoto" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('upload-foto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card shadow">
                            <div class="card-header bg-success">
                                <h5 class="text-white"> Tambahkan Foto </h5>
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
                                <select class="w-100 custom-select" name="kategori" id="pilih-kegiatan">
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    @foreach ($kategori as $kegiatan)
                                    <option value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                                    @endforeach
                                </select>
                                <label for="deskripsi"> Deskripsi </label>
                                <div class="form-group">
                                    <input type="text" name="deskripsi" class="form-control">
                                </div>
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
                <!-- ./row -->
            </div>
        </div>
    </div>
    <div id="modalVideo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('submit-video') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card shadow">
                            <div class="card-header bg-success">
                                <h5 class="text-white"> Tambahkan Video </h5>
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
                                <label for="images"> Link Video </label>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" id="video">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"> Simpan </button>
                            </div>
                        </div>
                    </form>
                <!-- ./row -->
            </div>
        </div>
    </div>
    
</section>
<!-- /.content -->
@endsection

@push('js')
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<script src="{{ asset('DataTables-1.10.20/js/jquery.dataTables.min.js') }}"></script>

<script>
    $(document).ready(function () {
        var baseURL = "https://www.jakartayouthchoir.com";

        $.ajax({
            url: '/api/videos/all',
            method: 'GET'
        }).done(response => {
            let tableVideo = $("#table_video");
            let cekTable = $.fn.dataTable.isDataTable(tableVideo);
            if(cekTable) {
                tableVideo.DataTable().clear().destroy();
            }

            let tableVideoOptions = {
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                },
                data: response.result,
                columns: [
                    {
                        data: 'alamat',
                        render: function(data, type, row, meta) {
                            return `<a href="${data}">${data}<a/>`
                        }
                    },
                    {
                        data: 'username',
                        render: function(data, type, row, meta) {
                            return data.charAt(0).toUpperCase() + data.slice(1);
                        },
                        className: "text-center"
                    },
                    {
                        data: 'id',
                        render: function (data, type, row, meta) {
                            return `<button type="button" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>`
                        },
                        className: "text-center"
                    }

                ]
            };
            $("#table_video").DataTable(tableVideoOptions);
        }).fail(error => {
            console.log(error);
        });
    })
</script>
@endpush
