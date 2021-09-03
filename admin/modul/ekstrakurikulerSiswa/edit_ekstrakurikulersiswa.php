<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler WHERE id_ekstrakurikuler='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Ekstrakurikuler</h5>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Ekstrakurikuler :</label>
                        <input type="hidden" class="form-control" name="id_ekstrakurikuler" value="<?php echo $d['id_ekstrakurikuler']; ?>">
                        <input type="text" class="form-control" name="nama_ekstrakurikuler" value="<?php echo $d['nama_ekstrakurikuler']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <select class="form-control" name="keterangan" required>
                            <option value="">Pilih Status Ekstrakurikuler</option>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <button name="updateEksrakurukuler" type="submit" class="btn btn-success mr-2">Simpan</button>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateEksrakurukuler'])) {
        $updateEksrakurukuler = mysqli_query($koneksi, "UPDATE tb_ekstrakurikuler SET 
			nama_ekstrakurikuler='$_POST[nama_ekstrakurikuler]', keterangan='$_POST[keterangan]' WHERE id_ekstrakurikuler='$_POST[id_ekstrakurikuler]' ");

        if ($updateEksrakurukuler) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=ekstrakurikulersiswa';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>