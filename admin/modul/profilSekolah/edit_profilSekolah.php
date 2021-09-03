<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_sekolah WHERE id_sekolah='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Edit Data Sekolah</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="hidden" class="form-control" name="id_sekolah" value="<?= $d['id_sekolah']; ?>">
                                <input type="text" class="form-control" name="nama_sekolah" value="<?= $d['nama_sekolah']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Visi</label>
                                <input type="text" class="form-control" placeholder="Masukkan visi" name="visi" value="<?= $d['visi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Misi</label>
                                <textarea class="ckeditor" name="misi" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['misi'] ?>
                  </textarea>
                            </div>
                            <div class="form-group">
                                <label>Sejarah Sekolah</label>
                                <textarea class="ckeditor" name="sejarah_sekolah" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['sejarah_sekolah'] ?>
                  </textarea>
                            </div>
                            <div class="form-group">
                                <label>Kata Sambutan Kepala Sekolah</label>
                                <textarea class="ckeditor" name="kata_sambutan" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['kata_sambutan'] ?>
                  </textarea>
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <input name="foto_logo" type="file" class="form-control" value="<?= $d['foto_logo']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Struktur Organisasi</label>
                                <input name="foto_struktur" type="file" class="form-control" value="<?= $d['foto_struktur']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Peta Sekolah</label>
                                <input name="peta_sekolah" type="file" class="form-control" value="<?= $d['peta_sekolah']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Lokasi Sekolah</label>
                                <input name="lokasi_sekolah" type="file" class="form-control" value="<?= $d['lokasi_sekolah']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Foto Utama</label>
                                <input name="foto_utama" type="file" class="form-control" value="<?= $d['foto_utama']; ?>">
                                <p style="color: red;">* Foto utama akan ditampilkan pada menu utama</p>
                            </div>

                            <button name="updateSekolah" type="submit" class="btn btn-success mr-2">Simpan</button>
                            <?php
                            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                            ?>
                            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

    if (isset($_POST['updateSekolah'])) {
        $gambar  = @$_FILES['foto_logo']['name'];
        $gambar2 = @$_FILES['foto_struktur']['name'];
        $gambar3 = @$_FILES['peta_sekolah']['name'];
        $gambar4 = @$_FILES['lokasi_sekolah']['name'];
        $gambar5 = @$_FILES['foto_utama']['name'];
        if (!empty($gambar) or !empty($gambar)) {
            move_uploaded_file($_FILES['foto_logo']['tmp_name'], "../assets/sumber/img/app/$gambar");
            $ganti = mysqli_query($koneksi, "UPDATE tb_sekolah SET foto_logo='$gambar' WHERE id_sekolah='$_POST[id_sekolah]' ");
        } elseif (!empty($gambar2)) {
            move_uploaded_file($_FILES['foto_struktur']['tmp_name'], "../assets/sumber/img/struktur/$gambar2");
            $ganti = mysqli_query($koneksi, "UPDATE tb_sekolah SET foto_struktur='$gambar2' WHERE id_sekolah='$_POST[id_sekolah]' ");
        } elseif (!empty($gambar3)) {
            move_uploaded_file($_FILES['peta_sekolah']['tmp_name'], "../assets/sumber/img/peta/$gambar3");
            $ganti = mysqli_query($koneksi, "UPDATE tb_sekolah SET peta_sekolah='$gambar3' WHERE id_sekolah='$_POST[id_sekolah]' ");
        } elseif (!empty($gambar4)) {
            move_uploaded_file($_FILES['lokasi_sekolah']['tmp_name'], "../assets/sumber/img/lokasi/$gambar4");
            $ganti = mysqli_query($koneksi, "UPDATE tb_sekolah SET lokasi_sekolah='$gambar4' WHERE id_sekolah='$_POST[id_sekolah]' ");
        } elseif (!empty($gambar5)) {
            move_uploaded_file($_FILES['foto_utama']['tmp_name'], "../assets/sumber/img/utama/$gambar5");
            $ganti = mysqli_query($koneksi, "UPDATE tb_sekolah SET foto_utama='$gambar5' WHERE id_sekolah='$_POST[id_sekolah]' ");
        }
        $updateSekolah = mysqli_query($koneksi, "UPDATE tb_sekolah SET 
			nama_sekolah='$_POST[nama_sekolah]',visi='$_POST[visi]', misi='$_POST[misi]',sejarah_sekolah='$_POST[sejarah_sekolah]', kata_sambutan='$_POST[kata_sambutan]' WHERE id_sekolah='$_POST[id_sekolah]' ");

        if ($updateSekolah) {
            echo " <script>
	  alert('Data Berhasil diperbarui !');
	  window.location='?page=profilSekolah';
	  </script>";
        }
    }
}
?>