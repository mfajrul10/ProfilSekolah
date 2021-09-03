<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Fasilitas</h5>
        <div class="card-body">
            <!-- tombol tambah fasilitas -->
            <a href="?page=fasilitas&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Fasilitas</a></button>
            <!-- modal tambah fasilitas -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Fasilitas</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td>
                                    <?php
                                    if ($d['jenis_fasilitas'] == 'ruangan') {
                                        echo "Ruangan Belajar";
                                    } elseif ($d['jenis_fasilitas'] == 'pustaka') {
                                        echo "Perpustakaan";
                                    } elseif ($d['jenis_fasilitas'] == 'fakademik') {
                                        echo "Fasilitas Akademik";
                                    } elseif ($d['jenis_fasilitas'] == 'fnonakademik') {
                                        echo "Fasilitas Non Akademik";
                                    } else {
                                        echo "Lainnya";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($d['foto'] == '') {
                                    ?>
                                        <img src="../assets/sumber/img/fasilitas/user.png" class="img-fluid" style="width:50px;height:50px;">
                                    <?php
                                    } else {
                                    ?>
                                        <img src=" ../assets/sumber/img/fasilitas/<?= $d['foto'] ?>" class="img-thumbnail" style="width:50px;height:50px;">
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?page=fasilitas&act=edit&id=<?= $d['id_fasilitas'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=fasilitas&act=del&id=<?= $d['id_fasilitas'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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