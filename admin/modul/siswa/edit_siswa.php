<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Edit Data Siswa</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_siswa" value="<?= $d['id_siswa']; ?>">
                                <input type="text" class="form-control" name="nama_siswa" value="<?= $d['nama_siswa']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="number" class="form-control" placeholder="Masukkan NIS" name="nis" value="<?= $d['nis']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="number" class="form-control" placeholder="Masukkan NISN" name="nisn" value="<?= $d['nisn']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="<?= $d['tanggal_lahir']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" id="lk" value="lk" <?php if ($d['jk'] == 'lk') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jk" id="pr" value="pr" <?php if ($d['jk'] == 'pr') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" value="<?= $d['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kelas </label>
                            <select class="form-control" name="id_kelas">
                                <option>-- Pilih --</option>
                                <?php
                                $sqlkelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER BY id_kelas DESC");
                                while ($kelas = mysqli_fetch_array($sqlkelas)) {
                                    if ($kelas['id_kelas'] == $d['id_kelas']) {
                                        $selected = "selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$kelas[id_kelas]' $selected>$kelas[kelas]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan </label>
                            <select class="form-control" name="id_programkeahlian">
                                <option>-- Pilih --</option>
                                <?php
                                $sqlkelas = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian ORDER BY id_programkeahlian DESC");
                                while ($kelas = mysqli_fetch_array($sqlkelas)) {
                                    if ($kelas['id_programkeahlian'] == $d['id_programkeahlian']) {
                                        $selected = "selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$kelas[id_programkeahlian]' $selected>$kelas[nama_programkeahlian]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button name="updateSiswa" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateSiswa'])) {
        $updateSiswa = mysqli_query($koneksi, "UPDATE tb_siswa SET 
			nis='$_POST[nis]', 
            nisn='$_POST[nisn]', 
            nama_siswa='$_POST[nama_siswa]',
            tempat_lahir='$_POST[tempat_lahir]',
            tanggal_lahir='$_POST[tanggal_lahir]',
            jk='$_POST[jk]',
            alamat='$_POST[alamat]',
            id_kelas='$_POST[id_kelas]',
            id_programkeahlian='$_POST[id_programkeahlian]'
			WHERE id_siswa='$_POST[id_siswa]' ");

        if ($updateSiswa) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=siswa';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>