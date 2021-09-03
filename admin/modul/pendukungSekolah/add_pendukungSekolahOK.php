<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Tambah Data Pendukung</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>File Pendukung</label>
                            <select class="form-control" name="jenis_file" required>
                                <option value="">--Pilih--</option>
                                <option value="akreditasi">Akreditasi Sekolah</option>
                                <option value="kurikulum">Kurikulum</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File Akreditasi/Kurikulum</label>
                            <input type="file" name="upload">
                            <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                        </div>
                        <button name="savePendukung" type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <?php
                        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                        ?>
                        <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['savePendukung'])) {
            $jenis = $_POST['jenis_file'];
            if ($_FILES['upload']['name'] != "") {
                $file = $_FILES['upload'];

                $file_name = $file['name'];
                $file_temp = $file['tmp_name'];
                $name = explode('.', $file_name);
                $path = "../assets/sumber/file/" . $file_name;

                $save = mysqli_query($koneksi, "INSERT INTO tb_pendukungsekolah VALUES(NULL,'$jenis','$name[0]', '$path')");

                if ($save) {
                    echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=pendukungSekolah';
	          </script>";
                }
            }
        }


        ?>