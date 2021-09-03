<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru='$id'");
$data = $sql->fetch_assoc();
$foto = $data['foto'];

if (file_exists("../assets/sumber/img/guru/$foto")) {
      unlink("../assets/sumber/img/guru/$foto");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_guru WHERE id_guru='$id'");

if ($hapus) {
      echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=guru';
      </script>";
} else {
      echo "Data gagal dihapus";
}
