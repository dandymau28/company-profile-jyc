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
                <h1>Buat Berita Baru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Buat Berita Baru</li>
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
                    <!-- tools box -->
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                            data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{route('post-berita')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        
                        @if(Session::has('error'))
                        <div class="alert alert-success">
                            {{ Session::get('error') }}
                            @php
                            Session::forget('error');
                            @endphp
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <div class="form-group mb-3">
                            <label for="judul">Judul Berita:</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori Berita:</label>
                            <select name="kategori" class="custom-select" id="kategori">
                                <option selected disabled value="">Pilih Kategori...</option>
                                @foreach($kategoris as $category)
                                <option value="{{ $category->nama_kategori }} ">{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="image" id="">
                            <label class="custom-file-label" for="validatedCustomFile">Pilih Gambar...</label>
                        </div>
                        <div class="mb-3">
                            <label for="isiBerita">Isi Berita:</label>
                            <textarea class="textarea" id="isiBerita" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                            name="isi_berita"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pilih_tag">Hashtag:</label>
                            <select id="pilih_tag" class="custom-select" name="tag[]" multiple="multiple">
                                @foreach($tags as $tag)
                                <option value="{{ $tag->nama_tag }} ">{{ $tag->nama_tag }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="penting" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Rekomendasi</label>
                            </div>
                        </div>
                        <button type="submit" name="action" value="post">Post</button>
                        <button type="submit" name="action" value="save">Save</button>
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

        $('.custom-file-input').on('change', function() { 
            let fileName = $(this).val().split('\\').pop(); 
            $(this).next('.custom-file-label').addClass("selected").html(fileName); 
        });
 
    });
</script>
@endpush