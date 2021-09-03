<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Tambah Data Guru</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" placeholder="Masukkan NIP / NIK" name="nip">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Guru" name="nama_guru">
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
                        <label>Jabatan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label>SK Pertama</label>
                        <input type="date" class="form-control" placeholder="Masukkan SK Pertama" name="sk">
                    </div>
                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan">
                    </div>
                    <div class="form-group">
                        <label>NUPTK</label>
                        <input type="text" class="form-control" placeholder="Masukkan NUPTK" name="nuptk">
                    </div>
                    <div class="form-group">
                        <label>Rencana Pensiun</label>
                        <input type="date" class="form-control" placeholder="Rencana Pensiun" name="pensiun">
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
    $target       = '../assets/img/guru/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);
    $tgl         = $_POST['tanggal_lahir'];
    $tempat      = $_POST['tempat_lahir'];
    $jk          = $_POST['jk'];
    $jabatan     = $_POST['jabatan'];
    $sk          = $_POST['sk'];
    $golongan    = $_POST['golongan'];
    $nuptk       = $_POST['nuptk'];
    $pensiun     = $_POST['pensiun'];


    //query INSERT disini
    $nama = addslashes($_POST['nama_guru']);
    $save = mysqli_query($koneksi, "INSERT INTO tb_guru VALUES(NULL,'$nip',
	          	'$guruname','$nama_gambar','$tgl','$tempat','$jk','$jabatan','$sk','$golongan','$nuptk','$pensiun')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=guru';
	          </script>";
    }
}

?>