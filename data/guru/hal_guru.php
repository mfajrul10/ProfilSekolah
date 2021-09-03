<section id="guru" class="team">
    <div class="container">
        <div class="section-title">
            <h2>Data Guru</h2>
        </div>
        <div class="row">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_guru");
            foreach ($sql as $d) { ?>
                <a href="?page=guru&act=detail&id=<?= $d['id_guru'] ?>">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic">
                                <?php
                                if ($d['foto'] == '') {
                                ?>
                                    <img src="assets/sumber/img/guru/user.png" class="img-fluid" style="width:300px;height:300px;" alt="">
                                <?php
                                } else {
                                ?>
                                    <img src="assets/sumber/img/guru/<?= $d['foto'] ?>" class="img-fluid" style="width:300px;height:300px;" alt="">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="member-info">
                                <h4><?= $d['nama_guru'] ?></h4>
                                <span> <?= $d['nip'] ?></span>
                                <div class="social">
                                    <a href=""> <?= $d['jabatan'] ?><i class=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>