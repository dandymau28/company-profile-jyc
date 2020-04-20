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
    <div id="banner-kegiatan" class="parallax-window text-center text-white JNCC">
        <div class="container text-kegiatan">
            <h1 class="display-judul">KEGIATAN</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>
    <!-- <div class="parallax-window text-center text-white JNCC" data-parallax="scroll" data-image-src="{{ asset('assets/img/kegiatan/banner-kegiatan.png') }}">
        <div class="container text-center py-5">
            <div class="row justify-content-center pt-5">
                <div class="col text-center pt-3">
                    <h3 class="text-bold">KEGIATAN</h3>
                    <p>Jakarta National Choir Competition </p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Latihan Rutin -->
    <div class="latihan-rutin">
        <h3>LATIHAN RUTIN</h3>
        <div class="container">
            <h2 class="text-center pt-3">Rahasia Sukses Berprestasi : Latihan ala JYC</h2>
            <div class="row latihan-text">
                <div class="col-sm-6 pt-4" data-aos="fade-right" data-aos-duration="1500"><b>“Practice makes perfect”</b>, pastinya kata ini tidaklah asing ditelinga banyak orang pada kehidupan sehari-hari khususnya untuk kita yang berkecimpung di dunia paduan suara. <b>Jakarta Youth Choir</b>, sama seperti paduan suara pada umumnya, bisa berprestasi dan menunjukkan kualitas dirinya saat ini tentunya tidaklah instan. <b>Jakarta Youth Choir</b> dapat cemerlang berkat proses suka duka Latihan bersama. Sebagai Paduan Suara binaan <b>Pemerintah Provinsi DKI Jakarta</b>, <b>Jakarta Youth Choir</b> biasa melakukan latihan rutin minimal satu pekan sekali, saat ini pada setiap hari Rabu berdasarkan kesepakatan anggota yang bertempat di <b>Gedung Dinas Pemuda dan Olahraga Provinsi DKI Jakarta</b>.</div>
                <div class="col-sm-6 pt-4" data-aos="fade-left" data-aos-duration="1500">Latihan rutin ini dibimbing oleh <b>The Founder & Choirmaster kebanggaan, yaitu Septo Adi Kristanto Simanjuntak, atau dikenal dengan Kak Cepo</b>, beserta Tim Kepelatihan tersayang, Hendry (Bass 2), Hana (Sopran 1), Riny (Alto 2), Rangga (Tenor 1) dan Raka (Bass 1). Latihan biasanya akan lebih intens dilakukan ketika <b>Jakarta Youth Choir</b> akan menghadapi event tertentu, seperti mengisi suatu acara, konser maupun lomba taraf nasional maupun internasional. Untuk meningkatkan semangat dalam latihan, <b>Jakarta Youth Choir</b> melakukan latihan paduan suara tidak hanya di lingkungan lndoor saja, melainkan juga Outdoor. <b> Seru pasti, ya!</b></div>
            </div>
            <br>
            <p class="text-justify latihan-text" data-aos="fade-up" data-aos-duration="1500"><b>Jakarta Youth Choir</b> juga menghadirkan berbagai Choirmaster dari berbagai latar belakang Paduan Suara di Indonesia yang terkenal dan berpengalaman sebagai pelatih tamu untuk memaksimalkan pengembangan kemampuan para Choristernya. Yuk pantau terus proses latihan kami untuk mengharumkan nama Jakarta dan Indonesia dengan follow akun resmi instagram <a href="https://www.instagram.com/jktyouthchoir"><b>@JktYouthChoir</b></a> dan media sosial lainnya</p>
        </div>
    </div>

    <!-- Jakarta National Choir Competition -->
    <div class="parallax-window mb-5 text-center text-white JNCC" data-parallax="scroll" data-image-src="{{ asset('assets/img/kegiatan/assets_jncc.jpg') }}">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col text-center pt-3">
                    <h3 class="text-bold">COMINGSOON</h3>
                    <a href="{{route('jncc')}}"><h5>JNCC</h5></a>
                    <p>Jakarta National Choir Competition </p>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Open Recruitment -->
    <div class="latihan-rutin">
        <h3 class="text-center">PENERIMAAN ANGGOTA BARU</h3>
        <div class="container">
            <h2 class="text-center pt-3"><a href="{{ route('oprec') }}">Penerimaan 2020</a></h2>
            <div class="row latihan-text">
                <div class="col-sm-6 pt-4" data-aos="fade-right" data-aos-duration="1500">Eksis di dunia paduan suara, JYC tentunya juga memerlukan sebuah regenerasi seiring
                    berjalannya waktu. Hal ini diperlukan untuk menjadikan JYC lebih besar dan lebih berkembang
                    dari sebelumnya. Kegiatan <a href="{{ route('oprec') }}">Open Recruitment</a> merupakan salah satu aplikasi kegiatan yang
                    dilaksanakan oleh JYC setiap tahunnya. Kegiatan ini untuk mencari dan menjaring pemuda
                    pemudi berbakat dalam bidang seni khususnya dibidang paduan suara serta memiliki visi, misi,
                    maupun tujuan yang sama dengan JYC.</div>
                <div class="col-sm-6 pt-4" data-aos="fade-left" data-aos-duration="1500">Dibawah naungan DISPORA DKI Jakarta, JYC merupakan wadah yang sangat tepat untuk
                    tumbuh kembang para pemuda sekitar Ibukota untuk berkontribusi aktif mengharumkan DKI
                    Jakarta maupun Indonesia. Setiap waktunya, kemampuan para anggota chorister JYC terus
                    diasah dengan latihan rutin yang diorganisasikan langsung oleh Kepengurusan JYC dan dilatih
                    oleh Choirmaster kebanggaan Septo Adi Kristanto Simanjuntak, atau biasa dipanggil Kak Cepo,
                    beserta tim kepelatihan.</b></div>
            </div>
            <br>
            <p class="text-justify latihan-text" data-aos="fade-up" data-aos-duration="1500">Sejak berdiri pada tahun 2015, JYC sudah membuka pendaftaran secara resmi setiap
                tahunnya. Pada tahun 2020, dengan bangga JYC membuka kesempatan bagi para pemuda-
                pemudi terbaik yang minat pada dunia paduan suara untuk mengeksplorasi diri dan berprestasi
                Bersama JYC.</p>
        </div>
    </div>

    {{-- Galeri --}}   
    <section id="galeri" class="galeri container">
        <div class="row justify-content-between mb-2">
            <div class="col-sm-12 col-md-auto">
                <h3 class="">Galeri Kegiatan</h3>
            </div>
            <div class="col-md-5 col-sm-12 d-flex align-items-center">
                <select class="custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                  <option value="" disabled selected>Pilih Kegiatan</option>
                  @foreach ($kegiatans as $kegiatan)
                    <option class=" overflow-hidden" value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" id="wrapper">
                <div class="bg-light" id="coba-carousel" data-carousel-3d style="background-color: #fffff6 !important"> 
                    @foreach ($fotos as $foto)
                        <img src="{{Storage::url($foto->alamat_foto)}}">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <hr />

    {{-- Videos --}}
    <section id="video" class=" videos container mb-3">
        <div class="row">
            <div class="col">
                <h3 class=" pb-3">Koleksi Video</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
        </div>
    </section>

</body>
@include('templates.foot')
@include('templates.footer')
<script src="{{ asset('assets/js/jquery.resize.ex.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waitforimages.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carousel-3d.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
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
            }).done(res => {
                $('[data-carousel-3d]').Carousel3d();
            })
        })
    });
</script>
</html>
