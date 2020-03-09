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
    <section class="brown lighten-5">

        <div class="container">
            {{-- Berita --}}
            <div class="row my-5">
                <div class="col-lg-8 mr-auto berita-h text-center pb-2 display-4">{{ __('Berita') }}</div>
            </div>

            <div class="row">
                {{-- Card Berita --}}
                <div class="col-lg-8 col-md-8 col-sm-12">
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
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                               </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Galeri --}}
            
            <section class="galeri">
                <div class="row">
                    <div class="col-12 mb-2">
                        <span class="display-4">Galeri</span>
                    </div>
                    <div class="input-field col-sm-12 col-md-3 col-lg-3">
                        <select>
                          <option value="" disabled selected>Pilih Kegiatan</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                        {{-- <label>Materialize Select</label> --}}
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="fotorama" 
                            data-nav="thumbs"
                            data-transition="crossfade"
                            data-autoplay="true"
                            data-width="100%"
                            data-ratio="800/600">
                            <img src="{{asset('assets/img/berita/1.png')}}">
                            <img src="{{asset('assets/img/berita/2.png')}}">
                            <img src="{{asset('assets/img/berita/3.png')}}">
                        </div>
                    </div>
                </div>
            </section>
            <hr />

            {{-- Videos --}}
            <section class="videos">
                <div class="row">
                    <span class="display-4 pb-3">Videos</span>
                </div>
                <div class="col col-sm-12 col-md-12 col-lg-12">
                    <div class="fotorama" 
                        data-nav="thumbs"
                        data-transition="crossfade"
                        data-autoplay="true"
                        data-width="100%"
                        data-ratio="800/600">
                        <a href="https://www.youtube.com/watch?v=ftNXzo9rovM&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU"></a>
                        <a href="https://www.youtube.com/watch?v=5wWAc8mVhZw&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=2"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=3"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=4"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=5"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=6"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=7"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=8"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=9"></a>
                        {{-- <a href="https://www.youtube.com/watch?v=ftNXzo9rovM&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU"></a> --}}
                    </div>
                </div>
            </section>
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