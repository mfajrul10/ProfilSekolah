<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_prestasi_siswa WHERE id_prestasi='$id'");
$data = $sql->fetch_assoc();
$foto = $data['foto'];

if (file_exists("../assets/sumber/img/prestasi/$foto")) {
      unlink("../assets/sumber/img/prestasi/$foto");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_prestasi_siswa WHERE id_prestasi='$id'");

if ($hapus) {
      echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=prestasi';
      </script>";
} else {
      echo "Data gagal dihapus";
}
