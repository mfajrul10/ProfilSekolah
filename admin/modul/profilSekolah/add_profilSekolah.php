<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Guru</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input type="text" class="form-control" name="nama_sekolah">
                        </div>
                        <div class="form-group">
                            <label>Visi</label>
                            <input type="text" class="form-control" placeholder="Masukkan visi" name="visi">
                        </div>
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea class="ckeditor" name="misi" class="form-control" id="ckeditor" cols="30" rows="10">
                  </textarea>
                        </div>
                        <div class="form-group">
                            <label>Sejarah Sekolah</label>
                            <textarea class="ckeditor" name="sejarah_sekolah" class="form-control" id="ckeditor" cols="30" rows="10">
                  </textarea>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input name="foto_logo" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Struktur Organisasi</label>
                            <input name="foto_struktur" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Peta Sekolah</label>
                            <input name="peta_sekolah" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lokasi Sekolah</label>
                            <input name="lokasi_sekolah" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Foto Beranda</label>
                            <input name="foto_utama" type="file" class="form-control">
                        </div>
                        <button name="addSekolah" type="submit" class="btn btn-success mr-2">Simpan</button>
                        <?php
                        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                        ?>
                        <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['addSekolah'])) {
            $nama         = $_POST['nama_sekolah'];
            $visi         = $_POST['visi'];
            $misi         = $_POST['misi'];
            $sejarah      = $_POST['sejarah_sekolah'];

            $sumber       = @$_FILES['foto_logo']['tmp_name'];
            $target       = '../assets/sumber/img/app/';
            $nama_gambar  = @$_FILES['foto_logo']['name'];
            $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

            $sumber1       = @$_FILES['foto_struktur']['tmp_name'];
            $target1       = '../assets/sumber/img/struktur/';
            $nama_gambar1  = @$_FILES['foto_struktur']['name'];
            $pindah1       = move_uploaded_file($sumber1, $target1 . $nama_gambar1);

            $sumber2       = @$_FILES['peta_sekolah']['tmp_name'];
            $target2       = '../assets/sumber/img/peta/';
            $nama_gambar2  = @$_FILES['peta_sekolah']['name'];
            $pindah2       = move_uploaded_file($sumber2, $target2 . $nama_gambar2);

            $sumber3       = @$_FILES['lokasi_sekolah']['tmp_name'];
            $target3       = '../assets/sumber/img/lokasi/';
            $nama_gambar3  = @$_FILES['lokasi_sekolah']['name'];
            $pindah3       = move_uploaded_file($sumber3, $target3 . $nama_gambar3);

            $sumber4       = @$_FILES['foto_utama']['tmp_name'];
            $target4       = '../assets/sumber/img/utama/';
            $nama_gambar4  = @$_FILES['foto_utama']['name'];
            $pindah4       = move_uploaded_file($sumber4, $target4 . $nama_gambar4);

            //query INSERT disini
            $save = mysqli_query($koneksi, "INSERT INTO tb_sekolah VALUES(NULL,'$nama',
	          	'$visi','$misi','$sejarah','$nama_gambar','$nama_gambar1','$nama_gambar2','$nama_gambar3','$nama_gambar4')");

            if ($save) {
                echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=profilSekolah';
	          </script>";
            }
        }

        ?>