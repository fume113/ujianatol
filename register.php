<?php
session_start();
require_once("koneksi.php");

$_SESSION["username"] = $username = $_POST["username"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmpassword"];
$_SESSION["nim"] = $nim = $_POST["nim"];
$_SESSION["nama"] = $nama = $_POST["nama"];
$_SESSION["email"] = $email = $_POST["email"];
$_SESSION["no_hp"] = $NomorHp = $_POST["no_hp"];
$_SESSION["jenis_kelamin"] = $jenisKelamin = $_POST["jenis_kelamin"];
$_SESSION["role"] = $role = $_POST["role"];


if ($password != $confirmPassword) {
    echo "<script>alert('password tidak sesuai')</script>";
    header("Location: ./formregister.php");
    return;
}

$query = "INSERT INTO `akun`(`username`, `password`, `nama`, `nim`, `email`, `no_hp`, `jenis_kelamin`, `role`) VALUES ('{$username}','{$password}','{$nama}','{$nim}','{$email}','{$NomorHp}','{$jenisKelamin}','{$role}')";

try {
    $result = mysqli_query($db, $query);
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('{$e->getMessage()}')></script>";
    header("Location: ./formregister.php");
    return;
}

//cek apakah user berhasil dimasukkan ke database
if ($result != true) { //gagal
    echo "<script type='text/javascript'>alert('Insert data gagal')</script>";
    header("Location: ./formdaftar.php");
    return;
}

//insert data berhasil
echo "<script>alert('Insert data berhasil')</script>";
header("Location: ./index.php");
return;
