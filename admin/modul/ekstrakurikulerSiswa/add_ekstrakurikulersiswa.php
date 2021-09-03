<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler WHERE id_ekstrakurikuler='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Input Ekstrakurikuler Siswa</h5>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Ekstrakurikuler</label>
                        <input type="hidden" class="form-control" name="id_ekstrakurikuler" value="<?= $d['id_ekstrakurikuler']; ?>">
                        <input type="text" class="form-control" name="nama_ekstrakurikuler" value="<?= $d['nama_ekstrakurikuler']; ?>" readonly>
                    </div>
                    <!-- <div class="form-group">
                        <label>Nama Siswa</label>
                        <select class="form-control" name="id_siswa">
                            <?php $c = mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY nama_siswa ");
                            while ($dc = mysqli_fetch_array($c)) { ?>
                                <option value="<?= $dc['id_siswa'] ?>"><?= $dc['nama_siswa'] ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <button name="AddEkstrakurikuler" type="submit" class="btn btn-success mr-2">Simpan</button>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['AddEkstrakurikuler'])) {
        $id1         = $_POST['id_ekstrakurikuler'];
        // $id2         = $_POST['id_siswa'];

        //query INSERT disini
        $save = mysqli_query($koneksi, "INSERT INTO tb_ekstrakurikuler_siswa VALUES(NULL,'$id1')");
        if ($save) {
            echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=ekstrakurikulersiswa';
	          </script>";
        }
    }
    ?>

<?php
}
?>