<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Sarana dan Prasarana</h5>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#saranaModal"><i class="fa fa-plus"></i>
                Tambah Data
            </button>
            <!-- modal tambah galery -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sarana/Prasarana</th>
                            <th>Jenis</th>
                            <th>Jumlah Unit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_saranaprasarana");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['nama_saranaprasarana'] ?> </td>
                                <td>
                                    <?php
                                    if ($d['jenis_saranaprasarana'] == 'sarana') {
                                        echo 'Sarana';
                                    } else {
                                        echo 'Prasarana';
                                    }
                                    ?>
                                </td>
                                <td><?= $d['jumlah_saranaprasarana'] ?> </td>
                                <td>
                                    <a href="?page=sarana&act=edit&id=<?= $d['id_saranaprasarana'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=sarana&act=del&id=<?= $d['id_saranaprasarana'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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
</div>




<!-- Modal -->
<div class="modal fade" id="saranaModal" tabindex="-1" aria-labelledby="saranaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="saranaModalLabel">Tambah Data Sarana/Prasarana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Silahkan pilih jenis data yang akan ditambah
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mb-3" data-dismiss="modal">Close</button>
                <a href="?page=sarana&act=add" class="btn btn-primary mb-3">Data Sarana</a>
                <a href="?page=sarana&act=addprasarana" class="btn btn-primary mb-3"> Data Prasarana</a>
            </div>
        </div>
    </div>
</div>