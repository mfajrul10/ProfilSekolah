<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Guru</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_guru">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" placeholder="Masukkan NIP / NIK" name="nip">
                        </div>
                        <div class="form-group">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" placeholder="Masukkan NUPTK" name="nuptk">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="radio">
                                <input type="radio" name="jk" <?php if (isset($jk) && $jk == "lk") echo "checked"; ?> value="lk">Laki-Laki
                            </div>
                            <div class="radio">
                                <input type="radio" name="jk" <?php if (isset($jk) && $jk == "pr") echo "checked"; ?> value="pr">Perempuan
                            </div>
                        </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor HP" name="nohp">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Jabatan / Tugas Tambahan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label>Pangkat / Golongan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                    </div>
                </div>
            </div>
            <button name="saveGuru" type="submit" class="btn btn-primary mr-2">Simpan</button>
            <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            ?>
            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['saveGuru'])) {
    $id         = $_POST['id_guru'];
    $nip         = $_POST['nip'];
    $guruname    = $_POST['nama_guru'];
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/guru/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);
    $tgl         = $_POST['tanggal_lahir'];
    $tempat      = $_POST['tempat_lahir'];
    $jk          = $_POST['jk'];
    $hp          = $_POST['nohp'];
    $email       = $_POST['email'];
    $jabatan     = $_POST['jabatan'];
    $golongan    = $_POST['golongan'];
    $nuptk       = $_POST['nuptk'];


    //query INSERT disini
    $nama = addslashes($_POST['nama_guru']);
    $save = mysqli_query($koneksi, "INSERT INTO tb_guru VALUES(NULL,'$nip',
	          	'$guruname','$nama_gambar','$tgl','$tempat','$jk','$hp','$email','$jabatan','$golongan','$nuptk')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=guru';
	          </script>";
    }
}

?>