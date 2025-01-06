<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
require_once("./koneksi.php");
$user = $_SESSION['user'];
$query = "SELECT matkul.nama_matkul, ujian.nilai FROM ujian INNER JOIN matkul ON matkul.id_matkul = ujian.id_matkul and ujian.id_user = {$user['id_user']}";
$result = $db->query($query);
$daftarNilai = $result->fetch_all(MYSQLI_ASSOC);

// Library Phpmailer
include('PHPMailer-master/src/Exception.php');
include('PHPMailer-master/src/PHPMailer.php');
include('PHPMailer-master/src/SMTP.php');

$email_pengirim = 'rijal.hasanudin1@gmail.com';
$nama_pengirim = 'Web Ujian ATOL';
$email_penerima = $user['email'];
$subjek = 'Test Pengiriman';
$pesan = "Nilai Anda : \n\n";

foreach($daftarNilai as $matkul) {
    $pesan .= "Nama Matkul : {$matkul['nama_matkul']}\nNilai : {$matkul['nilai']}\n\n";
}

$mail = new PHPMailer;
$mail->isSMTP();

$mail-> Host = 'smtp.gmail.com';
$mail-> Username = $email_pengirim;
$mail-> Password = 'pjpcsjqadzlchsfq';
$mail-> Port = 465;
$mail-> SMTPAuth = true;
$mail-> SMTPSecure = 'ssl';
$mail-> SMTPDebug = 2;

$mail-> setFrom($email_pengirim, $nama_pengirim);
$mail-> addAddress($email_penerima);
$mail-> isHTML(True);
$mail-> Subject = $subjek;
$mail-> Body = $pesan;

$send = $mail->send();

if($send){
    echo "<h1>Email Berhasil Dikirim</h1>";
}else{
    echo "<h1>Email Gagal Dikirim</h1>";
}
echo "<script>alert('Email Berhasil Dikirim !');</script>";
echo "<script>location= 'datamahasiswa.php'</script>";

?>