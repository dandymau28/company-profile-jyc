<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                    <p class="card-text text-justify">Ponirin Ariadi Limbong atau akrab dipanggil Limbong, lahir di Bandung pada 26 	Februari 1986. Limbong adalah seorang lulusan sarjana terapan STPDN Jatinangor. Limbong mengawali karir sebagai staf biro Tata Pemerintahan pada Agustus 2007 dan melanjutkan karir sebagai Ajudan Sekretariat Wakil Gubernur DKI Jakarta pada Oktober 2007 – Juli 2010. Selanjutnya Limbong menjadi Sekretaris kelurahan Kenari Juli 2007 – Oktober 2012, lalu dipercaya sebagai Kepala Seksi (Kasie) Kepemudaan pada Suku Dinas Pemuda dan Olahraga Kota Administrasi Jakarta Barat pada Oktober 2012 - Januari 2015. Sejak Januari 2015, Limbong aktif dan sebagai Kasie Pemberdayaan Pemuda Dinas Pemuda dan Olahraga (Dispora) DKI Jakarta hingga saat ini.</p>

                    <p class="card-text text-justify">Lulusan SMAN 99 Jakarta ini pernah berprestasi Runner-up Jakarta International School Open Basketball (2001), mendapatkan Lencana YON XII/MENWA STPDN (2005), Lencana SAR NASIONAL (2005), Brevet MENEMBAK MAHIR KODAM III/Siliwangi (2006), dan Bintang Abdi Praja Dharma Satya Nagara Bhakti (2007) saat menempuh pendidikan kedinasan.</p>

                    <p class="card-text text-justify">Limbong sangat aktif berorganisasi, sebagai anggota SAR Nasional (2006-sekarang), Ketua Alumni Diklat Pim angkatan 59 (2010-sekarang) yang tercatat meraih peringkat 2 Sespim/Diklat Pim tingkat IV Pemda DKI Jakarta (2010). Selanjutnya sebagai Humas DPP IKAPTK Provinsi DKI Jakarta (2010 – 2018), Ketua Umum Naposo Limbong Se-Jabodetabek (2012-2016), Mabida Kwartir Pramuka cabang Jakarta Barat (2012-2015), Manager Tim Renang PORPROV Jakarta Barat (2013-2015), Pembina Paskibraka Nasional (2014-Sekarang), Andalan Gerakan Pramuka Provinsi DKI Jakarta (2015-Sekarang), Mabi Saka Pariwisata Pramuka Jakarta Barat (2015-Sekarang), Pembina PCMI DKI Jakarta (2015-Sekarang), Pembina Ikatan Jakarta Sister City (2015-Sekarang). Limbong juga berprestasi meraih Lencana Scuba Diver (2011), Penggerak Masyarakat Sadar Hukum (2012), Bintang Satya Lencana Karya Satya 10 Tahun (2013) dan MPP Pembina PASKIBRAKA tingkat Nasional (2014).</p>

                    <p class="card-text text-justify">Jasanya besar bagi Jakarta Youth Choir (JYC) yaitu sebagai Founder dan Pembina (2015-sekarang). Selain itu Limbong juga aktif menjadi Wakil Manager bidang Umum Kontingen DKI Jakarta POMNAS 2015, Manager Tim Bola Basket DKI Jakarta POPNAS 2017 dan Wakil Ketua Bidang Humas BAPOMI DKI Jakarta (2018). Limbong berprestasi pada Young Diplomat JENESYS Japan (2016), Best Performance Beijing Joy Dancing 2017 (2017), mendapatkan Medali Emas Basket POPNAS Jawa Tengah (2017) dan sebagai PNS terbaik Dispora 2019.</p>

                    <p class="card-text text-justify">Kesuksesan Limbong dalam kehidupan, pendidikan, dan karir tidak lepas dari motto hidup yang dipegang yaitu <em>“Keep the Faith”</em>, setiap dalam aspek kehidupan bahkan masa depan harus mempunyai kepercayaan atau mengimani yang diyakini akan berhasil atau terwujud.</p>
                </div>
            </div>

        </div>
    </div>


    @include('templates.footer')
</body>
    @include('templates.foot')
</html>