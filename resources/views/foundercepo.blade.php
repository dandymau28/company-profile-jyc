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
                        <img src="{{asset('assets/img/profile/profileCepo.jpg')}}" class="card-img-top card-founder rounded-circle img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Septo Adi Kristanto Simanjuntak, S.Pd</h4>

                    <p class="card-text text-justify">Septo Adi Kristanto Simanjuntak atau akrab dipanggil Cepo, lahir di Jakarta pada 17 September
                        1991. Cepo adalah Sarjana Pendidikan Bahasa Inggris dari Universitas Sampoerna. Cepo
                        menemukan minatnya dalam bernyanyi sejak 1995, ketika masih di Sekolah Dasar. Potensinya
                        juga berkembang dengan baik karena orangtuanya selalu mendukungnya melalui semua acara
                        bernyanyi dan kompetisi yang diikuti.</p> 
                    <p class="card-text text-justify">Cepo telah berhasil mencapai banyak prestasi di paduan suara dalam lebih dari satu dekade.
                        Salah satu prestasinya yang luar biasa terjadi pada tahun 2008. Cepo adalah perwakilan dari DKI
                        Jakarta di Gita Bahana Nusantara (Paduan Suara untuk Hari Kemerdekaan di Istana Presiden)
                        pada tahun 2008. Sepanjang perjalanan, Cepo bergabung dengan berbagai jenis kompetisi
                        menyanyi di TV, Radio, Mal, dan lain-lain. Sejak itu, Cepo terus meningkatkan keterampilan dan
                        kemampuannya dalam musik, terutama dalam karya paduan suara.</p>
                    <p class="card-text text-justify">Pada 2015, Cepo bersama pembinanya di Dinas Pemuda dan Olahraga DKI Jakarta (Bpk.
                        Ponirin Ariadi Limbong) dan kolega seniornya dari Program Pertukaran Pemuda Indonesia
                        (Yuvino Tanimura) berinisiatif mendirikan paduan suara yang terbuka untuk semua pemuda
                        yang memiliki minat dalam bernyanyi, terutama bagi mereka yang memiliki keterbatasan dalam
                        hal teknik dan pengalaman menyanyi. Sampai akhirnya, paduan suara itu diberi nama Jakarta
                        Youth Choir (JYC).</p>
                    <p class="card-text text-justify">Sejak 2015, Cepo dan JYC telah mencapai banyak prestasi dan penghargaan di berbagai acara
                        Internasional seperti kompetisi dan festival di Indonesia, Thailand, Cina, Singapura, Italia,
                        Polandia dan Lituania. Cepo bersama JYC telah mengumpulkan lebih dari 15 medali emas dan
                        beberapa trofi Grand Prix untuk Indonesia.</p>
                    <p class="card-text text-justify">Cepo juga mendapat beberapa hadiah konduktor seperti The Best Conductor Award di The
                        XXXIV Chorus Inside Advent 2018 di Italia, The Promising Conductor dan The Best Conductor
                        Award di The XIV Varsovia Cantat 2019 di Polandia. Cepo juga menjadi salah satu dari 10
                        konduktor yang diundang dari seluruh dunia untuk berpartisipasi dalam Choral Conducting
                        Institute oleh Harold Rosenbaum pada tahun 2019 di New York University, Amerika Serikat.</p>
                    <p class="card-text text-justify">Pengalaman dan prestasi musiknya membuat Cepo terlibat aktif sebagai ajudikator atau pelatih
                        dalam kompetisi paduan suara dan berbagai workshop di negara ini. Hingga saat ini, Cepo terus
                        belajar mengembangkan kemampuannya dan menambah pengalaman dalam bidang paduan suara
                        dengan bergabung dalam workshop, seminar dan kompetisi di seluruh dunia. Cepo juga dikenal
                        sebagai choirmaster dari Jakarta Youth Choir, penggubah lagu (terutama paduan suara),
                        penyanyi profesional, pengaba dan pelatih paduan suara anak, pemuda, dan dewasa di Indonesia.</p>
                </div>
            </div>

        </div>
    </div>


    @include('templates.footer')
</body>
    @include('templates.foot')
</html>