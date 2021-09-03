<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Program Keahlian</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Program Keahlian</label>
                    <input type="text" class="form-control" placeholder="Masukkan Program Keahlian" name="nama_programkeahlian" required="required">
                </div>
                <div class="form-group">
                    <label>Lama Belajar</label>
                    <input type="text" class="form-control" placeholder="Masukkan Lama Belajar" name="lama_belajar" required="required">
                </div>
                <div class="form-group">
                    <label>Dasar Bidang Keahlian</label>
                    <textarea class="ckeditor" id="ckeditor" class="form-control" name="dasar_bidangkeahlian" cols="30" rows="10" required>
                  </textarea>
                </div>
                <div class="form-group">
                    <label>Dasar Program Keahlian</label>
                    <textarea class="ckeditor" id="ckeditor" class="form-control" name="dasar_programkeahlian" cols="30" rows="10" required>
                  </textarea>
                </div>
                <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <textarea class="ckeditor" id="ckeditor" class="form-control" name="kompetensi_keahlian" cols="30" rows="10" required>
                  </textarea>
                </div>
                <button name="saveProgram" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['saveProgram'])) {
    //query INSERT disini
    $nama       = addslashes($_POST['nama_programkeahlian']);
    $lama       = $_POST['lama_belajar'];
    $dasar1     = $_POST['dasar_bidangkeahlian'];
    $dasar2     = $_POST['dasar_programkeahlian'];
    $kompetensi = $_POST['kompetensi_keahlian'];
    $save = mysqli_query($koneksi, "INSERT INTO tb_programkeahlian VALUES(NULL,
	          	'$nama','$lama','$dasar1','$dasar2','$kompetensi')");

    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=programkeahlian';
	          </script>";
    }
}

?>