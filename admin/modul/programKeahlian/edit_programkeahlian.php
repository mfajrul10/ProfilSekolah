<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian WHERE id_programkeahlian='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Edit Program Keahlian</h5>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Program Keahlian</label>
                        <input type="hidden" class="form-control" name="id_programkeahlian" value="<?= $d['id_programkeahlian']; ?>">
                        <input type="text" class="form-control" name="nama_programkeahlian" value="<?= $d['nama_programkeahlian']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Lama Belajar</label>
                        <input type="text" class="form-control" name="lama_belajar" value="<?= $d['lama_belajar']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Dasar Bidang Keahlian</label>
                        <textarea class="ckeditor" name="dasar_bidangkeahlian" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['dasar_bidangkeahlian'] ?>
                  </textarea>
                    </div>
                    <div class="form-group">
                        <label>Dasar Program Keahlian</label>
                        <textarea class="ckeditor" name="dasar_programkeahlian" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['dasar_programkeahlian'] ?>
                  </textarea>
                    </div>
                    <div class="form-group">
                        <label>Kompetensi Keahlian</label>
                        <textarea class="ckeditor" name="kompetensi_keahlian" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['kompetensi_keahlian'] ?>
                  </textarea>
                    </div>
                    <button name="updateProgram" type="submit" class="btn btn-success mr-2">Simpan</button>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['updateProgram'])) {
        $updateProgram = mysqli_query($koneksi, "UPDATE tb_programkeahlian SET 
			 nama_programkeahlian='$_POST[nama_programkeahlian]',
             lama_belajar='$_POST[lama_belajar]',
              dasar_bidangkeahlian='$_POST[dasar_bidangkeahlian]',
               dasar_programkeahlian='$_POST[dasar_programkeahlian]',
                kompetensi_keahlian='$_POST[kompetensi_keahlian]'
			WHERE id_programkeahlian='$_POST[id_programkeahlian]' ");

        if ($updateProgram) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=programkeahlian';
	  </script>";
        }
    }

    ?>

<?php
}
?>

</body>

</html>