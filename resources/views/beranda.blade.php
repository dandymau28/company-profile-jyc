<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>{{__('Jakarta Youth Choir')}}</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/img/beranda/slide-1.png')}}" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/beranda/slide-2.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    {{-- @foreach($beritaCarousel as $carousel) --}}
                    <img src="{{asset('assets/img/beranda/slide-3.png')}}" class="d-block w-100" alt="img">
                    {{-- <img src="{{ Storage::url($carousel->banner) }}" class="d-block w-100" alt="img"> --}}
                {{-- @endforeach --}}
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Pengenalan JYC -->
    <div class="container-fluid intro-jyc">
        <div class="row align-items-center">
            <div class="col-lg-6 intro-gambar text-center">
                <h1>JYC</h1>
                <p>Jakarta Youth Choir</p>
            </div>
            <div class="col-lg-6 intro-text" data-aos="fade-up" data-aos-duration="1500">
                <p>Jakarta Youth Choir (JYC) adalah paduan suara pemuda/i DKI Jakarta yang berdiri sejak 30 Agustus 2015 dan didirikan oleh Ponirin Ariadi Limbong selaku pembina JYC & Septo Adi Kristanto Simanjuntak yang juga menjadi Pelatih dan Pengaba JYC. Sejak awal mula berdiri hingga saat ini, JYC merupakan salah satu organisasi kepemudaan yang dibina oleh Dinas Pemuda dan Olahraga Provinsi DKI Jakarta.</p>
                <p>Semakin hari, keberadaan JYC di dunia paduan suara semakin diperhitungkan. JYC berhasil menyelenggarakan konser perdananya dengan tajuk <em> “Don’t Stop Believing” </em> pada tanggal 23 September 2017. Hal ini merupakan awal mula JYC menggelar konser paduan suara secara berkala.</p>
                <p>JYC dipilih dan dipercaya sebagai penampil dan bagian dari acara-acara hebat nan besar, yang dihadiri orang-orang hebat yang inspiratif. Selain itu, JYC telah berkontribusi mengukir berbagai prestasi di banyak kompetisi paduan suara bergengsi di tingkat nasional maupun internasional. Salah satu pencapaian JYC yang luar biasa adalah sebagai Grand Prix Winner of The Year dengan mendapatkan nilai sempurna yang menjadi kali pertama di kompetisi “The 34th Internazionale Chorus Inside Advent” di Roma, Italia pada tahun 2018.</p>
                <p>Dengan bimbingan Choirmaster penuh cinta, Septo Adi Kristanto Simanjuntak, saat ini JYC membina lebih dari 100 anggota aktif, yang berasal dari berbagai macam latarbelakang dan bertempat tinggal di DKI Jakarta dan sekitarnya, untuk mengharumkan nama Jakarta dan Indonesia, khususnya di dunia paduan suara. “We Sing for the City and the Country.”</p>
            </div>
        </div>
    </div>

    <!-- Card Berita -->
    <div class="berita bg-light p-5">
        <h3 class="mb-5">BERITA TERBARU</h3>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-5">
            @foreach ($beritas as $berita)
            <div class="col mb-4 ">
              <div class="card h-100" data-aos="flip-left" data-aos-duration="1500">
                <div class="img-hover-zoom img-hover-zoom--brightness ">
                    <a class="h-50" href="/berita/{{ $berita->slug }}">
                        <img src="{{Storage::url($berita->banner)}}" class="card-img-top img-fluid" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <div class="judul-berita mb-1">
                        <a href="/berita/{{ $berita->slug }}">{{ Str::title($berita->judul) }}</a>
                    </div>
                    <div class="konten-berita text-justify">
                        {!! Str::limit(strip_tags($berita->isi_berita), 400) !!}
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="tanggal-posting text-muted my-2">
                        <i class="far fa-clock"></i>
                        <span>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</span>
                    </div>
                    <div class="float-right pt-sm-2 pt-md-1">
                        <a type="button" href="/berita/{{ $berita->slug }}" class="btn btn-outline-secondary">Selengkapnya...</a>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
    </div>

    @include('templates.footer')
</body>
@include('templates.foot')
@push('js')
    <script src="{{ asset('assets/js/moment.js') }}"></script>
@endpush

</html>
