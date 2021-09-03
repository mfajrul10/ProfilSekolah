<section id="profil" class="profil">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h2 class="text-center">Kurikulum</h2>
            </div>
            <div class="card-body" data-aos="fade-up" data-aos-delay="100">

                <?php
                $sqlrole = mysqli_query($koneksi, "SELECT * FROM tb_pendukungsekolah WHERE jenis_file = 'kurikulum'");
                foreach ($sqlrole as $row) { ?>
                    <table class="table">
                        <table class="table table-hover">
                            <tr>
                                <th scope="col">File</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <td><a href="mamba/<?= $row['file']; ?>" target="_blank" class="btn btn-light btn-rounded btn-fw text-info"><i class="fa fa-download"></i> Unduh</a></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</section>