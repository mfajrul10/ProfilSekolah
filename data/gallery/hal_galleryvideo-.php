<section id="about" class="about">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Gallery Video</h2>
            <p>Dokumentasi Kegiatan</p>
        </div>
        <div class="row portfolio-container">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE jenis='2'");
            foreach ($sql as $d) { ?>
                <div class="video-box">
                    <a href="assets/sumber/img/gallery/video/<?= $d['video'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="false"></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>