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
                        <img src="{{asset('assets/img/profile/limbong.JPG')}}" class="card-img-top card-founder rounded-circle img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Ponirin Ariadi Limbong, S.STP</h4>

                    <p class="card-text text-justify"> Diawali tahun pertama saya bertugas di Bidang kepemudaan Dinas Pemuda dan Olahraga Provinsi DKI Jakarta pada tahun 2015, dalam kegiatan Seleksi Pertukaran Pemuda Antar Negara (PPAN) 2015, kami membuat perubahan dalam metode seleksi akhir, yaitu finalis harus mengikuti program homestay. Kami memilih kawasan kumuh Kalibaru, Cilincing-Jakut sebagai lokasi homestay, dengan Pimpinan Project, Sdr. Yuvino “Vino” Tanimura (alumni PPAN Kapal ASEAN-Jepang). Finalis tinggal Di orangtua dari berbagai Profesi, yaitu Nelayan, pedagang Warteg, buruh Kerang, dsb. Semangat dalam program tersebut yang membuat mereka dapat merasakan ada hal lain di Jakarta, yang mungkin pertama kali mereka lihat ada kondisi seperti itu di Jakarta dan yang menggerakkan mereka untuk harus peduli dii kemudian hari, pada saat program, Ide-ide Pemberdayaan masyarakat muncul untuk membantu masyarakat. Dalam akhir program Homestay, Para Finalis ingin memberikan penampilan seni untuk perpisahan dengan masyarakat setempat. Septo “Cepo” Adi Simanjuntak (alumni PPAN JENESYS program) mengajarkan para Finalis untuk membuat vokal grup, dan dalam acara perpisahan tersebut, penampilan mereka membuat saya kagum.</p> 
                    <p class="card-text text-justify">Cepo sangat berbakat untuk memoles Finalis dengan waktu yang singkat bisa menampilkan pertunjukan yang membuat masyarakat antusias. Membuat saya berpikir untuk membuat Paduan Suara yang profesional. Saya melakukan ”challenge” kepada  Vino, Cepo dan Para Finalis untuk tampil didepan Gubernur Provinsi DKI Jakarta dalam Upacara HUT kemerdekaan RI Dalam kurun waktu 1 minggu mereka menambah personil melalui undangan via social media untuk melengkapi kekurangan personil. Dan inilah adalah angkatan pertama paduan suara ini. Dalam Upacara tersebut kami belum memiliki nama, kemudian saya menamakan paduan suara ini dengan nama “Jakarta Youth Choir” sebagai identitas bahwa ini adalah Paduan Suara Pemuda Jakarta yang bernyanyi untuk bangsa dan kotanya. Pada Tanggal 17 Agustus 2015 Paduan Suara Jakarta Youth Choir bernyanyi di depan Gubernur dan ribuan peserta upacara. Hasilnya? Membanggakan! dan itu yang membuat kami semakin Semangat untuk melakukan banyak hal lagi untuk paduan suara ini. Kami meminta Vino untuk menangani Manajemen dan Cepo untuk kepelatihan dan kreatif. Salah satu anggota kami pilih sebagai ketua pertama , yaitu Rifka Kamilia. </p>
                    <p class="card-text text-justify">Pada Hari ini “Jakarta Youth Choir” telah menjadi komunitas yang mandiri dan berprestasi, berbagai penghargaan Nasional dan Internasional telah diraih, berbagai penampilan didepan Gubernur, Para Menteri, Presiden RI bahkan dalam acara pertemuan ketua kontingen ASIAN GAMES dan Para menteri Pemuda se Asia telah berhasil dilakukan. Pencapaian yang sangat besar dalam waktu yang singkat, membayar semua kerja keras yang kami lakukan, begitu banyak tantangan dan hambatan yang silih berganti hadir didepan kami, tapi hal tersebut justru yang membuat kami semakin kuat dan solid dari waktu ke waktu.</p>
                    <p class="card-text text-justify">Saat ini “Jakarta Youth Choir” bisa bersanding dengan nama-nama Paduan Suara Besar lainnya di Jakarta dan Indonesia. </p>
                    <p class="card-text text-justify">Saya mengucapkan Terimakasih banyak terutama kepada Septo “Cepo” Adi Simanjuntak sebagai Pelatih dan Kakak yang luar biasa  bagi seluruh anggota dan kepada Yuvino “Vino” Tanimura yang membantu dalam awalnya berdiri Padus ini. Dan Para ketua Rifka kamilia, Eka kurniawan yg dibantu Para pengurus dan kepada seluruh anggota yang setia dan berkorban Demi Organisasi ini. Dan tidak lupa kepada Bapak Drs. Firmansyah Wahid ,M.Pd. Kepala Dinas Pemuda dan Olahraga Provinsi DKI Jakarta pada periode berdiri padus Ini atas dukungannya yang Sangat besar dan kepada Bapak Dinas Pemuda dan Olahraga Provinsi DKI Jakarta ,DR. H. Ratiyono, MMSI atas dukungan yang tidak</p>
                    <p class="card-text text-justify">Henti-hentinya terhadap Jakarta Youth Choir dan industri kreatif pemuda di Jakarta dan para Kepala Bidang kepemudaan Ibu Dra. Helin Parlindah, Bpk. Drs. Asep Saepudin, MPd, Bpk. Serin dan Bpk. Drs. H. Makmur , M.Pd.</p>
                    <p class="card-text text-justify">Harapan saya, Jakarta Youth Choir menjadi Akademi Padus yang penuh dengan pendidikan karakter bagi Para anggota, menyiapkan masa depan yang cerah bagi Para anggota Dan bermanfaat bagi Kota Jakarta Dan Indonesia. We sing For the city and country!!</p>  
                </div>
            </div>

        </div>
    </div>


    @include('templates.footer')
</body>
    @include('templates.foot')
</html>