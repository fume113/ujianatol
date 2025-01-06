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

    .container {
        min-height: 100vh;
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

    tbody a {
        text-decoration: none;
    }

    tr td {
        font-size: 15px;
    }

    th {
        text-transform: capitalize;
    }

    tbody button {
        width: 55px;
        height: 35px;
        display: flex;
        margin: 5px;
        background: #276678;
        border: 2px solid #276678;
        color: #fff;
        border-radius: 20px;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    tbody button:hover {
        transform: scale(1.08);
    }

    .btnall {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 17px;
    }

    .btnall button {
        width: 155px;
        height: 60px;
        text-align: center;
        margin: 8px;
        background: #8DB596;
        border: 2px solid #8DB596;
        border-radius: 30px;
        color: #fff;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btnall button:hover {
        transform: scale(1.08);
    }
</style>

<body>

    <div class="container">
        <h1> Data Soal Mahasiswa </h1>
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
                                    <th scope="col">Id Soal</th>
                                    <th scope="col">Id Matkul</th>
                                    <th scope="col">Soal</th>
                                    <th scope="col">option A</th>
                                    <th scope="col">option B</th>
                                    <th scope="col">option C</th>
                                    <th scope="col">Kunci Jawaban</th>
                                    <th scope="col">aktif</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM soal";
                                $query = mysqli_query($db, $sql);

                                while ($soal = mysqli_fetch_array($query)) {
                                    echo "<tr>";

                                    echo "<td>" . $soal['id_soal'] . "</td>";
                                    echo "<td>" . $soal['id_matkul'] . "</td>";
                                    echo "<td>" . $soal['soal'] . "</td>";
                                    echo "<td>" . $soal['a'] . "</td>";
                                    echo "<td>" . $soal['b'] . "</td>";
                                    echo "<td>" . $soal['c'] . "</td>";
                                    echo "<td>" . $soal['kunci'] . "</td>";
                                    echo "<td>" . $soal['aktif'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='editsoal.php?id_soal=" . $soal['id_soal'] . "'><button>Edit</button></a> ";
                                    echo "<a href='hapussoal.php?id_soal=" . $soal['id_soal'] . "'><button>Hapus</button></a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="btnall">
                            <a href="tambahsoal.php"><button>Tambah Soal</button></a>
                            <a href="admin.php"><button>Kembali ke Admin</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>