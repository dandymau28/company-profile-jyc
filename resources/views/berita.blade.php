<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>
<body>
    {{-- Navbar --}}
    @include('templates.navbar')

    {{-- Banner --}}
    <div id="banner-berita">
        <div class="container text-berita">
            <h1 class="display-judul">BERITA</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!-- Konten -->
    <section id="konten-berita" class="w-80">
        {{-- Berita --}}
        <div class="row mt-5 d-lg-none">
            <div class="col">
                <form id="cari-berita-mobile" action="/berita/cari-berita"  method="GET">
                    <div class="input-group custom-search-form border border-danger">
                        <input name="term" id="term" type="text" class="border-0 form-control" placeholder="Cari berita...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                {{-- <div class="input-group custom-search-form border border-danger">
                    <select class="border-0 form-control cari-berita">
                    </select>
                    <input type="text" class="border-0 form-control cari-berita" placeholder="Cari berita...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div> --}}
            </div>
        </div>

        <div class="row my-5">
            {{-- Card Berita --}}
            <div class="col-lg-8 col-md-12 col-sm-12 mr-md-5">
                <nav aria-label="breadcrumb" class="mb-5 d-none d-lg-block row">
                    <ol class="breadcrumb bg-light">
                        @empty($kategori)
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berita</li>
                        @endempty
                        
                        @isset($kategori)
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('berita') }}">Berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::title($kategori) }}</li>
                        @endisset
                    </ol>
                </nav>
                @isset($cari)
                    <h5>{{ $cari }}</h5>
                @endisset
                @isset($message)
                    <h5>{{ $message }}</h5>   
                @endisset
                @empty($beritas)
                    <div class="text-center">
                        Belum ada berita di kategori {{ $kategori }}!
                    </div>
                @endempty
                @foreach( $beritas as $berita )
                    <div  data-aos="zoom-in" class="row mb-4 bg-light text-dark py-3">
                        <div class="col-12 col-md-6 img-hover-zoom img-hover-zoom--brightness">
                            <a href="/berita/{{ $berita->slug }}">
                                <img class="img-fluid" src="{{Storage::url($berita->banner)}}" alt="Gambar Blog">
                            </a>
                        </div>
                        <div class="col-12 col-md-6 pt-sm-3 pt-md-0">
                            <div class="judul-berita mb-1">
                                <a href="/berita/{{ $berita->slug }}">{{ Str::title($berita->judul) }}</a>
                                
                            </div>
                            <div class="tanggal-posting text-muted my-2">
                                <i class="far fa-clock"></i>
                                <span>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</span>
                            </div>
                            <div class="isi-berita text-justify">
                                {!! Str::limit(strip_tags($berita->isi_berita), 400) !!}
                            </div>
                            <div class="float-right pt-sm-2 pt-md-1">
                                <a type="button" href="/berita/{{ $berita->slug }}" class="btn btn-outline-secondary">Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row justify-content-center">
                    {{$beritas->links()}}
                </div>
            </div>
            <hr class="d-none d-lg-block">

        @include('templates.sidebar')    
        </div>
    </section>
    @include('templates.footer')
</body>
    @include('templates.foot')
</html>