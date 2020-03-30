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
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/beranda/slide-2.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/beranda/slide-3.png')}}" class="d-block w-100" alt="img">
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

    <!-- Card Berita -->
    <div class="berita container-fluid bg-light px-5 py-5">
        <h3 class="mb-5">Berita Terbaru</h3>

        <div class="card-group row justify-content-between px-3">
        @foreach ($beritas as $berita)
            <div class="card col-md-3 col-lg-3 col-sm-12 mx-lg-3">
                <img class="card-img-top" src="{{asset($berita->banner)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">{{ $berita->judul }}</a></h5>
                    <p class="card-text">{{ $berita->isi_berita }}
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $berita->tgl_publish }}</small></p>
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
