<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_saranaprasarana WHERE id_saranaprasarana='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Sarana</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Sarana/Prasarana</label>
                                <input type="hidden" class="form-control" name="id_saranaprasarana" value="<?= $d['id_saranaprasarana']; ?>">
                                <input type="text" class="form-control" name="nama_saranaprasarana" value="<?= $d['nama_saranaprasarana']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Unit</label>
                                <input type="text" class="form-control" name="jumlah_saranaprasarana" value="<?= $d['jumlah_saranaprasarana']; ?>">
                            </div>
                    </div>
                </div>

                <button name="updateSarana" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateSarana'])) {

        $updateSarana = mysqli_query($koneksi, "UPDATE tb_saranaprasarana SET 
			nama_saranaprasarana='$_POST[nama_saranaprasarana]',jumlah_saranaprasarana='$_POST[jumlah_saranaprasarana]' WHERE id_saranaprasarana='$_POST[id_saranaprasarana]' ");

        if ($updateSarana) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=sarana';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>