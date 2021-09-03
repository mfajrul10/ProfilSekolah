<?php
// Downloads files
// Tentukan folder file yang boleh di download
$folder = "/../../assets/assets1/file/akreditasi/";
$filename = $_GET['file'];
$file_extension = strtolower(substr(strrchr($filename, "."), 1));
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder . $_GET['file'])) {
    echo "<h1>Access forbidden!</h1>
 <p>File Sudah Tidak Ada</p>";
    exit;
} else if ($file_extension == 'php') {
    echo "<h1>Access forbidden!</h1>
 <p>Maaf, file yang Anda download sudah tidak tersedia atau filenya (direktorinya) telah diproteksi. <br />.</p>";
    exit;
}
// Apabila mendownload file di folder 
else {

    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=" . basename($filename));
    header("Content-Type: application/octet-stream;");
    //header("Content-Transfer-Encoding: binary");
    readfile("files/" . $filename);
}
