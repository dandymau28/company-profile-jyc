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


    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner carousel-zoom">
            <div class="active carousel-item">
                <img src="{{asset('assets/img/beranda/slide-1.png')}}" class="d-block w-100" alt="img">
                {{-- <img class="img-responsive" src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200"> --}}
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/beranda/slide-2.png')}}" class="d-block w-100" alt="img">
                {{-- <img class="img-responsive" src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200"> --}}
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
            </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/beranda/slide-3.png')}}" class="d-block w-100" alt="img">
                {{-- <img class="img-responsive" src="https://images.unsplash.com/photo-1445462657202-a0893228a1e1?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200"> --}}
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
    </div>

    <!-- Carousel -->
    {{-- <div class="carousel">
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
    </div> --}}

    <!-- Card Berita -->
    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">Berita</h3>

        <div class="card-group ">
        @foreach ($beritas as $berita)
            <div class="card col col-sm-12 mx-2">
                <img class="card-img-top" src="{{asset($berita->banner)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
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

</html>
