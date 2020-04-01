@extends('admin.layouts.app')

@section('title', 'Contoh Templating')

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
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <form action="{{route('berita-post')}}" method="post" enctype="multipart/form-data">
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
                    <input type="text" name="judul" id="" placeholder="Input judul">
                  </div>
                  <div class="mb-3">
                    <select name="kategori" id="">
                      @foreach($kategoris as $category)
                      <option value="{{ $category->nama_kategori }} ">{{ $category->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <input type="file" name="image" id="">
                  </div>
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi_berita"></textarea>
                  </div>
                  <p class="text-sm mb-0">
                    Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                      information.</a>
                  </p>
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