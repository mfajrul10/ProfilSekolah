<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Informasi</h5>
        <div class="card-body">
            <!-- tombol tambah Berita -->

            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahInformasi"> <i class="fa fa-plus"></i>
                Tambah Data
            </button>
            <!-- modal tambah Berita -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Jenis Informasi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_informasi");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['judul_informasi'] ?> </td>
                                <td><?= date($d['tgl_informasi']); ?> </td>
                                <td>
                                    <?php
                                    if ($d['jenis_informasi'] == 'berita') {
                                        echo "Berita";
                                    } else {
                                        echo "Pengumuman";
                                    }
                                    ?>
                                </td>
                                <td><img src="../assets/sumber/img/berita/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;"></td>
                                <td>
                                    <a href="?page=informasi&act=edit&id=<?= $d['id_informasi'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=informasi&act=del&id=<?= $d['id_informasi'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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
    <div class="modal fade" id="tambahInformasi" tabindex="-1" aria-labelledby="tambahInformasiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahInformasiLabel">Tambah Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Silahkan pilih jenis informasi
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mb-3" data-dismiss="modal">Close</button>
                    <a href="?page=informasi&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Berita</a></button>
                    <a href="?page=informasi&act=addpengumuman" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Pengumuman</a></button>
                </div>
            </div>
        </div>
    </div>