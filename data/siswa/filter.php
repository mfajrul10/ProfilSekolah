<?php
if (isset($_POST['filter'])) {
    $date = $_POST['id_kelas'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa  WHERE id_kelas= '$date'");
    while ($fetch = mysqli_fetch_array($query)) {

        $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$date'");
        while ($d = mysqli_fetch_array($data)) {
?>
            <tr>
                <td><?php echo $fetch['nama_siswa'] ?></td>
                <td><?php echo $d['kelas'] ?></td>
            </tr>
<?php
        }
    }
}
?>