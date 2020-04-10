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
                {{-- <div class="card-header">
                    <h3 class="card-title">
                        Tambahkan Prestasi
                        <small>Simple and fast</small>
                    </h3>
                </div> --}}
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
                        <div class="form-group col-6">
                            <label for="nama_kompetisi">Nama Kompetisi</label>
                            <input type="text" id="nama_kompetisi" name="nama_kompetisi" class="form-control" placeholder="Varsovia Cantat" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" id="kota" class="form-control" placeholder="Warsawa" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="negara">Negara</label>
                            <input type="text" name="negara" id="negara" class="form-control" placeholder="Polandia" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="tgl_kompetisi">Waktu Kompetisi</label>
                            <input type="text" class="form-control" name="tgl_kompetisi" id="tgl_kompetisi" placeholder="November 2019" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="logo_kompetisi">Logo Kompetisi</label>
                            <input type="file" class="form-control" name="logo_kompetisi" id="logo_kompetisi" placeholder="Logo">
                        </div>
                        <div class="form-group col-6">
                            <label for="foto_tim">Foto Tim</label>
                            <input type="file" class="form-control" name="foto_tim" id="foto_tim" placeholder="Foto Tim">
                        </div>
                        <div class="form-group col-6">
                            <label for="foto_piala">Foto Piala</label>
                            <input type="file" class="form-control" name="foto_piala" id="foto_piala" placeholder="Foto Piala">
                        </div>
                        <div class="form-group col-6" id="gelar">
                            <label for="foto_piala">Penghargaan yang didapat:</label>
                            <input type="text" class="form-control mb-1 gelar" name="gelar[]" placeholder="Grandprix Winner" required>
                        </div>
                        <div class="form-group col-6">
                            <button id="hapus-gelar" type="button"  class="btn btn-info d-none">Hapus Gelar</button>
                            <button id="tambah-gelar" type="button"  class="btn btn-info">Tambah Gelar</button>
                        </div>
                        <div class="col-6 text-right">
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
</section>
<!-- /.content -->
@endsection

@push('js')
<script type="text/javascript">

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

</script>
@endpush