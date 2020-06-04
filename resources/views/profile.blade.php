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
            <h1 class="display-judul">TENTANG KAMI</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!-- Sejarah JYC -->
    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-4">TENTANG JYC</h3>
        <div class="row container-fluid" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-6 mx-auto text-justify sejarah-text">
            <p>
            Jakarta Youth Choir (JYC) bermula pada 25 Juli 2015 saat para Finalis DKI Jakarta tampil pada Program Pertukaran Pemuda Antarnegara sedang <em>live-in</em> di Kalibaru, Cilincing, Jakarta Utara. Mereka diminta untuk bernyanyi di sebuah acara masyarakat setempat. Hanya dengan persiapan yang singkat, oleh para finalis dan <em>choirmaster</em> Septo Adi Kristanto Simanjuntak (Cepo), membuat penampilan perdana ini sukses dan berkesan.
            </p>
            <p>
            Menindaklanjuti penampilan yang berkesan oleh para finalis PPAN 2015 di Cilincing tersebut, Cepo dan P. Ariadi Limbong (Kepala Seksi Kepemudaan Dinas Pemuda dan Olahraga Provinsi DKI Jakarta) mendapatkan inspirasi untuk membuat paduan suara ini berkelanjutan. Sampai pada akhirnya dinamakan Jakarta Youth Choir. JYC diresmikan pada 30 Agustus 2015 di Auditorium Sertifikasi Guru Universitas Negeri Jakarta oleh Kepala Badan Kesatuan Bangsa dan Politik DKI Jakarta Drs. H. Ratiyono, MMSI.
            </p>
            <p>
            Saat ini, JYC membina lebih dari 100 <em>choristers</em> aktif yang berasal dari berbagai macam latar belakang pendidikan dan pekerjaan maupun pelatih penuh waktu untuk kelompok paduan suara ternama yang berkedudukan di DKI Jakarta dan sekitarnya. 
            JYC telah menggelar beberapa konser paduan suara secara berkala. JYC dipilih dan dipercaya sebagai penampil dan bagian dari acara-acara hebat nan besar, yang dihadiri orang-orang hebat yang inspiratif. Bahkan, JYC telah berkontribusi mengukir berbagai prestasi terkemuka di tingkat Nasional maupun Internasional, dibuktikan oleh pencapaian JYC sebagai <em>Grand Prix Winner of The Year</em> dengan mendapatkan nilai sempurna yang menjadi kali pertama dari 34 penyelenggaraan Festival Internazionale Chorus Inside Advent di Roma, Italia pada tahun 2018.
            </p>
            <p>
            Pada tahun 2019, JYC berhasil mengukir prestasi kembali dengan meraih <em>2nd Prize in Mixed Choir Category, 3rd  Prize in Male & Female Choir, Romuald Twardowski Prize – for the best performance of Romuald Twardowski composition by foreign choir, The Promising Conductor dan The Best Organized Conductor</em> pada XIV Varsovia Cantat International Warsaw Choir Festival. Tidak hanya itu, pada kompetisi 27th Cantate Domino International Choir Festival and Competition of Sacred Music, JYC berhasil meraih <em>The Winner of Mixed Category, The Winner of Chamber Category, The 1st Cup Grand Prix Winner for Mixed Category, The 2nd Cup Grand Prix Winner for Chamber Category, Special Jury Award for The Best Interpretation of Vytautas Miskinis "Cantate Domino" Piece dan Special Jury Award for The Most Expressive Choir.</em>
            </p>
            <p>
            JYC berkomitmen untuk meningkatkan prestasi sebagai salah satu paduan suara terbaik di Indonesia. JYC bertahan dan semangat untuk menyebarluaskan cinta terhadap budaya bangsa juga mengharumkan nama DKI Jakarta dan Indonesia, khususnya di dunia Paduan Suara. <em>“We Sing for the City and the Country.”</em> 
            </p>
            </div>
        </div>
    </div>

    <!-- Profile -->
    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">FOUNDERS</h3>
        <div class="row-founder container-fluid">
            <div class="col-lg-5 card mx-md-auto mb-4 bg-transparent border-0">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{asset('assets/img/profile/limbong.JPG')}}" class="card-img-top card-founder rounded-circle img-fluid" alt="...">
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <h5 class="card-title text-center">Ponirin Ariadi Limbong, S.STP</h5>
                    <p class="card-text text-justify">{{ Str::limit('Ponirin Ariadi Limbong atau akrab dipanggil Limbong, lahir di Bandung pada 26 	Februari 1986. Limbong adalah seorang lulusan sarjana terapan STPDN Jatinangor. Limbong mengawali karir sebagai staf biro Tata Pemerintahan pada Agustus 2007 dan melanjutkan karir sebagai Ajudan Sekretariat Wakil Gubernur DKI Jakarta pada Oktober 2007 – Juli 2010. Selanjutnya Limbong menjadi Sekretaris kelurahan Kenari Juli 2007 – Oktober 2012, lalu dipercaya sebagai Kepala Seksi (Kasie) Kepemudaan pada Suku Dinas Pemuda dan Olahraga Kota Administrasi Jakarta Barat pada Oktober 2012 - Januari 2015. Sejak Januari 2015, Limbong aktif dan sebagai Kasie Pemberdayaan Pemuda Dinas Pemuda dan Olahraga (Dispora) DKI Jakarta hingga saat ini.', 500)}}</p>
                    <a href="{{route('founder')}}" class="btn btn-outline-secondary mr-0">Baca penuh...</a>     
                </div>
            </div>
            <div class="col-lg-5 card mx-md-auto bg-transparent border-0">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{asset('assets/img/profile/profileCepo.jpg')}}" class="card-img-top card-founder rounded-circle" alt="...">
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <h5 class="card-title text-center">Septo Adi Kristanto Simanjuntak, S.Pd</h5>
                    <p class="card-text text-justify">{{ Str::limit('Septo Adi Kristanto Simanjuntak atau akrab dipanggil Cepo, lahir di Jakarta pada 17 September
                        1991. Cepo adalah Sarjana Pendidikan Bahasa Inggris dari Universitas Sampoerna. Cepo
                        menemukan minatnya dalam bernyanyi sejak 1995, ketika masih di Sekolah Dasar. Potensinya
                        juga berkembang dengan baik karena orangtuanya selalu mendukungnya melalui semua acara
                        bernyanyi dan kompetisi yang diikuti. Cepo telah berhasil mencapai banyak prestasi di paduan suara dalam lebih dari satu dekade.
                        Salah satu prestasinya yang luar biasa terjadi pada tahun 2008. Cepo adalah perwakilan dari DKI
                        Jakarta di Gita Bahana Nusantara (Paduan Suara untuk Hari Kemerdekaan di Istana Presiden)
                        pada tahun 2008. Sepanjang perjalanan, Cepo bergabung dengan berbagai jenis kompetisi
                        menyanyi di TV, Radio, Mal, dan lain-lain. Sejak itu, Cepo terus meningkatkan keterampilan dan
                        kemampuannya dalam musik, terutama dalam karya paduan suara.', 500)}}</p>
                        <a href="{{route('founderrr')}}" class="btn btn-outline-secondary mr-0">Baca penuh...</a>    
                    
                </div>
            </div>
            <!-- <div class="col-lg-8 mx-auto">
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
            <div class="col-lg-6 mx-auto my-3">
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
            </div>-->
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">VISI</h3>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-8 mx-auto text-center">
                <h5>Jakarta Youth Choir bernyanyi untuk membanggakan dan membawa nama harum Kota Jakarta dan Negara Indonesia</h5>
            </div>
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-5">MISI</h3>
        <div class="row container-fluid" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-8 mx-auto text-center">
                <ul>
                    <li><h5 class="card-text text-justify">Menciptakan suasana organisasi yang harmonis, bersahabat dan ramah</h5></li>
                    <li><h5 class="card-text text-justify">Menyediakan sarana fisik dan non fisik untuk melatih baka dan talenta para anggotanya dalam suasana disiplin konstruktif dan menyenangkan</h5></li>
                    <li><h5 class="card-text text-justify">Aktif mengikuti kompetisi paduan suara di dalam dan di luar negeri</h5></li>
                    <li><h5 class="card-text text-justify">Mendukung program-program pemerintah DKI Jakarta khususnya dalam bidang kepemudaan, kesenian, dan kebudayaan</h5></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="berita container-fluid bg-light py-5">
        <h3 class="mb-4">STRUKTUR ORGANISASI</h3>
        <div class="row justify-content-center mb-4">
            <div class="col-sm-8">
                <nav class="tab-struktur">
                    <div class="nav nav-tabs row justify-content-between text-center" id="nav-tab" role="tablist">
                        <a class="struktur-items col m-0" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">2016 - 2017</a>
                        <a class="struktur-items col m-0" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">2018 - 2019</a>
                        <a class="struktur-items active col m-0" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">2020 - 2021</a>
                    </div>
                </nav>
            </div>
        </div> 

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade " data-aos="fade-up" data-aos-duration="1500" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <img id="myImg" src="{{asset('assets/img/profile/struktur-2016-2017.png')}}" class="img-fluid w-100" alt="Struktur">
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <img id="myImg" src="{{asset('assets/img/profile/struktur-2018-2019.png')}}" class="img-fluid w-100" alt="Struktur">
            </div>

            <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <img id="myImg" src="{{asset('assets/img/profile/struktur-2020-2021.png')}}" class="img-fluid w-100" alt="Struktur">
            </div>
        </div> 
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
    </div>
    
    @include('templates.footer')
</body>
    @include('templates.foot')
</html>