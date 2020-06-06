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
                    <form action="/admin/berita/edit/{{$berita->id}}" method="post" enctype="multipart/form-data">
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="list-style-type: none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="judul" id="" placeholder="Masukkan Judul..." value="{{$berita->judul}}">
                        </div>
                        <div class="form-group mb-3">
                            <select name="kategori" class="custom-select" id="">
                                <option selected disabled value="">Pilih Kategori...</option>
                                @foreach($kategori as $category)
                                    @if($category->nama_kategori == $berita->kategori)
                                    <option selected value="{{$category->nama_kategori}}"> {{$category->nama_kategori}} </option>
                                    @else
                                    <option value="{{ $category->nama_kategori }} ">{{ $category->nama_kategori }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="image" id="">
                            <label class="custom-file-label" for="validatedCustomFile">{{$berita->banner}}</label>
                        </div>
                        <input type="text" class="custom-file-input" name="pathPhoto" value="{{$berita->banner}}" id="" hidden>
                        <div class="mb-3">
                            <textarea class="textarea" id="isiBerita" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                name="isi_berita">{{$berita->isi_berita}}</textarea>
                        </div>
                        <div class="mb-3">
                            <select id="pilih_tag" class="custom-select" name="tag[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <div hidden>{{$i = 0}}</div>
                                    @foreach($tagged as $satuantag)
                                    @if($tag->nama_tag == $satuantag)
                                    <option selected value="{{$tag->nama_tag}}">{{$tag->nama_tag}}</option>
                                    <div hidden> {{$i = 1}}</div>
                                    @endif
                                    @endforeach
                                    @if($i == 0)
                                    <option value="{{ $tag->nama_tag }} ">{{ $tag->nama_tag }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-switch">
                                @if($berita->penting == '1')
                                <input type="checkbox" class="custom-control-input" name="penting" value="1" id="customSwitch1" checked>
                                @else
                                <input type="checkbox" class="custom-control-input" name="penting" value="1" id="customSwitch1">
                                @endif
                                <label class="custom-control-label" for="customSwitch1">Rekomendasi</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-switch">
                                @if($berita->tgl_publish == NULL)
                                <input type="checkbox" class="custom-control-input" name="publish" value="1" id="customSwitch2">
                                @else
                                <input type="checkbox" class="custom-control-input" name="publish" value="1" id="customSwitch2" checked>
                                @endif
                                <label class="custom-control-label" for="customSwitch2">Publish</label>
                            </div>
                        </div>
                        <button type="submit" name="action">Save</button>
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