<div class="section-title">
    <h2>Kalender Akademik</h2>
</div>
<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pendukungsekolah WHERE jenis_file='kalender'");
foreach ($sql as $d) { ?>
    <div class="container mb-3">
        <div class="card">
            <img src="assets/sumber/file/<?= $d['name'] ?>" class="img-thumbnail" style="width:1109px;height:700px;">
        </div>
    </div>
<?php } ?>