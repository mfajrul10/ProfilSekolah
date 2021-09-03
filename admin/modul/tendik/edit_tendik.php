<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_tendik WHERE id_tendik='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data tendik</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_tendik" value="<?= $d['id_tendik']; ?>">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_tendik" value="<?= $d['nama_tendik']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" placeholder="Masukkan NIP" name="nip" value="<?= $d['nip']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="text" class="form-control" placeholder="Masukkan NUPTK" name="nuptk" value="<?= $d['nuptk']; ?>">
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
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="<?= $d['tanggal_lahir']; ?>">
                            </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Status Pegawai</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor HP" name="status_pegawai" value="<?= $d['status_pegawai']; ?>">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control" placeholder="Masukkan Nomor HP" name="nohp" value="<?= $d['nohp']; ?>">
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan Email" name="email" value="<?= $d['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis PTK/Jabatan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jenis_ptk" value="<?= $d['jenis_ptk']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan" value="<?= $d['golongan']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input name="foto" type="file" class="form-control" value="<?= $d['foto']; ?>">
                        </div>
                    </div>
                </div>

                <button name="updateTendik" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateTendik'])) {
        $gambar = @$_FILES['foto']['name'];
        if (!empty($gambar)) {
            move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/tendik/$gambar");
            $ganti = mysqli_query($koneksi, "UPDATE tb_tendik SET foto='$gambar' 
	    	WHERE id_tendik='$_POST[id_tendik]' ");
        }
        $updateTendik = mysqli_query($koneksi, "UPDATE tb_tendik SET 
			nama_tendik='$_POST[nama_tendik]',nip='$_POST[nip]',nuptk='$_POST[nuptk]',jk='$_POST[jk]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tanggal_lahir]',status_pegawai='$_POST[status_pegawai]',golongan='$_POST[golongan]',jenis_ptk='$_POST[jenis_ptk]',nohp='$_POST[nohp]',email='$_POST[email]'
			WHERE id_tendik='$_POST[id_tendik]' ");

        if ($updateTendik) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=tendik';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>