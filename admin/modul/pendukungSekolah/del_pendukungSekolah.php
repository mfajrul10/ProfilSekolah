<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pendukungsekolah WHERE id_pendukungsekolah='$id'");
$data = $sql->fetch_assoc();
$name = $data['file'];

if (file_exists("../assets/sumber/file/$name")) {
    unlink("../assets/sumber/file/$name");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_pendukungsekolah WHERE id_pendukungsekolah='$id'");

if ($hapus) {
    echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=pendukungSekolah';
      </script>";
} else {
    echo "Data gagal dihapus";
}
