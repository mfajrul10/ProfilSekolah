<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_informasi WHERE id_informasi='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <section id="about" class="about">
        <div class="container">
            <div class="d-flex flex-column justify-content-center about-content">
                <div class="section-title">
                    <h2><?= $d['judul_informasi']; ?></h2>
                    <small class="text-muted">
                        <?php $a = $d['tgl_informasi'];
                        echo date("d-M-Y", strtotime($a)) ?>
                    </small>
                </div>
                <center>
                    <img src="assets/sumber/img/berita/<?= $d['foto'] ?>" class="img-fluid" style="width:700px;height:500px;" alt="">
                </center>
                <p><?= $d['isi_informasi'] ?></p>
            </div>
        </div>
    </section>
<?php } ?>