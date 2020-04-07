@extends('admin.layouts.app')

@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

@endpush

@section('title', 'Buat Berita')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>KATEGORI DAN TAG</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Kategori dan Tag</li>
                </ol>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
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
                        TAMBAH KATEGORI
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jumlah Berita</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden>{{ $i=1 }}</div>
                            @foreach($kategori as $index)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$index['nama_kategori']}}</td>
                                <td>{{$index['jumlah_berita']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br />
                    <form action="{{route('tambah-kategori')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <input type="text" name="nama_kategori" id="" placeholder="Kategori">
                        </div>
                        <p class="text-sm mb-0">
                            Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation
                                and license
                                information.</a>
                        </p>
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
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        TAMBAH TAG
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden>{{ $i=1 }}</div>
                            @foreach($tag as $index)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$index->nama_tag}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br />
                    <form action="{{route('tambah-tag')}}" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="nama_tag" id="" placeholder="Tag">
                        </div>
                        <p class="text-sm mb-0">
                            Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation
                                and license
                                information.</a>
                        </p>
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

@push('js')
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    $(function () {

        // Summernote
        $('#isiBerita').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

        $('#pilih_tag').select2({
            placeholder: 'Tambahkan tags...'
        });
    });

</script>
@endpush
