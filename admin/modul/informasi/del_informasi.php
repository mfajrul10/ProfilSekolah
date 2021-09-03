<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tb_informasi WHERE id_informasi='$id'");
$data = $sql->fetch_assoc();
$foto = $data['foto'];

if (file_exists("../assets/sumber/img/berita/$foto")) {
      unlink("../assets/sumber/img/berita/$foto");
}
// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_informasi WHERE id_informasi='$id'");

if ($hapus) {
      echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=informasi';
      </script>";
} else {
      echo "Data gagal dihapus";
}
