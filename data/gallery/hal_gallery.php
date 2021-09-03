<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Gallery Foto</h2>
            <p>Dokumentasi Kegiatan</p>
        </div>
        <div class="row portfolio-container">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE jenis='1'");
            foreach ($sql as $d) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/sumber/img/gallery/<?= $d['foto'] ?>" class="img-fluid" style="width:500px;height:200px;" alt="">
                        <div class="portfolio-info">
                            <h4><?= $d['keterangan'] ?></h4>
                            <div class="portfolio-links">
                                <a href="assets/sumber/img/gallery/<?= $d['foto'] ?>" data-gall="portfolioGallery" class="venobox" title="<?= $d['keterangan'] ?>"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>