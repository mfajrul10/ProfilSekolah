<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_programkeahlian WHERE id_programkeahlian='$id'");

// mengalihkan halaman kembali ke index.php
echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=programkeahlian';
      </script>";
