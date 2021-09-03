<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Buku Tamu</h5>
        <div class="card-body">
            <!-- tombol tambah buku tamu -->
            <a href="?page=bukutamu" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Isi Buku Tamu</a></button>
            <!-- modal tambah buku tamu -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengirim</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_bukutamu");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td>
                                    <?= $d['nama_tamu'] ?>
                                    <br>
                                    <?= $d['email'] ?>
                                    <br>
                                    <?= $d['alamat'] ?>
                                </td>
                                <td><?= $d['komentar'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>