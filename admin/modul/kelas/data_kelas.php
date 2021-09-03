<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Kelas</h5>
        <div class="card-body">
            <!-- tombol tambah kelas -->
            <a href="?page=kelas&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah kelas</a></button>
            <!-- modal tambah kelas -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['kelas'] ?> </td>
                                <td>
                                    <a href="?page=kelas&act=edit&id=<?= $d['id_kelas'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=kelas&act=del&id=<?= $d['id_kelas'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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
                    <a href="?page=kelas&act=del&id=<?= $d['id_kelas'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>