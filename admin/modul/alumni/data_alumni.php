<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Alumni</h5>
        <div class="card-body">
            <!-- tombol tambah alumni -->
            <a href="?page=alumni&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Alumni</a></button>
            <!-- modal tambah alumni -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alumni</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_alumni");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td> <?= $upper = strtoupper($d['nama_alumni'])  ?> </td>
                                <td>
                                    <?= $d['tahun_masuk'] ?>
                                </td>
                                <td>
                                    <?= $d['tahun_lulus'] ?>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#DetailAlumniModal<?= $d['id_alumni'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-user"></i> Profil</a>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="DetailAlumniModal<?= $d['id_alumni'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Profil Alumni</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="container" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <td><?= $d['nama_alumni']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>NIS</th>
                                                                <td><?= $d['nis']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>NISN</th>
                                                                <td><?= $d['nisn']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tempat dan Tanggal Lahir</th>
                                                                <td><?= $d['tempat_lahir'] ?>, <?= $d['tanggal_lahir']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tahun Masuk</th>
                                                                <td><?= $d['tahun_masuk']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tahun Lulus</th>
                                                                <td><?= $d['tahun_lulus']; ?></td>
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
                                    <a href="?page=alumni&act=edit&id=<?= $d['id_alumni'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=alumni&act=del&id=<?= $d['id_alumni'] ?>" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Del</a>
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
                    <a href="?page=alumni&act=del&id=<?= $d['id_alumni'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>