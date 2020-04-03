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
                <div class="input-group custom-search-form border border-danger">
                    {{-- <select class="border-0 form-control cari-berita">
                    </select> --}}
                    <input type="text" class="border-0 form-control cari-berita" placeholder="Cari berita...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
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
                            <div class="judul-berita display-5 mb-1">
                                <a href="/berita/{{ $berita->slug }}">{{ Str::title($berita->judul) }}</a>
                                
                            </div>
                            <div class="tanggal-posting text-muted my-2">
                                <i class="far fa-clock"></i>
                                <span>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</span>
                            </div>
                            <div class="konten-berita text-justify">
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

            {{-- Sidebar --}}
            <div id="sidebar-berita" class="col">
                <div class="row d-none d-lg-block">
                    <div class="col">
                        <div class="input-group custom-search-form border border-danger">
                            {{-- <select class="border-0 form-control cari-berita">
                            </select> --}}
                            <input type="text" class="border-0 form-control cari-berita" placeholder="Cari berita...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        IKUTI KAMI
                    </div>
                    <div class="col hitam-abu mr-3">

                    </div>
                </div>
                <div class="row mt-2 text-center text-white mx-1">
                    <div class="col py-3">
                        <a class="shadow-lg " href="https://www.facebook.com/jktyouthchoir/"><img class="social-links" src="{{asset('/assets/img/facebook-1.png')}}" alt="Fb"></a>
                        {{-- <a href="http://"><i id="fb" class="fab fa-facebook-f fa-2x rounded-circle"></i></a> --}}
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://twitter.com/JktYouthChoir"><img class="social-links" src="{{asset('/assets/img/twitter-1.png')}}" alt="Twitter"></a>
                        {{-- <a href="http://"><i id="twitter" class="fab fa-twitter fa-2x"></i></a> --}}
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://www.youtube.com/channel/UCUelE1nt2PXC_SN6aAfbs8A"><img class="social-links" src="{{asset('/assets/img/youtube-1.png')}}" alt="Youtbe"></a>
                        {{-- <a href="http://"><i id="youtube" class="fab fa-youtube fa-2x"></i></a> --}}
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://www.instagram.com/jktyouthchoir/"><img class="social-links" src="{{asset('/assets/img/ig-1.png')}}" alt="Ig"></a>
                        {{-- <a href="http://"><i id="ig" class="fab fa-instagram fa-2x"></i></a> --}}
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="mailto:jakartayouthchoir@gmail.com"><img class="social-links" src="{{asset('/assets/img/email-2.png')}}" alt="Twitter"></a>
                        {{-- <a href="http://"><i id="gmail" class="fas fa-envelope fa-2x"></i></i></a> --}}
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        TERHANGAT
                    </div>
                    <div class="col hitam-abu mr-3">
                        
                    </div>
                </div>
                @foreach( $beritas as $berita )
                    <div  data-aos="zoom-in" class="row mb-1 text-dark py-3">
                        <div class="col-12 col-md-6">
                            <a href="/berita/{{ $berita->slug }}">
                                <img class="img-fluid" src="{{Storage::url($berita->banner)}}" alt="Gambar Blog">
                            </a>
                        </div>
                        <div class="col-12 col-md-6 pt-sm-3 pt-md-0">
                            <div class=" mb-1">
                                <a href="/berita/{{ $berita->slug }}">{{ Str::title(Str::limit($berita->judul, 80)) }}</a>
                                
                            </div>
                            <div class="tanggal-posting text-muted my-2">
                                <small><i class="far fa-clock pr-1"></i>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                    <hr class="my-n2">
                @endforeach
                {{-- <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        <ul>
                            <li>2019</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        <ul>
                            <li>2018</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        <ul>
                            <li>2017</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        <ul>
                            <li>2016</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col-4">
                        <ul>
                            <li>2015</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2"> --}}

                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        KATEGORI
                    </div>
                    <div class="col hitam-abu mr-3">
                        
                    </div>
                </div>
                @foreach($koleksiKategori as $koleksi)
                <a href="/berita/kategori/{{$koleksi['kategori']}}">
                <div class="row justify-content-between mt-3">
                    <div class="col">
                        <ul>
                            <li>{{ $koleksi['kategori'] }}</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-pill badge-secondary">{{ $koleksi['hasil'] }}</span>
                    </div>
                </div>
                </a>
                <hr class="mt-n2">
                @endforeach
            </div>
        </div>
    </section>
    @include('templates.footer')
</body>
    @include('templates.foot')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    
</html>