<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas WHERE id_fasilitas='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Data Fasilitas</h5>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id_fasilitas" value="<?= $d['id_fasilitas']; ?>">
                    <div class="form-group">
                        <label>Jenis Fasilitas </label>
                        <select class="form-control" name="jenis_fasilitas" required>

                            <option <?php if ($jf == 'ruangan') {
                                        echo "selected";
                                    } ?> value='ruangan'>Ruangan Belajar</option>

                            <option <?php if ($jf == 'pustaka') {
                                        echo "selected";
                                    } ?> value='pustaka'>Perpustakaan</option>

                            <option <?php if ($jf == 'fakademik') {
                                        echo "selected";
                                    } ?> value='fakademik'>Fasilitas Akademik</option>

                            <option <?php if ($jf == 'fnonakademik') {
                                        echo "selected";
                                    } ?> value='fnonakademik'>Fasilitas Non Akademik</option>

                            <option <?php if ($jf == 'dll') {
                                        echo "selected";
                                    } ?> value='dll'>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" value="<?= $d['foto']; ?>">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                    </div>
                    <button name="updateFasilitas" type="submit" class="btn btn-success mr-2">Simpan</button>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateFasilitas'])) {
        $gambar = @$_FILES['foto']['name'];
        if (!empty($gambar)) {
            move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/fasilitas/$gambar");
            $ganti = mysqli_query($koneksi, "UPDATE tb_fasilitas SET foto='$gambar' 
	    	WHERE id_fasilitas='$_POST[id_fasilitas]' ");
        }
        $updateFasilitas = mysqli_query($koneksi, "UPDATE tb_fasilitas SET 
			jenis_fasilitas='$_POST[jenis_fasilitas]' WHERE id_fasilitas='$_POST[id_fasilitas]'");

        if ($updateFasilitas) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=fasilitas';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>