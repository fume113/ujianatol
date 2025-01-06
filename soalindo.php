<?php
session_start();
$user = $_SESSION["user"];
?>

<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Soal Pilihan Ganda Mata Kuliah Bahasa Indonesia</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #CFD2CF;
        }

        .btnsr {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 20px;
            width: 100%;
            height: 45px;
        }

        .btnsr input[type="submit"] {
            margin-right: 8px;
            background: #97DBAE;
            border: 2px solid #97DBAE;
        }

        .btnsr input[type="submit"],
        .btnsr input[type="reset"] {
            cursor: pointer;
            border-radius: 20px;
            width: 135px;
        }

        .btnsr input[type="submit"]:hover,
        .btnsr input[type="reset"]:hover {
            transform: scale(1.08);
        }

        .btnsr input[type="reset"] {
            background: #FF6464;
            border: 2px solid #FF6464;
        }
    </style>
</head>

<body>
    <h3>KERJAKAN SOAL PILIHAN GANDA DI BAWAH INI!</h3>
    <table border="0">
        <tbody>
            <?php
            include "koneksi.php";
            $query    = mysqli_query($db, "SELECT * FROM soal WHERE id_matkul = '1' AND aktif='Y' ORDER BY id_soal DESC");
            $jumlah = mysqli_num_rows($query);
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++
            ?>
                <form action="jawabindo.php" method="POST">
                    <input type="hidden" name="id[]" value="<?php echo $data['id_soal']; ?>">
                    <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                    <tr>
                        <td><?php echo $no ?>.</td>
                        <td><?php echo $data['soal']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>A. <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="A"><?php echo $data['a']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>B. <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="B"><?php echo $data['b']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>C. <input name="pilihan[<?php echo $data['id_soal'] ?>]" type="radio" value="C"><?php echo $data['c']; ?></td>
                    </tr>
                <?php
            }
                ?>
                <tr>
                    <td height="40"></td>
                    <td class="btnsr">
                        <input type="submit" name="submit" value="Jawab" onclick="return confirm('Perhatian! Apakah Anda sudah yakin dengan semua jawaban Anda?')">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
                </form>
        </tbody>
    </table>
</body>

</html>