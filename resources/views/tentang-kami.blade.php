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
            <h1 class="display-1">J Y C</h1>
            <h4 class="display-2">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <div class="container-fluid we-sing">
        <h5>We Sing, We Proud</h5>
        <p class="container">"Since 2015, Cepo & JYC have been achieving a lot of achievements and awards in many International events such as competition and festival. As the very first competition in 2016, under his directions, JYC got a gold medal in “The 1st Lanna International Choir Competition”, in Thailand. In the following year, JYC was invited to join “The Joy Dancing Beijing & The Cultural and Art Exchange of International Youth” in China. Proudly, JYC always got The Best Performance in in China from approximately 15 participating countries (since 2017- present). Cepo is always motivated and he keeps on encouraging JYC choristers to soar high. In 2017, JYC was taking a challenge to join a choir competition in Indonesia"</p>
    </div>

    <div class="jumbotron jumbotron-2 jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">WE SING FOR THE CITY</h1>
            <h1 class="display-4">AND COUNTRY</h1>
        </div>
    </div>

    <div class="container question">
        <h5>HAVE QUESTION ?</h5>
    </div>

    <div class="container form-question">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="{{asset('assets/img/tentang-kami/contact-us.png')}}" alt="img" class="img-fluid">
            </div>
            <div class="col-md-7">
                <form action="" method="post">
                    <ul>
                        <li>
                            <input type="text" name="name" id="name" placeholder="   Name">
                        </li>
                        <li>
                            <input type="email" name="email" id="email" placeholder="    Email">
                        </li>
                        <li>
                            <input type="text" name="pesan" id="pesan" class="pesan" placeholder="   Message">
                        </li>
                        <li>
                            <button type="submit">SUBMIT</button>
                        </li>
                    </ul>
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