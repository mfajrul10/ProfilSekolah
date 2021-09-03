<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Ekstrakurikuler Siswa</h5>
        <div class="card-body">
            <!-- tombol Tambah Ekstrakurikuler -->
            <a href="?page=ekstrakurikulersiswa&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Ekstrakurikuler</a></button>
            <!-- modal Tambah Ekstrakurikuler -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Jumlah Peminat</th>
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
                                    } else {
                                        echo "Tidak Aktif";
                                    }
                                    ?>
                                </td>
                                
                                <td>
                                    <a href="?page=ekstrakurikulersiswa&act=detail&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-info btn-xs"><i class="fas fa-user"></i> Detail </a>
                                    <a href="?page=ekstrakurikulersiswa&act=add&id=<?= $d['id_ekstrakurikuler'] ?>" class="btn btn-primary btn-xs"><i class="fas fa-user-plus"></i> Tambah</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>