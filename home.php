<?php
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
$oke1 = mysqli_fetch_array($oke);
?>
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- <ol class="carousel-indicators" id="hero-carousel-indicators">
            </ol> -->
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Kata Sambutan Kepala Sekolah SMK Negeri 1 Timpeh</h2>
                            <p class="animate__animated animate__fadeInUp">
                                <?php
                                $kalimat = $oke1['kata_sambutan'];
                                $jumlahkarakter = 300;
                                $cetak = substr($kalimat, 0, $jumlahkarakter);
                                echo $cetak;
                                ?>
                            </p>
                            <a href="?page=profil&act=katasambutan&id=<?= $oke1['id_sekolah'] ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                        </div>

                    </div>
                    <img src="assets/sumber/img/utama/<?= $oke1['foto_utama'] ?> " alt="Home" width="1500" height="600" class="responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Sistem Informasi <?= $oke1['nama_sekolah'] ?></h2>
        </div>
        <center>
            <a href="login.php">
                <div class="col-lg-5 rounded-pill" data-aos="fade-up">
                    <div class="info-box rounded-pill">
                        <i class="bx bx-user"></i>
                        <h3>Portal Administrator</h3>
                    </div>
                </div>
            </a>
        </center>

    </div>
</section>


<!-- End About Us Section -->