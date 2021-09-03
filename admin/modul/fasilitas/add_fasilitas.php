<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Fasilitas</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Jenis Fasilitas</label>
                    <select class="form-control" name="jenis_fasilitas" required>
                        <option value="">-- Pilih --</option>
                        <option value="ruangan">Ruangan Belajar</option>
                        <option value="pustaka">Perpustakaan</option>
                        <option value="fakademik">Fasilitas Akademik</option>
                        <option value="fnonakademik">Fasilitas Non Akademik</option>
                        <option value="dll">Lainnya</option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
                <button name="SaveFasilitas" type="submit" class="btn btn-success mr-2">
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

    if (isset($_POST['SaveFasilitas'])) {

        $jf            = $_POST['jenis_fasilitas'];
        $sumber       = @$_FILES['foto']['tmp_name'];
        $target       = '../assets/sumber/img/fasilitas/';
        $nama_gambar  = @$_FILES['foto']['name'];
        $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);
        //query INSERT disini
        $save = mysqli_query($koneksi, "INSERT INTO tb_fasilitas VALUES(NULL,'$jf','$nama_gambar')");
        if ($save) {
            echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=fasilitas';
	          </script>";
        }
    }

    ?>