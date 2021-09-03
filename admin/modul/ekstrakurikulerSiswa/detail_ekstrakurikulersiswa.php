<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler WHERE id_ekstrakurikuler='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Detail Ekstrakurikuler <?= $d['nama_ekstrakurikuler'] ?></h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa
                                                INNER JOIN tb_ekstrakurikuler_siswa ON tb_siswa.id_siswa=tb_ekstrakurikuler_siswa.id_siswa 
                                                INNER JOIN tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas WHERE id_ekstrakurikuler='$id'");
                            foreach ($sql as $d) { ?>
                                <tr>
                                    <td width="50"><b><?= $no++; ?>.</b> </td>
                                    <td> <?= $d['nisn']  ?> </td>
                                    <td> <?= $upper = strtoupper($d['nama_siswa'])  ?> </td>
                                    <td> <?= $d['kelas']  ?> </td>
                                    <td>
                                        <a href="?page=alumni&act=del&id=<?= $d['id_alumni'] ?>" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Del</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>

</body>

</html>