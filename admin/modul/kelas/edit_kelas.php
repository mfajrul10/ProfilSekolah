<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Kelas</h5>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kelas :</label>
                        <input type="hidden" class="form-control" name="id_kelas" value="<?php echo $d['id_kelas']; ?>">
                        <input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas']; ?>">
                    </div>

                    <button name="updateKelas" type="submit" class="btn btn-success mr-2">Simpan</button>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateKelas'])) {
        $updateKelas = mysqli_query($koneksi, "UPDATE tb_kelas SET 
			 kelas='$_POST[kelas]', id_kelas='$_POST[kelas]'
			WHERE id_kelas='$_POST[id_kelas]' ");

        if ($updateKelas) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=kelas';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>