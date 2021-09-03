<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Data Pendukung Sekolah</h5>
        <div class="card-body">
            <!-- tombol tambah guru -->
            <a href="?page=pendukungSekolah&act=add" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a></button>
            <!-- modal tambah guru -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis File</th>
                            <th>Nama File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_pendukungsekolah");
                        foreach ($sql as $d) { ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td>
                                    <?php
                                    if ($d['jenis_file'] == 'akreditasi') {
                                        echo "Akreditasi Sekolah";
                                    } elseif ($d['jenis_file'] == 'kalender') {
                                        echo "Kalender Akademik";
                                    } else {
                                        echo "Kurikulum";
                                    }
                                    ?>
                                </td>
                                <td><?= $d['name'] ?> </td>
                                <td>
                                    <a href="<?= $d['file']; ?>" target="_blank" class="btn btn-light btn-rounded btn-fw text-info"><i class="fa fa-download"></i> Unduh</a>
                                    <a href="?page=pendukungSekolah&act=del&id=<?= $d['id_pendukungsekolah'] ?>" onClick="return confirm('Apakah data akan dihapus ?')">
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