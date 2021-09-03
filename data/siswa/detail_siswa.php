<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <input type="hidden" class="form-control" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">

    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                Data Siswa
            </div>
            <div class=" card-body">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama Lengkap</th>
                                        <td><?= $d['nama_siswa'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NISN</th>
                                        <td><?= $d['nisn'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat, Tanggal Lahir</th>
                                        <td><?= $d['tempat_lahir'] ?>,
                                            <?= date($d['tgl_lahir']);
                                            ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php if ($d['jk'] == 'L') {
                                                echo "Laki-Laki";
                                            } else {
                                                echo "Perempuan";
                                            } ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td><?= $d['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ayah</th>
                                        <td><?= $d['ortu_lk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ayah</th>
                                        <td><?= $d['ortu_pr'] ?></td>
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

</body>

</html>