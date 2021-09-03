<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Ekstrakurikuler</h5>
        <div class="card-body">
            <!-- tombol Tambah Ekstrakurikuler -->
            <a href="?page=ekstrakurikuler&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Ekstrakurikuler</a></button>
            <!-- modal Tambah Ekstrakurikuler -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td> <?= $d['nama_ekstrakurikuler'] ?> </td>
                                <td>
                                    <?php
                                    if ($d['keterangan'] == 'aktif') {
                                        echo "Aktif";
                                    } elseif ($d['keterangan'] == 'proses') {
                                        echo "On Proses";
                                    } else {
                                        echo "Tidak Aktif";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?page=ekstrakurikuler&act=detail&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-info btn-xs"><i class="fas fa-user"></i> Detail</a>
                                    <a href="?page=ekstrakurikuler&act=addsiswa&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-primary btn-xs"><i class="fas fa-user-plus"></i> Tambah</a>
                                    <a href="?page=ekstrakurikuler&act=edit&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=ekstrakurikuler&act=del&id=<?= $d['id_ekstrakurikuler'] ?>" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Del</a>
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
                    <a href="?page=ekstrakurikuler&act=del&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>