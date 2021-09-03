<section id="profil" class="profil">
    <div class="container">
        <div class="section-title">
            <h2>Buku Tamu</h2>
        </div>
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
</section>