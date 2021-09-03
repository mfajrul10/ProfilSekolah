<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Fasilitas Non Akademik</h2>
        </div>
        <div class="row portfolio-container">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas WHERE jenis_fasilitas ='fnonakademik'");
            foreach ($sql as $d) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/sumber/img/fasilitas/<?= $d['foto'] ?>" class="img-fluid" style="width:500px;height:200px;" alt="">
                        <div class="portfolio-info">
                            <h4><?= $d['nama_fasilitas'] ?></h4>
                            <div class="portfolio-links">
                                <a href="assets/sumber/img/fasilitas/<?= $d['foto'] ?>" data-gall="portfolioGallery" class="venobox" title="<?= $d['nama_fasilitas'] ?>"><i class="icofont-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>