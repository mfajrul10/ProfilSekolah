<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Prasarana</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Prasarana</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama prasarana" name="nama_saranaprasarana" required="required">
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
    $jml    = 0;
    $jenis  = 'prasarana';


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