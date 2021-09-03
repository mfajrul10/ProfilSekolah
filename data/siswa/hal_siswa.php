<section id="profil" class="profil">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Data Siswa</h2>
            </div>
            <div class="card-body">
                <form method="POST" class="form-inline" action="">
                    <label>Pilih Kelas</label>
                    <select class="form-control ml-2" name="id_kelas">
                        <?php $c = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        while ($dc = mysqli_fetch_array($c)) { ?>
                            <option value="<?= $dc['id_kelas'] ?>"><?= $dc['kelas'] ?></option>
                        <?php } ?>
                    </select>
                    <label class="ml-2">Pilih Jurusan/Program Studi</label>
                    <select class="form-control ml-2" name="id_programkeahlian">
                        <?php $c = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian");
                        while ($dc = mysqli_fetch_array($c)) { ?>
                            <option value="<?= $dc['id_programkeahlian'] ?>"><?= $dc['nama_programkeahlian'] ?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-primary ml-2" name="filter"><span class="glyphicon glyphicon-search"></span> Cari</button>
                </form>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Detail Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['filter'])) {
                                $date = $_POST['id_kelas'];
                                $date2 = $_POST['id_programkeahlian'];
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa  WHERE id_kelas= '$date' AND id_programkeahlian= '$date2'");
                                while ($fetch = mysqli_fetch_array($query)) {

                                    $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$date'");
                                    while ($d = mysqli_fetch_array($data)) {

                                        $dataj = mysqli_query($koneksi, "SELECT * FROM tb_programkeahlian WHERE id_programkeahlian='$date2'");
                                        while ($j = mysqli_fetch_array($dataj)) {

                            ?>
                                            <tr>
                                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                                <td><?= $fetch['nisn'] ?></td>
                                                <td><?= $fetch['nama_siswa'] ?></td>
                                                <td><?= $d['kelas'] ?></td>
                                                <td><?= $j['nama_programkeahlian'] ?></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#DetailSiswaModal<?= $fetch['id_siswa'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-user"></i> Detail</a>
                                                    <!-- modal detail -->
                                                    <div class="modal fade" id="DetailSiswaModal<?= $fetch['id_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                                <td><?= $fetch['nama_siswa']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>NIS</th>
                                                                                <td><?= $fetch['nis']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>NISN</th>
                                                                                <td><?= $fetch['nisn']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Tempat dan Tanggal Lahir</th>
                                                                                <td><?= $fetch['tempat_lahir'] ?>,
                                                                                    <?php $a = $fetch['tanggal_lahir'];
                                                                                    echo date("d-M-Y", strtotime($a)) ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Jenis Kelamin</th>
                                                                                <td>
                                                                                    <?php
                                                                                    if ($fetch['nisn'] == 'lk') {
                                                                                        echo "Laki-Laki";
                                                                                    } else {
                                                                                        echo "Perempuan";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Alamat</th>
                                                                                <td><?= $fetch['alamat']; ?></td>
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
                                                </td>
                                            </tr>
                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>