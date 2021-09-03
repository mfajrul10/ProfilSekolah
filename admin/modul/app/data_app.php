<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Guru</h5>
        <div class="card-body">
            <!-- tombol tambah guru -->
            <a href="?page=guru&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Guru</a></button>
            <!-- modal tambah guru -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_guru");
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
                                <td><?= $d['nama_guru'] ?> </td>
                                <td>
                                    <?php
                                    if ($d['foto'] == '') {
                                    ?>
                                        <img src="../assets/sumber/img/guru/user.png" class="img-fluid" style="width:50px;height:50px;">
                                    <?php
                                    } else {
                                    ?>
                                        <img src=" ../assets/sumber/img/guru/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;">
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?page=guru&act=edit&id=<?= $d['id_guru'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=guru&act=del&id=<?= $d['id_guru'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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
                    <a href="?page=guru&act=del&id=<?= $d['id_guru'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>