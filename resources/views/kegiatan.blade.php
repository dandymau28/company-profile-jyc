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
                <div class="col-md-6 pt-4" data-aos="fade-up" data-aos-duration="1500"> <strong><em>“Practice makes perfect”</em></strong> , pastinya kata ini tidaklah asing ditelinga banyak orang pada kehidupan sehari-hari khususnya untuk kita yang berkecimpung di dunia paduan suara. <b>Jakarta Youth Choir</b>, sama seperti paduan suara pada umumnya, bisa berprestasi dan menunjukkan kualitas dirinya saat ini tentunya tidaklah instan. <b>Jakarta Youth Choir</b> dapat cemerlang berkat proses suka duka Latihan bersama. <b>Jakarta Youth Choir</b> biasa melakukan latihan rutin minimal satu pekan sekali, saat ini pada setiap hari Rabu berdasarkan kesepakatan anggota yang bertempat di <b>Gedung Dinas Pemuda dan Olahraga Provinsi DKI Jakarta</b>.</div>
                <div class="col-md-6 pt-4" data-aos="fade-up" data-aos-duration="1500">Latihan rutin ini dibimbing oleh <strong> <em>Founder & Choirmaster</em> Jakarta Youth Choir</strong>, yaitu Septo Adi Kristanto Simanjuntak, atau dikenal dengan Kak Cepo, beserta Tim Kepelatihan. Latihan biasanya akan lebih intens dilakukan ketika <b>Jakarta Youth Choir</b> mengisi acara tertentu, mengadakan konser, serta mengikuti lomba bertaraf nasional maupun internasional. Untuk meningkatkan semangat dalam latihan, <b>Jakarta Youth Choir</b> melakukan latihan paduan suara tidak hanya di lingkungan <em>indoor</em> saja, melainkan juga <em>outdoor</em>.</div>
            </div>
            <p class="text-justify latihan-text pt-3" data-aos="fade-up" data-aos-duration="1500"><b>Jakarta Youth Choir</b> juga menghadirkan berbagai <em>choirmaster</em> dari berbagai latar belakang Paduan Suara di Indonesia yang terkenal dan berpengalaman sebagai pelatih tamu untuk memaksimalkan pengembangan kemampuan para <em>chorister</em>nya. Yuk pantau terus proses latihan kami untuk mengharumkan nama Jakarta dan Indonesia dengan mengikuti akun resmi instagram <a href="https://www.instagram.com/jktyouthchoir"><b>@JktYouthChoir</b></a> dan media sosial lainnya.</p>
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
                    <h3 class="text-bold">COMING SOON</h3>
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
                {{-- <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">Eksis di dunia paduan suara, JYC tentunya juga memerlukan sebuah regenerasi seiring
                    berjalannya waktu. Hal ini diperlukan untuk menjadikan JYC lebih besar dan lebih berkembang
                    dari sebelumnya. Kegiatan <a href="{{ route('oprec') }}"><em>Open Recruitment</em></a> merupakan salah satu aplikasi kegiatan yang
                    dilaksanakan oleh JYC setiap tahunnya. Kegiatan ini untuk mencari dan menjaring pemuda
                    pemudi berbakat dalam bidang seni khususnya dibidang paduan suara serta memiliki visi, misi,
                    maupun tujuan yang sama dengan JYC.
                </div> --}}
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">Eksis di dunia paduan suara, Jakarta Youth Choir (JYC) memerlukan sebuah regenerasi seiring berjalannya waktu. Hal ini diperlukan untuk menjadikan JYC lebih besar dan lebih berkembang dari sebelumnya. Kegiatan <a href="{{ route('oprec') }}"><em>Open Recruitment</em></a> merupakan salah satu aplikasi kegiatan yang dilaksanakan oleh JYC setiap tahunnya. Kegiatan ini untuk mencari dan menjaring pemuda pemudi berbakat dalam bidang seni khususnya dibidang paduan suara serta memiliki visi, misi, maupun tujuan yang sama dengan JYC.
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">Dibawah naungan DISPORA DKI Jakarta, JYC merupakan wadah yang sangat tepat untuk
                    tumbuh kembang para pemuda sekitar Ibukota untuk berkontribusi aktif mengharumkan DKI
                    Jakarta maupun Indonesia. Setiap waktunya, kemampuan para <em>chorister</em> JYC terus
                    diasah dengan latihan rutin yang diorganisasikan langsung oleh Kepengurusan JYC dan dilatih
                    oleh <em>choirmaster</em> kebanggaan Septo Adi Kristanto Simanjuntak, atau biasa dipanggil Kak Cepo,
                    beserta tim kepelatihan.</b>
                </div>
            </div>
            <p class="text-justify latihan-text pt-3" data-aos="fade-up" data-aos-duration="1500">Sejak berdiri pada tahun 2015, JYC sudah membuka pendaftaran secara resmi setiap tahunnya. Pada tahun 2020, dengan bangga JYC kembali membuka kesempatan bagi para pemuda-pemudi terbaik yang memiliki minat di dunia paduan suara untuk mengeksplorasi diri dan berprestasi bersama JYC.</p>
        </div>
    </div>

    {{-- Galeri Coba --}}
    <div class="container mt-5">
        <div class="demo-gallery">
            <section id="galeri">
                <div class="row justify-content-between mb-2">
                    <div class="col-sm-12 col-md-auto">
                        <h3 class="">Galeri Kegiatan</h3>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex align-items-center">
                        <select class="custom-select" name="pilih-kegiatan" id="pilih-kegiatan">
                        @isset($id_kegiatan)
                            @foreach ($kegiatans as $kegiatan)
                                @if ($kegiatan->id == $id_kegiatan)
                                    <option class=" overflow-hidden" value="{{$kegiatan->id}}" selected>{{$kegiatan->nama}}</option>
                                @else
                                    <option class=" overflow-hidden" value="{{$kegiatan->id}}">{{$kegiatan->nama}}</option>  
                                @endif
                            @endforeach
                        @else
                            {{-- <option value="" disabled selected>Pilih Kegiatan</option> --}}
                            @foreach ($kegiatans as $kegiatan)
                                <option class=" overflow-hidden" value={{$kegiatan->id}}>{{$kegiatan->nama}}</option>   
                            @endforeach
                        @endisset
                        </select>
                    </div>
                </div>
                <div id="lightgallery" class="my-3 row">
                    @foreach ($fotos as $foto)
                    <a class="col-12 col-sm-6 col-md-4" href="" data-responsive="{{Storage::url($foto->alamat_foto)}}" data-src="{{Storage::url($foto->alamat_foto)}}" data-sub-html="<h4>{{ $foto->nama_kategori }}</h4><p>{{ $foto->deskripsi }}</p>">
                        <img class="img-responsive" src="{{Storage::url($foto->alamat_foto)}}" width="350px" height="235px">
                    </a>
                    @endforeach
                </div>
            </section>
            <p> <span class="text-danger font-weight-bold">*</span> Klik foto untuk melihat detail gambar</p>
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
        let baseURL = 'localhost';
        let galeri = $('#lightgallery').lightGallery({
            thumbnail:true,
            fullscreen:true
        });
        $('#pilih-kegiatan').on('change', function () {
            let id_kegiatan = $(this).val();
            window.location = '/kegiatan/galeri/' + id_kegiatan + "#galeri";
            // $.ajax({
            //     url: '/api/foto/' + id_kegiatan,
            //     method: 'GET'
            // }).done(res => {
            //     // console.log(res);
            //     let fotos = res.fotos;
            //     // console.log(fotos);
            //     $('#lightgallery').empty();
            //     if(res.code==200) {
            //         fotos.forEach((foto, i) => {
            //             $('#lightgallery').append(`
            //                 <a href="" data-responsive="/storage/${foto.alamat_foto}" data-src="/storage/${foto.alamat_foto}" data-sub-html="<h4>${foto.kategori}</h4><p>${foto.deskripsi}</p>">
            //                     <img class="img-responsive" src="/storage/${foto.alamat_foto}" width="350px" height="235px">
            //                 </a>
            //             `);
            //         });
            //         let lg = $('#lightgallery');
            //         if (lg.data('lightGallery')) {
            //             console.log('Berhasil destroy');
            //             lg.data('lightGallery').destroy(true);
            //             galeri = $("#lightGallery").lightGallery({
            //                 thumbnail:true,
            //                 fullscreen:true
            //             }); //re-initiate gallery
            //             console.log('berhasil re-inisialisasi');
            //         } else {
            //             console.log('Bukan lightGallery');
            //         }
            //         // $('#lightgallery').lightGallery().destroy(true); // destroy gallery
            //     } else {
            //         $('#lightgallery').append(`
            //             Belum ada foto untuk kegiatan ini!
            //         `);
            //     }
            // }).fail(error => {
            //     console.log(error);
            // });
            // done(res => {
            //     $('[data-carousel-3d]').Carousel3d();
            // })
        });
    });

    
</script>
</html>
