<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Guru</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="hidden" class="form-control" name="id_guru" value="<?= $d['id_guru']; ?>">
                                <input type="text" class="form-control" name="nama_guru" value="<?= $d['nama_guru']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" placeholder="Masukkan NIP" name="nip" value="<?= $d['nip']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="<?= $d['tgl_lahir']; ?>">
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
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control" placeholder="Masukkan Nomor HP" name="nohp" value="<?= $d['nohp']; ?>">
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan Email" name="email" value="<?= $d['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan" value="<?= $d['jabatan']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan" value="<?= $d['golongan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" placeholder="Masukkan NUPTK" name="nuptk" value="<?= $d['nuptk']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input name="foto" type="file" class="form-control" value="<?= $d['foto']; ?>">
                        </div>
                    </div>
                </div>

                <button name="updateGuru" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateGuru'])) {
        $gambar = @$_FILES['foto']['name'];
        if (!empty($gambar)) {
            move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/guru/$gambar");
            $ganti = mysqli_query($koneksi, "UPDATE tb_guru SET foto='$gambar' 
	    	WHERE id_guru='$_POST[id_guru]' ");
        }
        $updateGuru = mysqli_query($koneksi, "UPDATE tb_guru SET 
			nip='$_POST[nip]',nama_guru='$_POST[nama_guru]',tempat_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tgl_lahir]',jk='$_POST[jk]',nohp='$_POST[nohp]',email='$_POST[email]',jabatan='$_POST[jabatan]',golongan='$_POST[golongan]',nuptk='$_POST[nuptk]'
			WHERE id_guru='$_POST[id_guru]' ");

        if ($updateGuru) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=guru';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>