<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Prestasi Siswa</h2>
        </div>
        <div class="row portfolio-container">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_prestasi_siswa");
            foreach ($sql as $d) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/sumber/img/prestasi/<?= $d['foto'] ?>" class="img-fluid" style="width:500px;height:200px;" alt="">
                        <div class="card-body">
                            <a href="?page=prestasi&act=detail&id=<?= $d['id_prestasi'] ?>"><?= $d['judul_prestasi'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>