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
    <div id="konten-berita" class="prestasi bg-light py-5 w-80">
        <h3 class="mb-5">Prestasi</h3>
        <div data-aos="zoom-in" class="row justify-content-around">
            <div class="col-2 col-md-4">
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
                            <img src="{{asset('assets/img/prestasi/2.png')}}" class="d-block card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/prestasi/3.png')}}" class="d-block card-img-top" alt="...">
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
            <div class="col-2 col-md-4">
                <div class="card-body">
                    {{-- <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5> --}}
                    <h5 class="card-title text-bold">1st Lanna International Choir Competition</h5>
                    <h5>Chiang Mai, Thailand</h5>
                    <h5>Oktober 2016</h5>
                    {{-- <p class="card-text">{{ $prestasi->gelar_juara }}</p> --}}
                    {{-- <p class="card-text">Penghargaan</p> --}}
                    <h5 class="card-text"><i class="fas fa-medal text-warning fa-2x pr-2"></i>Gold Medal Folklore Category<i class="fas fa-medal text-warning fa-2x pl-2"></i></h5>
                </div>
            </div>
        </div>
        
        {{-- <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5>
                <h5 class="card-title text-bold">1st Lanna International Choir Competition</h5>
                <h5>Chiang Mai, Thailand</h5>
                <h5>Oktober 2016</h5>
                <p class="card-text">{{ $prestasi->gelar_juara }}</p>
                <p class="card-text">Penghargaan</p>
                <h5 class="card-text"><i class="fas fa-medal text-warning fa-2x pr-2"></i>Gold Medal Folklore Category<i class="fas fa-medal text-warning fa-2x pl-2"></i></h5>
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
            <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
        </div> --}}
    </div>


@include('templates.footer')
</body>
@include('templates.foot')
</html>