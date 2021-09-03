<section id="faq" class="faq section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Ekstrakurikuler</h2>
        </div>
        <center>
            <div class="row d-flex align-items-stretch">
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler");
                foreach ($sql as $d) { ?>
                    <div class="col-lg-6 faq-item" data-aos="fade-up">
                        <h4><?= $d['nama_ekstrakurikuler'] ?></h4>
                        <p>
                            <?php
                            if ($d['keterangan'] == 'aktif') {
                                echo "Aktif";
                            } elseif ($d['keterangan'] == 'nonaktif') {
                                echo "Tidak Aktif";
                            } else {
                                echo "On Proses";
                            }
                            ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </center>

    </div>
</section>