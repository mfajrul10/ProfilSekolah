<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Prestasi</h5>
        <div class="card-body">
            <a href="?page=prestasi&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Prestasi Siswa</a></button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prestasi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_prestasi_siswa");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['judul_prestasi'] ?> </td>
                                <td><img src="../assets/sumber/img/prestasi/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;"> </td>
                                <td>
                                    <a href="?page=prestasi&act=edit&id=<?= $d['id_prestasi'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=prestasi&act=del&id=<?= $d['id_prestasi'] ?>" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Del</a>
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
                    <a href="?page=prestasi&act=del&id=<?= $d['id_prestasi'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>