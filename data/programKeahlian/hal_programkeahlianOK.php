<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian WHERE id_programkeahlian='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <section id="profil" class="profil">
        <div class="container">
            <div class="card text-center">
                <div class="card-header section-title">
                    <h2 class="mt-5"> <?= $d['nama_programkeahlian']; ?></h2>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="card-title">Lama Belajar</h5>
                    <p class="card-text">
                        <?= $d['lama_belajar']; ?>
                    </p>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="card-title">Dasar Bidang Keahlian</h5>
                    <p class="card-text">
                        <?= $d['dasar_bidangkeahlian']; ?>
                    </p>
                </div>
                <div class="card-body text-left" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="card-title text-center">Dasar Program Keahlian</h5>
                    <p class="card-text">
                        <?= $d['dasar_programkeahlian']; ?>
                    </p>
                </div>
                <div class="card-body text-left" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="card-title text-center">Kompetensi Keahlian</h5>
                    <p class="card-text">
                        <?= $d['kompetensi_keahlian']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>