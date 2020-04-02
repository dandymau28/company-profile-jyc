<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>
<body>
    @include('templates.navbar')

    <div id="banner-profile">
        <div class="container text-profile">
            <h1 class="display-judul">PRESTASI</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!--Prestasi -->
    <div class="prestasi container bg-light py-5">
        <h3 class="mb-5">Prestasi</h3>
        
        <div class="card text-center">
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5> --}}
                <h5 class="card-title">1st Lanna International Choir Competition</h5>
                {{-- <p class="card-text">{{ $prestasi->gelar_juara }}</p> --}}
                <p class="card-text">jUARA 1</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
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
            <div class="card-footer">
                <small class="text-muted">Sumber: Dokumentasi Jakarta Youth Choir</small>
            </div>
            {{-- <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="..."> --}}
        </div>
    </div>


@include('templates.footer')
</body>
@include('templates.foot')
</html>