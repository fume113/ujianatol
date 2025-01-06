<?php
session_start();
$user = $_SESSION["admin"];
include 'koneksi.php';
include 'navbar.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Data Nilai Mahasiswa</title>
</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #CFD2CF;
    }

    h1 {
        text-align: center;
        font-size: 28px;
        align-items: center;
    }

    .main-content {
        margin-top: 35px;
    }

    table {
        border-collapse: collapse;
        background: #5F7161;
        color: #053742;
        width: 100%;
    }

    table .thead-light {
        background: #112B3C;
        color: #EFEAD8;
    }

    tbody {
        margin: 8px;
        text-align: center;
    }

    tr td {
        font-size: 15px;
    }

    tbody a {
        text-decoration: none;
        color: #83A95C;
        transition: all 0.3s ease;
    }

    tbody a:hover {
        text-decoration: underline;
        color: #222831;
    }
</style>

<body>

    <div class="container">
        <h1> Data Nilai Mahasiswa </h1>
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <table class="table table-bordered" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php
                                $ambil = mysqli_query($db, 'SELECT akun.id_user, akun.nama, akun.nim,  matkul.nama_matkul, ujian.status FROM akun, ujian, matkul WHERE akun.role = "mahasiswa" AND akun.id_user = ujian.id_user AND matkul.id_matkul = ujian.id_matkul');
                                $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                ?>
                                <?php foreach ($result as $result) : ?>

                                    <tr>
                                        <th scope="row"><?php echo $nomor; ?></th>
                                        <td><?php echo $result["nama"]; ?></td>
                                        <td><?php echo $result["nim"]; ?></td>
                                        <td><?php echo $result["nama_matkul"]; ?></td>
                                        <td>
                                            <a href="detail-ujian.php?id=<?php echo $result["id_user"] ?>" class="badge badge-primary">Detail nilai</a>
                                        </td>
                                    </tr>
                                    <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>