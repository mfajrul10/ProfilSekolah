<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container mt-3">
        <div class="card">
            <div class="card text-center">
                <div class="card-header">
                    <h2 class="text-center">Fasilitas Sekolah</h2>
                </div>
                <div class=" card-body">
                    <div class="card-deck">
                        <div class="card col-4">
                            <div class="container">
                                <?php
                                if ($d['foto'] == '') {
                                ?>
                                    <img src="assets/img/fasilitas/user.png" class="img-fluid" style="width:300px;height:300px;" alt="">
                                <?php
                                } else {
                                ?>
                                    <img src="assets/img/fasilitas/<?= $d['foto'] ?>" class="img-fluid" style="width:300px;height:350px;" alt="">
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b><?= $d['nama_fasilitas'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td><?= $d['keterangan'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
}
    ?>