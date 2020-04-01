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
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
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
            <div class="col-md-6 intro-gambar">
                <img src="{{asset('assets/img/beranda/intro-jyc.png')}}" alt="img" class="img-fluid">
            </div>
            <div class="col-md-6 intro-text">
                <p>Jakarta Youth Choir adalah paduan suara dari DKI Jakarta dibawah Dinas Pemuda dan Olahraga. JYC telah mengukir banyak pertasi  terkemuka di tingkat Nasional ataupun Internasional. Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus.</p>
            </div>
        </div>
    </div>

    <!-- Card Berita -->
    <div class="berita container-fluid bg-light px-5 py-5">
        <h3 class="mb-5">Berita Terbaru</h3>

        <div class="card-group row justify-content-between px-3">
        @foreach ($beritas as $berita)
            <div class="card col-sm-12 mx-sm-1 col-md-6 mx-md-1 col-lg-6 mx-lg-3 col-xl-3 text-justify card-berita">
                <img class="card-img-top img-fluid h-50" src="{{ Storage::url($berita->banner) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">{{ Str::title($berita->judul) }}</a></h5>
                    <div class="card-text">{!! Str::limit(strip_tags($berita->isi_berita), 400) !!}
                    </div>
                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</small></p>
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
