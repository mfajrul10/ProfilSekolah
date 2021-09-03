<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Alumni</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_alumni">
                        </div>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" class="form-control" placeholder="Masukkan NIS" name="nis">
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="number" class="form-control" placeholder="Masukkan NISN" name="nisn">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
                        </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir">
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
                    <div class="form-group row">
                        <label>Tahun Masuk</label>
                        <select class="form-control ml-2" name="tahun_masuk" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $y = date('Y');
                            for ($i = 2015; $i < $y + 2; $i++) {
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Tahun Lulus</label>
                        <select class="form-control ml-2" name="tahun_lulus" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $y = date('Y');
                            for ($i = 2018; $i < $y + 2; $i++) {
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button name="SaveAlumni" type="submit" class="btn btn-success mr-2">
                Simpan
            </button>
            <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            ?>
            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['SaveAlumni'])) {

        $nama       = addslashes($_POST['nama_alumni']);
        $jk         = $_POST['jk'];
        $nis        = $_POST['nis'];
        $nisn       = $_POST['nisn'];
        $t1         = $_POST['tempat_lahir'];
        $t2         = $_POST['tanggal_lahir'];
        $tahun_masuk  = $_POST['tahun_masuk'];
        $tahun_lulus  = $_POST['tahun_lulus'];
        //query INSERT disini
        $save = mysqli_query($koneksi, "INSERT INTO tb_alumni VALUES(NULL,'$nama','$jk','$nis','$nisn','$t1','$t2','$tahun_masuk','$tahun_lulus')");
        if ($save) {
            echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=alumni';
	          </script>";
        }
    }

    ?>