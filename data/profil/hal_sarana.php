<section id="profil" class="profil">
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Sarana dan Prasarana</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sarana/Prasarana</th>
                                <th>Jenis</th>
                                <th>Jumlah Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_saranaprasarana");
                            foreach ($sql as $d) { ?>
                                <tr>
                                    <td width="50"><b><?= $no++; ?>.</b> </td>
                                    <td><?= $d['nama_saranaprasarana'] ?> </td>
                                    <td>
                                        <?php
                                        if ($d['jenis_saranaprasarana'] == 'sarana') {
                                            echo 'Sarana';
                                        } else {
                                            echo 'Prasarana';
                                        }
                                        ?>
                                    </td>
                                    <td><?= $d['jumlah_saranaprasarana'] ?> </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>