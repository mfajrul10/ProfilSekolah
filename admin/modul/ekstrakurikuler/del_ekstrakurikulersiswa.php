<?php
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_ekstrakurikuler_siswa WHERE id_ekstrakurikuler_siswa ='$id'");

// mengalihkan halaman kembali ke index.php
echo " <script>
      alert('Data Berhasil Dihapus !');
      window.location='?page=ekstrakurikuler';
      </script>";
