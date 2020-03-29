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

    <div class="jumbotron jumbotron-berita jumbotron-fluid">
        <div class="container">
            <h1 class="display-judul">BERITA</h1>
            <h4 class="display-judul-2">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    {{-- Slider Berita --}}
    {{-- <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/img/kegiatan/slide-1.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/kegiatan/slide-2.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/kegiatan/slide-3.png')}}" class="d-block w-100" alt="img">
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="mt-n5 berita-h">
        <div class=" text-center pb-2 display-4">{{ __('Berita') }}</div>
    </div> --}}
    <!-- Konten -->
    <section id="konten-berita" class="w-80">
        {{-- Berita --}}

        <div class="row my-5">
            {{-- Card Berita --}}
            <div class="col-lg-8 col-md-8 col-sm-12 mr-5">
                @foreach( $beritas as $berita )
                    <div class="row mb-4 bg-light text-dark py-3">
                        <div class="col-6 img-hover-zoom img-hover-zoom--brightness">
                            <a href="http://">
                                <img class="img-fluid" src="{{asset($berita->banner)}}" alt="Gambar Blog">
                            </a>
                        </div>
                        <div class="col-6">
                            <div class="judul-berita display-5  mb-1">
                                <a href="/berita/{{ $berita->id }}">{{ $berita->judul }}</a>
                            </div>
                            <div class="tanggal-posting text-muted my-2">
                                <i class="far fa-clock"></i>
                                <span>{{$berita->tgl_publish}}</span>
                            </div>
                            <div class="konten-berita text-justify">
                                {{ $berita->isi_berita }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row justify-content-end ">
                    <div class="col-4">
                        {{$beritas->links()}}
                    </div>
                </div>
                {{-- <div class="row mb-4">
                    <div class="col-6">
                        <a href="http://">
                            <img class="img-fluid" src="{{asset('assets/img/berita/1.png')}}" alt="Gambar Blog">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="judul-berita display-5  mb-1">
                            <a href="http://">Pagelaran Konser JYC Mengagumkan!</a>
                        </div>
                        <div class="tanggal-posting text-muted my-2">
                            <i class="far fa-clock"></i>
                            <span>29 Agustus 2019</span>
                        </div>
                        <div class="konten-berita text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At ad velit harum reiciendis amet accusamus repellat, quae voluptas labore. Officiis, voluptatum quos voluptas eveniet odit tempora sapiente quaerat perspiciatis doloremque, laboriosam repellat incidunt accusamus cumque itaque. Eos, adipisci. Molestias....
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <a href="http://">
                            <img class="img-fluid" src="{{asset('assets/img/berita/1.png')}}" alt="Gambar Blog">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="judul-berita display-5  mb-1">
                            <a href="http://">Pagelaran Konser JYC Mengagumkan!</a>
                        </div>
                        <div class="tanggal-posting text-muted my-2">
                            <i class="far fa-clock"></i>
                            <span>29 Agustus 2019</span>
                        </div>
                        <div class="konten-berita text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At ad velit harum reiciendis amet accusamus repellat, quae voluptas labore. Officiis, voluptatum quos voluptas eveniet odit tempora sapiente quaerat perspiciatis doloremque, laboriosam repellat incidunt accusamus cumque itaque. Eos, adipisci. Molestias....
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- Sidebar --}}
            <div class="col border-left pl-5">
                <div class="row">
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
                <div class="row justify-content-between mt-3">
                    <div class="col">
                        <ul>
                            <li>Kompetisi Nasional</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <ul>
                            <li>Kompetisi Internasional</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <ul>
                            <li>Upacara Kedinasan</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <ul>
                            <li>Guest Star</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <ul>
                            <li>Konser Pra-Kompetisi</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
                <div class="row justify-content-between mt-2">
                    <div class="col">
                        <ul>
                            <li>Prestasi</li>
                        </ul>
                    </div>
                    <div class="col-1 mr-5">
                        <span class="badge badge-primary badge-pill">14</span>
                    </div>
                </div>
                <hr class="mt-n2">
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