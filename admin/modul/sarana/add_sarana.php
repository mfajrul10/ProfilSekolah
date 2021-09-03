<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Tambah Data Sarana</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Sarana</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama sarana" name="nama_saranaprasarana" required="required">
                </div>
                <div class="form-group">
                    <label>Jumlah Unit</label>
                    <input type="number" class="form-control" placeholder="Masukkan jumlah unit" name="jumlah_saranaprasarana">
                </div>

                <button name="saveSarana" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['saveSarana'])) {
    $nama   = $_POST['nama_saranaprasarana'];
    $jml    = $_POST['jumlah_saranaprasarana'];
    $jenis  = 'sarana';


    $save = mysqli_query($koneksi, "INSERT INTO tb_saranaprasarana VALUES(NULL,'$nama',
	          	'$jenis','$jml')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=sarana';
	          </script>";
    }
}

?>