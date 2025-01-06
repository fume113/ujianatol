<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_soal = $_POST['id_soal'];
    $soal = $_POST['soal'];
	$a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $kunci = $_POST['kunci'];
    $tanggal = $_POST['tanggal'];
    $aktif = $_POST['aktif'];


    // buat query update
    $sql = "UPDATE soal SET id_soal='$id_soal', soal='$soal', a='$a', b='$b', c='$c', kunci='$kunci', tanggal='$tanggal', aktif='$aktif'  WHERE id_soal=$id_soal";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: editsoal.php');
    } else {
        // kalau gagal tampilkan pesan
        ini_set('display_errors', 1);
    }


} else {
    ini_set('display_errors', 1);
}

?>
