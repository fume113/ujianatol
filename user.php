<?php
session_start();
$user = $_SESSION["user"];
include_once 'koneksi.php';
$no = 1;
$semuaMatkul = $db->query("SELECT * FROM matkul");
$semuaMatkul = $semuaMatkul->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Tampilan User </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta nama="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./css/user.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b6b0ac5922.js" crossorigin="anonymous"></script>


    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>


</head>
<?php
include_once 'koneksi.php';
?>

<body>
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Ujian Mahasiswa</span>
            </div>
            <div class="col-md-4 col-md-offset-2">

            </div>
        </div>
    </div>
    <div class="bg">


        <nav class="navbar navbar-inverse title1">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-default">
                        <li class="pull-right kluar"> <a href="logout.php?q=user.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">



                    <div class="container">
                        <div class="container-fluid nav1">
                            <h1 class="h3 mb-4 text-gray-800">Daftar Ujian</h1>
                            <table>
                                <thead class="head">
                                    <th>No</th>
                                    <th>Nama Matkul</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($semuaMatkul as $matkul) {
                                        if ($matkul['nama_matkul'] == 'Bahasa Indonesia') {
                                            $href = "./soalindo.php";
                                        } else if ($matkul['nama_matkul'] == 'PKN') {
                                            $href = './soalpkn.php';
                                        } else if ($matkul['nama_matkul'] == 'PAI') {
                                            $href = './soalpai.php';
                                        }

                                        echo "
                                    <tr>
                                        <td>{$no}</td>
                                        <td>
                                            {$matkul['nama_matkul']}
                                        </td>
                                        <td>
                                            <a href='{$href}'>Attempt</a>
                                        </td>
                                    </tr>
                                ";

                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>