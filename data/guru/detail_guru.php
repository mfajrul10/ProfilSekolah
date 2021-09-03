<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                Profil Guru
            </div>
            <div class=" card-body">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama Lengkap</th>
                                        <td><?= $d['nama_guru'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NIP</th>
                                        <td><?= $d['nip'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NUPTK</th>
                                        <td><?= $d['nuptk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat, Tanggal Lahir</th>
                                        <td><?= $d['tempat_lahir'] ?>,
                                            <?php $a = $d['tgl_lahir'];
                                            echo date("d-M-Y", strtotime($a)) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td><?= $d['jabatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Golongan</th>
                                        <td><?= $d['golongan'] ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card col-4">
                        <div class="container">
                            <?php
                            if ($d['foto'] == '') {
                            ?>
                                <img src="assets/sumber/img/guru/user.png" class="img-fluid" style="width:300px;height:300px;" alt="">
                            <?php
                            } else {
                            ?>
                                <img src="assets/sumber/img/guru/<?= $d['foto'] ?>" class="img-fluid" style="width:300px;height:350px;" alt="">
                            <?php
                            }
                            ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>