<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Siswa</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NISN</label>
                    <input type="number" class="form-control" placeholder="Masukkan NISN Siswa" name="nisn">
                </div>
                <div class="form-group">
                    <label>NIS</label>
                    <input type="number" class="form-control" placeholder="Masukkan NIS Siswa" name="nis">
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" name="nama_siswa" required>
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
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="lk" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="pr">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label>Kelas Siswa</label>
                    <select class="form-control" name="id_kelas" required>
                        <option value=''>-- Pilih --</option>
                        <?php
                        $sqlKelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER BY id_kelas DESC");
                        while ($kelas = mysqli_fetch_array($sqlKelas)) {
                            echo "<option value='$kelas[id_kelas]'>$kelas[kelas]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan/Program Studi</label>
                    <select class="form-control" name="id_programkeahlian" required>
                        <option value=''>-- Pilih --</option>
                        <?php
                        $sqlJurusan = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian ORDER BY id_programkeahlian DESC");
                        while ($jurusan = mysqli_fetch_array($sqlJurusan)) {
                            echo "<option value='$jurusan[id_programkeahlian]'>$jurusan[nama_programkeahlian]</option>";
                        }
                        ?>
                    </select>
                </div>
                <button name="SaveSiswa" type="submit" class="btn btn-primary mr-2">
                    Simpan
                </button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>
<?php

if (isset($_POST['SaveSiswa'])) {

    $nis           = $_POST['nis'];
    $nisn           = $_POST['nisn'];
    $nama           = addslashes($_POST['nama_siswa']);
    $tempat          = $_POST['tempat_lahir'];
    $tanggal          = $_POST['tanggal_lahir'];
    $jk          = $_POST['jk'];
    $alamat          = $_POST['alamat'];
    $kelas          = $_POST['id_kelas'];
    $jurusan        = $_POST['id_programkeahlian'];
    //query INSERT disini
    $save = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES(
        NULL, '$nis', '$nisn', '$nama', '$tempat', '$tanggal', '$jk', '$alamat', '$kelas', '$jurusan')");
    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=siswa';
	          </script>";
    }
}

?>