<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Siswa</h5>
        <div class="card-body">
            <!-- tombol tambah siswa -->
            <a href="?page=siswa&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Siswa</a></button>
            <!-- modal tambah siswa -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa
                        INNER JOIN tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas
                        INNER JOIN tb_programkeahlian ON tb_siswa.id_programkeahlian=tb_programkeahlian.id_programkeahlian");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?= $d['nisn'] ?> </td>
                                <td> <?= $upper = strtoupper($d['nama_siswa'])  ?> </td>
                                <td><?= $d['kelas'] ?> </td>
                                <td><?= $d['nama_programkeahlian'] ?> </td>
                                <td>
                                    <a data-toggle="modal" data-target="#DetailSiswaModal<?= $d['id_siswa'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-user"></i> Detail</a>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="DetailSiswaModal<?= $d['id_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Profil Siswa</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="container" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <th>Nama Lengkap</th>
                                                                <td><?= $d['nama_siswa']; ?></td>
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
                                                                <td><?= $d['tempat_lahir'] ?>,
                                                                    <?php $a = $d['tanggal_lahir'];
                                                                    echo date("d-M-Y", strtotime($a)) ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Jenis Kelamin</th>
                                                                <td>
                                                                    <?php
                                                                    if ($d['jk'] == 'lk') {
                                                                        echo "Laki-Laki";
                                                                    } else {
                                                                        echo "Perempuan";
                                                                    }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Alamat</th>
                                                                <td><?= $d['alamat']; ?></td>
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
                                    <a href="?page=siswa&act=edit&id=<?= $d['id_siswa'] ?>" class="btn btn-warning btn-xs"><i class="fas fa-user-edit"></i> Edit</a>
                                    <a href="?page=siswa&act=del&id=<?= $d['id_siswa'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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
                    <a href="?page=siswa&act=del&id=<?= $d['id_siswa'] ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>