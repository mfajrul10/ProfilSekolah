<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Tambah Data Gallery</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" placeholder="Keterangan Video" name="keterangan" required="required">
                </div>
                <div class="form-group">
                    <label>Video</label>
                    <input type="file" name="video" required="required">
                    <p style="color: red">Ekstensi yang diperbolehkan .mp4 | .3gp | .mov | .mpeg dengan ukuran maksimal 10 mb</p>
                </div>
                <button name="saveVideo" type="submit" class="btn btn-primary mr-2">Simpan</button>
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_POST['saveVideo'])) {

    $maxsize = 10242880; // 10MB

    $name = $_FILES['video']['name'];
    $target_dir = "../assets/sumber/img/gallery/video/";
    $target_file = $target_dir . $_FILES["video"]["name"];

    // Select file type
    $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");
    $keterangan         = $_POST['keterangan'];
    // Check extension
    if (in_array($videoFileType, $extensions_arr)) {

        // Check file size
        if (($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
        } else {
            // Upload
            if (move_uploaded_file($_FILES['video']['tmp_name'], $target_file)) {
                // Insert record
                $query = mysqli_query($koneksi, "INSERT INTO tb_gallery VALUES(NULL, '$keterangan', '2', '0', '$name')");
            }
        }
    } else {
        echo "Invalid file extension.";
    }
}


?>