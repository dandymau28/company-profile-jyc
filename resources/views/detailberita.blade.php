<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
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
        <div class="row my-5">
            {{-- Card Berita --}}
            <div class="col-lg-8 col-md-12 col-sm-12 mr-md-5">
                {{-- Breadcrumb --}}
                <nav aria-label="breadcrumb" class="mb-5 d-none d-lg-block">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('berita') }}">Berita</a></li>
                        <li class="breadcrumb-item active text-truncate" aria-current="page">{{ $berita->judul }}</li>
                    </ol>
                </nav>

                <div id="detail-berita">
                    <div id="judul-detail-berita" class="border-bottom border-danger">
                        <h2 class="text-justify judul-berita">{{ $berita->judul }}</h2>
                    </div>
                    <div class="tanggal-posting text-small text-muted my-2">
                        <i class="far fa-clock"></i>
                        <span>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</span>
                    </div>
                    <div id="banner-detail-berita" class="mt-5 d-flex justify-content-center row">
                        <img class="img-fluid col-12" src="{{Storage::url($berita->banner)}}" alt="Gambar Blog">
                        {{-- <img class="img-fluid " src="{{asset('assets/img/kegiatan/banner-wcg.png')}}" alt="Gambar Blog"> --}}
                    </div>
                    <div id="isi-detail-berita" class="text-justify my-4">
                        {!! $berita->isi_berita !!}
                    </div>
                    <div id="tag-detail-berita" class="text-white isi-berita">
                        <span class="text-muted pr-3"><i class="fas fa-tags fa-2x"></i></span>
                        @foreach($tags as $tag)
                        <div id="tag-detail-berita" class="d-inline-flex p-2 hitam-abu border border-secondary">
                            <a href="/berita/tag/{{ strtolower($tag) }}">{{'#'. strtolower($tag)}}</a>
                        </div>
                        @endforeach
                        {{-- <span class="border border-secondary">JYC</span> --}}
                    </div>
                </div>
            </div>
            <hr class="d-none d-lg-block">
            @include('templates.sidebar') 

            {{-- Sidebar
            <div id="sidebar-berita" class="col">
                <div class="row d-none d-lg-block">
                    <div class="col">
                        <form id="cari-berita" action="/berita/cari-berita"  method="GET">
                            <div class="input-group custom-search-form border border-danger">
                                <input name="term" id="term" type="text" class="border-0 form-control" placeholder="Cari berita...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
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
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://twitter.com/JktYouthChoir"><img class="social-links" src="{{asset('/assets/img/twitter-1.png')}}" alt="Twitter"></a>
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://www.youtube.com/channel/UCUelE1nt2PXC_SN6aAfbs8A"><img class="social-links" src="{{asset('/assets/img/youtube-1.png')}}" alt="Youtbe"></a>
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="https://www.instagram.com/jktyouthchoir/"><img class="social-links" src="{{asset('/assets/img/ig-1.png')}}" alt="Ig"></a>
                    </div>
                    <div class="col py-3">
                        <a class="shadow-lg" href="mailto:jakartayouthchoir@gmail.com"><img class="social-links" src="{{asset('/assets/img/email-2.png')}}" alt="Twitter"></a>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        TERHANGAT
                    </div>
                    <div class="col hitam-abu mr-3">
                        
                    </div>
                </div>
                @foreach( $beritaTerhangat as $berita )
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
            </div> --}}
        </div>
    </section>
    @include('templates.footer')
</body>
    @include('templates.foot')
</html>