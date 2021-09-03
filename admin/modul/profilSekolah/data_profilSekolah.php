<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
foreach ($sql as $data)
?>
<div class="container mt-3">
    <div class="card">

        <h5 class="card-header text-center">Profil Sekolah</h5>
        <div class="card-body">
            <a href="?page=profilSekolah&act=edit&id=<?= $data['id_sekolah'] ?>" class="btn btn-primary mb-3"><i class="fas fa-user-edit"></i> Edit Profil Sekolah</a>
            <!-- <a href="?page=profilSekolah&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Profil</a></button> -->
            <center>
                <img src="../assets/sumber/img/app/<?= $data['foto_logo'] ?>" class="img-thumbnail" style="width:100px;height:100px;">
            </center>
            <h5 class="card-title">Nama Sekolah</h5>
            <p class="card-text"> <?= $data['nama_sekolah']; ?></p>

            <h5 class="card-title">Visi</h5>
            <p class="card-text"> <?= $data['visi']; ?></p>

            <h5 class="card-title">Misi</h5>
            <p class="card-text"> <?= $data['misi']; ?></p>

            <h5 class="card-title">Sejarah</h5>
            <p class="card-text"> <?= $data['sejarah_sekolah']; ?></p>

            <h5 class="card-title">Kata Sambutan</h5>
            <p class="card-text"> <?= $data['kata_sambutan']; ?></p>

            <h5 class="card-title">Struktur Organisasi</h5>
            <p class="card-text">
                <img src="../assets/sumber/img/struktur/<?= $data['foto_struktur'] ?>" class="img-thumbnail" style="width:200px;height:200px;">
            </p>

            <h5 class="card-title">Peta Sekolah</h5>
            <p class="card-text">
                <img src="../assets/sumber/img/peta/<?= $data['peta_sekolah'] ?>" class="img-thumbnail" style="width:200px;height:200px;">
            </p>

            <h5 class="card-title">Lokasi Sekolah</h5>
            <p class="card-text">
                <img src="../assets/sumber/img/lokasi/<?= $data['lokasi_sekolah'] ?>" class="img-thumbnail" style="width:200px;height:200px;">
            </p>

            <h5 class="card-title">Set Halaman Utama</h5>
            <p class="card-text">
                <img src="../assets/sumber/img/utama/<?= $data['foto_utama'] ?>" class="img-thumbnail" style="width:200px;height:200px;">
            </p>



        </div>

    </div>