<?php
if (isset($_REQUEST['file'])) {
    $file = $_REQUEST['file'];

    //header("Cache-Control: public");
    //header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=" . basename($file));
    header("Content-Type: application/octet-stream;");
    //header("Content-Transfer-Encoding: binary");
    readfile("../assets/sumber/file/akreditasi/" . $file);
}
