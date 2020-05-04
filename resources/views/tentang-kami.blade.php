<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>
<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-1 jumbotron-fluid">
        <div class="container">
            <h1 class="display-1" data-aos="fade-up" data-aos-duration="1500">J Y C</h1>
            <h4 class="display-2" data-aos="fade-up" data-aos-duration="1500">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <div class="container-fluid we-sing">
        <h5 data-aos="fade-up" data-aos-duration="1500">We Sing, We Proud</h5>
        <p class="container we-sing" data-aos="fade-up" data-aos-duration="1500"><b>"Since 2015, Cepo & JYC</b> have been achieving a lot of achievements and awards in many International events such as competition and festival. As the very first competition in 2016, under his directions, JYC got a gold medal in <b>“The 1st Lanna International Choir Competition”, in Thailand.</b><br><br>In the following year, JYC was invited to join <b>“The Joy Dancing Beijing & The Cultural and Art Exchange of International Youth” in China</b>. Proudly, JYC always got The Best Performance in in China from approximately 15 participating countries (since 2017- present). ,<b>Cepo is always motivated and he keeps on encouraging JYC choristers to soar high. In 2017, JYC was taking a challenge to join a choir competition in Indonesia"</b></p>
    </div>

    <div class="jumbotron jumbotron-2 jumbotron-fluid">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="display-3">WE SING FOR THE CITY</h1>
            <h1 class="display-4">AND COUNTRY</h1>
        </div>
    </div>

    <div class="container question" data-aos="fade-up" data-aos-duration="1500">
        <h5>HAVE QUESTION ?</h5>
    </div>

    <div class="container form-question" data-aos="fade-up" data-aos-duration="1500">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="{{asset('assets/img/tentang-kami/contact-us.png')}}" alt="img" class="img-fluid">
            </div>
            <div class="col-md-7">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="button">
                        <button>KIRIM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('templates.footer')
</body>
@include('templates.foot')
@push('js')
    <script src="{{ asset('assets/js/moment.js') }}"></script>
@endpush

</html>