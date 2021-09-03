<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler WHERE id_ekstrakurikuler='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Ekstrakurikuler <?= $d['nama_ekstrakurikuler'] ?></h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // data siswa yg mengumpulkan tugas
                            $nomor = 1;
                            $siswaEkstrakurikuler = mysqli_query($koneksi, "SELECT * FROM tb_siswa
                        INNER JOIN tb_ekstrakurikuler_siswa ON tb_siswa.id_siswa=tb_ekstrakurikuler_siswa.id_siswa WHERE id_ekstrakurikuler='$id'");
                            foreach ($siswaEkstrakurikuler as $sk) { ?>
                                <tr>
                                    <td><b><?= $nomor++; ?> .</b></td>
                                    <td><?= $sk['nisn']; ?></td>
                                    <td><?= $sk['nama_siswa']; ?></td>
                                    <td>
                                        <a href="?page=ekstrakurikuler&act=delsiswa&id=<?= $sk['id_ekstrakurikuler_siswa'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
                                            <button type="submit" name="submit" id="submit" class="btn btn-danger btn-xst"><i class="fas fa-trash-alt"> Del</i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger mr-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>

</body>

</html>