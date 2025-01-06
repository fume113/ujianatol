<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/jawaban.css">
    <title>Jawaban Bahasa Indonesia</title>
</head>

<body>


    <?php
    session_start();
    include "koneksi.php";


    if (isset($_POST['submit'])) {
        if (empty($_POST['pilihan'])) {
    ?>
            <script language="JavaScript">
                alert('Oops! Serius. Anda tidak mengerjakan soal apapun ...');
                document.location = './';
            </script>
    <?php
        }

        $pilihan    = $_POST["pilihan"];
        $id_soal    = $_POST["id"];
        $jumlah        = $_POST["jumlah"];

        $score    = 0;
        $benar    = 0;
        $salah    = 0;
        $kosong    = 0;

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor    = $id_soal[$i];

            // jika peserta tidak memilih jawaban
            if (empty($pilihan[$nomor])) {
                $kosong++;
            }
            // jika memilih
            else {
                $jawaban    = $pilihan[$nomor];

                // cocokan kunci jawaban dengan database
                $query    = mysqli_query($db, "SELECT * FROM soal WHERE id_soal='$nomor' AND kunci='$jawaban'");
                $cek    = mysqli_num_rows($query);

                // jika jawaban benar (cocok dengan database)
                if ($cek) {
                    $benar++;
                }
                // jika jawaban salah (tidak cocok dengan database)
                else {
                    $salah++;
                }
            }
            /*
                    ----------
                    Nilai 100
                    ----------
                    Hasil = 100 / jumlah soal * Jawaban Benar
                */
            // script php membuat soal pilihan ganda
            // hitung skor

            $hitung = mysqli_query($db, "SELECT * FROM soal WHERE aktif='Y'");
            $jumlah_soal    = mysqli_num_rows($hitung);
            $score    = 100 / $jumlah_soal * $benar * 3;
            $hasil    = number_format($score, 2);
        }

        $query = "SELECT * FROM ujian WHERE id_user = {$_SESSION['user']['id_user']} and id_matkul = 1";
        $result = $db->query($query);

        if ($result->num_rows) {
            $sql = "UPDATE ujian SET nilai = '$score' WHERE id_user = '{$_SESSION['user']['id_user']}' and id_matkul = 1";
        } else {
            $sql = "INSERT INTO `ujian`(`id_ujian`, `id_user`, `id_matkul`, `nilai`, `status`) VALUES (null,'{$_SESSION['user']['id_user']}', '1','{$score}','Belum Terkirim')";
        }

        if ($db->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }

    // Tampilkan Hasil Ujian Soal Pilihan Ganda
    echo "
        <table border='0'>
            <tbody>
                <tr>
                    <td colspan='4'><h4>Nilai Ujian Anda</h4></td>
                </tr>
                <tr class = 'atas'>
                    <td>Benar ✔</td>
                    <td>Salah ✕</td>
                    <td>Tidak Terjawab !</td>
                    <td>Skor Akhir #</td>
                </tr>
                <tr class = 'bawah'>
                    <td align='center'>$benar</td>
                    <td align='center'>$salah</td>
                    <td align='center'>$kosong</td>
                    <td align='right'><b>$hasil</b></td>
                </tr>
            </tbody>
        </table>
        ";
    echo "<br /><a href='user.php'> kembali</a>";
    ?>
</body>

</html>