<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Tambah Data Berita</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" placeholder="Masukkan Judul Informasi" name="judul_informasi" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" placeholder="Masukkan Judul Berita" name="tgl_informasi" required>
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="ckeditor" id="ckeditor" class="form-control" name="isi_informasi" cols="30" rows="10" required>
                  </textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
                <button name="saveBerita" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['saveBerita'])) {

    $judul_informasi   = $_POST['judul_informasi'];
    date_default_timezone_set("Asia/Jakarta");
    $tanggal                = date("Y-m-d");
    $isi            = $_POST['isi_informasi'];
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/berita/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

    //query INSERT disini
    $save = mysqli_query($koneksi, "INSERT INTO tb_informasi VALUES(NULL,'$judul_informasi','$tanggal','$isi','berita','$nama_gambar')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=informasi';
	          </script>";
    }
}

?>