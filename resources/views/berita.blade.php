<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
</head>
<body>
    {{-- Navbar --}}
    @include('templates.navbar')

    {{-- Slider Berita --}}
    <div class="carousel">
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
    </div>

    <!-- Konten -->
    <section id="konten-berita" class="w-80">
        {{-- Berita --}}
        <div class="row my-5">
            <div class="col-lg-8 mr-auto berita-h text-center pb-2 display-4">{{ __('Berita') }}</div>
        </div>

        <div class="row">
            {{-- Card Berita --}}
            <div class="col-lg-8 col-md-8 col-sm-12 pr-4">
                @foreach( $beritas as $berita )
                    <div class="row mb-4">
                        <div class="col-6">
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
                <div class="row justify-content-end">
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
            <div class="col">
                <div class="row">
                    <div class="col w-80">
                        <div class="input-group custom-search-form border border-danger">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 bordered">
                        FOLLOW US
                    </div>
                </div>
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