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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-1 jumbotron-fluid">
        <div class="container">
            <h1 class="display-1">JYC</h1>
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


    
</body>
    @include('templates.foot')
</html>