<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data kelas</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama kelas" name="kelas" required="required">
                </div>
                <button name="savekelas" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['savekelas'])) {
    $id         = $_POST['id_kelas'];
    $kelasname    = $_POST['kelas'];

    //query INSERT disini
    $nama = addslashes($_POST['kelas']);
    $save = mysqli_query($koneksi, "INSERT INTO tb_kelas VALUES(NULL,
	          	'$kelasname')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=kelas';
	          </script>";
    }
}

?>