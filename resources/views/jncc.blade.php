<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>{{__('Jakarta Youth Choir')}}</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Jumbotron JNCC -->
    <div class="jumbotron jumbotron-fluid banner-jncc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col" data-aos="fade-right" data-aos-duration="2000">
                    <h1>JNCC</h1>
                </div>
                <div class="col" data-aos="fade-left" data-aos-duration="2000">
                    <p>Jakarta<br>National<br>Choir<br>Competition</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Text JNCC -->
    <div class="container">
        <div class="jncc-text text-justify" data-aos="fade-up" data-aos-duration="1500">
            <p> <em>The 1st Jakarta National Choir Competition</em> merupakan sebuah acara Lomba Paduan Suara khusus pelajar SMA/SMA/MA/sederajat se-Indonesia yang diselanggarakan pertama kalinya oleh Jakarta Youth Choir dengan mengusung tema Embodiment of the Indonesian Youth Spirit sebagai bentuk perwujudan sebuah semangat kepemudaan Indonesia yang terdapat dalam setiap individu, di bidang paduan suara.<br><br>
            Acara ini akan dilaksanakan di Dinas Pendidikan DKI Jakarta yang berada di kawasan Jakarta Selatan dan dalam semarak merayakan hari Pendidikan Nasional . Sehingga mendapatkan momentum yang tepat dengan konsep “pemuda unjuk budaya”. Pelajar akan mendapatkan pengalaman seru, baru, namun bersejarah dengan penggagasan ide seni, semangat juang kepemudaan, nasionalitas, dan sejarah secara komplit.br<br><br>
            Kompetisi ini akan menghadirkan 20 tim terbaik paduan suara yang akan dinilai oleh juri-juri yang berkompeten di bidangnya. Setiap tim akan mengirimkan 20-30 chorister penyanyi, 1 conductor dan 2 ofﬁcial. Penilaian akan berlangsung selama 1 hari tersebut dengan perolehan juara I, II, & III yang masing-masing akan mendapatkan uang, piala, dan sertiﬁkat.</p>
        </div>
    </div>
    
    <!-- Waktu Pelaksanaan JNCC -->
    <div class="container-fluid waktu-jncc mt-5">
        <h3>WAKTU DAN TEMPAT</h3>
        <div class="row align-content-center">
            <div class="col-md-4 text-center waktu-1" data-aos="fade-up" data-aos-duration="1500">
                <p>Sabtu, 27 April 2019</p>
            </div>
            <div class="col-md-4 text-center waktu-2" data-aos="fade-up" data-aos-duration="1500">
                <p>Dinas Pendidikan DKI Jakarta<br>
                Jalan Jenderal Gatot Subroto No.Kav. 40-41, RT.8 / RW.3<br>
                Kuningan, East Kuningan, Setia Budi, South Jakarta City, Jakarta 12950
                </p>
            </div>
            <div class="col-md-4 text-center waktu-3" data-aos="fade-up" data-aos-duration="1500">
                <p> 10.00 – 18.00 WIB.</p>
            </div>
        </div>
    </div>

    <!-- Hasil Kegiatan -->
    <div class="container-fluid hasil-kegiatan">
        <div class="row">
            <div class="col-md-4 hasil-kegiatan-1" data-aos="fade-up" data-aos-duration="1500">
                <p>HASIL<br>KEGIATAN</p>
            </div>
            <div class="col-md-8 hasil-kegiatan-2 text-justify" data-aos="fade-up" data-aos-duration="1500">
                <p>
                Kegiatan <em>The 1st Jakarta National Choir Competition</em> diselenggarakan pada tanggal 27 April 2019. Acara diikuti oleh 17 peserta yang berasal dari SMA di Jakarta dan sekitarnya. Acara dimulai pada pukul 08.00 WIB yaitu resgistrasi peserta. <em>Opening ceremony</em> oleh pembawa acara yaitu pukul 09.00 WIB dan memulai penampilan peserta pertama pada pukul 09.45 WIB. Peserta terakhir tampil pada pukul 16.00 WIB. Pengumuman pemenang yaitu pada pukul 17.15 WIB yang diumumkan oleh salah satu juri kami Septo Adi Kristanto Simanjuntak. Pada acara kali ini, kami menghadirkan tiga dewan juri yaitu Septo Adi Kristanto Simanjuntak sebagai Juri 1, Budi Susanto Yohanes sebagai Juri 2, dan Ken Steven sebagai Juri 3. Acara ditutup oleh penampilan peraih juara 1.<br><br>
	            Acara <em>The 1st Jakarta Choir Competition</em> ini di sponsori oleh Bank DKI sebagai sponsor utama, Rave habbit, Dana, Le minerale, Marina, Heavenly Blush, LSPR, Sampoerna University, McD, Domino’s Pizza, Pandawa, Jajan Jamur, dan Mostbreinner. <em>Media partner</em> pada acara ini yaitu Kampus Update, Jakartaku, Campus Event.
	            Selain itu pada acara ini ada beberapa <em>tenant</em> yang ikut memeriahkan yaitu domino’s pizza, This.Yours, heavenly blush, hop hop, Jajan Jamur, Mostbreinner, Tobey Kitchen dan Rave Habbit.
                </p>
            </div>
        </div>
    </div>

    <!-- Daftar Pemenang -->
    <div class="container daftar-pemenang">
            <h3>DAFTAR PEMENANG</h3>

            <div class="row my-5 text-center justify-content-around">
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Juara 1</h4>
                            <p class="card-text">SMAN 47 Jakarta</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/juara1.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>FABAVOSSA YOUTH CHOIR</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Juara 2</h4>
                            <p class="card-text">SMAN 2 Tangerang</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/juara2.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>ARUTALA CHOIR</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Juara 3</h4>
                            <p class="card-text">SMAN 71 Jakarta</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/juara3.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>GITA PATRIA SAPTA CHOIR</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row my-5 text-center">
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Konduktor Terbaik</h4>
                            <p class="card-text">SMAN 47 Jakarta</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/konduktor.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>FABAVOSSA YOUTH CHOIR</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Koreografi Terbaik</h4>
                            <p class="card-text">SMAN 71 JAKARTA</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/koreo.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>GITA PATRIA SAPTA EKA</h4>
                        </div>
                    </div>
                    

                </div>
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kostum Terbaik</h4>
                            <p class="card-text">SMAN 68 JAKARTA</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/kostum.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>TOSLA 68</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 my-3" data-aos="flip-left" data-aos-duration="1500">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Favorit Sosial Media</h4>
                            <p class="card-text">SMKN 38 JAKARTA</p>
                        </div>
                            <img class="card-img img-fluid" src="{{asset('assets/img/jncc/favorit.jpg')}}" alt="img">
                        <div class="card-body tim-pemenang">
                            <h4>RESTYER VOICE</h4>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>

    <!-- Daftar Peserta -->
    <div class="container daftar-peserta table-responsive">
        <h3>DAFTAR PESERTA</h3>

        <!-- Tabel Daftar Peserta -->
        <table class="table table-bordered text-center" data-aos="fade-up" data-aos-duration="1500">
            <thead>
            <tr>
                <th>PERINGKAT</th>
                <th>ASAL SEKOLAH</th>
                <th>PADUAN SUARA</th>
                <th>MEDAL</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>SMAN 47 JAKARTA</td>
                <td>FABAVOSSA YOUTH CHOIR</td>
                <td>GOLD</td>
            </tr>
            <tr>
                <td>2</td>
                <td>SMAN 2 TANGERANG SELATAN</td>
                <td>ARUTALA CHOIR</td>
                <td>GOLD</td>
            </tr>
            <tr>
                <td>3</td>
                <td>SMAN 71 JAKARTA</td>
                <td>GITA PATRIA SAPTA EKA</td>
                <td>GOLD</td>
            </tr>
            <tr>
                <td>4</td>
                <td>SMAN 48 Jakarta</td>
                <td>GITASKARA</td>
                <td>GOLD</td>
            </tr>
            <tr>
                <td>5</td>
                <td>SMAN 1 GARUT</td>
                <td>PSM 91</td>
                <td>GOLD</td>
            </tr>
            <tr>
                <td>6</td>
                <td>SMAN 68 Jakarta</td>
                <td>TOSLA 68</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>7</td>
                <td>SMAN 61 Jakarta</td>
                <td>GRADEVOLE</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>8</td>
                <td>SMAN 96 Jakarta</td>
                <td>BUNGA BANGSA CHOIR</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>9</td>
                <td>SMA YASPEN TUGU IBU 1 DEPOK</td>
                <td>TUSCHO CHOIR</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>10</td>
                <td>SMAN 3 Depok</td>
                <td>MEZZOVOICES CHOIR</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>11</td>
                <td>SMAN 13 Jakarta</td>
                <td>SHYMPHONY OF KHATULISTIWA</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>12</td>
                <td>SMAN 1 Karawang</td>
                <td>NADA VOKALIA SMANSAKA</td>
                <td>SILVER</td>
            </tr>
            <tr>
                <td>13</td>
                <td>SMAN 7 Tangsel</td>
                <td>VOSEUTH CHOIR</td>
                <td>BRONZE</td>
            </tr>
            <tr>
                <td>14</td>
                <td>SMAN 76 Jakarta</td>
                <td>VENIX CHOIR</td>
                <td>BRONZE</td>
            </tr>
            <tr>
                <td>15</td>
                <td>SMKN 16 Jakarta</td>
                <td>NAMBLAS CHOIR</td>
                <td>BRONZE</td>
            </tr>
            <tr>
                <td>16</td>
                <td>SMKN 26 Jakarta</td>
                <td>ADHIGANA</td>
                <td>BRONZE</td>
            </tr>
            <tr>
                <td>17</td>
                <td>SMAN 38 Jakarta</td>
                <td>RESTYER VOICE</td>
                <td>BRONZE</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="container d-flex justify-content-center mb-md-5 mb-3">
        <iframe width="854" height="480" src="https://www.youtube.com/embed/pw5G39qGpK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    @include('templates.footer')
</body>
@include('templates.foot')
@push('js')
    <script src="{{ asset('assets/js/moment.js') }}"></script>
@endpush

</html>
