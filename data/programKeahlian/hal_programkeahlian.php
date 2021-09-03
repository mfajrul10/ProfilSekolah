<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian WHERE id_programkeahlian='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <section id="about" class="about">
        <div class="container">
            <div class="d-flex flex-column justify-content-center about-content">
                <div class="section-title">
                    <h2><?= $d['nama_programkeahlian']; ?></h2>
                </div>
                <div class="row">
                    <div class="col">
                        <li class="list-group-item d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="100">
                            Lama Belajar :
                            <?= $d['lama_belajar']; ?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="100">
                            Dasar Bidang Keahlian
                            <?= $d['dasar_bidangkeahlian']; ?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="100">
                            Dasar Program Keahlian
                            <?= $d['dasar_programkeahlian']; ?>
                        </li>
                    </div>
                    <div class="col">

                        <li class="list-group-item d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="100">
                            Kompetensi Keahlian
                            <?= $d['kompetensi_keahlian']; ?>
                        </li>
                    </div>
                </div>
            </div>
    </section>

<?php } ?>