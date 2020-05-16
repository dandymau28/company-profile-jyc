<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link  href="{{asset('lightGallery-master/dist/css/lightgallery.css')}}" rel="stylesheet">
    {{-- <link  href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet"> --}}
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
    <div class="latihan-rutin mb-5">
        <h3>LATIHAN RUTIN</h3>
        <div class="container">
            <h2 class="text-center pt-3">Rahasia Sukses Berprestasi : Latihan ala JYC</h2>
            <div class="row latihan-text">
                <div class="col-md-6 pt-4" data-aos="fade-up" data-aos-duration="1500"><b>“Practice makes perfect”</b>, pastinya kata ini tidaklah asing ditelinga banyak orang pada kehidupan sehari-hari khususnya untuk kita yang berkecimpung di dunia paduan suara. <b>Jakarta Youth Choir</b>, sama seperti paduan suara pada umumnya, bisa berprestasi dan menunjukkan kualitas dirinya saat ini tentunya tidaklah instan. <b>Jakarta Youth Choir</b> dapat cemerlang berkat proses suka duka Latihan bersama. Sebagai Paduan Suara binaan <b>Pemerintah Provinsi DKI Jakarta</b>, <b>Jakarta Youth Choir</b> biasa melakukan latihan rutin minimal satu pekan sekali, saat ini pada setiap hari Rabu berdasarkan kesepakatan anggota yang bertempat di <b>Gedung Dinas Pemuda dan Olahraga Provinsi DKI Jakarta</b>.</div>
                <div class="col-md-6 pt-4" data-aos="fade-up" data-aos-duration="1500">Latihan rutin ini dibimbing oleh <b>The Founder & Choirmaster kebanggaan, yaitu Septo Adi Kristanto Simanjuntak, atau dikenal dengan Kak Cepo</b>, beserta Tim Kepelatihan tersayang, Hendry (Bass 2), Hana (Sopran 1), Riny (Alto 2), Rangga (Tenor 1) dan Raka (Bass 1). Latihan biasanya akan lebih intens dilakukan ketika <b>Jakarta Youth Choir</b> akan menghadapi event tertentu, seperti mengisi suatu acara, konser maupun lomba taraf nasional maupun internasional. Untuk meningkatkan semangat dalam latihan, <b>Jakarta Youth Choir</b> melakukan latihan paduan suara tidak hanya di lingkungan lndoor saja, melainkan juga Outdoor. <b> Seru pasti, ya!</b></div>
            </div>
            <p class="text-justify latihan-text pt-3" data-aos="fade-up" data-aos-duration="1500"><b>Jakarta Youth Choir</b> juga menghadirkan berbagai Choirmaster dari berbagai latar belakang Paduan Suara di Indonesia yang terkenal dan berpengalaman sebagai pelatih tamu untuk memaksimalkan pengembangan kemampuan para Choristernya. Yuk pantau terus proses latihan kami untuk mengharumkan nama Jakarta dan Indonesia dengan follow akun resmi instagram <a href="https://www.instagram.com/jktyouthchoir"><b>@JktYouthChoir</b></a> dan media sosial lainnya</p>
        </div>
    </div>

    <!-- Banner WCG -->
    <div class="container banner-wcg mt-5 mb-5">
        <h3>KEGIATAN 2020</h3>
        <img src="{{asset('assets/img/kegiatan/banner-wcg.png')}}" class="img-fluid" alt="Responsive image">
        <p class="wcg-text" data-aos="fade-up" data-aos-duration="1500">Mengikuti penerapan PSBB yang telah diatur dalam <b>Peraturan Pemerintah No. 21 Tahun 2020</b> yang dituangkan dalam <b>Permenkes RI No. 9 Tahun 2020</b> tentang Pedoman PSBB Dalam Rangka Percepatan Penanganan <b>Covid-19</b>, Jakarta Youth Choir menghentikan sementara seluruh jadwal latihan, konser, maupun partisipasi dalam kompetisi paduan suara hingga situasi kondusif dan terdapat arahan lebih lanjut dari <b>Gubernur DKI Jakarta</b>.</p>
    </div>

    <!-- Jakarta National Choir Competition -->
    <div class="parallax-window text-center text-white JNCC mt-5" data-parallax="scroll" data-image-src="{{ asset('assets/img/kegiatan/assets_jncc.jpg') }}">
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
    <div class="latihan-rutin mb-5">
        <h3 class="text-center">PENERIMAAN ANGGOTA BARU</h3>
        <div class="container">
            <h2 class="text-center pt-3"><a href="{{ route('oprec') }}">Penerimaan 2020</a></h2>
            <div class="row latihan-text mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">Eksis di dunia paduan suara, JYC tentunya juga memerlukan sebuah regenerasi seiring
                    berjalannya waktu. Hal ini diperlukan untuk menjadikan JYC lebih besar dan lebih berkembang
                    dari sebelumnya. Kegiatan <a href="{{ route('oprec') }}">Open Recruitment</a> merupakan salah satu aplikasi kegiatan yang
                    dilaksanakan oleh JYC setiap tahunnya. Kegiatan ini untuk mencari dan menjaring pemuda
                    pemudi berbakat dalam bidang seni khususnya dibidang paduan suara serta memiliki visi, misi,
                    maupun tujuan yang sama dengan JYC.</div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">Dibawah naungan DISPORA DKI Jakarta, JYC merupakan wadah yang sangat tepat untuk
                    tumbuh kembang para pemuda sekitar Ibukota untuk berkontribusi aktif mengharumkan DKI
                    Jakarta maupun Indonesia. Setiap waktunya, kemampuan para anggota chorister JYC terus
                    diasah dengan latihan rutin yang diorganisasikan langsung oleh Kepengurusan JYC dan dilatih
                    oleh Choirmaster kebanggaan Septo Adi Kristanto Simanjuntak, atau biasa dipanggil Kak Cepo,
                    beserta tim kepelatihan.</b></div>
            </div>
            <p class="text-justify latihan-text pt-3" data-aos="fade-up" data-aos-duration="1500">Sejak berdiri pada tahun 2015, JYC sudah membuka pendaftaran secara resmi setiap
                tahunnya. Pada tahun 2020, dengan bangga JYC membuka kesempatan bagi para pemuda-
                pemudi terbaik yang minat pada dunia paduan suara untuk mengeksplorasi diri dan berprestasi
                Bersama JYC.</p>
        </div>
    </div>

    {{-- Galeri Coba --}}
    <div class="container mt-5">
        <div class="demo-gallery">
            <div class="row justify-content-between mb-2">
                <div class="col-sm-12 col-md-auto">
                    <h3 class="">Galeri Kegiatan</h3>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex align-items-center">
                    <select class="custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                    <option value="" disabled selected>Pilih Kegiatan</option>
                    @foreach ($kegiatans as $kegiatan)
                        <option class=" overflow-hidden" value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                    @endforeach
                    </select>
                </div>
            </div>
            <div id="lightgallery">
                @foreach ($fotos as $foto)
                <a href="" data-responsive="{{Storage::url($foto->alamat_foto)}}" data-src="{{Storage::url($foto->alamat_foto)}}" data-sub-html="<h4>{{ $foto->kategori }}</h4><p>{{ $foto->deskripsi }}</p>">
                    <img class="img-responsive" src="{{Storage::url($foto->alamat_foto)}}" width="350px" height="235px">
                </a>
                @endforeach
                {{-- <a href="" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                </a>
                <a href="" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                </a>
                <a href="" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                </a>
                <a href="" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
                </a> --}}
            </div>
            {{--<ul id="lightgallery" class="list-unstyled row">
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                </a>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                </li>
                <a href="" class="col-md-4 col-sm-6 col-12" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                </a>
                 <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                </li> --}}
                {{-- <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/4-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-4.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/1-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-1.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-2.jpg"> 
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-src="https://sachinchoolur.github.io/lightgallery.js/static/img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                    </a>
                </li> 
            </ul>--}}
        </div>
    </div>

    {{-- Galeri --}}   
    {{-- <section id="galeri" class="galeri container">
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
    </section> --}}
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
        <p>See more videos on our <a href="https://www.youtube.com/channel/UCUelE1nt2PXC_SN6aAfbs8A"><strong>"Youtube Channel"</strong></a></p>
    </section>

</body>
@include('templates.foot')
@include('templates.footer')
<script src="{{ asset('lightGallery-master/dist/js/lightgallery.js') }}"></script>
<!-- lightgallery plugins -->
<script src="{{ asset('lightGallery-master/modules/lg-thumbnail.js') }}"></script>
<script src="{{ asset('lightGallery-master/modules/lg-autoplay.js') }}"></script>
<script src="{{ asset('lightGallery-master/modules/lg-fullscreen.js') }}"></script>
<script src="{{ asset('lightGallery-master/modules/lg-zoom.js') }}"></script>
{{-- <script src="{{ asset('assets/js/jquery.resize.ex.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waitforimages.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carousel-3d.js') }}"></script> --}}
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script>
    $(function () {
        $('#lightgallery').lightGallery({
            thumbnail:true,
            fullscreen:true
        });
        $('#pilih-kegiatan').on('change', function () {
            let id_kegiatan = $(this).val();
            $.ajax({
                url: '/api/foto/' + id_kegiatan,
                method: 'GET'
            }).done(res => {
                console.log(res);
                let fotos = res.fotos;
                console.log(fotos);
                $('#lightgallery').empty();
                if(res.code==200) {
                    fotos.forEach((foto, i) => {
                        $('#lightgallery').append(`
                            <a href="" data-responsive="storage/${foto.alamat_foto}" data-src="storage/${foto.alamat_foto}" data-sub-html="<h4>${foto.kategori}</h4><p>${foto.deskripsi}</p>">
                                <img class="img-responsive" src="storage/${foto.alamat_foto}" width="350px" height="235px">
                            </a>
                        `);
                    });
                } else {
                    $('#lightgallery').append(`
                        Belum ada foto untuk kegiatan ini!
                    `);
                }
            }).fail(error => {
                console.log(error);
            });
            // done(res => {
            //     $('[data-carousel-3d]').Carousel3d();
            // })
        })
    });
</script>
</html>
