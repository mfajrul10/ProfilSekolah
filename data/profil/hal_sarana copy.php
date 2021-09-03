<section id="profil" class="profil">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Sarana dan Prasarana</h2>
            </div>
            <div class="card-body" data-aos="fade-up" data-aos-delay="100">
                <?php
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_sarana");
                foreach ($sql as $d) {
                ?>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center col-lg-3">
                            <?= $no++; ?>.
                            <span class="badge badge-primary badge-pill">
                                <?= $d['keterangan']; ?>
                            </span>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>