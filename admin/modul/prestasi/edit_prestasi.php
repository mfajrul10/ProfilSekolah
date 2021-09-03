<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_prestasi_siswa WHERE id_prestasi='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Edit Data Prestasi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul Prestasi</label>
                                <input type="hidden" class="form-control" name="id_prestasi" value="<?= $d['id_prestasi']; ?>">
                                <input type="text" class="form-control" name="judul_prestasi" value="<?= $d['judul_prestasi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Berita/Keterangan</label>
                                <textarea class="ckeditor" name="keterangan" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['keterangan'] ?>
                  </textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control" value="<?= $d['foto']; ?>">
                            </div>
                            <button name="updatePrestasi" type="submit" class="btn btn-success mr-2">Simpan</button>
                            <?php
                            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                            ?>
                            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                        </form>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST['updatePrestasi'])) {
                $gambar = @$_FILES['foto']['name'];
                if (!empty($gambar)) {
                    move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/prestasi/$gambar");
                    $ganti = mysqli_query($koneksi, "UPDATE tb_prestasi_siswa SET foto='$gambar' 
	    	WHERE id_prestasi='$_POST[id_prestasi]' ");
                }
                $updatePrestasi = mysqli_query($koneksi, "UPDATE tb_prestasi_siswa SET 
			judul_prestasi='$_POST[judul_prestasi]', keterangan='$_POST[keterangan]'
			WHERE id_prestasi='$_POST[id_prestasi]' ");

                if ($updatePrestasi) {
                    echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=prestasi';
	  </script>";
                }
            }

            ?>

        <?php
    }
        ?>

        </body>

        </html>