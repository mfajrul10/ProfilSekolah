<section id="profil" class="profil">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Ekstrakurikuler</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ekstrakurikuler</th>
                                <th>Peminat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler");
                            foreach ($sql as $d) { ?>
                                <tr>
                                    <td width="50"><b><?= $no++; ?>.</b> </td>
                                    <td>
                                        <?= $d['nama_ekstrakurikuler'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        // mengambil data barang
                                        $data_barang = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler_siswa WHERE id_ekstrakurikuler='$d[id_ekstrakurikuler]'");
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                        echo $jumlah_barang;
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>