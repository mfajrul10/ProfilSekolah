<!DOCTYPE html>
<html>

<head>
    <title>Upload dan Download File</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Script CSS-->
    <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>

</head>

<body>
    <br /><br />
    <div class="container">

        <form class="form-inline" method="POST" action="" enctype="multipart/form-data">
            <input class="form-control" type="file" name="upload" />
            <button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
        </form>
        <div class="form-group">

            <table id="example" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>File Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="alert-success">
                    <?php

                    $row = $koneksi->query("SELECT * FROM tb_pendukungsekolah");
                    while ($fetch = $row->fetch_array()) {
                    ?>
                        <tr>
                            <?php
                            $name = explode('../assets/sumber/file/akreditasi/', $fetch['file']);
                            ?>
                            <td><?= $fetch['id_pendukungsekolah'] ?></td>
                            <td><?= $fetch['name'] ?></td>
                            <td><a href="download.php?file=<?= $name[1] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>


        <!--Script Javascript-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'colvis'
                    ]
                });
            });
        </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis_file'];
    if ($_FILES['upload']['name'] != "") {
        $file = $_FILES['upload'];

        $file_name = $file['name'];
        $file_temp = $file['tmp_name'];
        $name = explode('.', $file_name);
        $path = "../assets/sumber/file/akreditasi/" . $file_name;

        $koneksi->query("INSERT INTO tb_pendukungsekolah VALUES(NULL,'0','$name[0]', '$path')");

        move_uploaded_file($file_temp, $path);
        header("location:index.php");
    } else {
        echo "<script>alert('Required Field!')</script>";
        echo "<script>window.location='index.php'</script>";
    }
}
?>