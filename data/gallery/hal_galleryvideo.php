<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Gallery Video</h2>
        </div>
        <div class="row portfolio-container">
            <?php
            $fetchVideos = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE jenis='2'");
            while ($row = mysqli_fetch_assoc($fetchVideos)) {
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <video src="assets/sumber/img/gallery/video/<?= $row['video'] ?>" controls width="320px" height="320px"></video>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>