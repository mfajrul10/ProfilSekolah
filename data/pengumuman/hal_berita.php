<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Berita Sekolah</h2>
        </div>
        <div class="row portfolio-container">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_informasi WHERE jenis_informasi='berita'");
            foreach ($sql as $d) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/sumber/img/berita/<?= $d['foto'] ?>" class="img-fluid" style="width:500px;height:200px;" alt="">
                        <div class="card-body">
                            <p class="card-text">
                                <small class="text-muted">
                                    <?php $a = $d['tgl_informasi'];
                                    echo date("d-M-Y", strtotime($a)) ?>
                                </small>
                            </p>
                            <a href="?page=pengumuman&act=detail&id=<?= $d['id_informasi'] ?>"><?= $d['judul_informasi'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>