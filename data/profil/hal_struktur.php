<div class="section-title">
    <h2>Struktur Organisasi</h2>
</div>
<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
foreach ($sql as $d) { ?>
    <div class="container mb-3">
        <div class="card">
            <img src="assets/sumber/img/struktur/<?= $d['foto_struktur'] ?>" class="img-thumbnail" style="width:1109px;height:700px;">
        </div>
    </div>
<?php } ?>