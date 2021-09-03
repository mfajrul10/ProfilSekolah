<section id="profil" class="profil">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Data Alumni</h2>
            </div>
            <div class="card-body">
                <form method="POST" class="form-inline" action="">
                    <label>Pilih Tahun Lulus</label>
                    <select class="form-control ml-2" name="tahun_lulus">
                        <option value="">--Pilih--</option>
                        <?php
                        $y = date('Y');
                        for ($i = 2018; $i < $y + 2; $i++) {
                        ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php }
                        ?>
                    </select>
                    <button class="btn btn-primary ml-2" name="filter">
                        <span class="glyphicon glyphicon-search"></span> Cari
                    </button>
                </form>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alumni</th>
                                <th>Tahun Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['filter'])) {
                                $date = $_POST['tahun_lulus'];
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_alumni  WHERE tahun_lulus= '$date'");
                                while ($d = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td width="50"><b><?= $no++; ?>.</b> </td>
                                        <td><?= $d['nama_alumni'] ?></td>
                                        <td><?= $d['tahun_lulus'] ?></td>
                                        <td>
                                            <a data-toggle="modal" data-target="#DetailAlumniModal<?= $d['id_alumni'] ?>" class="btn btn-dark btn-xs text-warning"><i class="fas fa-user"></i> Detail</a>
                                            <!-- modal detail -->
                                            <div class="modal fade" id="DetailAlumniModal<?= $d['id_alumni'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"> Profil Alumni</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="container" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Nama Lengkap</th>
                                                                        <td><?= $d['nama_alumni']; ?></td>
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
                                                                        <th>Tahun Masuk</th>
                                                                        <td><?= $d['tahun_masuk']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tahun Lulus</th>
                                                                        <td><?= $d['tahun_lulus']; ?></td>
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
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>