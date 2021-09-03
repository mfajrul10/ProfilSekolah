<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Program Keahlian</h5>
        <div class="card-body">
            <!-- tombol tambah Program Keahlian -->
            <a href="?page=programkeahlian&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Program Keahlian</a></button>
            <!-- modal tambah Program Keahlian -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program Keahlian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['nama_programkeahlian'] ?> </td>
                                <td>
                                    <a data-toggle="modal" data-target="#DetailModal<?= $d['id_programkeahlian'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-info"></i> Detail</a>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="DetailModal<?= $d['id_programkeahlian'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Program Keahlian</h4>

                                                </div>

                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label> <?= $d['nama_programkeahlian'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dasar Bidang Keahlian</label>
                                                            <p><?= $d['dasar_bidangkeahlian'] ?></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dasar Program Keahlian</label>
                                                            <p><?= $d['dasar_programkeahlian'] ?></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kompetensi Keahlian</label>
                                                            <p><?= $d['kompetensi_keahlian'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="?page=programkeahlian&act=edit&id=<?= $d['id_programkeahlian'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=programkeahlian&act=del&id=<?= $d['id_programkeahlian'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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



    <!-- Modal -->