<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Galery</h5>
        <div class="card-body">
            <!-- tombol tambah galery -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#galeriModal">
                Tambah Galeri
            </button>
            <!-- modal tambah galery -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th>Galeri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_gallery");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['keterangan'] ?> </td>
                                <td>
                                    <?php
                                    if ($d['jenis'] == '1') {
                                    ?>
                                        <img src="../assets/sumber/img/gallery/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;">
                                    <?php
                                    } else {
                                        echo 'Video';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <a href="?page=galery&act=edit&id=<?= $d['id_gallery'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=galery&act=del&id=<?= $d['id_gallery'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="galeriModal" tabindex="-1" aria-labelledby="galeriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galeriModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Silahkan pilih jenis galeri
                </div>
                <div class="modal-footer">

                    <a href="?page=galery&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Galeri Foto</a></button>
                    <a href="?page=galery&act=addvideo" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Galeri Video</a></button>
                    <button type="button" class="btn btn-secondary mb-3" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>