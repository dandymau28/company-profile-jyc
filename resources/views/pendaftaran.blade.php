<!DOCTYPE html>
@include('templates.head')
@include('templates.navbar-2')

<!-- <div class="pendaftaran">
    <h1> Persyaratan Pendaftaran</h1>
    <div class="syarat-pendaftaran">

        1. Berusia minimal 5 ( lima ) tahun dan maksimal 18 tahun (delapan belas) tahun,sehat Jasmani dan Rohani. <br>
        2. Mengambil formulir  pendaftaran keanggotaan siswa Wind Junior <br>
        3. Mengisi formulir pendaftaran menjadi anggota / siswa Wind Junior Mengisi formulir Surat Pernyataan
        Persetujuan orang tua/wali siswa menjadi anggota/siswa Wind Junior , dengan dibubuhi tanda tangan orang tua /
        siswa. <br>
        4. Melampirkan masing-masing 1 (satu) lembar fotocopy : <br>
        - Ijasah/STTB ( Surat Tanda Tamat Belajar ) <br>
        - Raport bagian depan <br>
        - Kartu Keluarga <br>
        - Akte Kelahiran <br>
        - KTP orang tua /wali siswa <br>
        - Melampirkan pas photo berwarna terbaru ukuran  : 2 x 3 sebanyak 4 (empat) lembar <br>

        <br>
        <br>

    </div>
</div> -->

<!-- <div class="tutup">
    <h1> !!! PENDAFTARAN MUSIM INI BELUM DIBUKA !!! </h1>

</div> -->
<div class="formulir-pendaftaran">
    <h1> Formulir pendaftaran</h1>
    <h2> A.Data diri</h2>
    <form method="post" action="/pendaftaran/create">
        <div class="row formulir">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"
                        placeholder="Masukan nama anda">
                    <small id="emailHelp" class="form-text text-muted">Masukan Nama Anda</small>
                    <label for="nama"></label>
                </div>
        </div>
    </form>

    @include('templates.footer')
    @include('templates.foot')

    </html>
