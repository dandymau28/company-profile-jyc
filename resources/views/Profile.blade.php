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
                        <p class="pt-3 my-0">Ponirin Ariadi Limbong</p>
                        <p class="my-0">Penasehat Jakarta Youth Choir</p>
                    </div>
                    <div class="col-lg-9">
                        <h2 class="mt-3 mb-3">Septo Adi Kristanto Simanjuntak</h2>
                        <p class="text-justify">Septo Adi Kristanto Simanjuntak or warmly called Cepo, was born in Jakarta on September 17th, 1991. He finished his latest education as a Bachelor of Education (English Language Teaching) in Sampoerna School of Education (transformed to Sampoerna University at the present). He found his interest in singing since 1995, when he was in primary school as a chorister in the Church Choir. His potential is also well developed since his parents always supported him through all singing events and competitions that he joined. One of his great achievement happened in 2008. He was delegated as the representative from DKI Jakarta (Indonesia’s capital city) in Gita Bahana Nusantara (The Choir for Independence Day in the President Palace) in 2008. Along the way, he joined many kinds of singing competition in TV, Radio, Malls and etc. Since then, he keeps improving his skills and capability in music, especially in choral works.</p>
                        <p class="text-justify">In 2015, Cepo with his supervisor in Youth and Sport Department (Mr. Ponirin Ariadi Limbong) and his senior colleague from The Indonesia Youth Exchange Program (Yuvino Tanimura) initiated to establish a choir. It is open for all youth who have interest in singing, especially for those who have some limitation in terms of singing techniques & experiences. After all discussion, it was named as Jakarta Youth Choir (JYC).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto my-3">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="mt-3 mb-3">Septo Adi Kristanto Simanjuntak</h2>
                        <p class="text-justify">Diawali tahun pertama saya bertugas di Bidang kepemudaan Dinas Pemuda dan Olahraga Provinsi DKI Jakarta pada tahun 2015, dalam kegiatan Seleksi Pertukaran Pemuda Antar Negara (PPAN) 2015, kami membuat perubahan dalam metode seleksi akhir, yaitu Finalis harus mengikuti program Homestay. kami memilih Kawasan Kumuh Kalibaru, Cilincing-Jakut sebagai lokasi Homestay, dengan Pimpinan Project, Sdr. Yuvino “Vino” Tanimura (alumni PPAN Kapal ASEAN-Jepang). Finalis tinggal Di orangtua dari berbagai Profesi, yaitu Nelayan, pedagang Warteg, buruh Kerang, dsb. Semangat dalam program tersebut yang membuat mereka dapat merasakan ada hal lain di Jakarta, yang mungkin pertama kali mereka lihat ada kondisi seperti itu di Jakarta dan yang menggerakkan mereka untuk harus peduli dii kemudian hari, pada saat program, Ide-ide Pemberdayaan masyarakat muncul untuk membantu masyarakat. Dalam akhir program Homestay, Para Finalis ingin memberikan penampilan seni untuk perpisahan dengan masyarakat setempat. Septo “Cepo” Adi Simanjuntak (alumni PPAN JENESYS program) mengajarkan para Finalis untuk membuat vokal grup, dan dalam acara perpisahan tersebut, penampilan mereka membuat saya kagum. 
                            Cepo sangat berbakat untuk memoles Finalis dengan waktu yang singkat bisa menampilkan pertunjukan yang membuat masyarakat antusias. Membuat saya berpikir untuk membuat Paduan Suara yang profesional. Saya melakukan ”challenge” kepada  Vino, Cepo dan Para Finalis untuk tampil didepan Gubernur Provinsi DKI Jakarta dalam Upacara HUT kemerdekaan RI Dalam kurun waktu 1 minggu mereka menambah personil melalui undangan via social media untuk melengkapi kekurangan personil. Dan inilah adalah angkatan pertama paduan suara ini. Dalam Upacara tersebut kami belum memiliki nama, kemudian saya menamakan paduan suara ini dengan nama “Jakarta Youth Choir” sebagai identitas bahwa ini adalah Paduan Suara pemuda Jakarta yang bernyanyi untuk bangsa dan Kotanya. Pada Tanggal 17 Agustus 2015 Paduan Suara Jakarta Youth Choir bernyanyi di depan Gubernur dan Ribuan peserta Upacara,
                            Hasilnya ? Membanggakan !! dan itu yang membuat kami semakin Semangat untuk melakukan banyak hal lagi untuk paduan suara ini. Kami meminta Vino untuk menangani Manajemen dan Cepo untuk kepelatihan dan kreatif. Salah satu anggota kami pilih sebagai ketua pertama , yaitu Rifka Kamilia. 
                            Pada Hari ini “Jakarta Youth Choir” telah menjadi komunitas yang mandiri dan berprestasi, berbagai penghargaan Nasional dan Internasional telah diraih, berbagai penampilan didepan Gubernur, Para Menteri, Presiden RI bahkan dalam acara pertemuan ketua kontingen ASIAN GAMES dan Para menteri Pemuda se Asia telah berhasil dilakukan. Pencapaian yang sangat besar dalam waktu yang singkat, membayar semua kerja keras yang kami lakukan, begitu banyak tantangan dan hambatan yang silih berganti hadir didepan kami, tapi hal tersebut justru yang membuat kami semakin kuat dan solid dari waktu ke waktu.
                             Saat ini “Jakarta Youth Choir” bisa bersanding dengan nama-nama Paduan Suara Besar lainnya di Jakarta dan Indonesia. 
                            Saya mengucapkan Terimakasih banyak terutama kepada Septo “Cepo” Adi Simanjuntak sebagai Pelatih dan Kakak yang luar biasa  bagi seluruh anggota dan kepada Yuvino “Vino” Tanimura yang membantu dalam awalnya berdiri Padus ini. Dan Para ketua Rifka kamilia, Eka kurniawan yg dibantu Para pengurus dan kepada seluruh anggota yang setia dan berkorban Demi Organisasi ini. Dan tidak lupa kepada Bapak Drs. Firmansyah Wahid ,M.Pd. Kepala Dinas Pemuda dan Olahraga Provinsi DKI Jakarta pada periode berdiri padus Ini atas dukungannya yang Sangat besar dan kepada Bapak Dinas Pemuda dan Olahraga Provinsi DKI Jakarta ,DR. H. Ratiyono, MMSI atas dukungan yang tidak
                            Henti-hentinya terhadap Jakarta Youth Choir dan industri kreatif pemuda di Jakarta dan para Kepala Bidang kepemudaan Ibu Dra. Helin Parlindah, Bpk. Drs. Asep Saepudin, MPd, Bpk. Serin dan Bpk. Drs. H. Makmur , M.Pd.
                            Harapan saya, Jakarta Youth Choir menjadi Akademi Padus yang penuh dengan pendidikan karakter bagi Para anggota, menyiapkan masa depan yang cerah bagi Para anggota Dan bermanfaat bagi Kota Jakarta Dan Indonesia. We sing For the city and country!!</p>
                        <p class="text-justify">In 2015, Cepo with his supervisor in Youth and Sport Department (Mr. Ponirin Ariadi Limbong) and his senior colleague from The Indonesia Youth Exchange Program (Yuvino Tanimura) initiated to establish a choir. It is open for all youth who have interest in singing, especially for those who have some limitation in terms of singing techniques & experiences. After all discussion, it was named as Jakarta Youth Choir (JYC).</p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img src="{{asset('assets/img/profile/limbong.JPG')}}" class="img-fluid rounded-circle w-100" alt="Bapak Limbong">
                        <p class="pt-3 my-0">Septo Adi Kristanto Simanjuntak</p>
                        <p class="my-0">Choirmaster Jakarta Youth Choir</p>
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
            <div class="col-lg-8 mx-auto text-center">
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