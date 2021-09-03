<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_prestasi_siswa WHERE id_prestasi='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <section id="about" class="about">
        <div class="container">
            <div class="d-flex flex-column justify-content-center about-content">
                <div class="section-title">
                    <h2><?= $d['judul_prestasi']; ?></h2>
                </div>
                <center>
                    <img src="assets/sumber/img/prestasi/<?= $d['foto'] ?>" class="img-fluid" style="width:700px;height:500px;" alt="">
                </center>
                <p><?= $d['keterangan'] ?></p>
            </div>
        </div>
    </section>
<?php } ?>