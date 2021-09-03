<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_sekolah WHERE id_sekolah='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <section id="profil" class="profil">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Kata Sambutan Kepala Sekolah</h2>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-delay="100">
                    <p class="card-text">
                        <?= $oke1['kata_sambutan']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>