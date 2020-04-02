<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link  href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet">
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Banner Kegiatan -->
    <div id="banner-kegiatan">
        <div class="container text-kegiatan">
            <h1 class="display-judul">KEGIATAN</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!-- Latihan Rutin -->
    <div class="latihan-rutin">
        <h3>LATIHAN RUTIN</h3>
        <div class="container">
            <h2 class="text-center pt-3">Rahasia Sukses Berprestasi : Latihan ala JYC</h2>
            <div class="row latihan-text">
                <div class="col-sm-6 pt-4"><b>“Practice makes perfect”</b>, pastinya kata ini tidaklah asing ditelinga banyak orang pada kehidupan sehari-hari khususnya untuk kita yang berkecimpung di dunia paduan suara. <b>Jakarta Youth Choir</b>, sama seperti paduan suara pada umumnya, bisa berprestasi dan menunjukkan kualitas dirinya saat ini tentunya tidaklah instan. <b>Jakarta Youth Choir</b> dapat cemerlang berkat proses suka duka Latihan bersama. Sebagai Paduan Suara binaan <b>Pemerintah Provinsi DKI Jakarta</b>, <b>Jakarta Youth Choir</b> biasa melakukan latihan rutin minimal satu pekan sekali, saat ini pada setiap hari Rabu berdasarkan kesepakatan anggota yang bertempat di <b>Gedung Dinas Pemuda dan Olahraga Provinsi DKI Jakarta</b>.</div>
                <div class="col-sm-6 pt-4">Latihan rutin ini dibimbing oleh <b>The Founder & Choirmaster kebanggaan, yaitu Septo Adi Kristanto Simanjuntak, atau dikenal dengan Kak Cepo</b>, beserta Tim Kepelatihan tersayang, Hendry (Bass 2), Hana (Sopran 1), Riny (Alto 2), Rangga (Tenor 1) dan Raka (Bass 1). Latihan biasanya akan lebih intens dilakukan ketika <b>Jakarta Youth Choir</b> akan menghadapi event tertentu, seperti mengisi suatu acara, konser maupun lomba taraf nasional maupun internasional. Untuk meningkatkan semangat dalam latihan, <b>Jakarta Youth Choir</b> melakukan latihan paduan suara tidak hanya di lingkungan lndoor saja, melainkan juga Outdoor. <b> Seru pasti, ya!</b></div>
            </div>
            <br>
            <p class="text-justify latihan-text"><b>Jakarta Youth Choir</b> juga menghadirkan berbagai Choirmaster dari berbagai latar belakang Paduan Suara di Indonesia yang terkenal dan berpengalaman sebagai pelatih tamu untuk memaksimalkan pengembangan kemampuan para Choristernya. Yuk pantau terus proses latihan kami untuk mengharumkan nama Jakarta dan Indonesia dengan follow akun resmi instagram <a href="https://www.instagram.com/jktyouthchoir"><b>@JktYouthChoir</b></a> dan media sosial lainnya</p>
        </div>

    </div>

    <!-- Jakarta National Choir Competition -->
    <div class="JNCC">
        <h3>JAKARTA NATIONAL CHOIR COMPETITION</h3>
        <div class="container text-center">
            <div class="row align-content-center">
                <div class="col-lg-4 text-center pt-3">
                    <h5>JNCC</h5>
                    <p>The Biggest Choir Competition <br> In Indonesia </p>
                </div>
                <div class="col-lg-4 text-center pt-3">
                    <i class='fas fa-calendar-alt'></i>
                    <p>August 4th, 2020 </p>
                </div>
                <div class="col-lg-4 text-center pt-3">
                    <i class="fa fa-map-marker-alt"></i>
                    <p>Balai Sarbini Hall Plaza Semanggi, Jakarta</p>
                </div>
            </div>
        </div>

    </div>

    <!-- GALERI -->
    {{-- Galeri --}}   
    <section id="galeri" class="galeri container">
        <div class="row justify-content-between mb-2">
            <div class="col-5">
                <span class="display-4">Galeri</span>
            </div>
            <div class="col-5 d-flex align-items-center">
                <select class="custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                  {{-- <option value="" disabled selected>Pilih Kegiatan</option> --}}
                  @foreach ($kegiatans as $kegiatan)
                    <option class=" overflow-hidden" value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                @endforeach
                </select>
                {{-- <label>Materialize Select</label> --}}
            </div>
        </div>
        <div class="row">
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

    <!-- VIDEO -->
    {{-- Videos --}}
    <section id="video" class="videos container">
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
    $(function () {
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
                        <img src="storage/${foto.alamat_foto}">
                    `);
                });
                // $('#coba-carousel').Carousel3d();
            }).done(res => {
                $('[data-carousel-3d]').Carousel3d();
            })
        })
    });
</script>
</html>
