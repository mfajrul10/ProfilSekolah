<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Gallery</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" placeholder="Keterangan Gambar" name="keterangan" required="required">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" required="required">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
                <button name="saveGallery" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['saveGallery'])) {
    $keterangan         = $_POST['keterangan'];
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/gallery/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

    $save = mysqli_query($koneksi, "INSERT INTO tb_gallery VALUES(NULL,'$keterangan','1',
	          	'$nama_gambar','0')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=galery';
	          </script>";
    }
}

?>