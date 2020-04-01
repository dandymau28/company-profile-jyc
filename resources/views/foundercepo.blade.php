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


    <!-- Banner Section -->
    <div id="banner-profile">
        <div class="container text-profile">
            <h1 class="display-judul">PROFILE</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!-- Limbong -->
    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-3">Founders</h3>
        <div class="row-founder container-fluid">
            <div class="col-lg-8 card mx-md-auto mb-4 bg-transparent border-0">
                <div class="row justify-content-center" >
                        <img src="{{asset('assets/img/profile/cepo.jpeg')}}" class="card-img-top card-founder rounded-circle img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Ponirin Ariadi Limbong, S.STP</h4>

                    <p class="card-text text-justify">Septo Adi Kristanto Simanjuntak or warmly called Cepo, was born in Jakarta on September 17th, 1991. He is a Bachelor of Education (English Language Teaching) from Sampoerna University. He found his interest in singing since 1995, when he was in primary school. He actively sang as in the Church Choir. His potential is also well developed since his parents always supported him through all singing events and competitions that he joined. </p> 
                    <p class="card-text text-justify">He has successfully achieved a lot of achievements in choir in more than one decade. One of his great achievement happened in 2008. He was the representative from DKI Jakarta (Indonesia’s capital city) in Gita Bahana Nusantara (The Choir for Independence Day in the President Palace) in 2008. Along the way, he joined many kind of singing competitions in TV, Radio, Malls and etc. Since then, he keeps improving his skills and capability in music, especially in choral works.</p>
                    <p class="card-text text-justify">In 2015, Cepo with his supervisor in Youth and Sport Department (Mr. Ponirin Ariadi Limbong) and his senior colleague from The Indonesia Youth Exchange Program (Yuvino Tanimura) initiated to establish a choir. It is open for all youth who have interest in singing, especially for those who have some limitation in terms of singing techniques & experiences. After long discussion, it was named as Jakarta Youth Choir (JYC).</p>
                    <p class="card-text text-justify">Since 2015, Cepo & JYC have been achieving a lot of achievements and awards in many International events such as competition and festival in Indonesia, Thailand, China, Singapore, Italy, Poland and Lithuania. They have collected more than 15 gold medals & some Grand Prix trophy for Indonesia. </p>
                    <p class="card-text text-justify">He's also got some conductor prizes such as The Best Conductor Award in The XXXIV Chorus Inside Advent 2018 in Italy, The Promising Conductor and The Best Organized Conductor Award in The XIV Varsovia Cantat 2019 in Poland. He was also one of the 10 invited participating conductors around the world to participate in The Harold Rosenbaum Choral Conducting 2019 in New York University, The United States.</p>
                    <p class="card-text text-justify">Those experiences make him actively involved as adjudicators or trainer in choir competition or workshops in the country. Until now, he keeps on learning, developing and gaining his skills & experiences by joining workshops, seminars & competition around the world. He is also well known as the choirmaster of Jakarta Youth Choir, song arranger ( especially choral arrangements), professional singer and vocal/choir director who coaches children, youth & adult choirs.</p>
                </div>
            </div>

        </div>
    </div>


    @include('templates.footer')
</body>
    @include('templates.foot')
</html>