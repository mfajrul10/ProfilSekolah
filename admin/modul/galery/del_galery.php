<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE id_gallery='$id'");
$data = $sql->fetch_assoc();
$foto = $data['foto'];

if (file_exists("../assets/sumber/img/gallery/$foto")) {
      unlink("../assets/sumber/img/gallery/$foto");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_gallery WHERE id_gallery='$id'");

if ($hapus) {
      echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=galery';
      </script>";
} else {
      echo "Data gagal dihapus";
}
