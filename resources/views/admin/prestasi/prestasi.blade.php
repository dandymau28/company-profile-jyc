@extends('admin.layouts.app')

@section('title', 'Contoh Templating')
    @push('styles')
    <link rel="stylesheet" href="{{ asset('DataTables-1.10.20') }}/css/jquery.dataTables.css">
    @endpush


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Prestasi</h1>
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
                <div class="card-header justify-content-between row">
                    <h3 class="card-title col">
                        Data Prestasi
                        {{-- <small>Simple and fast</small> --}}
                    </h3>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle pr-2"></i>Tambah Prestasi</button>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table id="table_prestasi" class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Nama Kompetisi</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Foto Tim</th>
                                <th scope="col">Foto Piala</th>
                                <th scope="col">Penghargaan</th>
                                {{-- <th scope="col">Aksi</th> --}}
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    {{-- Modal Penghargaan --}}
    <div class="modal fade" id="modalPenghargaan" tabindex="-1" role="dialog" aria-labelledby="modalPenghargaanTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPenghargaanTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush bg-transparent pt-2">

                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Modal Gambar -->
    <div class="modal fade" id="modalGambar" tabindex="-1" role="dialog" aria-labelledby="modalGambarTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalGambarTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="Gambar" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Modal Tambah Prestasi --}}
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalGambarTitle">Tambahkan Prestasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- ./row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <form action="{{route('input-prestasi')}}" name="form-prestasi" method="post" enctype="multipart/form-data">
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
                                    <div class="form-group col">
                                        <label for="nama_kompetisi">Nama Kompetisi</label>
                                        <input type="text" id="nama_kompetisi" name="nama_kompetisi" class="form-control" placeholder="Varsovia Cantat" required>
                                    </div>
                                    <div class="form-group col">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Warsawa" required>
                                    </div>
                                    <div class="form-group col">
                                        <label for="negara">Negara</label>
                                        <input type="text" name="negara" id="negara" class="form-control" placeholder="Polandia" required>
                                    </div>
                                    <div class="form-group col">
                                        <label for="tgl_kompetisi">Waktu Kompetisi</label>
                                        <input type="text" class="form-control" name="tgl_kompetisi" id="tgl_kompetisi" placeholder="November 2019" required>
                                    </div>
                                    <div class="form-group col">
                                        <label for="logo_kompetisi">Logo Kompetisi</label>
                                        <input type="file" class="form-control" name="logo_kompetisi" id="logo_kompetisi" placeholder="Logo">
                                    </div>
                                    <div class="form-group col">
                                        <label for="foto_tim">Foto Tim</label>
                                        <input type="file" class="form-control" name="foto_tim" id="foto_tim" placeholder="Foto Tim">
                                    </div>
                                    <div class="form-group col">
                                        <label for="foto_piala">Foto Piala</label>
                                        <input type="file" class="form-control" name="foto_piala" id="foto_piala" placeholder="Foto Piala">
                                    </div>
                                    <div class="form-group col" id="gelar">
                                        <label for="foto_piala">Penghargaan yang didapat:</label>
                                        <input type="text" class="form-control mb-1 gelar" name="gelar[]" placeholder="Grandprix Winner" required>
                                    </div>
                                    <div class="form-group col">
                                        <button id="hapus-gelar" type="button"  class="btn btn-info d-none">Hapus Gelar</button>
                                        <button id="tambah-gelar" type="button"  class="btn btn-info">Tambah Gelar</button>
                                    </div>
                                    <div class="col text-right">
                                        <button type="submit" value="post" name="action"  class="btn btn-success">Simpan</button>
                                        {{-- <button type="submit" name="action" value="post">Post</button> --}}
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </div>
        </div>
    </div>
    
</section>
<!-- /.content -->
@endsection

@push('js')
<script src="{{ asset('DataTables-1.10.20/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function ()  {

        var baseURL = 'http://localhost:8000'

        $.ajax({
            url: '/api/prestasi/all',
            method: 'GET',
        }).done(response => {
            console.log(response);
            let tabelPr1 = $('#table_prestasi');
            let cek1 = $.fn.dataTable.isDataTable(tabelPr1);
            if (cek1) {
                tabelPr1.DataTable().clear().destroy();
            }
            let pr1Options = {
                // info: false,
                // searching: false,
                // ordering: false,
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                },
                data: response.result,
                // data: response.data.data_ruang.filter(ruang => (
                //     ruang.pengawas.findIndex(pengawas => {
                //         return pengawas.jenis_pengawas == 'PR_1';
                //     }) != -1
                // )),
                // processing: true,
                // serverSide: true,
                columns: [
                    {
                        data: 'nama_kompetisi',
                    },
                    {
                        data: 'kota',
                    },
                    {
                        data: 'negara',
                    },
                    {
                        data: 'tgl_kompetisi'
                    },
                    {
                        data: 'logo_kompetisi',
                        render: function(data, type, row, meta) {
                            return `<button type="button" class="btn btn-secondary" data-src="${baseURL + data}" data-judul="Logo Event" data-toggle="modal" data-target="#modalGambar">Lihat</button>`;
                        },
                        className: 'text-center'
                    },
                    {
                        data: 'foto_tim',
                        render: function(data, type, row, meta) {
                            return `<button type="button" class="btn btn-secondary" data-src="${baseURL + data}" data-judul="Foto Tim" data-toggle="modal" data-target="#modalGambar">Lihat</button>`;
                        },
                        className: 'text-center'
                    },
                    {
                        data: 'foto_piala',
                        render: function(data, type, row, meta) {
                            return `<button type="button" class="btn btn-secondary" data-src="${baseURL + data}" data-judul="Logo Piala" data-toggle="modal" data-target="#modalGambar">Lihat</button>`;
                        },
                        className: 'text-center'
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return `<button type="button" class="btn btn-secondary" data-id="${data}" data-judul="Penghargaan" data-toggle="modal" data-target="#modalPenghargaan">Lihat</button>`;
                        },
                        className: 'text-center'
                    }
                ]
            };
            $('#table_prestasi').DataTable(pr1Options);
        }).fail(error => {
            console.log(error);
        });

        $('#tambah-gelar').on('click', function () {
            let parent = $('#gelar');
            let child = parent.find('gelar');
            let jum = child.length;
            $('#hapus-gelar').removeClass('d-none').addClass('d-inline');
            var addChild = document.getElementById('gelar');
            let tambahElemen = document.createElement('input');
            tambahElemen.type = 'text';
            tambahElemen.required = true;
            tambahElemen.name = 'gelar[]';
            tambahElemen.placeholder = 'Gold Medal';
            tambahElemen.className = 'form-control mb-1 gelar';
            addChild.appendChild(tambahElemen);
        });
    
        $('#hapus-gelar').on('click', function () {
            let parent = $('#gelar');
            let child = parent.find('.gelar');
            console.log(child.length);
            if(child.length > 2) {
                child.last().remove();
            } else {
                child.last().remove();
                $(this).removeClass('d-inline').addClass('d-none');
            }
        });

        $('#modalGambar').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget) // Button that triggered the modal
            let judul = button.data('judul') // Extract info from data-* attributes
            let gambar = button.data('src');
            console.log(gambar);
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            let modal = $(this)
            modal.find('.modal-title').text(judul);
            modal.find('.modal-body img').attr('src', gambar);
        });

        $('#modalPenghargaan').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let judul = button.data('judul');
            let id_prestasi = button.data('id');
            let modal = $(this);
            $.ajax({
                url: '/api/penghargaan/prestasi/' + id_prestasi
            }).done(response => {
                let penghargaan = response.result;
                modal.find('.modal-title').text(judul);
                modal.find('.modal-body').empty();
                penghargaan.forEach(gelar => {
                    modal.find('.modal-body').append(`
                    <li class="list-group-item bg-light text-danger py-1"><i class="fas fa-trophy pr-2"></i>${gelar.gelar}</li>
                    `);
                });
            }).fail(error => {
                console.log(error);
            });
        });
    });


</script>
@endpush