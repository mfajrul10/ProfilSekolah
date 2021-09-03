<div class="section-title">
    <h2>Peta Sekolah</h2>
</div>
<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
foreach ($sql as $d) { ?>
    <center>
        <div class="container mb-3">
            <div class="card w-75">
                <img src="assets/sumber/img/peta/<?= $d['peta_sekolah'] ?>" class="img-thumbnail" style="width:1109px;height:700px;">
            </div>
        </div>
    </center>

<?php } ?>