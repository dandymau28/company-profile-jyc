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
        <div class="row mt-5 d-lg-none">
            <div class="col">
                <div class="input-group custom-search-form border border-danger">
                    <input type="text" class="border-0 form-control" placeholder="Cari berita...">
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
                            <input type="text" class="border-0 form-control" placeholder="Cari berita...">
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
                        <a href="http://"><i class="fab fa-facebook-f fa-2x rounded-circle"></i></a>
                    </div>
                    <div class="col py-3">
                        <a href="http://"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="col py-3">
                        <a href="http://"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                    <div class="col py-3">
                        <a href="http://"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                    <div class="col py-3">
                        <a href="http://"><i class="fas fa-envelope fa-2x"></i></i></a>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        TAHUN
                    </div>
                    <div class="col hitam-abu mr-3">
                        
                    </div>
                </div>
                <div class="row justify-content-between mt-3">
                    <div class="col-4">
                        <ul>
                            <li>2020</li>
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
                <hr class="mt-n2">

                <div class="row mt-5">
                    <div class="col-5 p-2 text-center text-white merah ml-3">
                        KATEGORI
                    </div>
                    <div class="col hitam-abu mr-3">
                        
                    </div>
                </div>
                @foreach($koleksiKategori as $koleksi)
                <div class="row justify-content-between mt-3">
                    <div class="col">
                        <ul>
                            <li><a href="/berita/kategori/{{$koleksi['kategori']}}">{{ $koleksi['kategori'] }}</a></li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">{{ $koleksi['hasil'] }}</span>
                    </div>
                </div>
                <hr class="mt-n2">
                @endforeach
            </div>
        </div>
    </section>
    @include('templates.footer')
</body>
    @include('templates.foot')
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</html>