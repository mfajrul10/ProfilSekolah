<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_saranaprasarana WHERE id_saranaprasarana='$id'");

// mengalihkan halaman kembali ke index.php
echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=sarana';
      </script>";
