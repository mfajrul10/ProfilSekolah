<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas WHERE id_fasilitas='$id'");
$data = $sql->fetch_assoc();
$foto = $data['foto'];

if (file_exists("../assets/sumber/img/fasilitas/$foto")) {
      unlink("../assets/sumber/img/fasilitas/$foto");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_fasilitas WHERE id_fasilitas='$id'");

if ($hapus) {
      echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=fasilitas';
      </script>";
} else {
      echo "Data gagal dihapus";
}
