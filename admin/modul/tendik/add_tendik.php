<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Tenaga Kependidikan</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_tendik">
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
                            <input type="text" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir">
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
                        <label>Status Pegawai</label>
                        <input type="text" class="form-control" placeholder="Masukkan Status Pegawai" name="status_pegawai">
                    </div>
                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor HP" name="nohp">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Jenis PTK/Jabatan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis PTK/Jabatan" name="jenis_ptk">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                    </div>
                </div>
            </div>
            <button name="saveTendik" type="submit" class="btn btn-primary mr-2">Simpan</button>
            <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            ?>
            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
        </div>
    </div>
</div>
</form>



<?php
if (isset($_POST['saveTendik'])) {
    $nama = addslashes($_POST['nama_tendik']);
    $nip         = $_POST['nip'];
    $nuptk       = $_POST['nuptk'];
    $jk          = $_POST['jk'];
    $tempat      = $_POST['tempat_lahir'];
    $tgl         = $_POST['tanggal_lahir'];
    $status      = $_POST['status_pegawai'];
    $gol         = $_POST['golongan'];
    $ptk         = $_POST['jenis_ptk'];
    $hp          = $_POST['nohp'];
    $email       = $_POST['email'];
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/tendik/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

    //query INSERT disini
    $save = mysqli_query(
        $koneksi,
        "INSERT INTO tb_tendik VALUES(NULL,
    '$nama','$nip','$nuptk', '$jk', '$tempat', '$tgl','$status','$gol', '$ptk', '$hp', '$email', '$nama_gambar')"
    );
    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=tendik';
	          </script>";
    }
}

?>