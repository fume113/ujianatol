<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db, "select * from akun where username='$username' and password='$password' and role='mahasiswa'");
$cek = mysqli_num_rows($login);

if ($cek == 0) {
    $loginadmin = mysqli_query($db, "select * from akun where username='$username' and password='$password' and role='admin'");
    $cekadmin = mysqli_num_rows($loginadmin);


if ($cekadmin == 0) {
    echo "<div class='alert alert-danger'>Username atau Password anda salah</div>";
    return;
} else {
    $admin = mysqli_fetch_assoc($loginadmin);
    $_SESSION["admin"] = $admin;

    header("Location: admin.php");
}

echo "<div class='alert alert-danger'>Username atau Password anda salah</div>";
return;
}

// Berhasil
$user = mysqli_fetch_assoc($login);
$_SESSION["user"] = $user;

header("Location: user.php");
