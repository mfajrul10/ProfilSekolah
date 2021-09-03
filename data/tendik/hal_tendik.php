<section id="guru" class="team">
    <div class="container">
        <div class="section-title">
            <h2>Data Tenaga Kependidikan</h2>
        </div>
        <div class="row">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_tendik");
            foreach ($sql as $d) { ?>
                <a href="?page=tendik&act=detail&id=<?= $d['id_tendik'] ?>">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic">
                                <?php
                                if ($d['foto'] == '') {
                                ?>
                                    <img src="assets/sumber/img/tendik/user.png" class="img-fluid" style="width:500px;height:300px;" alt="">
                                <?php
                                } else {
                                ?>
                                    <img src="assets/sumber/img/tendik/<?= $d['foto'] ?>" class="img-fluid" style="width:500px;height:300px;" alt="">
                                <?php
                                }
                                ?>

                            </div>
                            <div class="member-info">
                                <h4><?= $d['nama_tendik'] ?></h4>
                                <span>
                                    <?php
                                    if ($d['nip'] == '') {
                                        echo "_";
                                    } else {
                                    ?>
                                        <?= $d['nip'] ?>
                                    <?php
                                    }
                                    ?>
                                </span>
                                <div class="social">
                                    <a href=""> <?= $d['jenis_ptk'] ?><i class=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>