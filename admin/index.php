<?php
session_start();
include '../config/koneksi.php';
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
$oke1 = mysqli_fetch_array($oke);
setlocale(LC_TIME, 'id_ID.utf8');

if (@$_SESSION['Admin']) {
?>
    <?php
    if (@$_SESSION['Admin']) {
        $sesi = @$_SESSION['Admin'];
    }
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin = '$sesi'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_array($sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Administrator</title>
        <link rel="shortcut icon" type="image/png" href="../assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" />
        <!-- Custom fonts for this template -->
        <link href="../assets/assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../assets/assets2/css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="../assets/assets2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <?= $data['nama_admin']; ?>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Beranda</span></a>
                </li>


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data User</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="?page=guru">Data Guru</a>
                            <a class="collapse-item" href="?page=tendik">Data Tenaga Kependidikan</a>
                            <a class="collapse-item" href="?page=siswa">Data Siswa</a>
                            <a class="collapse-item" href="?page=alumni">Data Alumni</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-database"></i>
                        <span>Data Master</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="?page=kelas">Data Kelas</a>
                            <a class="collapse-item" href="?page=fasilitas">Data Fasilitas</a>
                            <a class="collapse-item" href="?page=sarana">Data Sarana dan Prasarana</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#informasiSekolah" aria-expanded="true" aria-controls="informasiSekolah">
                        <i class="fas fa-fw fa-info"></i>
                        <span>Informasi Sekolah</span>
                    </a>
                    <div id="informasiSekolah" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="?page=profilSekolah">Profil Sekolah</a>
                            <a class="collapse-item" href="?page=pendukungSekolah">Pendukung Sekolah</a>
                            <a class="collapse-item" href="?page=galery">Gallery</a>
                            <a class="collapse-item" href="?page=informasi">Berita dan Pengumuman</a>
                            <a class="collapse-item" href="?page=programkeahlian">Program Keahlian</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kegiatanSekolah" aria-expanded="true" aria-controls="kegiatanSekolah">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Agenda Sekolah</span>
                    </a>
                    <div id="kegiatanSekolah" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="?page=ekstrakurikuler">Ekstrakurikuler</a>
                            <!-- <a class="collapse-item" href="?page=ekstrakurikulersiswa">Ekstrakurikuler Siswa</a> -->
                            <a class="collapse-item" href="?page=prestasi">Prestasi Siswa</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <h3>
                                <img src="../assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" class="img-fluid" style="width:50px;height:50px;" alt="">
                                <span class="badge badge-primary">
                                    <?= $oke1['nama_sekolah']; ?>
                                </span>
                            </h3>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        <?= $data['nama_admin']; ?>
                                    </span>
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="?page=profil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php
                        error_reporting();
                        $page = @$_GET['page'];
                        $act = @$_GET['act'];

                        if ($page == 'guru') {
                            if ($act == '') {
                                include 'modul/guru/data_guru.php';
                            } elseif ($act == 'add') {
                                include 'modul/guru/add_guru.php';
                            } elseif ($act == 'edit') {
                                include 'modul/guru/edit_guru.php';
                            } elseif ($act == 'del') {
                                include 'modul/guru/del_guru.php';
                            }
                        } elseif ($page == 'tendik') {
                            if ($act == '') {
                                include 'modul/tendik/data_tendik.php';
                            } elseif ($act == 'add') {
                                include 'modul/tendik/add_tendik.php';
                            } elseif ($act == 'edit') {
                                include 'modul/tendik/edit_tendik.php';
                            } elseif ($act == 'del') {
                                include 'modul/tendik/del_tendik.php';
                            }
                        } elseif ($page == 'siswa') {
                            if ($act == '') {
                                include 'modul/siswa/data_siswa.php';
                            } elseif ($act == 'add') {
                                include 'modul/siswa/add_siswa.php';
                            } elseif ($act == 'edit') {
                                include 'modul/siswa/edit_siswa.php';
                            } elseif ($act == 'del') {
                                include 'modul/siswa/del_siswa.php';
                            }
                        } elseif ($page == 'kelas') {
                            if ($act == '') {
                                include 'modul/kelas/data_kelas.php';
                            } elseif ($act == 'add') {
                                include 'modul/kelas/add_kelas.php';
                            } elseif ($act == 'edit') {
                                include 'modul/kelas/edit_kelas.php';
                            } elseif ($act == 'del') {
                                include 'modul/kelas/del_kelas.php';
                            }
                        } elseif ($page == 'informasi') {
                            if ($act == '') {
                                include 'modul/informasi/data_informasi.php';
                            } elseif ($act == 'add') {
                                include 'modul/informasi/add_berita.php';
                            } elseif ($act == 'addpengumuman') {
                                include 'modul/informasi/add_pengumuman.php';
                            } elseif ($act == 'edit') {
                                include 'modul/informasi/edit_informasi.php';
                            } elseif ($act == 'del') {
                                include 'modul/informasi/del_informasi.php';
                            }
                        } elseif ($page == 'profilSekolah') {
                            if ($act == '') {
                                include 'modul/profilSekolah/data_profilSekolah.php';
                            } elseif ($act == 'add') {
                                include 'modul/profilSekolah/add_profilSekolah.php';
                            } elseif ($act == 'edit') {
                                include 'modul/profilSekolah/edit_profilSekolah.php';
                            }
                        } elseif ($page == 'pendukungSekolah') {
                            if ($act == '') {
                                include 'modul/pendukungSekolah/data_pendukungSekolah.php';
                            } elseif ($act == 'add') {
                                include 'modul/pendukungSekolah/add_pendukungSekolah.php';
                            } elseif ($act == 'edit') {
                                include 'modul/pendukungSekolah/edit_pendukungSekolah.php';
                            } elseif ($act == 'del') {
                                include 'modul/pendukungSekolah/del_pendukungSekolah.php';
                            }
                        } elseif ($page == 'strukturSekolah') {
                            if ($act == '') {
                                include 'modul/strukturSekolah/data_strukturSekolah.php';
                            } elseif ($act == 'add') {
                                include 'modul/strukturSekolah/add_strukturSekolah.php';
                            } elseif ($act == 'edit') {
                                include 'modul/strukturSekolah/edit_strukturSekolah.php';
                            }
                        } elseif ($page == 'galery') {
                            if ($act == '') {
                                include 'modul/galery/data_galery.php';
                            } elseif ($act == 'add') {
                                include 'modul/galery/add_galery.php';
                            } elseif ($act == 'addvideo') {
                                include 'modul/galery/add_galeryvideo.php';
                            } elseif ($act == 'edit') {
                                include 'modul/galery/edit_galery.php';
                            } elseif ($act == 'del') {
                                include 'modul/galery/del_galery.php';
                            }
                        } elseif ($page == 'fasilitas') {
                            if ($act == '') {
                                include 'modul/fasilitas/data_fasilitas.php';
                            } elseif ($act == 'add') {
                                include 'modul/fasilitas/add_fasilitas.php';
                            } elseif ($act == 'edit') {
                                include 'modul/fasilitas/edit_fasilitas.php';
                            } elseif ($act == 'del') {
                                include 'modul/fasilitas/del_fasilitas.php';
                            }
                        } elseif ($page == 'alumni') {
                            if ($act == '') {
                                include 'modul/alumni/data_alumni.php';
                            } elseif ($act == 'add') {
                                include 'modul/alumni/add_alumni.php';
                            } elseif ($act == 'edit') {
                                include 'modul/alumni/edit_alumni.php';
                            } elseif ($act == 'del') {
                                include 'modul/alumni/del_alumni.php';
                            }
                        } elseif ($page == 'sarana') {
                            if ($act == '') {
                                include 'modul/sarana/data_sarana.php';
                            } elseif ($act == 'add') {
                                include 'modul/sarana/add_sarana.php';
                            } elseif ($act == 'addprasarana') {
                                include 'modul/sarana/add_prasarana.php';
                            } elseif ($act == 'edit') {
                                include 'modul/sarana/edit_sarana.php';
                            } elseif ($act == 'del') {
                                include 'modul/sarana/del_sarana.php';
                            }
                        } elseif ($page == 'ekstrakurikuler') {
                            if ($act == '') {
                                include 'modul/ekstrakurikuler/data_ekstrakurikuler.php';
                            } elseif ($act == 'add') {
                                include 'modul/ekstrakurikuler/add_ekstrakurikuler.php';
                            } elseif ($act == 'edit') {
                                include 'modul/ekstrakurikuler/edit_ekstrakurikuler.php';
                            } elseif ($act == 'del') {
                                include 'modul/ekstrakurikuler/del_ekstrakurikuler.php';
                            } elseif ($act == 'delsiswa') {
                                include 'modul/ekstrakurikuler/del_ekstrakurikulersiswa.php';
                            } elseif ($act == 'detail') {
                                include 'modul/ekstrakurikuler/detail_ekstrakurikuler.php';
                            } elseif ($act == 'addsiswa') {
                                include 'modul/ekstrakurikuler/addsiswa_ekstrakurikuler.php';
                            }
                        } elseif ($page == 'ekstrakurikulersiswa') {
                            if ($act == '') {
                                include 'modul/ekstrakurikulerSiswa/data_ekstrakurikulersiswa.php';
                            } elseif ($act == 'add') {
                                include 'modul/ekstrakurikulerSiswa/add_ekstrakurikulersiswa.php';
                            } elseif ($act == 'edit') {
                                include 'modul/ekstrakurikulerSiswa/edit_ekstrakurikulersiswa.php';
                            } elseif ($act == 'del') {
                                include 'modul/ekstrakurikulerSiswa/del_ekstrakurikulersiswa.php';
                            } elseif ($act == 'detail') {
                                include 'modul/ekstrakurikulerSiswa/detail_ekstrakurikulersiswa.php';
                            }
                        } elseif ($page == 'prestasi') {
                            if ($act == '') {
                                include 'modul/prestasi/data_prestasi.php';
                            } elseif ($act == 'add') {
                                include 'modul/prestasi/add_prestasi.php';
                            } elseif ($act == 'edit') {
                                include 'modul/prestasi/edit_prestasi.php';
                            } elseif ($act == 'del') {
                                include 'modul/prestasi/del_prestasi.php';
                            }
                        } elseif ($page == 'programkeahlian') {
                            if ($act == '') {
                                include 'modul/programkeahlian/data_programkeahlian.php';
                            } elseif ($act == 'add') {
                                include 'modul/programkeahlian/add_programkeahlian.php';
                            } elseif ($act == 'edit') {
                                include 'modul/programkeahlian/edit_programkeahlian.php';
                            } elseif ($act == 'del') {
                                include 'modul/programkeahlian/del_programkeahlian.php';
                            }
                        } elseif ($page == '') {
                            include 'home.php';
                        } else {
                            echo "<b>4014!</b> Tidak ada halaman !";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Silahkan pilih logout untuk keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-danger" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../assets/assets2/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/assets2/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../assets/assets2/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/assets2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../assets/assets2/js/demo/datatables-demo.js"></script>

        <script type="text/javascript" src="../assets/assets2/vendor/ckeditor/ckeditor.js"></script>

    <?php } else {

    include 'modul/500.html';
}

    ?>

    </body>

    </html>