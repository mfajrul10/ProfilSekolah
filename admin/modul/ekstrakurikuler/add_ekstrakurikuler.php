<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Ekstrakurikuler</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Ekstrakurikuler" name="nama_ekstrakurikuler">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <select class="form-control" name="keterangan" required>
                        <option value="">Pilih Status Ekstrakurikuler</option>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Tidak Aktif</option>
                        <option value="proses">On Proses</option>
                    </select>
                </div>
                <button name="SaveEkstrakurikuler" type="submit" class="btn btn-success mr-2">
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

    if (isset($_POST['SaveEkstrakurikuler'])) {

        $nama = addslashes($_POST['nama_ekstrakurikuler']);
        $jk            = $_POST['keterangan'];
        //query INSERT disini
        $save = mysqli_query($koneksi, "INSERT INTO tb_ekstrakurikuler VALUES(NULL,'$nama','$jk')");
        if ($save) {
            echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=ekstrakurikuler';
	          </script>";
        }
    }

    ?>