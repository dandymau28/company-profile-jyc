<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
</head>
<body>
    @include('templates.navbar')

    <!-- Carousel -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('assets/img/slider/1.png')}}" class="d-block w-100" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/slider/2.png')}}" class="d-block w-100" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/slider/3.png')}}" class="d-block w-100" alt="Third slide">
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


    <!-- Dropdown -->
        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tahun
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">2020</a>
                <a class="dropdown-item" href="#">2019</a>
                <a class="dropdown-item" href="#">2018</a>
            </div>
        </div>

    <!--Prestasi -->
    <div class="container center-align">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lorem lorem</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('templates.footer')
</body>
@include('templates.foot')
</html>