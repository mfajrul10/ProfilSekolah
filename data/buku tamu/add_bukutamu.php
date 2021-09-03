<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Buku Tamu</h2>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="nama_tamu" class="form-control" placeholder="Masukkan Nama Lengkap" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" data-rule="email" data-msg="Masukkan Email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" data-rule="minlen:4" data-msg="Masukkan Alamat" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="komentar" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Komentar"></textarea>
                        <div class="validate"></div>
                    </div>
                    <button name="saveTamu" type="submit" class="btn btn-success mr-2">Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_POST['saveTamu'])) {

    $email        = $_POST['email'];
    $alamat       = $_POST['alamat'];
    $komentar     = $_POST['komentar'];
    //query INSERT disini
    $nama = addslashes($_POST['nama_tamu']);
    $save = mysqli_query($koneksi, "INSERT INTO tb_bukutamu VALUES(NULL,'$nama','$email','$alamat','$komentar')");
    if ($save) {
        echo " <script>
	          alert('Data Berhasil disimpan !');
	          window.location='?page=bukutamu&act=hal';
	          </script>";
    }
}

?>