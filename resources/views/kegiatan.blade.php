<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link  href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet">
    <title>JYC: {{$title}}</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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

    <!-- Latihan Rutin -->
    <div class="latihan-rutin">
        <h3>Latihan Rutin</h3>

        <div class="container">
        @foreach( $kegiatans as $kegiatan )
            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>{{ $kegiatan->nama }}</h4><br>
                    <p>{{ $kegiatan->jenis }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>



    <!-- Kompetisi -->
    <div class="kompetisi">
        <h3>Kompetisi yang akan diikuti</h3>

        <div class="container">
            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

        </div>

    </div>


    <!-- Jakarta National Choir Competition -->
    <div class="JNCC">
        <h3>Jakarta National Choir Competition</h3>

        <!-- 3 CARD -->
        <div class="card-group">
            @foreach( $prestasis as $prestasi)
            <div class="card">
                <img class="card-img-top" src="{{asset('assets/img/beranda/card-1.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5>
                    <p class="card-text">{{ $prestasi->gelar_juara }}
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $prestasi->tanggal_kompetisi }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Galeri --}}
            
    <section class="galeri container">
        <div class="row">
            <div class="col-12 mb-2">
                <span class="display-4">Galeri</span>
            </div>
            <div class="input-field col-sm-12 col-md-3 col-lg-3 mb-2">
                <select class="custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                  {{-- <option value="" disabled selected>Pilih Kegiatan</option> --}}
                  @foreach ($kegiatans as $kegiatan)
                    <option value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                @endforeach
                </select>
                {{-- <label>Materialize Select</label> --}}
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12" id="wrapper">
                <div id="coba-carousel" data-carousel-3d> 
                    @foreach ($fotos as $foto)
                        <img src="{{Storage::url($foto->alamat_foto)}}">
                    @endforeach
                    {{-- <img src="{{asset('assets/img/berita/2.png')}}" selected>
                    <img src="{{asset('assets/img/berita/3.png')}}">
                    <img src="{{asset('assets/img/berita/4.png')}}">
                    <img src="{{asset('assets/img/berita/5.png')}}">
                    <img src="{{asset('assets/img/berita/6.png')}}"> --}}
                </div>
            </div>
            {{-- <div class="col-sm-12 col-md-12 col-lg-12">
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
            </div> --}}
        </div>
    </section>
    <hr />

    {{-- Videos --}}
    <section class="videos container">
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
                @foreach( $videos as $video )
                <a href="{{ $video->alamat }}"></a>
                @endforeach
            </div>
        </div>
    </section>

</body>
@include('templates.foot')
@include('templates.footer')
<script src="{{ asset('assets/js/jquery.resize.ex.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waitforimages.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carousel-3d.js') }}"></script>
<script>
    $('#pilih-kegiatan').on('change', function () {
        let id_kegiatan = $(this).val();
        $.ajax({
            url: '/api/foto/' + id_kegiatan,
            method: 'GET'
        }).done(res => {
            console.log(res);
            let fotos = res.fotos;
            console.log(fotos);
            $('#coba-carousel').empty();
            fotos.forEach((foto, i) => {
                $('#coba-carousel').append(`
                    <img src="{{ Storage::url('/')}}${foto.alamat_foto}">
                `);
            })
        })
    })
</script>
</html>
