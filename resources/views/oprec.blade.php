<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link  href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet">
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Banner Kegiatan -->
    <div id="banner-oprec">
        <div id="text-oprec" class="container-fluid">
            {{-- Slide 1 --}}
            <div class="row justify-content-center mx-2 mx-sm-1 mx-md-0">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="row">
                        <h1 class="">PENERIMAAN CALON ANGGOTA BARU JYC 2020</h1>
                    </div>
                    <form id="regForm" action="/pendaftaran" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 text-left tab">
                            <h5>Sebelum kamu mengisi formulir pendaftaran, baca terlebih dahulu alur pendaftaran dibawah ini.</h5>
                            <h4 class="pt-2">Alur Pendaftaran:</h4>
                            <div class="col-12">
                                <ol class="pl-2 pl-sm-3 pl-md-4 text-justify">
                                    <li>Mengisi formulir pendaftaran calon anggota baru dengan benar</li>
                                    <li>Kamu akan mendapatkan email konfirmasi pendaftaran</li>
                                    <li>Transfer Rp. 25.000,- ke no. rekening yang tertera pada email</li>
                                    <li>Upload bukti pembayaran melalui link yang tersedia di email, lalu pilih jadwal audisi yg tersedia</li>
                                    <li>Jika pembayaran telah diverifikasi, maka akan mendapatkan email konfirmasi serta formulir untuk di cetak dan dibawa saat wawancara</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 mt-2 tab">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input id="nama_lengkap" name="nama_lengkap" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nurul Anisa, S.Sn">
                                    </div>
                                    <div class="col form-group">
                                        <label for="nama_panggilan">Nama Panggilan</label>
                                        <input id="nama_panggilan" name="nama_panggilan" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nisa">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="email" oninput="this.className = 'form-control'" class="form-control" placeholder="anisanurul69@hotmail.com">
                                    </div>
                                    <div class="col form-group">
                                        <label for="instagram">Instagram</label>
                                        <input id="instagram" name="instagram" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="nisaaah69">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input id="tempat_lahir" name="tempat_lahir" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Jepara">
                                    </div>
                                    <div class="col form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input id="tanggal_lahir" name="tanggal_lahir" type="date" oninput="this.className = 'form-control'" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label for="pekerjaan">Profesi / Pekerjaan</label>
                                        <input id="pekerjaan" name="pekerjaan" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Sekretaris">
                                    </div>
                                    <div class="col form-group">
                                        <label for="institusi">Perusahaan / Institusi</label>
                                        <input id="institusi" name="institusi" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="PT Mencari Cinta Sejati">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label for="agama">Agama</label>
                                        <input class="form-control" id="agama" name="agama" type="text" oninput="this.className = 'form-control'" placeholder="Agama A">
                                    </div>
                                    <div class="col form-group">
                                        <label for="foto">Pas Foto</label>
                                        <input id="foto" name="foto" type="file" oninput="this.className = 'form-control'" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="2" placeholder="Jalan Gang Tersempit No.69, Kel. Besar, Kec. Tegar, Kota Jepara" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="info_jyc">Dari mana Anda mengetahui tentang JYC ?</label>
                                    <textarea name="info_jyc" id="info_jyc" class="form-control" rows="2" placeholder="Pertama, begini begini begini, lalu begitu. Terus begini begitu dan akhirnya begono." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tentang_jyc">Apa yang Anda ketahui tentang JYC ?</label>
                                    <textarea name="tentang_jyc" id="tentang_jyc" class="form-control" rows="2" placeholder="JYC itu, begini begini begini, lalu begitu. Terus begini begitu dan akhirnya begono." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="motivasi">Motivasi mengikuti JYC ?</label>
                                    <textarea name="motivasi" id="motivasi" class="form-control" rows="2" placeholder="Setelah gabung jadi anggota JYC, aku ingin begini, aku ingin begitu, ingin ini ingin itu banyak sekali." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 mt-2 tab">
                            <div id="portofolio-seni" class="col mb-3">
                                {{-- Row Padus --}}
                                <b> Paduan Suara yang pernah diikuti</b>
                                <div class="form-row rowPadus">
                                    <div class="col form-group">
                                        <input name="nama_padus[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Paduan Suara">
                                    </div>
                                    <div class="col-3 form-group">
                                        <select name="ambitus[]" class="custom-select" required>
                                            <option selected disabled value="">Pilih Ambitus</option>
                                            <option value="Sopran 1">Sopran 1</option>
                                            <option value="Sopran 2">Sopran 2</option>
                                            <option value="Alto 1">Alto 1</option>
                                            <option value="Alto 2">Alto 2</option>
                                            <option value="Tenor 1">Tenor 1</option>
                                            <option value="Tenor 2">Tenor 2</option>
                                            <option value="Bass 1">Bass 1</option>
                                            <option value="Bass 2">Bass 2</option>
                                        </select>
                                    </div>
                                    <div class="col-3 form-group">
                                        <input name="tahun_aktif_padus[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="2009-2010">
                                    </div>
                                </div>
                                <button data-for="rowPadus" type="button" class="btn btn-secondary mb-2 d-none tombol-hapus">Hapus</button>
                                <button data-for="rowPadus" type="button" class="btn btn-secondary mb-2 tombol-tambah">Tambahkan</button>
                                <hr>
                                {{-- Row Riwayat Organisasi --}}
                                <b>Riwayat Organisasi</b>
                                <div class="form-row rowRiwayatOrganisasi">
                                    <div class="col form-group">
                                        <input name="nama_organisasi[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Organisasi">
                                    </div>
                                    <div class="col-3 form-group">
                                        <input name="jabatan[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Jabatan">
                                    </div>
                                    <div class="col-3 form-group">
                                        <input name="tahun_aktif_org[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="2009-2010">
                                    </div>
                                </div>
                                <button data-for="rowRiwayatOrganisasi" type="button" class="btn btn-secondary mb-2 d-none tombol-hapus">Hapus</button>
                                <button data-for="rowRiwayatOrganisasi" type="button" class="btn btn-secondary mb-2 tombol-tambah">Tambahkan</button>
                                <hr>
                                {{-- Row Prestasi di bidang Kesenian --}}
                                <b>Prestasi di bidang Kesenian</b>
                                <div class="form-row rowKesenian">
                                    <div class="col form-group">
                                        <input name="nama_kegiatan_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Kegiatan">
                                    </div>
                                    <div class="col form-group">
                                        <input name="tempat_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tempat">
                                    </div>
                                    <div class="col form-group">
                                        <input name="tingkat_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tingkat">
                                    </div>
                                    <div class="col form-group">
                                        <input name="juara_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Juara">
                                    </div>
                                </div>
                                <button data-for="rowKesenian" type="button" class="btn btn-secondary mb-2 d-none tombol-hapus">Hapus</button>
                                <button data-for="rowKesenian" type="button" class="btn btn-secondary mb-2 tombol-tambah">Tambahkan</button>
                                <hr>
                                {{-- Row Prestasi di bidang non Kesenian --}}
                                <b>Prestasi di bidang Non-Kesenian</b>
                                <div class="form-row rowNonKesenian">
                                    <div class="col form-group">
                                        <input name="nama_kegiatan_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Kegiatan">
                                    </div>
                                    <div class="col form-group">
                                        <input name="tempat_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tempat">
                                    </div>
                                    <div class="col form-group">
                                        <input name="tingkat_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tingkat">
                                    </div>
                                    <div class="col form-group">
                                        <input name="juara_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Juara">
                                    </div>
                                </div>
                                <button data-for="rowNonKesenian" type="button" class="btn btn-secondary mb-2 d-none tombol-hapus">Hapus</button>
                                <button data-for="rowNonKesenian" type="button" class="btn btn-secondary mb-2 tombol-tambah">Tambahkan</button>
                                <hr>
                                {{-- Row Kemampuan Bermain Alat Musik --}}
                                <b>Kemampuan Bermain Alat Musik</b>
                                <div class="form-row rowAlatMusik">
                                    <div class="col form-group">
                                        <input name="alat_musik[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Alat Musik">
                                    </div>
                                    <div class="col form-group">
                                        <select name="tingkat_kemampuan[]" class="custom-select" required>
                                            <option selected disabled value="">Tingkat Penguasaan</option>
                                            <option value="Pemula">Pemula</option>
                                            <option value="Menengah - Cukup">Menengah - Cukup</option>
                                            <option value="Menengah">Menengah</option>
                                            <option value="Menengah - Mahir">Menengah - Mahir</option>
                                            <option value="Mahir">Mahir</option>
                                            <option value="Sangat Mahir">Sangat Mahir</option>
                                            <option value="Profesional">Profesional</option>
                                        </select>
                                    </div>
                                </div>
                                <button data-for="rowAlatMusik" type="button" class="btn btn-secondary mb-2 d-none tombol-hapus">Hapus</button>
                                <button data-for="rowAlatMusik" type="button" class="btn btn-secondary mb-2 tombol-tambah">Tambahkan</button>
                                <hr>
                                {{-- Row Keahlian Lain --}}
                                <b>Keahlian Lain yang Dimiliki</b>
                                <div class="form-row keahlianLain">
                                    <div class="col-6 form-group">
                                        <input name="keahlian_lain" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="MC, Guiding, ...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 text-left mt-2 tab">
                            <div class="col-12">
                                <h4 class="pt-2">Terimakasih :)</h4>
                                <h5>Kamu berhasil submit formulir pendaftaran calon anggota baru JYC 2020.</h5>
                                <p class="text-justify">Silahkan cek email dalam 1 x 24 jam, admin akan mengirimkan tata cara melakukan pembayaran uang pendaftaran. Hubungi <em>Contact Person</em> yang tertera jika belum mendapatkan email balasan dalam 1 x 24 jam.</p>
                                <p><strong>CP: +62812-8921-8785 (Febri)</strong></p>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="text-right">
                                    <a href="{{ route('beranda') }}"><button type="button" class="btn btn-danger">Oke, mengerti.</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="row text-dark bg-light pr-3 pr-sm-4 pr-md-5">
                            <div class="col-12">
                                <div class="text-right">
                                    <button id="prevBtn" type="button" onclick="nextPrev(-1)" class="btn btn-danger">Sebelumnya</button>
                                    <button id="nextBtn" type="button" onclick="nextPrev(1)" class="btn btn-danger">Oke, mengerti.</button>
                                </div>
                            </div>
                        </div>
                        <div class="row text-dark bg-light pb-3 pb-sm-4 pb-md-5">
                            <div class="col-12 text-center">
                                <span class="step active"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
@include('templates.foot')
@include('templates.footer')
<script src="{{ asset('assets/js/jquery.resize.ex.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waitforimages.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carousel-3d.js') }}"></script>
<script>
    $(function () {
        $('#pilih-kegiatan').on('change', function () {
            let id_kegiatan = $(this).val();
            $.ajax({
                url: '/api/foto/' + id_kegiatan,
                method: 'GET'
            }).done(res => {
                console.log(res);
                let fotos = res.fotos;
                console.log(fotos);
                $('#coba-carousel').empty();
                fotos.forEach((foto, i) => {
                    $('#coba-carousel').append(`
                        <img src="storage/${foto.alamat_foto}">
                    `);
                });
            }).done(res => {
                $('[data-carousel-3d]').Carousel3d();
            })
        })

        let rowOrganisasi = `
            <div class="form-row rowRiwayatOrganisasi">
                <div class="col form-group">
                    <input name="nama_organisasi[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Organisasi">
                </div>
                <div class="col-3 form-group">
                    <input name="jabatan[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Jabatan">
                </div>
                <div class="col-3 form-group">
                    <input name="tahun_aktif_org[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="2009-2010">
                </div>
            </div>`;

        let rowPadus = `
            <div class="form-row rowPadus">
                <div class="col form-group">
                    <input name="nama_padus[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Paduan Suara">
                </div>
                <div class="col-3 form-group">
                    <select name="ambitus[]" class="custom-select" required>
                        <option selected disabled value="">Pilih Ambitus</option>
                        <option value="Sopran 1">Sopran 1</option>
                        <option value="Sopran 2">Sopran 2</option>
                        <option value="Alto 1">Alto 1</option>
                        <option value="Alto 2">Alto 2</option>
                        <option value="Tenor 1">Tenor 1</option>
                        <option value="Tenor 2">Tenor 2</option>
                        <option value="Bass 1">Bass 1</option>
                        <option value="Bass 2">Bass 2</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <input name="tahun_aktif_padus[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="2009-2010">
                </div>
            </div>`;

        let rowKesenian = `
            <div class="form-row rowKesenian">
                <div class="col form-group">
                    <input name="nama_kegiatan_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Kegiatan">
                </div>
                <div class="col form-group">
                    <input name="tempat_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tempat">
                </div>
                <div class="col form-group">
                    <input name="tingkat_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tingkat">
                </div>
                <div class="col form-group">
                    <input name="juara_seni[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Juara">
                </div>
            </div>`;
        
        let rowAlatMusik = `
            <div class="form-row rowAlatMusik">
                <div class="col form-group">
                    <input name="alat_musik[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Alat Musik">
                </div>
                <div class="col form-group">
                    <select name="tingkat_kemampuan[]" class="custom-select" required>
                        <option selected disabled value="">Tingkat Penguasaan</option>
                        <option value="Pemula">Pemula</option>
                        <option value="Menengah - Cukup">Menengah - Cukup</option>
                        <option value="Menengah">Menengah</option>
                        <option value="Menengah - Mahir">Menengah - Mahir</option>
                        <option value="Mahir">Mahir</option>
                        <option value="Sangat Mahir">Sangat Mahir</option>
                        <option value="Profesional">Profesional</option>
                    </select>
                </div>
            </div>`;

        let rowNonKesenian = `
            <div class="form-row rowNonKesenian">
                <div class="col form-group">
                    <input name="nama_kegiatan_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Nama Kegiatan">
                </div>
                <div class="col form-group">
                    <input name="tempat_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tempat">
                </div>
                <div class="col form-group">
                    <input name="tingkat_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Tingkat">
                </div>
                <div class="col form-group">
                    <input name="juara_non[]" type="text" oninput="this.className = 'form-control'" class="form-control" placeholder="Juara">
                </div>
            </div>`;

        $('.tombol-tambah').on('click', function () {
            let parentEl = $(this).parent();
            let row_data = $(this).data('for');
            let row = parentEl.find(`.${row_data}`);
            switch(row_data) {
                case 'rowPadus':
                    row.last().after(rowPadus);
                    break;
                case 'rowRiwayatOrganisasi':
                    row.last().after(rowOrganisasi);
                    break;
                case 'rowKesenian':
                    row.last().after(rowKesenian);
                    break;
                case 'rowAlatMusik':
                    row.last().after(rowAlatMusik);
                    break;
                case 'rowNonKesenian':
                    row.last().after(rowNonKesenian);
                    break;
            }
            $(this).siblings(`[data-for=${$(this).data('for')}]`).addClass('d-inline').removeClass('d-none');
        })

        $('.tombol-hapus').on('click', function () {
            let parentEl = $(this).parent();
            let row_data = $(this).data('for');
            let row = parentEl.find(`.${row_data}`);
            let jum = row.length;
            if( jum > 2) {
                row.last().remove();
            } else {
                row.last().remove();
                $(this).removeClass('d-inline').addClass('d-none');
            }
        })
    });

    
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Selanjutnya";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</html>
