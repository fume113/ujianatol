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
    <title>Admin</title>
</head>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #CFD2CF;
    }

    .container {
        height: calc(100vh - 65px);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        text-align: center;
        font-size: 70px;
        position: relative;
        height: auto;
    }

    a {
        text-decoration: none;
        color: #576F72;
    }
    .adm {
        font-size : 70px;
    }
</style>

<body>

    <div class="container">
        <h1> Selamat Datang <a class = "adm" href="#">Admin</a></h1>
    </div>

</body>

</html>