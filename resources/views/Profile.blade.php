<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
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

    <!-- Profile -->
    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">Founder</h3>
        <div class="row container-fluid">
            <div class="col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="{{asset('assets/img/profile/limbong.JPG')}}" class="img-fluid rounded-circle w-100" alt="Bapak Limbong">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="mt-3 mb-3">Septo Adi Kristanto Simanjuntak</h2>
                        <p>Septo Adi Kristanto Simanjuntak or warmly called Cepo, was born in Jakarta on September 17th, 1991. He finished his latest education as a Bachelor of Education (English Language Teaching) in Sampoerna School of Education (transformed to Sampoerna University at the present). He found his interest in singing since 1995, when he was in primary school as a chorister in the Church Choir. His potential is also well developed since his parents always supported him through all singing events and competitions that he joined. One of his great achievement happened in 2008. He was delegated as the representative from DKI Jakarta (Indonesia’s capital city) in Gita Bahana Nusantara (The Choir for Independence Day in the President Palace) in 2008. Along the way, he joined many kinds of singing competition in TV, Radio, Malls and etc. Since then, he keeps improving his skills and capability in music, especially in choral works.</p>
                        <p>In 2015, Cepo with his supervisor in Youth and Sport Department (Mr. Ponirin Ariadi Limbong) and his senior colleague from The Indonesia Youth Exchange Program (Yuvino Tanimura) initiated to establish a choir. It is open for all youth who have interest in singing, especially for those who have some limitation in terms of singing techniques & experiences. After all discussion, it was named as Jakarta Youth Choir (JYC).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">Visi</h3>
        <div class="row container-fluid">
            <div class="col-lg-8 mx-auto text-center">
                <h4>Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla</h4>
            </div>
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">Misi</h3>
        <div class="row container-fluid">
            <div class="col-lg-8 mx-auto">
                <ol>
                    <li><h4>Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla</h4></li>
                    <li><h4>Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla</h4></li>
                    <li><h4>Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla Lorem ipsum bla bla</h4></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">Struktur Organisasi</h3>
        <div class="row container-fluid">
            <div class="col-lg-8 mx-auto text-center">
                <img src="{{asset('assets/img/profile/struktur.jpg')}}" class="img-fluid w-100" alt="Struktur">
            </div>
        </div>
    </div>
    
    @include('templates.footer')
</body>
    @include('templates.foot')
</html>