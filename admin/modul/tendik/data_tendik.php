<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Tenaga Kependidikan</h5>
        <div class="card-body">
            <!-- tombol tambah tendik -->
            <a href="?page=tendik&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a></button>
            <!-- modal tambah tendik -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_tendik");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td>
                                    <?php
                                    if ($d['nip'] == '') {
                                        echo "_";
                                    } else {
                                    ?>
                                        <?= $d['nip'] ?>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><?= $d['nama_tendik'] ?> </td>
                                <td>
                                    <?php
                                    if ($d['foto'] == '') {
                                    ?>
                                        <img src="../assets/sumber/img/tendik/user.png" class="img-fluid" style="width:50px;height:50px;">
                                    <?php
                                    } else {
                                    ?>
                                        <img src=" ../assets/sumber/img/tendik/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;">
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#DetailTendikModal<?= $d['id_tendik'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-user"></i> Profil</a>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="DetailTendikModal<?= $d['id_tendik'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Profil Tenaga Kependidikan</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="container" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <center>
                                                                    <?php
                                                                    if ($d['foto'] == '') {
                                                                    ?>
                                                                        <img src="../assets/sumber/img/tendik/user.png" class="img-fluid" style="width:200px;height:200px;">
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <img src=" ../assets/sumber/img/tendik/<?= $d['foto'] ?>" class="img-thumbnail rounded-pill" style="width:250px;height:250px;">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </center>
                                                            </tr>
                                                            <br>
                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <td><?= $d['nama_tendik']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>NIP</th>
                                                                <td><?= $d['nip']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tempat dan Tanggal Lahir</th>
                                                                <td><?= $d['tempat_lahir'] ?>, <?= $d['tanggal_lahir']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Status Pegawai</th>
                                                                <td><?= $d['status_pegawai']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>No HP</th>
                                                                <td><?= $d['nohp']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td><?= $d['email']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Golongan</th>
                                                                <td><?= $d['golongan']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jabatan</th>
                                                                <td><?= $d['jenis_ptk']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class=" modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="?page=tendik&act=edit&id=<?= $d['id_tendik'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=tendik&act=del&id=<?= $d['id_tendik'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
                                        <button type="submit" name="submit" id="submit" class="btn btn-danger btn-xst"><i class="fas fa-trash-alt"> Del</i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Hapus-->
    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah data akan dihapus ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="?page=tendik&act=del&id=<?= $d['id_tendik'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>