<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Prestasi Siswa</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul Prestasi</label>
                    <input type="text" class="form-control" placeholder="Judul Prestasi" name="judul_prestasi" required="required">
                </div>
                <div class="form-group">
                    <label>Keterangan/Berita</label>
                    <textarea class="ckeditor" id="ckeditor" class="form-control" name="keterangan" cols="30" rows="10">
                  </textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" required="required">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
                <button name="savePrestasi" type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['savePrestasi'])) {
    $judul_prestasi         = $_POST['judul_prestasi'];
    $keterangan         = $_POST['keterangan'];
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/prestasi/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

    $save = mysqli_query($koneksi, "INSERT INTO tb_prestasi_siswa VALUES(NULL,'$judul_prestasi','$keterangan','$nama_gambar')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=prestasi';
	          </script>";
    }
}

?>