<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_alumni WHERE id_alumni='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Alumni</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_alumni" value="<?= $d['id_alumni']; ?>">
                                <input type="text" class="form-control" name="nama_alumni" value="<?= $d['nama_alumni']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="number" class="form-control" name="nis" value="<?= $d['nis']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="number" class="form-control" name="nisn" value="<?= $d['nisn']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">
                            </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $d['tanggal_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="radio">
                                <input type="radio" name="jk" value="lk" <?php if ($d['jk'] == 'lk') echo 'checked' ?>>Laki-Laki
                            </div>
                            <div class="radio">
                                <input type="radio" name="jk" value="pr" <?php if ($d['jk'] == 'pr') echo 'checked' ?>>Perempuan
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tahun Masuk</label>
                            <select class="form-control ml-2" name="tahun_masuk" required>
                                <option value="">--Pilih--</option>
                                <?php
                                $y = date('Y');
                                $sqltahun = mysqli_query($koneksi, "SELECT * FROM tb_alumni WHERE id_alumni='$id'");
                                while ($tahun = mysqli_fetch_array($sqltahun)) {
                                    for ($i = 2015; $i < $y + 2; $i++) {
                                        if ($i == $tahun['tahun_masuk']) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='$i' $selected>$i</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <select class="form-control ml-2" name="tahun_lulus" required>
                                <option value="">--Pilih--</option>
                                <?php
                                $y = date('Y');
                                $sqltahun = mysqli_query($koneksi, "SELECT * FROM tb_alumni WHERE id_alumni='$id'");
                                while ($tahun = mysqli_fetch_array($sqltahun)) {
                                    for ($i = 2018; $i < $y + 2; $i++) {
                                        if ($i == $tahun['tahun_lulus']) {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='$i' $selected>$i</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button name="updateAlumni" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateAlumni'])) {
        $updateAlumni = mysqli_query($koneksi, "UPDATE tb_alumni SET 
			nama_alumni='$_POST[nama_alumni]', jk='$_POST[jk]',nis='$_POST[nis]',nisn='$_POST[nisn]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tanggal_lahir]',thn_lulus='$_POST[thn_lulus]' WHERE id_alumni='$_POST[id_alumni]'");

        if ($updateAlumni) {
            echo
            "<script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=alumni';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>