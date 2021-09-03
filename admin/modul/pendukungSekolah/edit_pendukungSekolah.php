<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_pendukungsekolah WHERE id_pendukungsekolah='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Edit Data Sekolah</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Akreditasi</label>
                                <input name="file_akreditasi" type="file" class="form-control" value="<?= $d['file_akreditasi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kurikulum</label>
                                <input name="file_kurikulum" type="file" class="form-control" value="<?= $d['file_kurikulum']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Peta Sekolah</label>
                                <input name="peta_sekolah" type="file" class="form-control" value="<?= $d['peta_sekolah']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Lokasi Sekolah</label>
                                <input name="lokasi_sekolah" type="file" class="form-control" value="<?= $d['lokasi_sekolah']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kalender Akademik</label>
                                <input name="kalender_akademik" type="file" class="form-control" value="<?= $d['kalender_akademik']; ?>">
                            </div>
                            <button name="updatePendukung" type="submit" class="btn btn-success mr-2">Simpan</button>
                            <?php
                            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                            ?>
                            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                        </form>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST['updatePendukung'])) {
                $sql = mysqli_query($koneksi, "UPDATE tb_pendukungsekolah SET file_akreditasi='$_POST[file_akreditasi]',file_kurikulum='$_POST[file_kurikulum]',peta_sekolah='$_POST[peta_sekolah]', lokasi_sekolah='$_POST[lokasi_sekolah]', kalender_akademik='$_POST[kalender_akademik]' WHERE id_pendukungsekolah='$_POST[id_pendukungsekolah]' ") or die(mysqli_error($koneksi));

                if ($sql) {
                    echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=pendukungSekolah';
	  </script>";
                }
            }

            ?>

        <?php
    }
        ?>

        </body>

        </html>