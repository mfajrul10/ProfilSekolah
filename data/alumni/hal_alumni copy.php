<div class="container">
    <div class="card">
        <h5 class="card-header text-center">Data Alumni</h5>
        <div class="card-body">
            <form method="POST" class="form-inline" action="">
                <label>Pilih Tahun Lulus :</label>
                <select class="form-control ml-2" name="tahun_lulus" required>
                    <option value="">--Pilih--</option>
                    <?php
                    $y = date('Y');
                    for ($i = 2018; $i < $y + 2; $i++) {
                    ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php }
                    ?>
                </select>
                <button class="btn btn-primary ml-2" name="filter"><span class="glyphicon glyphicon-search"></span> Cari</button>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alumni</th>
                            <th>Tahun Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['filter'])) {
                            $date = $_POST['tahun_lulus'];
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_alumni WHERE tahun_lulus= '$date'");
                            while ($fetch = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td width="50"><b><?= $no++; ?>.</b> </td>
                                    <td><?= $fetch['nama_alumni'] ?></td>
                                    <td><?= $fetch['tahun_lulus'] ?></td>
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