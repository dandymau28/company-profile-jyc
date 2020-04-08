@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endpush

@section('title', 'Data Master CAB')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Master CAB</h1>
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Pendaftar</span>
                            <span class="info-box-number">
                                {{$total}}
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
                            <span class="info-box-text">Belum Bayar</span>
                            <span class="info-box-number">{{$notpaid}}</span>
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
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Belum Terverifikasi</span>
                            <span class="info-box-number">{{$waitconf}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Terverifikasi</span>
                            <span class="info-box-number">{{$paid}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <table class="table table-bordered" id="tabelCAB">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Kode Bayar</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status Pembayaran</th>
                                        <th scope="col">Verifikasi Pembayaran</th>
                                        <th width="100px">Detail</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$.ajax({
    method: "GET",
    url: "http://127.0.0.1:8000/api/cab/get"
})
    .done(function(response) {
        if(response.code === 200) {
            $("#tabelCAB").DataTable({
                data: response.data,
                columns: [
                    {
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: "nama_lengkap"
                    },
                    {
                        data: "kode_bayar"
                    },
                    {
                        data: "email"
                    },
                    {
                        render: function(data, type, full) {
                            if(full.status == 'not_paid') {
                                return (
                                    'Belum bayar' 
                                );
                            } else if (full.status == 'wait_conf') {
                                return (
                                    'Menunggu verifikasi' 
                                );
                            } else {
                                return (
                                    'Terverifikasi' 
                                );
                            }
                        }
                    },
                    {
                        render: function(data, type, full) {
                            if (full.status != 'paid') {
                                return (
                                    '<a class="btn btn-primary btn-sm" href="http://127.0.0.1:8000/admin/cab/verif/' + full.id +'">Verifikasi</a>' 
                                );
                            } else {
                                return (
                                    '<a class="btn btn-danger btn-sm" href="http://127.0.0.1:8000/admin/cab/unverif/' + full.id +'">Batal Verifikasi</a>' 
                                );
                            }
                        }
                    },
                    {
                        render: function(data, type, full) {
                            return (
                                '<a class="btn btn-primary btn-sm" href="http://127.0.0.1:8000/admin/cab/id/' + full.id +'">Detail</a>' 
                            );
                        }
                    }
                ]
            });
        }
    })
    .fail(function() {
        console.log(error);
    });
</script>
@endpush