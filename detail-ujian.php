<?php
session_start();
include_once 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM akun WHERE id_user={$id}";
$result = $db->query($query);
$user = $result->fetch_all(MYSQLI_ASSOC)[0];
$_SESSION['user'] = $user;

if (!isset($_SESSION['admin'])) {
    header("location: index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Detail Ujian</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                                <div class="sidebar-brand-text mx-2">Admin</div>
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="admin.php">
                                    <i class="far fa-clipboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="datamahasiswa.php">
                                    <i class="fas fa-shopping-bag"></i></i>Data Nilai Mahasiswa</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                        <div class="sidebar-brand-text mx-2">Admin</div>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="admin.php">
                                    <i class="far fa-clipboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="datamahasiswa.php">
                                    <i class="fas fa-shopping-bag"></i>Data Nilai Mahasiswa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <div class="mess-dropdown js-dropdown">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">Keluar</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="account-dropdown__footer">
                                                    <a href="logout.php">
                                                        Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h3 class="text-center font-weight-bold">DATA MAHASISWA</h3>


                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-bordered" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No HP</th>
                                            <th scope="col">Mata Kuliah</th>
                                            <th scope="col">Nilai</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //$ambil = $db->query("SELECT * FROM akun, ujian, matkul WHERE akun.role = 'mahasiswa' AND akun.id_user = ujian.id_user AND matkul.id_matkul = ujian.id_matkul");
                                        $ambil = $db->query("SELECT akun.nama, akun.nim, akun.email, akun.no_hp, akun.jenis_kelamin, matkul.nama_matkul, ujian.nilai, ujian.status FROM ujian INNER JOIN akun ON ujian.id_user = akun.id_user INNER JOIN matkul ON ujian.id_matkul = matkul.id_matkul AND ujian.id_user = {$id}");
                                        ?>
                                        <?php while ($data = $ambil->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['nim']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['no_hp']; ?></td>
                                                <td><?php echo $data['nama_matkul']; ?></td>
                                                <td><?php echo $data['nilai']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table><br>

                                <form method="POST" action="kirim-email.php">
                                    <a href="kirim-email.php" class="btn btn-primary btn-sm" name="kirim">Kirim Email</a>
                                </form>
                                <br>
                                <form method="POST" action="datamahasiswa.php">
                                    <a href="datamahasiswa.php" class="btn btn-success btn-sm">Kembali</a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- END MAIN CONTENT-->

                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Script Google APIs -->
        <script>

        </script>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">

        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>


    </body>

    </html>
    <!-- end document-->
<?php } ?>