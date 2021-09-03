<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE id_gallery='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data gallery</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="hidden" class="form-control" name="id_gallery" value="<?= $d['id_gallery']; ?>">
                                <input type="text" class="form-control" name="keterangan" value="<?= $d['keterangan']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control" value="<?= $d['foto']; ?>">
                            </div>
                    </div>
                </div>

                <button name="updategallery" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updategallery'])) {
        $gambar = @$_FILES['foto']['name'];
        if (!empty($gambar)) {
            move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/gallery/$gambar");
            $ganti = mysqli_query($koneksi, "UPDATE tb_gallery SET foto='$gambar' 
	    	WHERE id_gallery='$_POST[id_gallery]' ");
        }
        $updategallery = mysqli_query($koneksi, "UPDATE tb_gallery SET 
			keterangan='$_POST[keterangan]'
			WHERE id_gallery='$_POST[id_gallery]' ");

        if ($updategallery) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=galery';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>