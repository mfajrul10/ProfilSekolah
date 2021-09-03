<?php
include "config/koneksi.php";
session_start();
?>
<?php
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
$oke1 = mysqli_fetch_array($oke);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Login</title>
    <link rel="shortcut icon" type="image/png" href="assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" />
    <!-- Custom fonts for this template-->
    <link href="assets/assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/assets2/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    body {
        background-image: url('assets/sumber/img/bg/herringbone.png');
    }
</style>

<body>

    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <input class="form-control py-4 rounded-pill" type="text" name="username" placeholder="Masukkan Username" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control py-4 rounded-pill" type="password" name="password" placeholder="Masukkan Password" />
                                        </div>

                                        <hr>
                                        <button type="submit" value="LOGIN" name="Login" class="btn btn-primary btn-lg btn-block rounded-pill">Login</button>
                                        <!-- <a href="register_guru.php" class="btn btn-success btn-lg btn-block rounded-pill">Registrasi Guru</a> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
        $level = $_POST['level'];
        $pass = $_POST['password'];

        $sql = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' AND password='$pass' ") or die(mysqli_error($koneksi));
        $data = mysqli_fetch_array($sql);
        $id = $data[0];
        $cek = mysqli_num_rows($sql);

        if ($cek > 0) {
            $_SESSION['Admin'] = $id;
            $_SESSION['upload_gambar'] = TRUE;

            echo "<script>
                window.location='admin/index.php';
                </script>";
        } else {
            echo "<script>
                alert('Password salah !');
                window.location='login.php';
                </script>";
        }
    }
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/assets2/js/sb-admin-2.min.js"></script>

</body>

</html>