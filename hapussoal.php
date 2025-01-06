<?php

include("koneksi.php");

if( isset($_GET['id_soal']) ){

    // ambil id dari query string
    $id_soal = $_GET['id_soal'];

    // buat query hapus
    $sql = "DELETE FROM soal WHERE id_soal=$id_soal";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: soal.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>