<body>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <form method="POST" class="form-inline" action="">
            <select class="form-control" name="id_kelas">
                <?php $c = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                while ($dc = mysqli_fetch_array($c)) { ?>
                    <option value="<?= $dc['id_kelas'] ?>"><?= $dc['kelas'] ?></option>
                <?php } ?>
            </select>
            <button class="btn btn-primary" name="filter"><span class="glyphicon glyphicon-search"></span> Search</button>
        </form>
        <br style="clear:both;" /><br />
        <table class="table table-bordered">
            <thead class="alert-info">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['filter'])) {
                    $date = $_POST['id_kelas'];
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa  WHERE id_kelas= '$date'");
                    while ($fetch = mysqli_fetch_array($query)) {

                        $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$date'");
                        while ($d = mysqli_fetch_array($data)) {

                ?>
                            <tr>
                                <td width="50"><b><?= $no++; ?>.</b> </td>
                                <td><?php echo $fetch['nama_siswa'] ?></td>
                                <td><?php echo $d['kelas'] ?></td>
                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>