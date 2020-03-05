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

    <!--Prestasi -->
    <div class="prestasi container-fluid bg-light py-5">
        <h3 class="mb-5">Prestasi</h3>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/2.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/3.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/3.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Lorem lorem</small>
                        </div>
                        <img src="{{asset('assets/img/prestasi/2.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
    </div>


@include('templates.footer')
</body>
@include('templates.foot')
</html>